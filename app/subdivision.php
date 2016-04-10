<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class subdivision extends Model {

		protected $fillable=['subdiv_name'];

		public function categories(){
		return $this->hasMany('App\category','subdiv_id','subdiv_id');
	}

}
