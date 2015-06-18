<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Update;
use App\Category;
use Validator;
use App\Attachment;
use Carbon\Carbon;
use Auth;
use Twitter;

class UpdateController extends Controller {
	private $upload_dir = '../storage/app/images/uploads/';

	public function __construct()
	{
		$this->middleware('auth', ['except' => ['show', 'index']]);
	}

	public static function parseURLs($s) {
	  return preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1" target="_blank">$1</a>', $s);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$twitter = $this->getTweets();
		$category = Category::find(1);
		$updates = new Update();
		$now = Carbon::now();
		$events = collect(json_decode($this->getRemoteEvents()));
		$events->each(function($event) {
			$event->published_on = Carbon::createFromTimeStamp($event->start, 'GMT+1');
			$event->expires_on = Carbon::createFromTimeStamp($event->end, 'GMT+1');
			$event->featured = null;
			$event->remote = true;
		});
		return view('about.news.index', compact('updates','category', 'now', 'twitter', 'events'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('about.news.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$post = new Update();
		$post->title = $request->title;
		$post->content = $request->body;
		$post->published_on = $request->published;
		$post->headline = $request->headline;
		if($request->expires) {
			$post->expires_on = $request->expires;
		}
		$post->category_id = $request->category;
		if($post->save())
		{
			$files = $request->file('attachments');
			if(count($files) && !is_null($files) && is_array($files) && !is_null($files[0]))
			{
				mkdir($this->upload_dir.$post->id);
				foreach($files as $file) {
				  if($file->isValid()) {
				  	if($file->move($this->upload_dir.$post->id, $file->getClientOriginalName()))
				  	{
				  		$attachment = new Attachment();
				  		$attachment->filename = $file->getClientOriginalName();
				  		$attachment->size = $file->getClientSize();
				  		$attachment->update_id = $post->id;
				  		$attachment->type = pathinfo($this->upload_dir.$post->id.'/'.$file->getClientOriginalName(), PATHINFO_EXTENSION);
				  		$attachment->save();
				  	}
				  }
				}
			}
			return redirect('about/news');
		} else {
			return 'Error';
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$update = Update::find($id);
		if(Auth::check()) {
			$update = Update::withTrashed()->find($id);
		}
		$update->content = $this->parseURLs($update->content);
		$now = Carbon::now();
		return view('about.news.show', compact('update','now'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$update = Update::find($id);
		if(Auth::check()) {
			$update = Update::withTrashed()->find($id);
		}
		return view('about.news.edit', compact('update'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$post = Update::withTrashed()->find($id);
		$post->title = $request->title;
		$post->content = $request->body;
		$post->published_on = $request->published;
		$post->headline = $request->headline;
		if(isset($request->expires)) {
			$post->expires_on = $request->expires;
		}
		$post->category_id = $request->category;
		if($post->save())
		{
			if($request->delete)
			{
				foreach($request->delete as $deletion) {
					$attachment = Attachment::find($deletion);
					$attachment->delete();
				}
			}
			$request->featured = ($request->featured == '') ? null : $request->featured;
			$post->featured = $request->featured;
			$post->save();
			if($request->destroy)
			{
				$post->delete();
			} else {
				if(!is_null($post->deleted_at))
				{
					$post->restore();
				}
			}
			
			$files = $request->file('attachments');
			if(count($files))
			{
				if(!is_dir($this->upload_dir.$post->id))
				 {
				 	mkdir($this->upload_dir.$post->id);
				 }
				$success = true;
				foreach($files as $file) {
				  if(!is_null($file) && $file->isValid()) {
				  	if($file->move($this->upload_dir.$post->id, $file->getClientOriginalName()))
				  	{
				  		$attachment = new Attachment();
				  		$attachment->filename = $file->getClientOriginalName();
				  		$attachment->size = $file->getClientSize();
				  		$attachment->update_id = $post->id;
				  		$attachment->type = pathinfo($this->upload_dir.$post->id.'/'.$file->getClientOriginalName(), PATHINFO_EXTENSION);
				  		$attachment->save();
				  	} else {
				  		$success = false;
				  	}
				  }
				}
				if($success) {
					return redirect('about/news/'.$post->id.'/edit');
				}
			}
			return redirect('about/news');
		} else {
			return 'Error';
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

	}

	public function parseAttachments($file, $post)
	{
		// validating each file.
	  $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
	  $validator = Validator::make(array('file'=> $file), $rules);
	  if($validator->passes()){
	    // path is root/uploads
	    $destinationPath = 'uploads/'.$post->id;
	    $filename = $file;
	    $upload_success = move_uploaded_file($filename, $destinationPath);
	    // flash message to show success.
	    return redirect('about/news/'.$post->id.'/edit');
	  } 
	  else {
	    // redirect back with errors.
	    return redirect('about/news/create')->withInput()->withErrors($validator);
	  }
	}

	public function getTweets()
	{
		$twitter = json_decode(Twitter::getUserTimeline(['screen_name' => 'HPS43', 'count' => 10, 'format' => 'json']));
		foreach($twitter as $tweet) {
			$tweet->ago = new Carbon($tweet->created_at);
		}
		return $twitter;
	}

	public function getRemoteEvents()
	{
		$now = Carbon::now();
		if($now->month < 9) {
			$startYear = ($now->year - 1);
			$endYear = ($now->year);
		} else {
			$startYear = ($now->year);
			$endYear = ($now->year + 1);
		}
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://holmbush.eschools.co.uk/cms/cms_pages/get_calendar_source/x/x/0');
		curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/32.0.1700.107 Chrome/32.0.1700.107 Safari/537.36');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "start=".strtotime($startYear.'-09-01')."&end=".strtotime($endYear.'-07-31'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$ret = curl_exec($ch);
		if (curl_error($ch)) {
		    echo curl_error("Error on line 62: ".$ch);
		}
		return $ret;
	}

}
