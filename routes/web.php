<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('cache_clear', function () {
	\Artisan::call('cache:clear');
	\Artisan::call('cache:clear');
	\Artisan::call('config:cache');
		//  Clears route cache
	\Artisan::call('route:clear');
	\Cache::flush();
//	\Artisan::call('optimize');
	exec('composer dump-autoload');
	Cache::flush();
	dd("Cache cleared!");
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
  return view('front.home.home');
});
 Route::get('/admin/', function(){
     return view('admin.auth.login');
 });
 Route::get('cache_clear', function () {
	\Artisan::call('cache:clear');
	\Artisan::call('cache:clear');
	\Artisan::call('config:cache');
	\Artisan::call('route:clear');
	\Cache::flush();
	//	\Artisan::call('optimize');
	exec('composer dump-autoload');
	Cache::flush();
	dd("Cache cleared!");
});
Route::group(array('prefix' => '/','middleware' => ['web']), function(){
	$route_slug       = "";
	$module_controller = "App\Http\Controllers\Controller@";
	Route::get('',						['as' => $route_slug.'index',	'uses' => $module_controller.'index']);
	Route::post('change_language',		['as' => 'change_language', 'uses' => 	$module_controller.'change_language']);
	Route::post('set_business_dashboard',		['as' => 'set_business_dashboard', 'uses' => 	$module_controller.'setBusinessDashboard']);
});
//include(base_path().'/routes/admin.php');
//include_once(base_path().'/routes/front.php');




Route::group(['prefix' =>'/admin','middleware' => ['Admin','web']], function ()
{
	$module_controller = "App\Http\Controllers\Admin\AuthController@";
	Route::get('/login', 			[ 'as'	=>	'',   'uses'	=>	$module_controller.'login']);
	Route::any('/process_login', 			[ 'as'	=>	'','uses'	=>	$module_controller.'process_login']);
	Route::get('/logout', [ 'as'=>'', 'uses'=>$module_controller.'logout']);
	$module_controller = "App\Http\Controllers\Admin\DashboardController@";
	Route::get('/dashboard', [ 'as'=>'dashbaord', 'uses'=>$module_controller.'index']);


	/******************************* CAMPAIGN CONTROLLER *******************************************/
	$module_controller = "App\Http\Controllers\Admin\CampaignController@";
	Route::get('/campaign', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/create-ads', [ 'as'=>'', 'uses'=>$module_controller.'load_channels']);
	Route::get('/transactions', [ 'as'=>'', 'uses'=>$module_controller.'load_transactions']);
	Route::get('/report', [ 'as'=>'', 'uses'=>$module_controller.'load_report']);
	Route::get('/snapchat', [ 'as'=>'', 'uses'=>$module_controller.'snap_create_first_step']);
	Route::get('/snapchat-create-ads', [ 'as'=>'', 'uses'=>$module_controller.'snap_create_second_step']);
	Route::post('/snapchat_store', [ 'uses'=>$module_controller.'store_campaign_data']);
	Route::get('/snapchat_create_campaign', [ 'as'=>'', 'uses'=>$module_controller.'snapchat_create_campaign']);
	Route::get('/snapchat-create-filter',[ 'as'=>'','uses'=>$module_controller.'snap_create_thired_step']);
   	 Route::get('campaign/load-campaign', [ 'as'=>'', 'uses'=>$module_controller.'loadCampaignData']);
	Route::get('/campaign/campaign-details/{id}', [ 'as'=>'', 'uses'=>$module_controller.'loadCampaignDetails']);
	Route::post('/campaign/campaign_status', [ 'as'=>'', 'uses'=>$module_controller.'campaign_status']);
	Route::post('/campaign/campaign_payment_status', [ 'as'=>'', 'uses'=>$module_controller.'campaign_payment_status']);

	/******************************* BUSINESS CONTROLLER  ************************************************/
	$route_slug = 'admin';
	$module_controller = "App\Http\Controllers\Admin\BusinessController@";
	Route::get('/business', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/business/load-data', [ 'as'=>'', 'uses'=>$module_controller.'loadData']);
	Route::get('/business/business-user', [ 'as'=>'', 'uses'=>$module_controller.'business_users']);
	Route::get('/business/user-details', [ 'as'=>'', 'uses'=>$module_controller.'user_details']);
	Route::post('/create-business', [ 'as'=>'', 'uses'=>$module_controller.'create_business']);
	Route::post('/business-details/', [ 'as'=>'', 'uses'=>$module_controller.'get_record']);
	Route::post('/update-business/', [ 'as'=>'', 'uses'=>$module_controller.'update_record']);
	Route::get('/business/active/{id}',				['as' => $route_slug.'categories', 			'uses' => $module_controller.'active']);
	Route::get('/business/inactive/{id}',			['as' => $route_slug.'categories',			'uses' => $module_controller.'inactive']);
	Route::post('/business/multi_action',			['as' => $route_slug.'users', 				'uses' => $module_controller.'multi_action']);
	Route::get('/business/delete/{id}',				['as' => $route_slug.'delete', 				'uses' => $module_controller.'delete']);

	Route::get('/load-userdata', [ 'as'=>'', 'uses'=>$module_controller.'loadUserData']);
	Route::post('/create-business-user', [ 'as'=>'', 'uses'=>$module_controller.'create_business_user']);
	Route::post('/user-details/', [ 'as'=>'', 'uses'=>$module_controller.'get_user']);
	Route::post('/update-user/', [ 'as'=>'', 'uses'=>$module_controller.'update_user']);

	 $route_slug = 'admin';
	 Route::group(array('prefix' => 'staff'), function () use($route_slug)
	{
		$module_controller = 'App\Http\Controllers\Admin\StaffManagementController@';
		Route::get('/',							['as' => $route_slug.'index', 				'uses' => $module_controller.'index']);
		Route::get('/load_data',				['as' => $route_slug.'load_data', 			'uses' => $module_controller.'load_data']);
		Route::post('/store_staff',				    ['as' => $route_slug.'store_staff', 		        'uses' => $module_controller.'store_staff']);
		Route::get('/edit/{id}',	  		    ['as' => $route_slug.'edit', 			    'uses' => $module_controller.'edit']);
		Route::get('/view/{id}',	  		    ['as' => $route_slug.'view', 			    'uses' => $module_controller.'view']);
		Route::post('/update',	  				['as' => $route_slug.'update', 				'uses' => $module_controller.'update']);
		Route::get('/active/{id?}',				['as' => $route_slug.'categories', 			'uses' => $module_controller.'block']);
		Route::get('/inactive/{id?}',			['as' => $route_slug.'categories',			'uses' => $module_controller.'unblock']);
		Route::post('/multi_action',			['as' => $route_slug.'users', 				'uses' => $module_controller.'multi_action']);
		Route::get('/delete/{id}',				['as' => $route_slug.'delete', 				'uses' => $module_controller.'delete']);
		Route::post('/global-search',    	    	[	'as' =>$route_slug.'global-search', 		    'uses' => $module_controller.'global_search']);			

	});

	/******************************* WALLET CONTROLLER  ************************************************/
	$module_controller = "App\Http\Controllers\Admin\WalletController@";
	Route::get('/wallet', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/wallet-list', [ 'as'=>'', 'uses'=>$module_controller.'load_wallet_page']);
	Route::get('/admin/payment', [ 'as'=>'', 'uses'=>$module_controller.'get_payment_methods']);
	Route::get('/admin/payment-cards', [ 'as'=>'', 'uses'=>$module_controller.'get_cards']);
	Route::get('/load-wallet-data', [ 'as'=>'', 'uses'=>$module_controller.'loadWalletData']);
	Route::post('/wallete_status', [ 'as'=>'', 'uses'=>$module_controller.'wallete_status']);
	/***************************** CHANNEL CONTROLLER  ******************************/
	$module_controller = "App\Http\Controllers\Admin\ChannelController@";
	Route::get('/channel', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/channel/load-data', [ 'as'=>'', 'uses'=>$module_controller.'loadData']);
	Route::post('/create-channel',['as'=>'','uses'=>$module_controller.'create_channel']);
	Route::post('/channel-details/',['as'=>'','uses'=>$module_controller.'get_record']);
	Route::post('/update-channel/',['as'=>'','uses'=>$module_controller.'update_record']);
	/***************************** CHANNEL CATEGORY CONTROLLER  ******************************/
	$module_controller = "App\Http\Controllers\Admin\ChannelCategoryController@";
	Route::get('/channel-category', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/channel-category/load-data', [ 'as'=>'', 'uses'=>$module_controller.'loadData']);
	Route::post('/create-channel-category',['as'=>'','uses'=>$module_controller.'create_channel']);
	Route::post('/channel-category-details/',['as'=>'','uses'=>$module_controller.'get_record']);
	Route::post('/update-channel-category/',['as'=>'','uses'=>$module_controller.'update_record']);

});









Route::group(['prefix' =>'/','middleware' => ['Front','web']], function ()
{
	/******************************* HOME CONTROLLER  **************************************************/
	$module_controller = "App\Http\Controllers\Front\HomeController@";
	Route::get('/', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	/******************************* AUTH CONTROLLER  **************************************************/
	$module_controller = "App\Http\Controllers\Front\AuthController@";
	Route::get('/user', 			['as'=>'user','uses'=>$module_controller.'login']);
	Route::get('/login', 			['as'=>'login','uses'=>$module_controller.'login']);
	Route::get('/signup', 			['as'=>'signup','uses'=>$module_controller.'signup']);
	Route::any('/process_login', 		['as'=>'','uses'=>$module_controller.'process_login']);
	Route::any('/process_register', 		['as'=>'','uses'=>$module_controller.'register']);
	Route::get('/logout', 			[ 'as'=>'', 'uses'=>$module_controller.'logout']);
	Route::get('/user/profile', 		[ 'as'=>'', 'uses'=>$module_controller.'get_profile']);
	Route::post('/verify_contact', 		['as'=>'','uses'=>$module_controller.'verify_contact']);
	Route::post('/user/update_profile', 	[ 'as'=>'', 'uses'=>$module_controller.'update_profile']);
	/******************************* DASHBOARD CONTROLLER  **********************************************/
	$module_controller = "App\Http\Controllers\Front\DashboardController@";
	Route::get('/user/dashboard', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	/******************************* CAMPAIGN CONTROLLER *******************************************/
	$module_controller = "App\Http\Controllers\Front\CampaignController@";
	Route::get('/user/campaign', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/user/create-ads', [ 'as'=>'', 'uses'=>$module_controller.'load_channels']);
	Route::get('/user/transactions', [ 'as'=>'', 'uses'=>$module_controller.'load_transactions']);
	Route::get('/user/report', [ 'as'=>'', 'uses'=>$module_controller.'load_report']);
	Route::get('/user/snapchat', [ 'as'=>'', 'uses'=>$module_controller.'snap_create_first_step']);
	Route::get('/user/snapchat-create-ads', [ 'as'=>'', 'uses'=>$module_controller.'snap_create_second_step']);
	Route::post('/user/snapchat_store', [ 'uses'=>$module_controller.'store_campaign_data']);
	Route::get('/user/snapchat_create_campaign', [ 'as'=>'', 'uses'=>$module_controller.'snapchat_create_campaign']);
	Route::get('/user/snapchat-create-filter',[ 'as'=>'','uses'=>$module_controller.'snap_create_thired_step']);
    Route::get('/user/load-campaign', [ 'as'=>'', 'uses'=>$module_controller.'loadCampaignData']);
    Route::get('/user/campaign-details/{id}', [ 'as'=>'', 'uses'=>$module_controller.'loadCampaignDetails']);
	Route::post('/user/campaign_payment_status', [ 'as'=>'', 'uses'=>$module_controller.'campaign_payment_status']);
	Route::get('/user/snapchat-create-ads/{id}', [ 'as'=>'', 'uses'=>$module_controller.'load_campaign_data']);
	/******************************* PAGE CONTROLLER  ***************************************************/
	$module_controller = "App\Http\Controllers\Front\PageController@";
	Route::get('/user/contact', [ 'as'=>'', 'uses'=>$module_controller.'contact_load']);
	Route::get('/user/faq', [ 'as'=>'', 'uses'=>$module_controller.'faq_load']);
	/******************************* WALLET CONTROLLER  ************************************************/
	$module_controller = "App\Http\Controllers\Front\WalletController@";
	Route::get('/user/wallet', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/user/wallet-list', [ 'as'=>'', 'uses'=>$module_controller.'load_wallet_page']);
	Route::get('/user/payment', [ 'as'=>'', 'uses'=>$module_controller.'get_payment_methods']);
	Route::get('/user/payment-cards', [ 'as'=>'', 'uses'=>$module_controller.'get_cards']);
	Route::get('/user/load-wallet-data', [ 'as'=>'', 'uses'=>$module_controller.'loadWalletData']);
	Route::post('/user/payment_by_bank', [ 'as'=>'', 'uses'=>$module_controller.'payment_by_bank']);
	/******************************* BUSINESS CONTROLLER  ************************************************/
	$module_controller = "App\Http\Controllers\Front\BusinessController@";
	Route::get('/user/business', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/user/load-data', [ 'as'=>'', 'uses'=>$module_controller.'loadData']);
	Route::get('/user/business-user', [ 'as'=>'', 'uses'=>$module_controller.'business_users']);
	Route::get('/user/user-details', [ 'as'=>'', 'uses'=>$module_controller.'user_details']);
	Route::post('/user/create-business', [ 'as'=>'', 'uses'=>$module_controller.'create_business']);
	Route::post('/user/business-details/', [ 'as'=>'', 'uses'=>$module_controller.'get_record']);
	Route::post('/user/update-business/', [ 'as'=>'', 'uses'=>$module_controller.'update_record']);
	Route::post('/user/upgrade-account', [ 'as'=>'', 'uses'=>$module_controller.'upgrade_account']);
	Route::get('/user/load-userdata', [ 'as'=>'', 'uses'=>$module_controller.'loadUserData']);
	Route::post('/user/create-business-user', [ 'as'=>'', 'uses'=>$module_controller.'create_business_user']);
	Route::post('/user/user-details/', [ 'as'=>'', 'uses'=>$module_controller.'get_user']);
	Route::post('/user/update-user/', [ 'as'=>'', 'uses'=>$module_controller.'update_user']);

	/******************************* ROLE CONTROLLER  ************************************************/
	$module_controller = "App\Http\Controllers\Front\RoleController@";
	Route::get('/user/role', [ 'as'=>'', 'uses'=>$module_controller.'index']);
	Route::get('/user/assign-role', [ 'as'=>'', 'uses'=>$module_controller.'assign_role']);
	Route::get('/user/load-roles', [ 'as'=>'', 'uses'=>$module_controller.'loadRoleData']);

});
