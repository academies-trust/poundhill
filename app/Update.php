<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Auth;

class Update extends Model {

	use SoftDeletes;

    protected $dates = ['deleted_at', 'published_on', 'expires_on'];

    public function attachments() {
    	return $this->hasMany('\App\Attachment');
    }

    public function news($take = 10, $offset = 0) {
    	if(Auth::check())
    	{
    		return $this->withTrashed()->where(function($query) {
	    		$query	->where('category_id', '1');
	    	})->orderBy('published_on', 'desc')->skip($offset)->take($take)->get();
    	} else {
    		return $this->where(function($query) {
	    		$query	->where('category_id', '1')
	    				->where('published_on', '<', Carbon::now())
	    				->where(function($query) {
	    					$query	->where('expires_on','>', Carbon::now())
	    							->orWhereNull('expires_on');
	    				});
	    	})->orderBy('published_on', 'desc')->skip($offset)->take($take)->get();
    	}
    }

    public function sports($take = 10, $offset = 0) {
    	if(Auth::check())
    	{
    		return $this->withTrashed()->where(function($query) {
	    		$query	->where('category_id', '5');
	    	})->orderBy('published_on', 'desc')->skip($offset)->take($take)->get();
    	} else {
    		return $this->where(function($query) {
	    		$query	->where('category_id', '5')
	    				->where('published_on', '<', Carbon::now())
	    				->where(function($query) {
	    					$query	->where('expires_on','>', Carbon::now())
	    							->orWhereNull('expires_on');
	    				});
	    	})->orderBy('published_on', 'desc')->skip($offset)->take($take)->get();
    	}
    }

    public function events($take = 10, $offset = 0) {
    	return $this->where('category_id', '3')->orderBy('published_on', 'asc')->skip($offset)->take($take)->get();
    }

    public function galleries() {
    	return $this->where('category_id', '4')->orderBy('published_on', 'desc')->get();
    }

    public function getRandomImage($path = '../storage\app\images\generic') {
    	$dir = scandir($path);
		$acceptedExtensions = [
			'jpg',
			'png',
			'jpeg',
			'gif'
		];
		$slides = [];
		foreach($dir as $file) {
			$path_info = pathinfo($path.'/'.$file);
			if(in_array(strtolower($path_info['extension']), $acceptedExtensions)) {
				array_push($slides, $file);
			}
		}
		$rand = rand(0, count($slides)-1);
		return $slides[$rand];
    }

    public function category()
    {
    	return $this->belongsTo('\App\Category');
    }

}
