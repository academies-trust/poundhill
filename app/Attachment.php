<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model {

	public function Update_post()
	{
		$this->hasOne('App\Update');
	}

}
