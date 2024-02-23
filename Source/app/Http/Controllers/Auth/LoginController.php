<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


protected function redirectTo(){

        if(auth()->user()->role=='1')
        {
            return route('home');
        }
        elseif(auth()->user()->role=='2')
        {
            return route('faculty.dashboard');
        }
		   elseif(auth()->user()->role=='6'&& Auth::user()->type=='HOD')
        {
            return route('hod.dashboard');
        }
        	elseif(auth()->user()->role=='3')
        {   
            return route('office.dashboard');
        }
		  	elseif(auth()->user()->role=='4')
        {  
           return route('cell.dashboard');
        }
		   	elseif(auth()->user()->role=='7')
        {  
           return route('researchguide.dashboard');
        }
        	elseif(auth()->user()->role=='8')
        {  
           return route('researchfellow.dashboardfellow');
        }
}
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	
	  public function login(Request $request)
    {
        $input=$request->all();
        $request->validate(['email'=>'required','password'=>'required']);
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if(auth()->user()->role=='1')
        {
			$this->storeLoginActivity(auth()->user()->id); 
            return redirect()->route('home');
        }
        elseif(auth()->user()->role=='2')
        {   $this->storeLoginActivity(auth()->user()->id);
            return redirect()->route('faculty.dashboard');
        }
		elseif(auth()->user()->role=='6'&& Auth::user()->type=='HOD')
        {   $this->storeLoginActivity(auth()->user()->id);
            return redirect()->route('hod.dashboard');
        }
        elseif(auth()->user()->role=='3')
        {   $this->storeLoginActivity(auth()->user()->id);
            return redirect()->route('office.dashboard');
        }
		 elseif(auth()->user()->role=='4')
        {   $this->storeLoginActivity(auth()->user()->id);
            return redirect()->route('cell.dashboard');
        }
		 elseif(auth()->user()->role=='7')
        {   $this->storeLoginActivity(auth()->user()->id);
            return redirect()->route('researchguide.dashboard');
        }
         elseif(auth()->user()->role=='8')
        {   $this->storeLoginActivity(auth()->user()->id);
            return redirect()->route('researchfellow.dashboardfellow');
        }
        }else{
        return redirect()->route('login')->with('error','Invalid login credentials');
        }
    }
		public function logout(Request $request) {
		 $this->storeLogoutActivity(auth()->user()->id); // Store logout 
           Auth::logout();
         return redirect('/login');
        }
		protected function storeLoginActivity($userId)
    {
         $data = [
        'updated_value' => 'Logged In',
        'updated_by' => $userId,
        'created_date' => Carbon::now()
    ];

    DB::table('log_book')->insert($data);
    }

    protected function storeLogoutActivity($userId)
    {
       $data = [
        'updated_value' => 'Logged Out',
        'updated_by' => $userId,
        'created_date' => Carbon::now()
    ];

    DB::table('log_book')->insert($data);
    }
}
