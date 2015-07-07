<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Update;
use Auth;
use Carbon\Carbon;
use App\Category;
use App\Attachment;

class GalleryController extends UpdateController {
	private $upload_dir = '../storage/app/images/uploads/';

	public function __construct()
	{
		$this->middleware('auth', ['except' => ['show', 'index']]);
	}

	public function index()
	{
		$updates = new Update();
		$category = Category::find(4);
		$now = Carbon::now();
		return view('about.galleries.index', compact('updates','now','category'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('about.galleries.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'title' => 'required | min:3',
			'headline' => 'sometimes|min:3',
			'body' => 'sometimes | min:3',
			'attachments' => 'required',
			'published' => 'required|date',
			'expires' => 'sometimes|after:'.$request->published
		]);
		if($validator->passes()) {
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
				if($post->attachments()->count() > 0 && $post->featured == '') {
					$post->featured = $post->attachments()->first()->id;
					$post->save();
				}
				return redirect('about/galleries');
			} else {
				return 'Error';
			}
		} else {
			return redirect('about/galleries/create')->withInput();
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
		$now = Carbon::now();
		return view('about.galleries.show', compact('update','now'));
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
		return view('about.galleries.edit', compact('update'));
	}

	public function update($id, Request $request)
	{
		$validator = Validator::make($request->all(), [
			'title' => 'required | min:3',
			'headline' => 'sometimes|min:3',
			'body' => 'sometimes | min:3',
			'attachments' => 'required',
			'published' => 'required|date',
			'expires' => 'sometimes|after:'.$request->published
		]);
		if($validator->passes()) {
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
						return redirect('about/galleries/'.$post->id.'/edit');
					}
				}
				return redirect('about/galleries');
			} else {
				return 'Error';
			}
		} else {
			return redirect('about/galleries/'.$post->id.'/edit')->withInput();
		}
	}

}
