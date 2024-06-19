<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Log;
use Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Session;
use Cookie;
use Spatie\Activitylog\Models\Activity;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
		if(Auth::check()){
			$notify[] = ['success', 'You are logged in.'];
			return redirect("/dashboard")->withNotify($notify);
		}else{
			return view('auth.login');
		}
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration(): View
    {
        return view('auth.registration');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
		
		
        if (Auth::attempt($credentials)) {
            
			$id        = Auth::user()->id;
            $userAgent = osBrowser();
            $ip        = getIpInfo();
            $macInfo   = macInfo();
			
			
            
			//Cookie expiration time is 1 year
		    Cookie::queue('UID', $id, 525600);
			
			

            
            $notify[] = ['success', 'You have Successfully loggedin.'];
            return redirect()->intended('dashboard')->withNotify($notify);
        }
			$notify[] = ['error', 'Oppes! You have entered invalid credentials'];
			return redirect("/")->withNotify($notify);
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request): RedirectResponse
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
		
		
		$credentials['name'] 	 = $request->name;
		$credentials['password'] = $request->password;
        
		if (Auth::attempt($credentials)) {
			
			$id        = Auth::user()->id;
            $userAgent = osBrowser();
            $ip        = getIpInfo();
            $macInfo   = macInfo();
			
			
			
			
			$notify[] = ['success', 'Great! You have Successfully loggedin'];
            return redirect()->intended('dashboard')
                        ->withNotify($notify);
		}
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout(Request $request)
    {
		
		 $id        = base64_decode($request->id);
         $userAgent = osBrowser();
         $ip        = getIpInfo();
         $macInfo   = macInfo();
		 
		 
		 $name = User::where("id", $id)->first();
		 
		 
		 
		
		
		
		 Cookie::queue(Cookie::forget('UID'));

		 Session::flush();
         Auth::logout();
  
         return Redirect('/');
    }
}