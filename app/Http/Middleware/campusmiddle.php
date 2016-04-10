<?php namespace App\Http\Middleware;

use Closure;
use App\category;
use App\division;
use App\campus;
use Session;
use DB;


class campusmiddle {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
	$data = Session::get('user');
		
		
			if ($data)
			{  
				return view('campusshow');
			}
			else 
			{
				return view ("login");
			}
		
		return $next($request);
	}
	

}
