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
use App\Models\Channel;
use App\Models\CampaignMediaModel;




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
        $this->WalletModel		  = new WalletModel();
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
            $channelsArr = [];
            $channelsArr = Channel::where('status','1')->orderByRaw('display_order ASC')->get();  
            $this->arr_view_data['channel_list']  = $channelsArr;  
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
        
        $campaign_id =0;
	
        $arr_data = $arr_rules = [];   
        $paymentMethod = "";
        $form_data_arr = explode('&',$request->input('form_data'));
        foreach($form_data_arr as $data){
            $data_arr = explode('=',$data);
            if($data_arr[0] == 'campaign_id' ){
                $campaign_id =   urldecode($data_arr[1]);
            }else{
                if($data_arr[0] == 'payment_method'){
                    $paymentMethod = urldecode($data_arr[1]);
                }
                if($data_arr[0] != 'wallet_amount' && $data_arr[0] != 'campaign_target_area' && $data_arr[0] != 'payment_method' ){
                    $arr_data[$data_arr[0]] =   urldecode($data_arr[1]);
                }

            } 
            
        }
        $start_date = $arr_data['start_date'];
        $end_date = $arr_data['end_date'];
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
        //unset($arr_data['campaign_target_area%5B%5D']);

        $arr_data['start_date']         =   $start_date;
        $arr_data['end_date']           =   $end_date;
        $arr_data['estimated_reach']    =   $arr_data['estimated_reach'];
        $arr_data['vat_amount']         =   $arr_data['vat_amount'];
        $arr_data['service_amount']     =   $arr_data['service_amount'];
        $arr_data['upload_type']        =   $request->input('upload_type', 0);
        $arr_data['target_audience']    =   $request->input('target_audience', 0);
        $arr_data['gender']             =   $request->input('gender', 0);
        $arr_data['age']                =   $request->input('age', 0);
        $arr_data['campaign_target_area']                =   $request->input('location','');
        $arr_data['campaign_budget_type'] = $request->input('campaign_budget_type', 1);
        $scall_from = '';
        if($campaign_id  != ''  && $campaign_id  != 'undefined' && $campaign_id  != null){
                $scall_from = 'update';
             $create  	= $this->BaseModel->where('id',$campaign_id)->update($arr_data);
        }else{
                $scall_from = 'create';
             $create  	= $this->BaseModel->create($arr_data);
        }
       
        
        if($create){
            if($campaign_id  != ''  && $campaign_id  != 'undefined' && $campaign_id  != null){
                $campaign_id = $campaign_id;
            }else{
                $campaign_id = $create->id;
            }
            

             $userID = Session::get('LoggedUser');
            $notificationArr = array(
                                    "title"=>"New campaign created - ".$arr_data['campaign_name'],
                                    "message"=>" New campaign created from user panel",
                                    "type"=>"CAMPAIGN_CREATE",
                                    "from_id"=>$userID,
                                    );
            addNotification($notificationArr);
            if($scall_from == 'update'){
                 $prev_data = $this->WalletModel->where('campaign_id',$campaign_id)->where('transaction_type','DEBIT')->orderBy('created_at','DESC')->first();
                    $debited_amount = $balance_amount = "";





                     $walletArr = WalletMasterModel::where('business_id',$arr_data['business_id'])->first();
                     if(isset($prev_data['amount'])){
                        $debited_amount = $walletArr['debited_amount']- $prev_data['amount'];
                        $balance_amount = $walletArr['balance_amount']+ $prev_data['amount'];

                        $update = WalletMasterModel::where('business_id',$arr_data['business_id'])->update(array("debited_amount"=>$debited_amount,"balance_amount"=>$balance_amount));

                        //$result = $this->BaseModel->where('id',$campaign_id)->first();
                        $prev_data_wallet = [];
                        $prev_data_wallet['transaction_type'] = 'CREDIT';
                        $prev_data_wallet['payment_status'] = 'DONE';
                        $prev_data_wallet['remark'] = 'Updated Campaign';
                    
                         $prev_data = $this->WalletModel->where('id',$prev_data['id'])->update($prev_data_wallet);
                }
            }
        
            $walletArr = [];
            $walletArr = WalletMasterModel::where('business_id',$arr_data['business_id'])->first();
            $wallet_status = '';


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
                    
                    $count =  WalletModel::where('campaign_id',$campaign_id)->count();
                    if($count > 1 || $scall_from == 'update'){
                        $wallet_status = "updated";
                    }else{
                        $wallet_status = "success";
                    }
                    //$wallet_status = "success";
                }else{
                    $amountToPay   = 0;
                    $amountToPay   = $totalBudget   = $arr_data['total_budget'];
                    $walletAmount  = $walletArr['balance_amount'];

                    if($walletAmount>0){
                        $amountToPay = $amountToPay-$walletAmount;
                    }
                    $request->session()->put('AMOUNTTOPAY',$amountToPay);
                    $request->session()->put('PAYMENT-METHOD',$paymentMethod);
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
                                                 $query->select('id','channel_name','url_slug');
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

                $channelName = $urlSlug = "";
                if(isset($data->get_channel)){                       
                    $channelName = '<i class="fa fa-'.strtolower($data->get_channel->channel_name).'"   title="'.$data->get_channel->channel_name.'"></i>';
                    //$data->get_channel->channel_name;
                    $urlSlug = $data->get_channel->url_slug;
                }

                $settings_link_url    = $this->module_url_path."/customer/edit_staff/".base64_encode($data->id);
                $edit_link_url    = $this->module_url_path."/".$urlSlug."-create-ads/".base64_encode($data->id);
                $view_link_url    = $this->module_url_path."/campaign-details/".base64_encode($data->id);
                $svg='<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                    </svg>';
                $action_button_html = '<div class="dropdown table-drop-action">
                                            <button class="btn-icon btn btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$svg.'</button>
                                            <div class="dropdown-menu dropdown-menu-right">';
                $action_button_html .='<a class="dropdown-item edit-btn" title="Edit"   href="'.$edit_link_url.'" data-original-title="Edit" data-id="'.$data->id.'" id="open_edit_staff_modal">Edit</a>';
                $action_button_html .='<a class="dropdown-item edit-btn" title="Show"   href="'.$view_link_url.'" data-original-title="Show" data-id="'.$data->id.'" id="open_edit_staff_modal">View</a>';

                $action_button_html .='</div>
                                       </div>'; 

		        $balance_amount = 0;
                $businessName = $userName =  "";
                if(isset($data->get_business)){                       
                    $businessName = $data->get_business->business_name;
		            $bussiness_id = $data->get_business->id;
                    $walletArr = WalletMasterModel::where('business_id',$bussiness_id)->first();
                    $balance_amount = isset($walletArr['balance_amount'])? $walletArr['balance_amount']: 0;
                }
                if(isset($data->get_user)){                       
                    $userName = $data->get_user->name;
                }
                
		        $total_amount = $data->total_budget;
                $campaign_name = $data->campaign_name;
                $enc_id = base64_encode($data->id);

                $status = $data->status;
                if($data->status=='PENDING' || $data->status=='REJECT'){
                    $status = '<div class="badge badge-pill badge-warning">'.$data->status.'</div>';
                }else{
                    $status = '<div class="badge badge-pill badge-success">'.$data->status.'</div>';
                }

                $pay_now = "-";
                if($data->payment_status == 'PENDING'){
                   $status =  $pay_now = '<a href="#" class="table-pay-now-btn"  onclick="pay_now('.$total_amount.','.$balance_amount.",'$campaign_name','$enc_id '".')"> Pay Now</a>';
                    //$status = '<div class="badge badge-pill badge-danger">'.$pay_now.'</div>';
                }

                /*else{
                   $pay_now = $data->payment_status;
                }*/

                



                $invoiceHtml = '<a href="'.$this->module_url_path."/campaign-details/".base64_encode($data->id).'"><i class="feather icon-download-cloud"></i> (Download)</a>';

                $date = "";
                $date = date("d M Y",strtotime(str_replace("/","-",$data->start_date)))." - ".date("d M Y",strtotime(str_replace("/","-",$data->end_date)));
                                                                      
                $i = $key+1;    
                $build_result->data[$key]->id                   = $i;
                $build_result->data[$key]->business_name        = $businessName;
                $build_result->data[$key]->user_name            = $userName;
                $build_result->data[$key]->channel_name         = $channelName;
                //$build_result->data[$key]->payment_status       = $pay_now;
                $build_result->data[$key]->built_action_btns    = $action_button_html;
                $build_result->data[$key]->status               = $status;
                $build_result->data[$key]->date                 = $date;

                
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
            $obj_responce_data = $this->BaseModel->with('get_user','get_business')->with(array('get_channel' => function($query) {
                    $query->select('id','channel_name','url_slug');
            }))->where('id',$id)->first();

            $channelName = $urlSlug = "";
            if(isset($obj_responce_data->get_channel)){                       
                $channelName = $obj_responce_data->get_channel->channel_name;
                $urlSlug = $obj_responce_data->get_channel->url_slug;
            }
            //dd($urlSlug);

            $arr_data = $obj_responce_data->toArray();


            $campaignMedia = [];
            $campaignMedia = CampaignMediaModel::where('campaign_id',$id)->get();
            $arr_data['preview_type'] = "single";
            if($campaignMedia){
                foreach($campaignMedia as $media){
                    $arr_data['campaign_media'][] = $this->campaign_image_public_img_path.$media['original_media_src'];
                    $arr_data['campaign_media_croped'][] = $this->campaign_image_public_img_path.$media['media_src'];
                    $arr_data['media_type'] = $media['media_type'];

                }
                $arr_data['preview_type'] = "carousel";

            }
            
            $arr_data['original_image'] = $this->campaign_image_public_img_path.$arr_data['original_image'];
            $arr_data['post_image'] = $this->campaign_image_public_img_path.$arr_data['post_image'];
            $arr_data['screen_shot'] = $this->campaign_image_public_img_path.$arr_data['screen_shot'];
            if($arr_data['app_icon']!=""){
                $arr_data['app_icon'] = $this->campaign_image_public_img_path.$arr_data['app_icon'];
            }
            
            $this->arr_view_data['userData']  = $obj_user;              
            $this->arr_view_data['data']  = $arr_data;              
            return view($this->module_view_folder.'.'.$urlSlug.'.'.$urlSlug.'-details',$this->arr_view_data);
        }
    }
    
    function load_campaign_data($enc_id){
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
            return view($this->module_view_folder.'.snapchat.create',$this->arr_view_data);
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


/***********************************************************************************************/
// Twitter Campaign Functionality - By Yogesh Kumawat - Dated 31 May 2021 
/***********************************************************************************************/


    public function twitter_create_first_step(){
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
            $obj_user  = User::where('id',$userID)->first();
             
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.twitter.index',$this->arr_view_data);
    }
    public function twitter_create_second_step(){
            $sessionData = Session::all();
            $userID = 0;
            $userID = Session::get('LoggedUser');
            $this->arr_view_data['user'] = $userID;
             $obj_user  = User::where('id',$userID)
                                   ->first();
            $this->arr_view_data['userData']  = $obj_user;              
            return view($this->module_view_folder.'.twitter.create',$this->arr_view_data);
    }
    function store_twitter_data(Request $request){    
        $campaign_id =0;
    
        $arr_data = $arr_rules = [];   
        $paymentMethod = "";
        $form_data_arr = explode('&',$request->input('form_data'));
        foreach($form_data_arr as $data){
            $data_arr = explode('=',$data);
            if($data_arr[0] == 'campaign_id' ){
                $campaign_id =   urldecode($data_arr[1]);
            }else{
                if($data_arr[0] == 'payment_method'){
                    $paymentMethod = urldecode($data_arr[1]);
                }
                if($data_arr[0] != 'wallet_amount' && $data_arr[0] != 'campaign_target_area' && $data_arr[0] != 'payment_method' ){
                    $arr_data[$data_arr[0]] =   urldecode($data_arr[1]);
                }

            } 
            
        }

        $uploadType = $request->input('upload_type');



        $start_date = $arr_data['start_date'];
        $end_date = $arr_data['end_date'];
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
        
        $filesArr = [];
        if($request->hasFile('campaign_media')){
            foreach($request->file('campaign_media') as $file){
                $name = "twitter-".time().rand(1,100).'.'.$file->extension();
                //echo $this->campaign_image_base_img_path.$name."=====>";
                //die;
                $file->move($this->campaign_image_base_img_path, $name);  
                $filesArr[] = $name;  
            }
        }
        //dd($request->file('campaign_media'));



        
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
        $arr_data['start_date']         =   $start_date;
        $arr_data['end_date']           =   $end_date;
        $arr_data['estimated_reach']    =   $arr_data['estimated_reach'];
        $arr_data['vat_amount']         =   $arr_data['vat_amount'];
        $arr_data['service_amount']     =   $arr_data['service_amount'];
        $arr_data['upload_type']        =   $request->input('upload_type', 0);
        $arr_data['target_audience']    =   $request->input('target_audience', 0);
        $arr_data['gender']             =   $request->input('gender', 0);
        $arr_data['age']                =   $request->input('age', 0);
        $arr_data['campaign_target_area']                =   $request->input('location','');
        $arr_data['campaign_budget_type'] = $request->input('campaign_budget_type', 1);
        $scall_from = '';
        if($campaign_id  != ''  && $campaign_id  != 'undefined' && $campaign_id  != null){
                $scall_from = 'update';
             $create    = $this->BaseModel->where('id',$campaign_id)->update($arr_data);
            if($filesArr){
                foreach($filesArr as $filename){
                    CampaignMediaModel::create(array("campaign_id"=>$campaign_id,
                     "media_src"=>$filename,
                     "media_type"=>$uploadType,
                     "preview_type"=>'',
                     "original_media_src"=>$filename
                    ));
                }
            }

        }else{
             $scall_from = 'create';
             $create    = $this->BaseModel->create($arr_data);
             if($filesArr){
                foreach($filesArr as $filename){
                    CampaignMediaModel::create(array("campaign_id"=>$create->id,
                     "media_src"=>$filename,
                     "media_type"=>$uploadType,
                     "preview_type"=>'',
                     "original_media_src"=>$filename
                    ));
                }
            }

        }
       
        if($create){
            if($campaign_id  != ''  && $campaign_id  != 'undefined' && $campaign_id  != null){
                $campaign_id = $campaign_id;
            }else{
                $campaign_id = $create->id;
            }
            
            $userID = Session::get('LoggedUser');
            $notificationArr = array(
                                    "title"=>"New campaign created - ".$arr_data['campaign_name'],
                                    "message"=>" New campaign created from user panel",
                                    "type"=>"CAMPAIGN_CREATE",
                                    "from_id"=>$userID,
                                    );
            addNotification($notificationArr);
            if($scall_from == 'update'){
                 $prev_data = $this->WalletModel->where('campaign_id',$campaign_id)->where('transaction_type','DEBIT')->orderBy('created_at','DESC')->first();
                    $debited_amount = $balance_amount = "";

                     $walletArr = WalletMasterModel::where('business_id',$arr_data['business_id'])->first();
                     if(isset($prev_data['amount'])){
                        $debited_amount = $walletArr['debited_amount']- $prev_data['amount'];
                        $balance_amount = $walletArr['balance_amount']+ $prev_data['amount'];

                        $update = WalletMasterModel::where('business_id',$arr_data['business_id'])->update(array("debited_amount"=>$debited_amount,"balance_amount"=>$balance_amount));
                        $prev_data_wallet = [];
                        $prev_data_wallet['transaction_type'] = 'CREDIT';
                        $prev_data_wallet['payment_status'] = 'DONE';
                        $prev_data_wallet['remark'] = 'Updated Campaign';
                    
                         $prev_data = $this->WalletModel->where('id',$prev_data['id'])->update($prev_data_wallet);
                }
            }
        
            $walletArr = [];
            $walletArr = WalletMasterModel::where('business_id',$arr_data['business_id'])->first();
            $wallet_status = '';


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
                    
                    $count =  WalletModel::where('campaign_id',$campaign_id)->count();
                    if($count > 1 || $scall_from == 'update'){
                        $wallet_status = "updated";
                    }else{
                        $wallet_status = "success";
                    }
                }else{
                    $amountToPay   = 0;
                    $amountToPay   = $totalBudget   = $arr_data['total_budget'];
                    $walletAmount  = $walletArr['balance_amount'];

                    if($walletAmount>0){
                        $amountToPay = $amountToPay-$walletAmount;
                    }
                    $request->session()->put('AMOUNTTOPAY',$amountToPay);
                    $request->session()->put('PAYMENT-METHOD',$paymentMethod);
                    $wallet_status = "warning";
                }
            } 
            echo $wallet_status;
        }else{
            echo "err";
        } 
    } 
    function load_twitter_data($enc_id){
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
            $campaignMedia = [];
            $campaignMedia = CampaignMediaModel::where('campaign_id',$id)->get();           
            $this->arr_view_data['userData']  = $obj_user;              
            $this->arr_view_data['data']  = $arr_data;     
            $this->arr_view_data['media']  = $campaignMedia;     
            return view($this->module_view_folder.'.twitter.create',$this->arr_view_data);
        }
    }


}
