<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Attachment;

class AttachmentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Request $request)
	{
		$filename = $request->route('file');
		$post = $request->route('post');
		$path = '../storage/app/images/uploads/';
		$filepath = $path.$post.'/'.$filename;
		$find = Attachment::where('update_id', $post)->where('filename', $filename);
		if($find->count())
		{
			$file_ext = $find->first()->type;
			if(file_exists($filepath)) {
				$file_size = filesize($filepath);
				$file = @fopen($filepath,"rb");
				if ($file)
				{
					// set the headers, prevent caching
					header("Pragma: public");
					header("Expires: -1");
					header("Cache-Control: public, must-revalidate, post-check=0, pre-check=0");
					header("Content-Disposition: attachment; filename=\"$filename\"");
			 
			        // set the mime type based on extension, add yours if needed.
			        $ctype = "application/octet-stream";
			        header("Content-Type: " . $ctype);
			 
					
					header("Content-Length: $file_size");
			 
					set_time_limit(0);
			 
					while(!feof($file)) 
					{
						print(@fread($file, 1024*8));
						ob_flush();
						flush();
						if (connection_status()!=0) 
						{
							@fclose($file);
							exit;
						}			
					}
			 
					// file save was a success
					@fclose($file);
					exit;
				}
				else 
				{
					// file couldn't be opened
					header("HTTP/1.0 500 Internal Server Error");
					exit;
				}
			}
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
