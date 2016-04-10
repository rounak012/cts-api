<?php namespace App\Http\Middleware;

use Closure;
use Session;
use App\login;
use App\division;
use App\subdivision;
class loginmiddle {

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
				return view ("division",compact('var','vvar'));
			}
			else 
			{
				return view ("login");
			}
		
		return $next($request);
	}

}
