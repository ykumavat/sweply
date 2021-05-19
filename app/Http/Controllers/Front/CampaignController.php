<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\CampaignModel;
use App\Models\WalletMasterModel;
use App\Models\WalletModel;



use DataTables;
use Validator;
use Flash;
use Reminder;
use Session;

class CampaignController extends Controller{

    public function __construct(){
        //$this->EmailService       = $EmailService;
        //$this->SMSService         = $SMSService;
        $this->arr_view_data      = [];
        $this->module_title       = "Front";
        $this->module_view_folder = "front.campaign";
        $this->module_url_path    = url('/')."/user";
        $this->BaseModel		  = new CampaignModel();
        $this->campaign_image_base_img_path   = base_path().config('app.project.img_path.campaign_image');
		$this->campaign_image_public_img_path = url('/').config('app.project.img_path.campaign_image');
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

    public function load_channels(){
        $this->arr_view_data['page_title']       = "Create Ads";
        $this->arr_view_data['module_title']     = "Create Ads";
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
            return view($this->module_view_folder.'.create-ads',$this->arr_view_data);
        }
    }


    public function load_transactions(){
        $this->arr_view_data['page_title']       = "Transactions";
        $this->arr_view_data['module_title']     = "Transactions";
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
            return view($this->module_view_folder.'.transactions',$this->arr_view_data);
        }
    }
    public function load_report(){
        $this->arr_view_data['page_title']       = "Report";
        $this->arr_view_data['module_title']     = "Report";
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
            return view($this->module_view_folder.'.report',$this->arr_view_data);
        }
    }


    public function snap_create_first_step(){
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
            $obj_user  = User::where('id',$userID)->first();
             
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.snapchat.index',$this->arr_view_data);
    }
    public function snap_create_second_step(){
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.snapchat.create',$this->arr_view_data);
    }
    
    
    public function snap_create_thired_step(){
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.snapchat.create-option',$this->arr_view_data);
    }

    function store_campaign_data(Request $request){
        $arr_data = $arr_rules = [];   
        $form_data_arr = explode('&',$request->input('form_data'));
        foreach($form_data_arr as $data){
            $data_arr = explode('=',$data);
            $arr_data[$data_arr[0]] =   urldecode($data_arr[1]);
        }
            
        $arr_data['website'] = $arr_data['website_url'];
        $start_date = $arr_data['start_date'];
        $start_date = date('Y-m-d',strtotime($start_date));
        $end_date = $arr_data['end_date'];
        $end_date = date('Y-m-d',strtotime($end_date));
        // Screenshot Upload
        $img = $_POST['screen_shot']; 
        if(isset($_POST['screen_shot']) && $_POST['screen_shot']!=""){ 
            $img = str_replace('data:image/png;base64,', '', $img);  
            $img = str_replace(' ', '+', $img);  
            $data = base64_decode($img); 
            $screenshot_name = uniqid().'.png'; 
            $file = $this->campaign_image_base_img_path.$screenshot_name ;  
            $success = file_put_contents($file, $data);  
            $arr_data['screen_shot'] =   $screenshot_name;

        }
        //End Screenshot upload

        if($request->hasFile('videofile')){
            $file_extension = strtolower($request->file('videofile')->getClientOriginalExtension());
            if(in_array($file_extension,['mp4','mov'])){
                $file     = $request->file('videofile');
                $filename = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
                $path     = $this->campaign_image_base_img_path . $filename;
                $isUpload = $file->move($this->campaign_image_base_img_path, $filename);
                if($isUpload){
                    $arr_data['post_image'] = $filename;
                }
            }
        }else if($request->hasFile('file')){   
            $file_extension = strtolower($request->file('file')->getClientOriginalExtension());

            if(in_array($file_extension,['png','jpg','jpeg']))
            {
                $file     = $request->file('file');
                $filename = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
                $path     = $this->campaign_image_base_img_path . $filename;
                $isUpload = $file->move($this->campaign_image_base_img_path, $filename);
                if($isUpload){
                    $arr_data['original_image'] = $filename;
                }
            }else{
                Session::flash('error','Invalid File type, While creating '.str_singular($this->module_title));
                return redirect()->back();
            }

            $image_file = "";
            if($request->input('upload_type') == 'image' && $request->image){
                $image_file = $request->image;
                list($type, $image_file) = explode(';', $image_file);
                list(, $image_file)      = explode(',', $image_file);
                $image_file = base64_decode($image_file);
            }
            $image_name= time().'_'.rand(100,999).'.png';
            $path =   $this->campaign_image_base_img_path.$image_name;
            $abc = file_put_contents($path, $image_file);
            $post_image = $image_name;
            $arr_data['post_image'] = $post_image;
        }   
        if($request->hasFile('appicon')){
            $file_extension = strtolower($request->file('appicon')->getClientOriginalExtension());
            if(in_array($file_extension,['png','jpg','jpeg'])){
                $file     = $request->file('appicon');
                $filename = sha1(uniqid().uniqid()) . '.' . $file->getClientOriginalExtension();
                $path     = $this->campaign_image_base_img_path . $filename;
                $isUpload = $file->move($this->campaign_image_base_img_path, $filename);if($isUpload){
                        $arr_data['app_icon'] = $filename;
                    }
            }
        }

        if($arr_data['business_id']==0){
            $arr_data['business_id']  = Session::get('BUSINESSID');
        }
        //$arr_data['post_image']         =   $post_image;
        //$arr_data['screen_shot']        =   $screenshot_name;
        $arr_data['start_date']         =   $start_date;
        $arr_data['end_date']           =   $end_date;
        $arr_data['estimeted_reach']    =   $arr_data['estimated_reach'];
        $arr_data['vat_amount']         =   $arr_data['vat'];
        $arr_data['service_amount']     =   $arr_data['service_fee'];
        $arr_data['upload_type']        =   $request->input('upload_type', 0);
        $arr_data['target_audience']    =   $request->input('target_audience', 0);
        $arr_data['gender']             =   $request->input('gender', 0);
        $arr_data['age']                =   $request->input('age', 0);
        $arr_data['campaign_budget_type'] = $request->input('campaign_budget_type', 1);

        $create  	= $this->BaseModel->create($arr_data);
        
        if($create){
            $campaign_id = $create->id;

            $userID = Session::get('LoggedUser');
            $notificationArr = array(
                                    "title"=>"New campaign created - ".$arr_data['campaign_name'],
                                    "message"=>" New campaign created from user panel",
                                    "type"=>"CAMPAIGN_CREATE",
                                    "from_id"=>$userID,
                                    );
            addNotification($notificationArr);

            $walletArr = [];
            $walletArr = WalletMasterModel::where('business_id',$arr_data['business_id'])->first();
            $wallet_status = "warning";
            if($walletArr){
                if($walletArr['balance_amount']>=$arr_data['total_budget']){

                    $debited_amount = $balance_amount = "";

                    $debited_amount = $walletArr['debited_amount']+$arr_data['total_budget'];
                    $balance_amount = $walletArr['balance_amount']-$arr_data['total_budget'];

                    $update = WalletMasterModel::where('business_id',$arr_data['business_id'])->update(array("debited_amount"=>$debited_amount,"balance_amount"=>$balance_amount));

                    if($update){
                        $paymentArr = array(
                            "user_id"=>$arr_data['user_id'],
                            "amount"=>$arr_data['total_budget'],
                            "transaction_type"=>"DEBIT",
                            "transaction_id"=>rand(),
                            "wallet_id"=>$walletArr['wallet_id'],
                            "business_id"=>$arr_data['business_id'],
                            "campaign_id"=>$campaign_id
                        );
                        WalletModel::create($paymentArr);
                        $this->BaseModel->where('id',$campaign_id)->update(array("payment_status"=>"PAID"));

                    }

                    $wallet_status = "success";
                }else{
                    $wallet_status = "warning";
                }
            }
			echo $wallet_status;
		}else{
            echo "err";
		} 
    } 

    public function loadCampaignData(Request $request){   
        //dd($request);
        $build_status_btn       = '';
        $arr_data               = [];
        $arr_search_column      = $request->input('column_filter');
        $userID = Session::get('LoggedAdmin');
        $businessID = 0;
        if(Session::has('BUSINESSID')){
            $businessID = Session::get('BUSINESSID');
        }


        $obj_request_data = $this->BaseModel;
        if($businessID>0){
            $obj_request_data = $obj_request_data->where('business_id',$businessID);
        }
        $obj_request_data = $obj_request_data->orderBy('created_at','DESC')->with(array('get_business' => function($query) {
                                                $query->select('id','business_name');
                                            }))->with(array('get_user' => function($query) {
                                                 $query->select('id','name');
                                            }))->with(array('get_channel' => function($query) {
                                                 $query->select('id','channel_name');
                                            }))->latest();

        $json_result    = DataTables::of($obj_request_data)->filter(function ($instance) use ($request) {
                            if (!empty($request->get('search'))) {
                                 $instance->where(function($w) use($request){
                                    $search = $request->get('search');
                                    $w->orWhere('campaign_name', 'LIKE', "%$search%")
                                    ->orWhere('heading', 'LIKE', "%$search%");
                                });
                            }
                        })->make(true);
        $build_result   = $json_result->getData();

        if(isset($build_result->data) && sizeof($build_result->data)>0)
        {
            foreach ($build_result->data as $key => $data) 
            {
                $settings_link_url    = $this->module_url_path."/customer/edit_staff/".base64_encode($data->id);
                $svg='<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                </svg>';
                $action_button_html = '<div class="dropdown table-drop-action">
                                            <button class="btn-icon btn btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$svg.'</button>
                                            <div class="dropdown-menu dropdown-menu-right">';
                $action_button_html .='<a class="dropdown-item edit-btn" title="Edit"  onclick="edit('."'".base64_encode($data->id)."'".')" Record" href="javascript:void(0);" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">View</a>';
               // $action_button_html .='<a class="dropdown-item edit-btn" title="Edit"  onclick="edit('."'".base64_encode($data->id)."'".')" Record" href="javascript:void(0);" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">View</a>';

                $action_button_html .='</div>
                                       </div>'; 

		$balance_amount = 0;
                $businessName = $userName = $channelName = "";
                if(isset($data->get_business)){                       
                    $businessName = $data->get_business->business_name;
		  $bussiness_id = $data->get_business->id;
		 // dd($bussiness_id);
                    $walletArr = WalletMasterModel::where('business_id',$bussiness_id)->first();
                    $balance_amount = isset($walletArr['balance_amount'])? $walletArr['balance_amount']: 0;
                }
                if(isset($data->get_user)){                       
                    $userName = $data->get_user->name;
                }
                if(isset($data->get_channel)){                       
                    $channelName = $data->get_channel->channel_name;
                }
		 $total_amount = $data->total_budget;
                $campaign_name = $data->campaign_name;
                $enc_id = base64_encode($data->id);
                if($data->payment_status == 'PENDING'){
                    $pay_now = '<a href="#" onclick="pay_now('.$total_amount.','.$balance_amount.",'$campaign_name','$enc_id '".')"><i class="feather icon-money"></i> Pay Now</a>';
                }else{
                   $pay_now = $data->payment_status;
                }



                $invoiceHtml = '<a href="'.$this->module_url_path."/campaign-details/".base64_encode($data->id).'"><i class="feather icon-download-cloud"></i> (Download)</a>';
                                                                      
                $i = $key+1;    
                $build_result->data[$key]->id                   = $data->id;
                $build_result->data[$key]->business_name        = $businessName;
                $build_result->data[$key]->user_name        = $userName;
                $build_result->data[$key]->channel_name        = $channelName;
		$build_result->data[$key]->payment_status    = $pay_now;
                $build_result->data[$key]->built_action_btns    = $invoiceHtml;
                
            }
            return response()->json($build_result);
        }
        else
        {
            return response()->json($build_result);
        }
    }


    function loadCampaignDetails($enc_id){
        $this->arr_view_data['page_title']       = "Transactions";
        $this->arr_view_data['module_title']     = "Transactions";
        $this->arr_view_data['module_url_path']  = $this->module_url_path;  
        $id = base64_decode($enc_id);
        
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
            $obj_responce_data = $this->BaseModel->with('get_user','get_business')->where('id',$id)->first();
            
            $arr_data = $obj_responce_data->toArray();
            
            $arr_data['original_image'] = $this->campaign_image_public_img_path.$arr_data['original_image'];
            $arr_data['post_image'] = $this->campaign_image_public_img_path.$arr_data['post_image'];
            $arr_data['screen_shot'] = $this->campaign_image_public_img_path.$arr_data['screen_shot'];
            
            $this->arr_view_data['userData']  = $obj_user;              
            $this->arr_view_data['data']  = $arr_data;              
            return view($this->module_view_folder.'.campaign-details',$this->arr_view_data);
        }
    }

/**********CAmpaign Payement Status -  Prashant  - 15-05-2021******/
      function campaign_payment_status(Request $request){
        $enc_id = $request->input('id');
        $status = $request->input('status');
       
        if($status=='active'){
            
            $campaign_id  = base64_decode($enc_id);
            $camp_data = $this->BaseModel->where('id',$campaign_id)->first();
            $walletArr = [];
            $bussiness_id = $camp_data['business_id'];
            $walletArr = WalletMasterModel::where('business_id',$bussiness_id)->first();
            $balance_amount = $walletArr['balance_amount']; 
                    
         
            $wallet_status = "warning";
            if($walletArr){
                if($walletArr['balance_amount']>=$camp_data['total_budget']){

                    $debited_amount = $balance_amount = "";

                    $debited_amount = $walletArr['debited_amount']+$camp_data['total_budget'];
                    $balance_amount = $walletArr['balance_amount']-$camp_data['total_budget'];

                    $update = WalletMasterModel::where('business_id',$camp_data['business_id'])->update(array("debited_amount"=>$debited_amount,"balance_amount"=>$balance_amount));

                    if($update){
                        $paymentArr = array(
                            "user_id"=>$camp_data['user_id'],
                            "amount"=>$camp_data['total_budget'],
                            "transaction_type"=>"DEBIT",
                            "transaction_id"=>rand(),
                            "wallet_id"=>$walletArr['wallet_id'],
                            "business_id"=>$camp_data['business_id'],
                            "campaign_id"=>$campaign_id,
                            "payment_status"=>"Done"
                        );
                        WalletModel::create($paymentArr);
                        $this->BaseModel->where('id',$campaign_id)->update(array("payment_status"=>"PAID"));

                    }

                   return  $wallet_status = "success";
                }else{
                    return $wallet_status = "warning";
                }
            }
			
         }
       
       
    }
}
