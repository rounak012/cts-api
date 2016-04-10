<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class division extends Model {

	protected $fillable=['div_name'];	
	public function subdivision(){
		return $this->hasMany('App\subdivision','div_id','div_id');
	}

}
