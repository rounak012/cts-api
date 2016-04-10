<?php
header('Access-Control-Allow-Origin: *');	
header( 'Access-Control-Allow-Headers: Authorization, Content-Type' );
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('api','apicontroller@api');

Route::get('regapi','apicontroller@regapi');

Route::get('partner',[
'middleware'=>'partnermiddle',
'as'=>'partner',
'uses'=>'apicontroller@partner'
]);

Route::post('partner',[
'middleware'=>'partnermiddle',
'as'=>'partner',
'uses'=>'apicontroller@partner'
]);
Route::get('partnerapi',[
'middleware'=>'CorsMiddleware',
'as'=>'partnerapi',
'uses'=>'apicontroller@partnerapi'
]);

Route::get('angular', [

'as'=>'index',
'uses'=>function()
{
	return view('index');
}]);
Route::resource('blogs','apicontroller');

Route::post('logout',
[
'as'=>'logout',
'uses'=>'apicontroller@logout',
]
);
Route::get('logout',
[
'middleware'=>'logoutmiddle',
'as'=>'logout',
'uses'=>'apicontroller@logout',
]
);
Route::post('login1',
[
'as'=>'login1',
'uses'=>'apicontroller@login1',
]
);
Route::post('partneradd',
[
'as'=>'partneradd',
'uses'=>'apicontroller@partneradd',
]
);
Route::post('partnerdisplay',
[
'as'=>'partnerdisplay',
'uses'=>'apicontroller@partnerdisplay1',
]
);
Route::post('rockstardisplay',
[
'as'=>'rockstardisplay',
'uses'=>'apicontroller@rockstardisplay1',
]
);
Route::post('campusdisplay',
[
'as'=>'campusdisplay',
'uses'=>'apicontroller@campusdisplay1',
]
);
Route::post('enquirydisplay',
[
'as'=>'enquirydisplay',
'uses'=>'apicontroller@enquirydisplay1',
]
);

Route::get('rockstar',[
'middleware'=>'rockstarmiddle',
'as'=>'rockstar',
'uses'=>'apicontroller@rockstar'
]);
Route::post('rockstar',[
'middleware'=>'rockstarmiddle',
'as'=>'rockstar',
'uses'=>'apicontroller@rockstar'
]);
Route::post('rockstaradd',
[
'as'=>'rockstaradd',
'uses'=>'apicontroller@rockstaradd',
]
);
Route::get('rockstarapi',[
'as'=>'rockstarapi',
'uses'=>'apicontroller@rockstarapi'
]);
Route::get('login', [
'middleware'=>'loginmiddle',
'as'=>'login',
'uses'=>function()
{
	return view('login');
}]);

Route::get('index',[
'middleware'=>'loginmiddle',
'as'=>'index',
'uses'=>'apicontroller@index'
]);
Route::post('campus',[
'middleware'=>'campusmiddle',

]);
Route::get('campus',[
'middleware'=>'campusmiddle',
'as'=>'campus',
'uses'=>'apicontroller@campus'
]);
Route::get('campusapi',[
'as'=>'campusapi',
'uses'=>'apicontroller@campusapi'
]);
Route::post('campusadd',
[
'as'=>'campusadd',
'uses'=>'apicontroller@campusadd',
]
);
Route::get('enquiryapi',[
'as'=>'enquiryapi',
'uses'=>'apicontroller@enquiryapi'
]);
Route::get('enquiry',[
'middleware'=>'enquirymiddle',
'as'=>'enquiry',
'uses'=>'apicontroller@enquiry'
]);
Route::post('enquiry',[
'middleware'=>'enquirymiddle',
'as'=>'enquiry',
'uses'=>'apicontroller@enquiry'
]);
Route::post('enquiryadd',
[
'as'=>'enquiryadd',
'uses'=>'apicontroller@enquiryadd',
]
);

Route::post('register',[
'middleware'=>'registermiddle',
'as'=>'index1',
'uses'=>'apicontroller@index1'
]);
Route::get('register',[
'middleware'=>'registermiddle',
'as'=>'index1',
'uses'=>'apicontroller@index1'
]);
Route::post('catadd',
[
'middleware'=>'catmiddle',
'as'=>'catadd',
'uses'=>'apicontroller@catadd',
]
);

Route::post('select',
[
'as'=>'select',
'uses'=>'apicontroller@date1',
]
);
Route::post('show',
[
'as'=>'show',
'uses'=>'apicontroller@show1',
]
);
Route::get('show','apicontroller@show');
Route::post('apiregister',
[
'middleware'=>'mainregitermiddle',
'as'=>'apiregister',
'uses'=>'apicontroller@apiregister',
]
);
Route::post('subdivadd',
[
'middleware'=>'subdivmiddle',
'as'=>'subdivadd',
'uses'=>'apicontroller@sadd',
]
);
Route::post('divisionadd',
[
'middleware'=>'divmiddle',
'as'=>'divisionadd',
'uses'=>'apicontroller@add',
]
);










Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
