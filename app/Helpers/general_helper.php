<?php
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Business;
use App\Models\Notification;
use App\Models\WalletMasterModel;

use Illuminate\Support\Facades\Hash;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Session;

function translate($word){
    $translatedData = "";
    $translatedData = trans('auth.'.$word);
    if(strpos($translatedData,'auth.') !== false){
        return $word;
    }else{
        return $translatedData;
    }
}

function getLoggedUserData(){
    $user = $arr_view_data = [];
    $userID = 0;
    $user = Cartalyst\Sentinel\Laravel\Facades\Sentinel::check();
    $userID = Illuminate\Support\Facades\Session::get('LoggedUser');
    if($user && count($user->toArray())>0 && $userID>0){
        //$arr_view_data['user'] = $userID;
        $arr_view_data  = $user->toArray();
        $arr_view_data['name'] =   $arr_view_data['first_name'].' '.$arr_view_data['last_name'];
    }
    return $arr_view_data;
}


function getUserDetails($userID){
    $user = $arr_view_data = $obj_user = [];
    if($userID>0){
	    $obj_user  = User::where('id',$userID)->with('get_business_detail')->orderBy('created_at','DESC')->first();
	    if($obj_user){
	        $arr_view_data['user'] = $userID;
	        $arr_view_data['userData']  = $obj_user->toArray();
            $arr_view_data['userData']['name'] =   $arr_view_data['userData']['first_name'].' '.$arr_view_data['userData']['last_name'];

	    }
	}
    return $arr_view_data;
}


function getBusinessDetails($businessID){
    $businessArr = $arr_view_data = [];
    if($businessID>0){
	    $businessArr  = Business::where('id',$businessID)->first();
	    if($businessArr){
	        $arr_view_data = $businessArr->toArray();
	    }
	}
    return $arr_view_data;
}

function getActiveBusinessList(){
    $userID = 0;
    $userID = Illuminate\Support\Facades\Session::get('LoggedUser');
    $strMobileSidebar = $str = $strPopup = "";
    $businessArr = $arr_view_data = [];
    if($userID>0){
        $businessArr  = Business::where('user_id',$userID)->get();
        $businessID = 0;
        $businessID = Session::get('BUSINESSID');
        if($businessArr){
            foreach($businessArr as $business){
                $str .= '<a class="dropdown-item" href="javascript:void(0);" onclick="setBusinessDashboard('.$business->id.')" >'.$business->business_name.'</a>';

                $strMobileSidebar .= ' <li><a href="javascript:void(0);" onclick="setBusinessDashboard('.$business->id.')" ><i class="feather icon-circle"></i><span class="menu-item">'.$business->business_name.'</span></a></li>';

                $activeClass="";
                if($businessID == $business->id){
                    $activeClass = "active-biz";
                }

                $strPopup .= '<div class="col-sm-12 col-md-6 col-lg-6">
                                <a href="javascript:void(0);" onclick="setBusinessDashboard('.$business->id.')" >
                                    <div class="modal-business-name-section '.$activeClass.' ">
                                        <h2>'.$business->business_name.'</h2>
                                        <span>ID: '.$business->business_id.'</span>                                        
                                    </div>
                                </a>
                             </div>';
            }
        }
    }
    return array("headerDD"=>$str,"mobileDD"=>$strMobileSidebar,"popupDD"=>$strPopup,"count"=>count($businessArr));
}



function getTimeZone($latitude,$longitude)
{
    $timezone  = 'Asia/Kolkata';
    if($latitude!='' && $longitude!='')
    {
        $url = "https://maps.googleapis.com/maps/api/timezone/json?location=".$latitude.",".$longitude."&timestamp=".time()."&key=".config('app.project.google_map_api_key');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $responseJson = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($responseJson);
        $timezone = $response->timeZoneId;
    }
    return $timezone;
}

function addNotification($data){
    $queryResponse = "";
    if($data){
        $queryResponse = Notification::create($data);
    }
    return $queryResponse;
}

function getNotification($data){
   $notificationArr  = [];
    if($id>0){
        $notificationArr  = Notification::where('from_id',$fromID)
                            ->where('to_id',$toID)
                            ->where('id',$id)
                            ->where('type',$type)->get();
    }
    return $notificationArr;
}

function getAllNotifications($data){
    $notificationArr  = [];
    $count = 0;
    $notificationArr  = Notification::where('is_read',0)->where('to_id',$data['to_id']);
    if(isset($data['from_id']) && $data['from_id']>0){
        $notificationArr = $notificationArr->where('from_id',$data['from_id']);
    }
    if(isset($data['type'])>0){
        $notificationArr = $notificationArr->where('type',$data['type']);
    }
    $countObj = $notificationArr;
    $notificationArr = $notificationArr->get();
    $count = $countObj->count();
    //$notificationArr['count'] = $count;
    return array("data"=>$notificationArr,"count"=>$count);


}

function readNotification($data){
    $updateData = [];
    $queryResponse = "";
    $updateData['is_read']=1;
    if($data['to_id']>0){
        $queryResponse = Notification::where('to_id',$data['to_id']);
        if($data['type']){
            $queryResponse = $queryResponse->where('type',$data['type']);
        }
        $queryResponse = $queryResponse->update($requestData);
    }
    if($queryResponse){
        return true;
    }else{
        return false;
    }
}

function getUserWalletBalance($userID){
    $response = $walletArr = [];
    $businessID = 0;
    $response['credit'] = $response['spend'] = $response['balance'] = 0;
    if(Session::has('BUSINESSID')){
        $businessID = Session::get('BUSINESSID');
    }

    if($userID>0){
        $walletArr = WalletMasterModel::where('business_id',$businessID)->first();
        if($walletArr){
            $response['credit'] = $walletArr['credited_amount'];
            $response['spend'] = $walletArr['debited_amount'];
            $response['balance'] = $walletArr['balance_amount'];
        }
    }
    return $response;
}

?>
