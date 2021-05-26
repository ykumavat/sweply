<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignModel extends Model
{
   // use HasFactory;

    protected $table = 'campaign';

    protected $fillable = [
                            'campaign_name', 'channel_id','user_id','business_id', 'channel_category_id','campaign_target','original_image', 'post_image', 'screen_shot', 'brand_name', 'subject', 'upload_type', 'heading', 'call_to_action', 'start_date', 'end_date', 'target_audience', 'gender', 'age', 'note', 'website_url','android_url', 'ios_url', 'app_name', 'account_username', 'account_password', 'campaign_budget', 'status','service_amount','vat_amount', 'estimated_reach','sub_budget', 'total_budget','payment_status','campaign_budget_type','caption','app_icon','contact_number','text_msg','contact_method','campaign_target_area'
                        ];

                        
    // public function get_channel(){
    //     return $this->hasOne('App\Models\BrandModel', 'id', 'channel_id');
    // }  
    // public function get_category(){
    //     return $this->hasOne('App\Models\BrandModel', 'id', 'channel_category_id');
    // }  
    public function get_business(){
        return $this->hasOne('App\Models\Business', 'id', 'business_id');
    } 
    public function get_user(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }  
    public function get_channel(){
        return $this->hasOne('App\Models\Channel', 'id', 'channel_id');
    }  


    
}
