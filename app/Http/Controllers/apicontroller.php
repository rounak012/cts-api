<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\division;
use App\subdivision;
use App\category;
use Response;
use App\Register;
use App\campus;
use App\enquiry;
use App\partner;
use App\rockstar;
use DB;
use Input;
use Session;
use App\login;


class apicontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$var=division::all();
		$vvar=subdivision::all();
		return view('division',compact('var','vvar'));
	}
public function index1()
	{	 
		$vvvar=category::all();
		//$vvar=subdivision::all();
        $vvar=DB::table('subdivisions')->where('div_id','=',10)->get();
		return view('register',compact('vvar','vvvar'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 
	 * @return Response
	 */
	public function api()
{
		try{

			
			$statusCode = 200;
			$users = division::with(['subdivision'=>function($query){
				return $query->with('categories')->get();
			}])->get();
	          


		}catch (Exception $e){
			$statusCode = 404;
		}finally{
			return Response::json($users, $statusCode);
		}
	}
	
	
	public function regapi()
{
		try{

			
			
			$statusCode = 200;
			$users = register::get();
			

		}catch (Exception $e){
			$statusCode = 404;
		}finally{
			return Response::json($users, $statusCode);
		}
	}
	public function rockstarapi()
{
		try{

			
			
			$statusCode = 200;
			$users = rockstar::get();
			

		}catch (Exception $e){
			$statusCode = 404;
		}finally{
			return Response::json($users, $statusCode);
		}
	}
	public function enquiryapi()
{
		try{

			
			
			$statusCode = 200;
			$users = enquiry::get();
			

		}catch (Exception $e){
			$statusCode = 404;
		}finally{
			return Response::json($users, $statusCode);
		}
	}
	public function campusapi()
{
		try{

			
			
			$statusCode = 200;
			$users = campus::get();
			

		}catch (Exception $e){
			$statusCode = 404;
		}finally{
			return Response::json($users, $statusCode);
		}
	}		 
	
	public function partnerapi()
{
		try{

			
			
			$statusCode = 200;
			$users = partner::get();
			

		}catch (Exception $e){
			$statusCode = 404;
		}finally{
			return Response::json($users, $statusCode);
		}
	}	
	public function sadd(Request $request)
{
	$data=Session::get('user');
		if($data){
			$new=new subdivision;
			$new->subdiv_name=$request->sdname;
			$new->div_id=$request->did;
			$new->save();
			return redirect()->route('index');
		}
		else
			return view('login');
	}
	public function enquiry(Request $request)
{
		return view('enquiryshow');
	}
	public function rockstar(Request $request)
{
		return view('rockstarshow');
	}
	
	
	public function login1(Request $request)
	
	{ 
	    $var=DB::table('logins')->where('username','=',$request->username)->first();
		if ($var==null)
		{
			session()->flash('error','Sorry You are not Admin');
			return redirect()->back();;
		}
		else if ($var->password==$request->password)
		{
	    Session::put('user',$var);	
		return redirect()->route('index',compact('user'));
		}
		else
		{
			session()->flash('error','Wrong password');
			return redirect()->back();;
		}
			
				
	}
	
	public function logout()
	{
		Session::flush();
		return view('login');
	}

	
	
	
	
	public function rockstaradd(Request $request)
{
		
			$input = Input::all();
	         $file = array_get($input,'resume');
             $destinationPath = 'uploads';
             $extension = $file->getClientOriginalExtension();
             $fileName = rand(11111, 99999) . '.' . $extension;
             $upload_success = $file->move($destinationPath, $fileName);
			 
			 	$new=new rockstar;  
			$new->name=$request->name;
			$new->email=$request->email;
			$new->mobile=$request->mobile;
			$new->branch=$request->branch;
			$new->college=$request->college;
			$new->city=$request->city;
			$new->want=$request->want;
			$new->chosen=$request->chosen;
			$new->strength=$request->strength;
			$new->address=$request->address;
			$new->dob=$request->dob;
			$new->resume=$fileName;
			
			$new->comment=$request->comment;
			
			
			$new->save();
			return redirect()->route('rockstar');
			
	}
	
	
	public function partner(Request $request)
{
	
		return view('partnershow');
	}
	public function partnerdisplay1(Request $request)
{
	$user=partner::all();
		return view('partnerdisplay',compact('user'));
	}
	
	public function rockstardisplay1(Request $request)
{
	     $user=rockstar::all();
		return view('rockstardisplay',compact('user'));
	}
	
	public function campusdisplay1(Request $request)
{
	     $user=campus::all();
		return view('campusdisplay',compact('user'));
	}
	
	
	public function enquirydisplay1(Request $request)
{
	     $user=enquiry::all();
		return view('enquirydisplay',compact('user'));
	}
	
	
	public function partneradd(Request $request)
{
			$new=new partner;
			$new->name=$request->name;
			$new->mobile=$request->mobile;
			$new->email=$request->email;
			$new->occupation=$request->occupation;
			$new->city=$request->city;
			$new->state=$request->state;
			$new->qualification=$request->qualification;
			$new->know=$request->know;
			$new->business=$request->business;
			$new->experience=$request->experience;
			$new->reason=$request->reason;
			$new->question=$request->question;
			$new->save();
			return redirect()->route('partner');
			
	}
	public function campus(Request $request)
{
		return view('campusshow');
	}
	public function enquiryadd(Request $request)
{
			$new=new enquiry;
			$new->name=$request->name;
			$new->email=$request->email;
			$new->mobile=$request->mobile;
			$new->message=$request->message;
			$new->save();
			return redirect()->route('enquiry');
			
	}
	public function campusadd(Request $request)
{
	
			$new=new campus;
			$new->name=$request->name;
			$new->email=$request->email;
			$new->mobile=$request->mobile;
			$new->designation=$request->designation;
			$new->organization=$request->organization;
			$new->message=$request->message;
			$new->save();
			return redirect()->route('campus');
			
	}
	public function apiregister(Request $request)
{
	$data=Session::get('user');
		if($data){
			$new=new register;
			$new->subdiv_name=$request->sdname;
			$new->cat_name=$request->cname;
			$new->workshop_date=$request->date;
			$new->full_name=$request->name;
			$new->branch=$request->branch;
			$new->semester=$request->sem;	
			$new->college_name=$request->college;
			$new->city_name=$request->city;
			$new->email=$request->email;
			$new->mobile_number=$request->mobile;
			$new->state=$request->state;
			$new->know_us=$request->know;
			$new->save();
			return redirect()->route('index1');	
		}	
       else
		    return redirect()->route('login');		
	}
		
	public function catadd(Request $request)
	{
		$data=Session::get('user');
		if($data){
		$new =new category;
		$new->cat_name=$request->cat;
		$new->subdiv_id=$request->sdid;
		$new->save();
		return redirect()->route('index');
	}
	else
		return redirect()->route('login');
	}
public function add(Request $request)
	{
		$data=Session::get('user');
		if($data){
		$new =new division;
		$new->div_name=$request->dname;
		$new->save();
			return redirect()->route('index');
		}
		else
		return redirect()->route('login');
		
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function date1(request $request)
	{
		
		if($request->date1>$request->date2)
		{
			$temp=$request->date1;
			$request->date1=$request->date2;
			$request->date2=$temp;
		}
	      $users = DB::table('registers')
                    ->whereBetween('workshop_date', [$request->date1, $request->date2])->orderBy('workshop_date','asc')->get();
					return view('date',compact('users'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$user=register::all();
		return view('show1',compact('user'));
	}
public function show1()
	{
		$user=register::all();
		return view('show1',compact('user'));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
