<?php namespace App\Http\Middleware;

use Closure;
use App\category;
use App\division;
use App\subdivision;
use App\register;
use Session;
use DB;
class mainregitermiddle {

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
		$vvvar=category::all();
		//$vvar=subdivision::all();
        $vvar=DB::table('subdivisions')->where('div_id','=',10)->get();
		return view('register',compact('vvar','vvvar'));
			}
	 else 
			{
				return redirect()->route("login");
			}
	}

}
