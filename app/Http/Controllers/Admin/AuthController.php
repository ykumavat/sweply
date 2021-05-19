<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Validator;
use Flash;
use Reminder;
use Session;
use Sentinel;

class AuthController extends Controller{

    public function __construct(){
        $this->arr_view_data      = [];
        $this->module_title       = "Admin";
        $this->module_view_folder = "admin";
        $this->module_url_path    = "";
    }

    public function login(){
        $this->arr_view_data['page_title']       = "login";
        $this->arr_view_data['module_title']     = "login";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        if(session()->has('LoggedAdmin')){
            //return view($this->module_view_folder.'.dashboard.dashboard',$this->arr_view_data);
            return redirect(url('/').'/admin/dashboard');
        }else{
            return view($this->module_view_folder.'.auth.login',$this->arr_view_data);
        }
    }

 public function process_login(Request $request){ 
        
        //dd($request->all());
        $arr_rules = [];
        $arr_rules['email']              = "required";
        $arr_rules['password']              = "required";
        $validator = Validator::make($request->all(),$arr_rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
       
        $credentials = [
                'email'      =>$request->input('email'),
                'password'  => $request->input('password')
                ];
        $obj_authentication = Sentinel::authenticate($credentials);
       // dd( $obj_authentication);
        if($obj_authentication && $obj_authentication->inRole('staff')){
           
            $arr_data = $obj_authentication->toArray();
             //dd($arr_data);
            $request->session()->put('LoggedAdmin', $arr_data['id']);
            return redirect('admin/dashboard');
        }else{
            return back()->with('fail','We do not recognize your email address');
        }
       
    }

    public function signup(){
        $this->arr_view_data['module_url_path']  = $this->module_url_path; 
        $this->arr_view_data['page_title']       = 'signup';
        $this->arr_view_data['module_title']     = 'signup';
        return view($this->module_view_folder.'.signup',$this->arr_view_data);
    }

    public function register(Request $request){
        $arr_data = [];
        $arr_data['name']                  = trim($request->name);
        $arr_data['last_name']             = trim($request->last_name);
        $arr_data['password']              = 'Admin@123';
        $arr_data['email']                 = trim($request->email);
        $arr_data['contact_number']        = trim($request->contact_number);
        $arr_data['company_name']          = trim($request->company_name);
        $arr_data['website']               = trim($request->website);
        $arr_data['commercial_number']     = trim($request->commercial_number);
        $arr_data['vat_number']            = trim($request->vat_number);
        $arr_data['isTandc']               = 1;
        $arr_data['role_id']               = 1;

        $obj_user = Sentinel::registerAndActivate($arr_data);
        $role_slug = Sentinel::findRoleBySlug('user');
        $obj_user->roles()->attach($role_slug);

        if($obj_user)  
        {
            if(isset($obj_user->id))
            {
                $user_id = $obj_user->id;
            }
            else
            {
                $user_id = 0;
            }
        }

        if($request->selector=="personal"){
            $arr_data['business_type']             = 0;
        }else{
            $arr_data['business_type']             = 1;
        }

        $obj_user  = User::where('contact_number',$request->contact_number)->first();
        if($obj_user){
            return redirect()->back();
        }else{
            $cust_obj = User::create($arr_data); 
            if($cust_obj){
                $request->session()->put('LoggedAdmin', $cust_obj->id);
                return redirect('user/dashboard');
            }
        }
        return redirect()->back();
    }


    public function get_profile(){
        $this->arr_view_data['page_title']       = "Profile";
        $this->arr_view_data['module_title']     = "Profile";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $sessionData = [];        
        if(!session()->has('LoggedAdmin')){
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedAdmin');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.profile',$this->arr_view_data);
        }
    }

    public function logout(Request $request){
        if(session()->has('LoggedAdmin')){
            session()->pull('LoggedAdmin');
            Sentinel::logout();
            return redirect('/admin/login');
        }
    }
    
}
