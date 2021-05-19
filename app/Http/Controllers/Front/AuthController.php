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
use Sentinel;
use App\Models\Business;
use App\Models\WalletMasterModel;
use App\Models\WalletModel;

class AuthController extends Controller{

    public function __construct(){
        $this->arr_view_data      = [];
        $this->module_title       = "Front";
        $this->module_view_folder = "front.user";
	$this->BaseModel          = new User();
       $this->module_url_path    = "";
	$this->user_image_base_img_path   = base_path().config('app.project.img_path.user_image');
        $this->user_image_public_img_path = url('/').config('app.project.img_path.user_image');
       
	
    }

    public function login(){
        $this->arr_view_data['page_title']       = "login";
        $this->arr_view_data['module_title']     = "login";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        if(session()->has('LoggedUser')){                
            return redirect('user/dashboard');
        }
        return view($this->module_view_folder.'.login',$this->arr_view_data);
    }

    public function process_login(Request $request){     
        $arr_rules = [];
        // $arr_rules['contact_number']              = "required";
        // $validator = Validator::make($request->all(),$arr_rules);
        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $obj_user  = User::where('contact_number',$request->contact_number)
                                   ->first();
        if(!$obj_user){
            return back()->with('fail','We do not recognize your email address');
        }else{

            $credentials = ['email' =>$obj_user->email,'password'  => 'Admin@123'];
            $obj_authentication = Sentinel::authenticate($credentials);
            if($obj_authentication){
                $request->session()->put('LoggedUser', $obj_user->id);
                return redirect('user/dashboard');
            }else{
                return back()->with('fail','We do not recognize your email address');
            }
        }
    }

    public function verify_contact(Request $request){  
         $obj_user  = User::whereRaw('contact_number = "'.$request->contact_number.'"')->first();
         if($obj_user){
             echo "success";
         }else{
             echo "error";
         }
    }



    public function signup()
    {
        $this->arr_view_data['module_url_path']  = $this->module_url_path; 
        $this->arr_view_data['page_title']       = 'signup';
        $this->arr_view_data['module_title']     = 'signup';
        return view($this->module_view_folder.'.signup',$this->arr_view_data);
    }

    public function register(Request $request)
    {
        $arr_data = [];
        $arr_data['name']                  = $request->name.' '.$request->last_name;
        $arr_data['first_name']            = trim($request->name);
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

        if($obj_user){
            $credentials = ['email' =>$obj_user->email,'password'  => 'Admin@123'];
            $obj_authentication = Sentinel::authenticate($credentials);
            $businessArr = [];
            if($request->selector=="commercial"){

                $requestData = array(
                                    "business_name"=>trim($request->company_name),
                                    "website_url"=>trim($request->website),
                                    "contact_number"=>trim($request->contact_number),
                                    "vat_number"=>trim($request->vat_number),
                                    "user_id"=>$obj_user->id
                                    );
                $business_type = 1;
                $this->createBusiness($requestData,$obj_user->id,$business_type);

            }else{
                // Create dummy business for personal user
                $business_type = 0;
                $requestData = array(
                                    "business_name"=>"NA - ".$request->name.' '.$request->last_name,
                                    "website_url"=>"NA",
                                    "contact_number"=>trim($request->contact_number),
                                    "vat_number"=>"12345",
                                    "user_id"=>$obj_user->id
                                    );
                $this->createBusiness($requestData,$obj_user->id,$business_type);

            }
            if($obj_authentication && $obj_authentication->inRole('user')){
                $request->session()->put('LoggedUser', $obj_user->id);
                return redirect('user/dashboard');
            }else{
                return back()->with('fail','We do not recognize your email address');
            }
        }else{
            return back()->with('fail','We do not recognize your email address');
        }
        return redirect()->back();
    }

    function createBusiness($businessData,$userID,$business_type){
        $queryResponse = Business::create($businessData); 
        if($queryResponse){
            User::where('id',$userID)->update(
                        array('business_id'=>$queryResponse->id,
                             "business_type"=>$business_type));
            $walletMasterArr = [];
            $walletMasterArr = array('business_id'=>$queryResponse->id,
                                     'credited_amount'=>"0",
                                     'debited_amount'=>"0",
                                     'balance_amount'=>"0"
                                    );
            $walletQueryRes = WalletMasterModel::create($walletMasterArr); 
        }
    }


    public function get_profile(){
        $this->arr_view_data['page_title']       = "Profile";
        $this->arr_view_data['module_title']     = "Profile";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $sessionData = [];        
        if(!session()->has('LoggedUser')){
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
	   $obj_user['profile_photo'] =  $this->user_image_public_img_path.$obj_user['profile_photo'];                             
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.profile',$this->arr_view_data);
        }
    }

    public function logout(Request $request){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            Sentinel::logout();
            return redirect('/login');
        }
    }

   function update_profile(Request $request){
       // dd($request->all());
        $arr_data = $arr_rules = [];   
        $form_data_arr = explode('&',$request->input('form_data'));
            foreach($form_data_arr as $data){
                $data_arr = explode('=',$data);
                $arr_data[$data_arr[0]] =   urldecode($data_arr[1]);
            }
        $userID = 0;
        $sessionData = [];        
        if(!session()->has('LoggedUser')){
            return redirect(url('/').'/login');
        }else{
            $sessionData = Session::all();
            $userID = Session::get('LoggedUser');
           
        }  
       
        
        if($request->hasFile('file'))
		{	
    
			$file_extension = strtolower($request->file('file')->getClientOriginalExtension());

			if(in_array($file_extension,['png','jpg','jpeg','pdf','docx']))
			{
				$file     = $request->file('file');
				$filename = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
				$path     = $this->user_image_base_img_path . $filename;
				$isUpload = $file->move($this->user_image_base_img_path, $filename);
                    
				if($isUpload)
				{
					$arr_data['vat_cr_certificate'] = $filename;
					 /*unlink the previous banner image
					$obj_data = $this->BaseModel->where('_id', base64_decode($enc_id))->first();
					if(isset($obj_data->image) && $obj_data->image!=''){
						@unlink($this->user_profile_image_base_img_path.$obj_data->image);
					} */
				}
			}
			else
			{
				Session::flash('error','Invalid File type, While creating '.str_singular($this->module_title));
				return redirect()->back();
			}
		}    
       if($request->hasFile('logo'))
		{	
    
			$file_extension = strtolower($request->file('logo')->getClientOriginalExtension());

			if(in_array($file_extension,['png','jpg','jpeg']))
			{
				$file     = $request->file('logo');
				$filename = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
				$path     = $this->user_image_base_img_path . $filename;
				$isUpload = $file->move($this->user_image_base_img_path, $filename);
                    
				if($isUpload)
				{
					$arr_data['profile_photo'] = $filename;
					 /*unlink the previous banner image
					$obj_data = $this->BaseModel->where('_id', base64_decode($enc_id))->first();
					if(isset($obj_data->image) && $obj_data->image!=''){
						@unlink($this->user_profile_image_base_img_path.$obj_data->image);
					} */
				}
			}
			else
			{
				Session::flash('error','Invalid File type, While creating '.str_singular($this->module_title));
				return redirect()->back();
			}
		}    
        //dd($arr_data);
        $create  	= $this->BaseModel->where('id',$userID)->update($arr_data);
        
        if($create){
            
			echo "success";
		}else{
            echo "err";
		} 
    } 
    
}