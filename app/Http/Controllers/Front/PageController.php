<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Validator;
use Flash;
use Reminder;
use Session;

class PageController extends Controller{

    public function __construct(){
        //$this->EmailService       = $EmailService;
        //$this->SMSService         = $SMSService;
        $this->arr_view_data      = [];
        $this->module_title       = "Front";
        $this->module_view_folder = "front.pages";
        $this->module_url_path    = "";
    }

    public function index(){
        $this->arr_view_data['page_title']       = "login";
        $this->arr_view_data['module_title']     = "login";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $sessionData = [];        
        if(!session()->has('LoggedUser')){
            //return view($this->module_view_folder.'.login',$this->arr_view_data);
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.campaign-list',$this->arr_view_data);
        }
    }
    public function contact_load(){
        $this->arr_view_data['page_title']       = "Contact";
        $this->arr_view_data['module_title']     = "pages";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $sessionData = [];        
        if(!session()->has('LoggedUser')){
            //return view($this->module_view_folder.'.login',$this->arr_view_data);
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.contact',$this->arr_view_data);
        }
    }
    public function faq_load(){
        $this->arr_view_data['page_title']       = "Contact";
        $this->arr_view_data['module_title']     = "pages";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $sessionData = [];        
        if(!session()->has('LoggedUser')){
            //return view($this->module_view_folder.'.login',$this->arr_view_data);
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.faq',$this->arr_view_data);
        }
    }

}
