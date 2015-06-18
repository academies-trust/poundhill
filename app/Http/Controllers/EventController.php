<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Update;
use Auth;
use Carbon\Carbon;

class EventController extends UpdateController {

	public function __construct()
	{
		$this->middleware('auth', ['except' => ['show', 'index']]);
	}

	public function index()
	{
		$twitter = $this->getTweets();
		$category = Category::find(1);
		$updates = new Update();
		$now = Carbon::now();
		return view('about.news.index', compact('updates','category', 'now', 'twitter'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('about.events.create');
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
		return view('about.events.show', compact('update','now'));
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
		return view('about.events.edit', compact('update'));
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

	public function getRemoteEventsdd()
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
		dd($ret);
		return $ret;
	}

}
