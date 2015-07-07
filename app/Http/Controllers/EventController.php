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

}
