<?php namespace App\Http\Middleware;

use Closure;
use App\category;
use App\division;
use App\subdivision;
use App\register;
use Session;
use DB;

class divmiddle {

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
					$var=division::all();
		$vvar=subdivision::all();
		return view('division',compact('var','vvar'));
			}
			else 
			{
				return redirect()->route("login");
			}
	}

}
