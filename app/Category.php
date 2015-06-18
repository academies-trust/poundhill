<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	public function updates()
	{
		return $this->hasMany('App\Update');
	}

}
