<?php namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
		'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
		'Illuminate\Cookie\Middleware\EncryptCookies',
		'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
		'Illuminate\Session\Middleware\StartSession',
		'Illuminate\View\Middleware\ShareErrorsFromSession',
		//'App\Http\Middleware\VerifyCsrfToken',
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
		'auth' => 'App\Http\Middleware\Authenticate',
		'loginmiddle' => 'App\Http\Middleware\loginmiddle',
		'registermiddle' => 'App\Http\Middleware\registermiddle',
		'campusmiddle' => 'App\Http\Middleware\campusmiddle',
		'enquirymiddle' => 'App\Http\Middleware\enquirymiddle',
		'partnermiddle' => 'App\Http\Middleware\partnermiddle',
		'rockstarmiddle' => 'App\Http\Middleware\rockstarmiddle',
		'logoutmiddle' => 'App\Http\Middleware\logoutmiddle',
		'catmiddle' => 'App\Http\Middleware\catmiddle',
		'subdivmiddle' => 'App\Http\Middleware\subdivmiddle',
		'CorsMiddleware' => 'App\Http\Middleware\CorsMiddleware',
		'divmiddle' => 'App\Http\Middleware\divmiddle',
		'mainregitermiddle' => 'App\Http\Middleware\mainregitermiddle',
		'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
		'guest' => 'App\Http\Middleware\RedirectIfAuthenticated',
	];

}
