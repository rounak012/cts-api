<?php namespace App\Http\Middleware;

use Closure;
use Session;
use App\login;

class amiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$data=Session::get('user');
		
		if($data==null)
		return $next($request);
		else
		{
			if ($data)
			{  
		        $dept=division::all();
				return view ("division",compact('dept'));
			}
			else 
			{
				return view ("login");
			}
		}
	}

}
