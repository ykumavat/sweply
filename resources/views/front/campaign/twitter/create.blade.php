<?php 
    $userData = [];
    $userData = getLoggedUserData(); 
    ?>
@extends('front.layout.dashboard-master')    
@section('main_content')

<style>
.hide{display:none!important;}
.current{display:block!important;}
.area-target-drop-main {position: relative}
.area-target-drop-main .form-control{line-height: 36px;}
.area-target-drop-section{height: auto;border: 1px solid #C1C1C1;border-radius: 3px;position: absolute;top: 62px;left: 0;width: 100%;background: #ffffff;z-index: 99;display: none}
.area-target-drop-section table{border: none;box-shadow: none;}
.area-target-drop-section table td {border: none;}
.map-close-btn{position: absolute; top: -35px;right: 0px;height: 30px;width: 30px;border-radius: 50%;border: none;background:transparent;color: #000000;font-size: 23px;line-height: 0;z-index: 9;}
.demo-wrap .container{max-width: 700px !important}
.upload-demo-wrap {width: 700px !important;height: 94vh !important}
.actions-close-modal {right: -24px !important;}
</style>
<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/croppie/croppie.css" />
<link rel="Stylesheet" type="text/css" href="{{url('/')}}/public/assets/croppie/prism.css" />
<link rel="Stylesheet" type="text/css" href="{{url('/')}}/public/assets/croppie/demo.css" />

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="preview-ad-section twitter-ad-main-section">
            <div class="breadcrem-section">
                <h2><i class="fa fa-twitter" title="Twitter"></i> Twitter Ad Preview</h2>
                <div class="brea-bx">
                    <ul>
                        <li><a href="{{url('/')}}/user/dashboard/">Home <i class="fal fa-angle-right"></i></a></li>
                        <li><a href="{{url('/')}}/user/create-ads">Create Ads <i class="fal fa-angle-right"></i></a></li>                        
                        <li><a href="#">Twitter </a></li>                       
                    </ul>
                </div>
                <div class="clearfix"></div>               
            </div>
            <div class="ad-prive-bx">
                <form action="{{url('/')}}/user/twitter_store" class="number-tab-steps wizard-circle" id="twitter_creat" name='twitter_creat' enctype="multipart/form-data">
                    <!-- Step 1 -->
                    <?php 
                    $channel_id = 0;
                    $channel_category_id = 0;
                    //$channel_id = Session::get('channel_id');
                    //$channel_category_id = Session::get('channel_category_id');
                    //if($channel_category_id==""){
                        $channel_category_id = 1;
                    //}
                    //if($channel_id==""){
                        $channel_id = 1;
                    //}

                ?>
                    <input type="hidden" id="campaign_id" name="campaign_id"  value=""/>    
                    <input type="hidden" id="channel_id" name="channel_id"  value="{{$channel_id}}"/>    
                    <input type="hidden" id="channel_category_id" name="channel_category_id"  value="{{$channel_category_id}}"/> 
                    <?php 
                        if(Session::has('BUSINESSID')){
                            $businessID = Session::get('BUSINESSID');
                        }else{
                            $businessID = $userData['business_id'];
                        }
                    ?>
                    <input type="hidden" id="business_id" name="business_id"  value="<?php echo $businessID;?>"/>    
                    <input type="hidden" id="user_id" name="user_id"  value="<?php echo $userData['id'];?>"/>   
                    <input type="hidden" id="stackfiles" />                   
                    <h6> </h6>
                    <?php
                    $walletBalance = 0;
                    if($businessID>0){
                        $walletArr = DB::table('wallet_master')->where('business_id',$businessID)->first();
                        if($walletArr){
                            $walletBalance = $walletArr->balance_amount;
                        }
                    }
                    ?>
                <!------------------------------- STEP 1-------------------------------------->
                    <input type="hidden" value="{{$walletBalance}}" name="wallet_amount" id="wallet_amount" />
                    <fieldset id="step-1">
                        <div class="twitter-step-section">
                            <div class="creadte-ad-frm">  
                                <div class="form-group">
                                    <label for="campaign_name">Campaign name <span style="color: red">*</span> </label>
                                    <input type="text"  placeholder="Enter Camping name" class="form-control" id="campaign_name" name="campaign_name">
                                </div> 
                                <div class="form-group">
                                    <label for="accountSelect">Campaign type</label>
                                    <select class="form-control" name="campaign_target" id="campaign_target">
                                        <option value="">Select Campaign type</option>
                                        <option value="Reach">Reach</option>
                                        <option value="Video Views">Video View</option>
                                        <option value="App install">App installs </option>
                                        <option value="Visit Website">Website traffic</option>
                                        <option value="Engagement">Engagement</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="radio-post-section">
                                        <div class="radio-btns">  
                                            <div class="radio-btn">
                                                <input type="radio" id="j-option" name="post_type" class="post_type" value="New">
                                                <label for="j-option">Create New</label>
                                                <div class="check"></div>
                                            </div>
                                            <div class="radio-btn">
                                                <input type="radio" id="l-option" name="post_type" class="post_type" value="Existing">
                                                <label for="l-option">Existing Post</label>
                                                <div class="check"></div>
                                            </div>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                </div>
                                

                                <div class="form-group promote-link" style="display:none;" >
                                    <label for="link">Link for the post you want to promote</label>
                                    <input type="text" name="twitter_promote_link" placeholder="Enter promote link" class="form-control" id="twitter_promote_link">
                                </div>

                                <div class="form-group">
                                    <label for="post_message">Whats Happening ?</label>
                                    <textarea class="form-control" id="post_message" name="post_message" rows="2" placeholder="Whats Happening ? " maxlength="280" /></textarea>
                                </div>
                                <div class="form-group heading-fld" style="display:none;">
                                    <label for="heading">Heading <span style="color:red">*</span> <span class="info-tool-tip"><i class="fas fa-info-circle"></i> <span class="tool-info">Heading should be maximum 34 characters </span></span> </label>
                                    <input type="text" placeholder="Enter Heading name" class="form-control" id="heading" name="heading" maxlength="34"  autocomplete="off" />
                                </div>  
                                <div class="form-group website_url" style="display:none;">
                                    <label for="website_url">Website Url </label>
                                    <input type="text" placeholder="http://www.unimarkme.com" class="form-control" id="website_url" name="website_url" onchange="checkWebsiteUrl();" onfocus="websiteFocus();">
                                </div> 



                                <!-- <input type="button" id="get_file" value="Grab file"> -->
                                <!-- <input type="file" id="my_file">
                                <div id="customfileupload">Select a file</div> -->


                                <div class="form-group">
                                    <label for="upload_type">Media Type</label>
                                    <select class="form-control" id="upload_type">
                                        <option value="">Select media Type</option>
                                        <option value='image'>Image</option>
                                        <option value='video'>Video</option>
                                    </select>
                                </div>

                                <div class="form-group image-media">
                                    <div class="radio-btns campaign-radio-section">
                                        <div class="radio-btn" id="browse-image">
                                            <input type="radio" class="media-options" id="k-option" name="media_type" value="SINGLE-IMAGE" >
                                            <label for="k-option">
                                                <div class="campaign-img">
                                                    <img src="{{url('/')}}/public/assets/images/logo/icon-img.png" alt="" />
                                                </div>
                                                 Photo
                                                <div class="radio-small-txt">1 Photo</div>
                                            </label>
                                        </div>
                                        <div class="radio-btn addMultiImages"  id="addMultiImages">
                                            <p class="image-dimesion" style="display:none;" rel-height="0" rel-width="0" prev-height="0" prev-width="0"></p>
                                            <input type="radio" class="media-options" id="e-option" name="media_type" value="IMAGE-CAROUSEL">
                                            <label for="e-option">
                                                <div class="campaign-img">
                                                    <img src="{{url('/')}}/public/assets/images/logo/icon-slider.png" alt="" />
                                                </div>
                                                Carousel
                                                <div class="radio-small-txt">2-6 Photos</div>
                                            </label>
                                            <!-- <div class="check"></div> -->
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <input id="multiImageInput" type="file" style="display:none" />
                                    <!-- <button id="" type="button" style="border-radius: 5px; background-color: #fff; color: green;">+ Add Files</button> -->
                                    <!-- <div class="multi-uploaded-img-section" id="previewImg">
                                    </div> -->
                                </div>  

                                <div class="form-group video-media" style="display:none;">
                                    <div class="radio-btns campaign-radio-section">
                                        <div class="radio-btn" id="browse-video">
                                            <input type="radio" class="media-options" id="j-option" name="media_type" value="SINGLE-VIDEO">
                                            <label for="j-option">
                                                <div class="campaign-img">
                                                    <img src="{{url('/')}}/public/assets/images/logo/icon-img.png" alt="" />
                                                </div>
                                                 Video
                                                <div class="radio-small-txt">1 Video</div>
                                            </label>
                                        </div>
                                        <div class="radio-btn videoAddBtn" id="videoAddBtn" >
                                            <input type="radio" class="media-options" id="r-option" name="media_type" value="VID-CAROUSEL">
                                            <label for="r-option">
                                                <div class="campaign-img">
                                                    <img src="{{url('/')}}/public/assets/images/logo/icon-slider.png" alt="" />
                                                </div>
                                                Carousel
                                                <div class="radio-small-txt">2-6 Videos</div>
                                            </label>
                                            <!-- <div class="check"></div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input id="multiVideoInput" type="file" style="display:none"  accept="video/mp4,video/mov" />
                                    <video id="ad_video_sample" style="display:none;"  muted >
                                        <source src="#" id="video_here_sample" type="video/mp4">
                                    </video>
                                    <div class="multi-uploaded-img-section" id="previewImg">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group image-input uploaded-img-section" style="display:none;">
                                    <label>Image</label>
                                    <div class="clearfix"></div>
                                    <div class="uploaded-img-main">
                                        <div class="uploaded-img">
                                            <img id='original_file_display' src="{{url('/')}}/public/assets/images/logo/mobile-priview-img.jpg" />
                                        </div>
                                        <span class="close-img">&times;</span>
                                    </div>
                                </div>
                                <div class="upload-flds" style="display:none;">
                                    
                                    <div class="form-group image-input">
                                        <label for="image">Upload image <span style="color: red">*</span> <span class="info-tool-tip"><i class="fas fa-info-circle"></i> <span class="tool-info">Size Required 1920 * 2340</span></span> </label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" accept="image/*" />
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>  
                                    <div class="form-group video-input" style="display:none;">
                                        <label for="image">Upload video <span class="info-tool-tip"><i class="fas fa-info-circle"></i> <span class="tool-info">Supported type - mp4</span></span> </label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input file_multi_video" id="videofile" accept="video/mp4,video/mov" />
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div> 
                                </div>
                                <div class="app-sec" style="display:none;">
                                    <div class="form-group">
                                        <label for="app_name">App Name </label>
                                        <input type="text" placeholder="Enter App Name" class="form-control" id="app_name" name="app_name" maxlength="20">
                                    </div> 
                                    
                                    <div class="form-group">
                                        <label for="android_url">Android Url</label>
                                        <input type="text" placeholder="Enter android app url" class="form-control" id="android_url" name="android_url">
                                    </div> 
                                    <div class="form-group">
                                        <label for="ios_url">Ios Url</label>
                                        <input type="text" placeholder="Enter ios app url" class="form-control" id="ios_url" name="ios_url">
                                    </div> 
                                </div>
                                <div class="form-group call_to_action" style="display:none;" >
                                    <label for="call_to_action">Choose call to action Tap</label>
                                    <select class="form-control" name="call_to_action" id="call_to_action">
                                        <option value="">Select Button</option>
                                        <option value="Install">Install</option>
                                        <option value="Open">Open</option>
                                        <option value="Shop">Shop</option>
                                        <option value="Play">Play</option>
                                        <option value="Book">Book</option>
                                        <option value="Connect">Connect</option>
                                        <option value="Order">Order</option>
                                    </select>
                                </div>
                                <div class="audience-gender-bx">
                                        <h3>Select Gender</h3>
                                        <div class="gender-chk-bx">
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" id="gender_m"  value="M">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                                <span class="">Male</span>
                                            </div>
                                        </div>
                                        <div class="gender-chk-bx">
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" id="gender_f" checked value="F">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                                <span class="">Female</span>
                                            </div>
                                        </div>
                                </div>       
                                <div class="audience-gender-bx Age-bx">
                                    <h3>Age</h3>                               
                                    <div class="range-t input-bx">
                                        <div id="slider-price-range" class="slider-rang"></div>
                                        <div class="amount-no" id="slider_price_range_txt"></div>
                                    </div>                              
                                </div>
                                <!-- <div class="form-group">
                                    <label for="link">Link for the post you want to promote</label>
                                    <input type="text" name="twitter_promote_link" placeholder="Enter promote link" class="form-control" id="twitter_promote_link">
                                </div> --> 
                        <!----------------- CROP HTML SECTION ----------------->
                                <div class="form-group">
                                    <div class="demo-wrap upload-demo hide">
                                        <div class="container">
                                            <div class="grid"> 
                                                <div class="actions-close-modal" onclick="jQuery('.upload-demo').addClass('hide');jQuery('.custom-file-label').html('Choose file');">
                                                    <a href="javascript:void(0);">&times;</a>
                                                </div>                                          
                                                <div class="actions">
                                                    <a href="javascript:void(0);"class="btn file-btn btn-primary upload1">
                                                        <span>Upload</span>
                                                        <input type="file" id="upload1" value="Choose a file" accept="image/*" />
                                                    </a>

                                                    <a href="javascript:void(0);"class="btn file-btn btn-primary upload2" style="display:none;">
                                                        <span>Upload </span>
                                                        <input type="file" id="upload2" value="Choose a file" accept="image/*" />
                                                    </a>


                                                    <a href="javascript:void(0);"class="btn file-btn btn-primary crop-btn size-1200" onclick="changeCropSize(600,600);"><span>1200 x 1200</span></a>
                                                    <a href="javascript:void(0);"class="btn file-btn btn-primary crop-btn size-800" onclick="changeCropSize(400,600);"><span>1200 x 800</span></a>
                                                    <a href="javascript:void(0);"class="btn file-btn btn-primary crop-btn size-600" onclick="changeCropSize(300,600);"><span>1200 x 600</span></a>
                                                </div>
                                                <div class="row">
                                                    <div class="upload-msg">
                                                        Upload a file to start cropping
                                                    </div>
                                                    <div class="upload-demo-wrap">
                                                        <div id="upload-demo"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div id="preview-crop-image" style="background:#9d9d9d;width:430px;padding:50px 50px;height:775px;" class="hide"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>                   
                        </div>
                    </fieldset>
                <!-------------------------------- STEP 2-------------------------------------->
                    <h6></h6>
                    <fieldset id="step-2" style="display:none;">
                        <div class="twitter-step-section"> 
                            <div class="creadte-ad-frm">
                                <div class="form-group">
                                    <label for="account_access">Provide Account Access</label>
                                    <select class="form-control" name="account_access" id="account_access">
                                        <option>Account Access</option>
                                        <option value="YES">YES</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                <div class="account-section"  style="display:none;">
                                    <div class="form-group">
                                        <label for="username">Twitter Username</label>
                                        <input type="text" placeholder="@username or email" class="form-control" name="account_username" id="account_username" />
                                    </div>                    
                                    <div class="form-group" >
                                        <label for="password">Twitter  password</label>
                                        <input type="password" name="account_password" placeholder="Enter password" class="form-control" id="account_password" />
                                    </div>
                                </div>
                                <div class="link-section"  style="display:none;">
                                    <div class="form-group">
                                        <label for="password">Link for guidance - How to provide account access to sweply</label>
                                    </div>
                                </div>
                                <div class="audience-gender-bx">
                                    <h3>Device</h3>
                                    <div class="gender-chk-bx">
                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                            <input type="checkbox" id="device_m"  value="mobile">
                                            <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                    <i class="vs-icon feather icon-check"></i>
                                                </span>
                                            </span>
                                            <span class="">Mobile</span>
                                        </div>
                                    </div>
                                    <div class="gender-chk-bx">
                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                            <input type="checkbox" id="device_d" checked value="desktop">
                                            <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                    <i class="vs-icon feather icon-check"></i>
                                                </span>
                                            </span>
                                            <span class="">Desktop</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress1">Area of target audience </label>
                                    <?php
                                        $cityArr = DB::table('city')->where('country_id','1')->get();
                                        $optionStr = "";
                                        if($cityArr){
                                            foreach($cityArr as $city){
                                                $optionStr .= '<option value="'.$city->city_name.'">'.$city->city_name.'</option>';
                                            }
                                        }
                                    ?>
                                    <div class="form-group">
                                        <input type="hidden" id="campaign_target_area_edit" />
                                        <select class="select2 form-control campaign_target_area" multiple="multiple"  autocomplete="off">
                                            <?php echo $optionStr; ?>
                                        </select>
                                    </div>
                                    <script type="text/javascript">
                                        setTimeout(function(){  $('.select2').select2();  }, 4000);
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label for="note">Add Note</label>
                                    <textarea class="form-control" id="note" name="note" rows="2" placeholder="Enter Note" maxlength="100" /></textarea>
                                </div> 
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="start_date">Start Date <span style="color: red">*</span></label>
                                            <input id="start_date" name="start_date" placeholder="Select Pickup Date" type='text' class="form-control datepicker" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="end_date">End Date <span style="color: red">*</span></label>
                                            <input id="end_date" name="end_date" placeholder="Select End Date " type='text' class="form-control datepicker" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="budget_duartion">Budget - Daily / Lifetime</label>
                                            <select class="form-control" id="budget_duartion">
                                                <option value="Daily">Daily</option>
                                                <option value="Lifetime">Lifetime</option>
                                            </select>
                                        </div>  
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group bud-sar-padding">
                                            <label for="campaign_budget">Budget <span style="color: red">*</span></label>
                                            <input type="text" placeholder="Enter Budget" class="form-control" id="campaign_budget" name="campaign_budget" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                                            <span class="budget-sar">SAR</span>
                                        </div> 
                                        <p class="err-msg" id="wallet_msg"></p>     
                                    </div>
                                </div>                            
                            </div>   
                        </div>
                        <div class="estamations-from-bx">
                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">Estamated Reach</div>
                                <div class="reach-click"><i class="feather icon-users"></i> <span class="estimated_reach">40000 - 50000 </span></div>
                                <input type="hidden" name="estimated_reach" value="40000 - 50000" />
                                <div class="clearfix"></div>
                            </div>
                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">Sub Budget </div>
                                <div class="reach-click subtotal"> SAR 0.00</div>
                                <input type="hidden" name="sub_budget" value="0" />
                                <div class="clearfix"></div>
                            </div>
                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">Service fees </div>
                                <div class="reach-click service_amount"> SAR 0.00</div>
                                <input type="hidden" name="service_amount" value="0" />
                                <div class="clearfix"></div>
                            </div>
                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">VAT 15%</div>
                                <div class="reach-click vat_15"> SAR 0.00</div>
                                <input type="hidden" name="vat_amount" value="0" />
                                <div class="clearfix"></div>
                            </div>
                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">Total Budget</div>
                                <div class="reach-click total_amount"> SAR 0.00</div>
                                <input type="hidden" name="total_budget" value="0" />
                                <div class="clearfix"></div>
                                <input type="hidden" class="payment-method" name="payment_method" value="BANKTRANSFER" />
                            </div>
                        </div>
                    </fieldset>             
                </form>
            </div>

            <!------------------------------- PREVIEW BOX -------------------------------------->
            <div class="ad-prive-bx preview-ads-mobile twitter-preview-main" id="preview-section-bx">  
                <div class="mobile-black-bg"></div>
                <!-- <div class="mobile-top-time-icons-strip">
                    <div class="mobile-top-time">
                       17:24 
                    </div>
                    <div class="mobile-top-icons">
                        <span><i class="fas fa-wifi"></i></span>                        
                        <span><i class="fas fa-signal-alt"></i></span>
                        <span><i class="fal fa-battery-three-quarters"></i></span>
                    </div>
                    <div class="clearfix"></div>
                </div> -->
                <!-- <img src="{{url('/')}}/public/assets/images/logo/mobile.png" alt="" class="mobile-bg-img"/> -->
                <div class="company-user-details">
                    <div class="company-user-details-icon">
                        <i class="fa fa-twitter" title="Twitter"></i>
                    </div>
                    <div class="company-user-details-info">
                        <div class="company-user-details-head">
                            Business Name <span><i class="fas fa-badge-check"></i> @businessname</span>
                        </div>
                        <div class="company-user-details-content">
                            What's Happening ?
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>


                <!----------------------------------->
                <div class="slider-img-video-section" style="display:none;">
                    <div class="swiper-container images-slider-twitter">
                        <div class="swiper-wrapper">
                            <!-- <div class="swiper-slide" rel="'+uniqid+'"><img src="'+resp+'" alt="" /></div> -->
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!----------------------------------->


                <div class="images-video-section-main">                    
                    <div class="add-img-video-section"> 
                        <img src="{{url('/')}}/public/assets/images/logo/twetter-default-img.jpg" alt="" id="ad_image"/>
                        <video id="ad_video" style="background-color:black; display:none;object-fit: cover;" loop playsinline muted autoplay>
                            <source src="#" id="video_here" type="video/mp4">
                            <source src="#" type="video/ogg">
                        </video>                
                    </div> 
                    <div class="preview-bottom-heading-section" style="display:none;">
                        <div class="preview-bottom-heading">
                            Preview heading
                        </div>
                        <div class="preview-bottom-heading-website">
                            <i class="fas fa-link"></i> <span id="weburl">website.com</span>
                        </div>                
                    </div>               
                    <div class="app-add-prive-main app-sec-preview">                                        
                        <div class="app-add-prive">
                            <div class="app-add-icon-txt"> 
                                <div class="app-add-icon">
                                    <img src="{{url('/')}}/public/assets/images/logo/app-icon.png" id="app-ico">
                                </div>                           
                                <div class="app-add-icon-txt-section">
                                    <div class="app-add-icon-txt-head">
                                        App Visit Name
                                    </div>
                                    <div class="app-add-icon-txt-headline">
                                    <i class="fas fa-star active-star"></i>
                                    <i class="fas fa-star active-star"></i>
                                    <i class="fas fa-star active-star"></i>
                                    <i class="fas fa-star active-star"></i>
                                    <i class="fas fa-star"></i> 75.8K reviews
                                    </div>
                                    <div class="app-add-icon-txt-headline">
                                        Free . Finance
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="app-add-install-btn">
                                Install
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="icon-section-block-messages">
                    <div class="icon-section-chat-block">
                        <i class="fal fa-comment"></i> 216
                    </div>
                    <div class="icon-section-chat-block">
                        <i class="fal fa-retweet"></i> 347
                    </div>
                    <div class="icon-section-chat-block">
                        <i class="fal fa-heart"></i> 3989
                    </div>
                    <div class="icon-section-chat-block">
                        <i class="fal fa-sign-out"></i> 420
                    </div>
                </div>
                <div class="promoted-section-ad">
                    <i class="fas fa-external-link-square"></i> Promoted
                </div>
            </div>
            <!----------------------------- END PREVIEW BOX -------------------------------------->

        </div>
        <input type='button' id='but_screenshot' value='Take screenshot' onclick='screenshot();'  style="display:none;"><br/>
        <img id="sample-image" />

    </div>
</div>

<!------------------------- STEPS  ------------------------------>
<div class="steps-sticky-section">
    <div class="step-privious-btn">
        <a href="javascript:void(0);" class="prev-btn">Previous</a>
    </div>
    <div class="steps-counter-section" >
        <ul class="steps-li" current-tab="step-1">
            <li class="step-1 active current-tab" tab="step-1">
                <a href="javascript:void(0);" ><span><i class="fal fa-check"></i></span> 1. Step  </a>
            </li>
            <li  class="step-2" tab="step-2">
                <a href="javascript:void(0);" ><span><i class="fal fa-check"></i></span> 2. Step  </a>
            </li>
        </ul>
    </div>
    <div class="step-privious-btn step-next-btn">
        <a href="javascript:void(0);" class="next_and_final" >Next</a>
        <a href="javascript:void(0);" class="submitfrm" onclick="submitFrm();" style="display:none;">Finish</a>
    </div>
</div>
<!------------------------- END STEPS  ------------------------->



<!------------------------------- Campaign Script Start ------------------------->

    <script>
        function changeCropSize(height,width){
            $(".cr-viewport").css({ "width": width, "height": height });
        }
        $( document ).ready(function() {
            $('#post_message').keyup(function(){
                $('.company-user-details-content').text($(this).val());
                if($(this).val()==""){
                    $('.company-user-details-content').hide();
                }else{
                    $('.company-user-details-content').show();
                    $('.company-user-details-content').html($('.company-user-details-content').html().replace(/(@\S+)/, '<span style="color: blue">$1</span>'));
                    $('.company-user-details-content').html($('.company-user-details-content').html().replace(/(#\S+)/, '<span style="color: blue">$1</span>'));
                }
            });
            $('#account_access').change(function(){
                var selOption = $(this).val();
                if(selOption!=""){
                    if(selOption=="YES"){
                        $('.account-section').show();
                    }else{
                        $('.account-section').hide();
                        $('.link-section').show();
                    }
                }else{
                    $('.account-section').hide();
                    $('.link-section').hide();
                }
            });

            $('#card_type').change(function(){
                var card_type = $(this).val();
                console.log('card==>'+card_type);
                if(card_type!="" || card_type!="No Card"){
                    $('.heading-fld').show();
                    if(card_type=="Visit Website"){
                        $('.website_url').show();
                    }else{
                        $('.website_url').hide();
                    }
                }else{
                    $('.heading-fld').hide();
                }
            });
            $('#android_url,#ios_url,#twitter_promote_link').focus(function(){
                if(!$(this).val() || $(this).val()==""){
                    $(this).val('https://');
                }
            });
            $('#android_url,#ios_url,#twitter_promote_link').change(function(){
               if(isUrlValid($(this).val())==false){
                    $(this).parent().append('<label class="err-msg">* Invalid URL format, e.g. https://example.com</label>');
                }else{
                    $(this).parent().find('.err-msg').remove();
                }
            });
            var width = $(".mobile-bg-img").width();
            var height = $(".mobile-bg-img").height();
                $("#ad_video").height(230);
            $("#ad_video").width('100%');
            $('#upload_type').change(function(e){
                $('#upload_type').parent().find('.err-msg').remove();

                var mediaType = $(this).val();
                e.preventDefault();
                $('.image-media').hide();
                $('.video-media').hide();
                if(mediaType=="video"){
                    //document.getElementById('videofile').click();
                    $('.video-media').show();
                    $('#ad_image').hide();
                    $('#ad_video').show();
                    $('.video-input').show();
                    $('.image-input').hide();
                }else{
                    //document.getElementById('inputGroupFile01').click();
                    $('.image-media').show();
                    $('#ad_image').show();
                    $('#ad_video').hide();
                    $('.video-input').hide();
                    $('.image-input').show();
                }
                $('.uploaded-img-section').hide();

            });
            $('#contact-method').change(function(){
                var contactMethod = $(this).val();
                $('.text_msg').hide();
                if(contactMethod=="text-option"){
                    $('.btn-add-prive').text('Text Now');
                    $('.text_msg').show();
                }else if(contactMethod=="call-option"){
                    $('.btn-add-prive').text('Call Now');
                }
            });
            if($('#caption').val()){
                $('.caption-txt-section-block').show();
                $('.caption-txt-section-block').text($(this).val());
            }
            $('#caption').on("keyup change blur",function(){
            if($(this).val()){
                $('.caption-txt-section-block').show();
                $('.caption-txt-section-block').text($(this).val());
            }else{
                $('.caption-txt-section-block').hide();
            }
            });
        });
        $(document).on("change", ".file_multi_video", function(evt) {
            var fileSize = $(this)[0].files[0].size;
            if(fileSize<1073741824){
                var $source = $('#video_here');
                $source[0].src = URL.createObjectURL(this.files[0]);

                var video = document.createElement('video');
                video.preload = 'metadata';
                video.onloadedmetadata = function(){
                    window.URL.revokeObjectURL(video.src);
                    if(parseFloat(video.duration)<=180){
                        $source.parent()[0].load();
                        $(this).next('.err-msg').remove();
                        var filename_video =  this.files[0].name;
                        jQuery("label[for='inputGroupFile01']").text(filename_video);
                    }else{
                        $('.file_multi_video').parent().append('<label class="err-msg">Video duration should be less than 180 seconds </label>');
                    }
                }
                video.src = URL.createObjectURL(this.files[0]);
            }else{
                $('.file_multi_video').parent().append('<label class="err-msg">file size should be less than 1 GB</label>');
            }
        });


        $('#campaign_name').keyup(function(){
            $('#campaign_name').next('.err-msg').remove();
        });
        $('#campaign_target').change(function(){
            $('#campaign_target').next('.err-msg').remove();
        });
        function validateStep1(){
            var err = 0;
            $('.err-msg').remove();
            console.log($('#campaign_name').val());
            if($('#campaign_name').val()==""){
                $('#campaign_name').parent().append('<label class="err-msg">Please enter campaign name </label>');
                err = 1;
            }
            if($('#campaign_target').val()==""){
                $('#campaign_target').parent().append('<label class="err-msg">Please select campaign target. </label>');
                err = 1;
            }
            if($('#upload_type').val()==""){
                $('#upload_type').parent().append('<label class="err-msg">Please select upload type. </label>');
                err = 1;
            }
            <?php if(!isset($data)){ /*?>
                    if($('#upload_type').val()=="image"){
                        if($('#inputGroupFile01').val()==""){
                            $('.image-media').append('<label class="err-msg">Please select image. </label>');
                            err = 1;
                        }
                    }
                    if($('#upload_type').val()=="video"){
                        if($('#videofile').val()==""){
                            $('.video-media').append('<label class="err-msg">Please select video. </label>');
                            err = 1;
                        }
                    }
            <?php */ }  ?>
            return err;
        }
        function validateStep2(){
            var err = 0;
            $('.err-msg').remove();
            if($('#campaign_budget').val()==""){
                $('#campaign_budget').parent().append('<label class="err-msg">Please enter budget </label>');
                err = 1;
            }
            if($('#start_date').val()==""){
                $('#start_date').parent().append('<label class="err-msg">Please select start date </label>');
                err = 1;
            }
            if($('#end_date').val()==""){
                $('#end_date').parent().append('<label class="err-msg">Please select end date </label>');
                err = 1;
            }

            return err;
        }
    </script>

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/plugins/tour/tour.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/fontawesome-v5.7.2-pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="{{url('/')}}/public/assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/jquery-ui.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/jquery.ui.touch-punch.min.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/forms/number-input.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="{{url('/')}}/public/assets/croppie/croppie.js" defer></script>
	<script type="text/javascript" src="{{url('/')}}/public/assets/croppie/demo.js"></script>
    <script type="text/javascript" src="{{url('/')}}/public/assets/js/htmltocanvas.js"></script>

    <script>
        function calculateSummary(){
            var start = $('#start_date').val();
            var end = $('#end_date').val();
            start = start.split("/");
            end = end.split("/");
            var startDay = new Date(start[2]+'-'+start[1]+'-'+(start[0]-1));
            var endDay = new Date(end[2]+'-'+end[1]+'-'+end[0]);
            var diff = new Date(endDay - startDay);
            var days = diff/1000/60/60/24;
            days = days.toFixed();
            console.log('Days '+days)     
            var budget = $('#campaign_budget').val();
            var budget_duartion = $('#budget_duartion').val();
            if(budget_duartion == 'Daily'){
                budget = budget * days;
            }


            //3.75 SAR == 1 Dollar
            /************ ESTIATED REACH ***********/
            var budgetInDollar =  budget/parseFloat(3.75);
            var estimated_reach = 0;
            var campaignType = $('#campaign_target').val();
            if(campaignType=="Reach"){
            	estimated_reach = budgetInDollar/0.00257;
            }else if(campaignType=="Video Views"){
				estimated_reach = budgetInDollar/0.01;
            }else if(campaignType=="App install"){
				estimated_reach = budgetInDollar/0.07;
            }else if(campaignType=="Visit Website"){
				estimated_reach = budgetInDollar/0.11;
            }else if(campaignType=="Engagement"){
				estimated_reach = budgetInDollar/0.04;
            }

            var firstRange = 0;
            var secondRange = 0;

            var firstRange = estimated_reach/500;
            firstRange = firstRange.toFixed();
            secondRange = parseInt(firstRange)+parseInt(1);

            firstRange = firstRange*500;
            secondRange = secondRange*500;
            console.log(firstRange+'===='+secondRange);

            $('.estimated_reach').text(firstRange+' - '+secondRange);
            $('input[name="estimated_reach"]').val(firstRange+' - '+secondRange);
            /************ END ESTIATED REACH ***********/


            var vat_amount = parseFloat(budget) * 0.15; 
            var total = parseFloat(budget) + parseFloat(vat_amount);
            var service_charges = 10;
            var service_charges = (budget*service_charges)/100;
            var total = parseFloat(total) + parseFloat(service_charges);

            vat_amount = vat_amount.toFixed(2);
            service_charges = service_charges.toFixed(2);
            total = total.toFixed(2);
            // budget = budget.toFixed(2);

            console.log(vat_amount+' -- '+total+'---'+service_charges);
             $('.service_amount').text("SAR "+service_charges);
             $('.vat_15').html("SAR "+vat_amount);
             $('.total_amount').html("SAR "+total);
             $('.subtotal').html("SAR "+budget);
            $('input[name="service_amount"]').val(service_charges);
            $('input[name="sub_budget"]').val(budget);
            $('input[name="vat_amount"]').val(vat_amount);
            $('input[name="total_budget"]').val(total);
            $('.campaign-budget').text(total);
            $('.campaign-total-budget').text(total);
            var walletAmount  = parseFloat($('#wallet_amount').val());
            var paymentAmount = total;
            if(walletAmount > 0 ){
                paymentAmount = paymentAmount-walletAmount;
            }
            $('.payment-amount').text(paymentAmount);
            $('.wallet-amount').text(paymentAmount);
        }
    $(document).ready(function(){        
        <?php 
            if(isset($data)){
                 foreach($data as $key =>$value){

                    if($key != 'get_user' && $key != 'get_business' && $key != 'app_icon'){ ?>
                        console.log('<?php print_r($key); ?>'+'======>'+'<?php print_r($value); ?>');
                         $("#<?php echo $key; ?>").val('<?php print_r($value); ?>');
                         $('#heading').trigger('change');
                         $('#brand_name').trigger('change');
                         $('#caption').trigger('change');

                         calculateSummary();
                        <?php 
                         if($key == 'post_image'){ ?>
                            $('#ad_image').attr('src','<?php print_r($value); ?>');
                            $('#video_here').attr('src','<?php print_r($value); ?>');
                            var video = document.getElementById('ad_video');
                            var source = document.getElementById('video_here');
                            source.setAttribute('src', '<?php print_r($value); ?>');
                            video.load();
                            video.play();
                            jQuery(".custom-file-label").text($('#ad_image').attr('src').split('/').pop());
                        <?php }  
                        if($key == 'id'){ ?>
                            $('#campaign_id').val('<?php print_r($value); ?>');
                        <?php }
                        
                        if($key == 'start_date'){ ?>
                            $('#start_date').val('<?php print_r($value); ?>');
                        <?php }  
                        if($key == 'end_date'){ ?>
                            $('#end_date').val('<?php print_r($value); ?>');
                            $('#end_date').trigger('change');
                            $('#campaign_budget').trigger('change');
                        <?php } 
                        if($key == 'campaign_target_area'){  ?>
                            $('#campaign_target_area_edit').val('<?php print_r($value); ?>');
                            var locations = $('#campaign_target_area_edit').val().split(",");
                            $(".campaign_target_area").select2({
                                multiple: true,
                            });
                            $('.campaign_target_area').val(locations).trigger('change');
                        <?php  } ?>

                        <?php if($key == 'upload_type'){ 
                                if($value == 'video'){ ?>
                                    $('#ad_image').hide();
                                    $('#ad_video').show();
                                <?php }else{ ?>
                                    $('#ad_image').show();
                                    $('#ad_video').hide();
                                <?php } ?>
                                $('#upload_type').val('<?php print_r($value); ?>').trigger('change');

                        <?php }  ?>

                        <?php if($key == 'call_to_action'){ ?>
                                var optVal = '<?php print_r($value); ?>';
                                setTimeout(function(){ 
                                    $('#call_to_action').val(optVal).trigger('change');
                                }, 6000);
                        <?php } ?>
                        <?php if($key == 'campaign_target'){ 
                                  if($value == 'App install' || $value == 'App visit' ){ ?>
                                    var tempVal = '<?php print_r($value); ?>';
                                    setTimeout(function(){ 
                                        $('#campaign_target').val(tempVal).trigger('change');

                                     }, 8000);
                            <?php }else{ ?>
                                    var tempVal = '<?php print_r($value); ?>';
                                    setTimeout(function(){ 
                                        $('#campaign_target').val(tempVal).trigger('change');
                                    }, 8000);
                           <?php }
                        }  ?>

               <?php } ?>
               <?php if($key == 'app_icon'){ ?>
                            var appIcon = '<?php print_r($value); ?>';
                            console.log(appIcon);
                            setTimeout(function(){ 
                                $('#app-ico').attr('src',appIcon);
                            }, 9000);
                <?php } ?>
               <?php
           } 

            if($media){
                foreach($media as $d){
                    //dd($d['media_type']);
                    if($d['media_type']=="video"){ ?>
                        var uploadFileUrl = '<?php echo url("/"); ?>/uploads/campaign_image/<?php print_r($d['original_media_src']); ?>';
                        $('.images-video-section-main').hide();
                        $('.slider-img-video-section').show();
                        var Burl = '<?php echo url("/"); ?>';
                        var uniqid = Date.now();
                        $('.add-preview-btn').remove();
                        var videoSrc = '<div class="uploaded-img-main"><div class="uploaded-img"><video style="object-fit: cover;width: 100% !important;height: 100% !important;"><source src="'+uploadFileUrl+'" type="video/mp4"></video></div><span class="close-img"  onclick="removeImage('+uniqid+')"  rec-id="<?php print_r($d['id']); ?>"  file="'+uploadFileUrl+'"  rel="'+uniqid+'" >??</span></div>';

                        var videoAddBtn = '<div class="uploaded-img-main add-preview-btn videoAddBtn " onclick="addMultiVideo()"><div class="uploaded-img"><img src="'+Burl+'/public/assets/images/logo/plus-img.jpg" alt=""></div></div>';
                        $('#previewImg').append(videoSrc+''+videoAddBtn);

                        var videoSliderSrc = '<div class="swiper-slide" rel="'+uniqid+'"><video style="background-color:black;object-fit: cover;width: 100% !important;height:216px !important" loop playsinline muted autoplay><source src="'+uploadFileUrl+'" type="video/mp4"><source src="'+uploadFileUrl+'" type="video/ogg"></video></div>';
                        $('.swiper-wrapper').append(videoSliderSrc);

                    <?php }else if($d['media_type']=="image"){ ?>
                        var uploadFileUrl = '<?php echo url("/"); ?>/uploads/campaign_image/<?php print_r($d['original_media_src']); ?>';
                        $('.images-video-section-main').hide();
                        $('.slider-img-video-section').show();
                        var uniqid = Date.now();
                        var Burl = '<?php echo url("/"); ?>';
                        $('.add-preview-btn').remove();
                        var imageAddBtn = '<div class="uploaded-img-main add-preview-btn addMultiImages " onclick="addMoreImage();"><div class="uploaded-img"><img src="'+Burl+'/public/assets/images/logo/plus-img.jpg" alt=""></div></div>';
                        var imageSrc = '<div class="uploaded-img-main"><div class="uploaded-img"><img src="'+uploadFileUrl+'" alt="" /></div><span class="close-img"  onclick="removeImage('+uniqid+')"  rel="'+uniqid+'" >??</span></div>';
                        $('#previewImg').append(imageSrc+' '+imageAddBtn);
                        var imageSliderSrc = '<div class="swiper-slide" rel="'+uniqid+'"><img src="'+uploadFileUrl+'" alt="" /></div>';
                        $('.swiper-wrapper').append(imageSliderSrc);

                        console.log("-----------"+imageSliderSrc);

                   <?php  }
                }
            }
           ?> 

<?php }  ?> 
         $('#end_date,#start_date').change(function(){
                var start = $('#start_date').val();
                var end = $('#end_date').val();
                start = start.split("/");
                end = end.split("/");

                var startDay = new Date(start[2]+'-'+start[1]+'-'+(start[0]-1));
                var endDay = new Date(end[2]+'-'+end[1]+'-'+end[0]);
                var diff = new Date(endDay - startDay);
                console.log(diff);
                var days = diff/1000/60/60/24;
                days = days.toFixed();

                $('#end_date').parents().find('.err-msg').remove();
                $('.date-err-msg').remove();
                if(days>0 && Math.sign(days)===1){
                    $('#end_date').parents().find('.err-msg').remove();
                }else{
                    console.log(Math.sign(days)+"- inn erroro ");
                    if($('#end_date').val()){
                        $('#end_date').parent().append('<label style="bottom: -40px;color:red;" class="date-err-msg" >End date should be greater than start date </label>');
                    }
                }
                console.log(days);
           });
       $('#campaign_target').change(function(){
            var campaignType = $(this).val();            
            $('.app-sec').hide();
            $('.app-sec-preview').hide();
            $('.awareness-sec').hide();
            $('.callntext-sec').hide();
            $('.video-view-sec').hide();
            $('.website_url').hide();
            $('.call_to_action').show();
            //$('#upload_type').val('image').trigger('change');
            $('.uploaded-img-section').hide();
            $('#upload_type').removeAttr('disabled');
            $('.call_to_action').hide();
            $('.heading-fld').hide();
            $('.preview-bottom-heading-section').hide();

            if(campaignType == 'App install'){
                $('.app-sec').show();
                $('.app-sec-preview').show();
                $('.app-add-install-btn').text('Install');
                $('.call_to_action').show();
            }else if(campaignType == 'Reach'){
                //showWebsite();
            }else if(campaignType == 'Engagement'){
                //$('.call_to_action').show();
            }else if(campaignType == 'Visit Website'){
                $('.heading-fld').show();
                $('.website_url').show();
                $('.preview-bottom-heading-section').show();
                $('.preview-bottom-heading-website').show();
                $('.app-sec').hide();
            }else if(campaignType == 'Video Views'){
                $('#upload_type').val('video').trigger('change');
                $('#upload_type').attr('disabled','disabled');
                $('.video-view-sec').show();
            }
       });
       $('#videofile').change(function(){
            $('#videofile').parents().find('.err-msg').remove();
            $('.video-media').find('.err-msg').remove();
       });
       $('#inputGroupFile01').change(function(){
            $('#inputGroupFile01').parents().find('.err-msg').remove();
            $('.image-media').find('.err-msg').remove();
       });

       $('#start_date').change(function(){
            $('#start_date').parents().find('.err-msg').remove();
       });
        $('.steps-li li').click(function(){
            if(validateStep1()==1){
                return false;
            }else{
                var currStep = $(this).attr('tab');
                $('.steps-li').attr('current-tab',currStep);
                $('fieldset').hide();
                $('#'+currStep).show();
                $(this).addClass('active');
                $('.steps-li li').removeClass('current-tab');
                $(this).addClass('current-tab');
                currStep = currStep.split("-")[1];
                var length = $('.steps-li li').length;
                if(currStep==length){
                    $('.next_and_final').hide();
                    $('.submitfrm').show();
                }else{
                    $('.next_and_final').show();
                    $('.submitfrm').hide();
                }
                scrollToTop();
            }
        });
        $('.next_and_final').click(function(){
            if(validateStep1()==1){
                return false;
            }else{
                var crrTab = $('.steps-li').attr('current-tab');
                crrTab = crrTab.split("-")[1];
                crrTab = parseInt(crrTab)+parseInt(1);
                var length = $('.steps-li li').length;
                $('li.step-'+crrTab).trigger('click');
                if(crrTab==length){
                    $('.next_and_final').hide();
                    $('.submitfrm').show();
                }else{
                    $('.next_and_final').show();
                    $('.submitfrm').hide();
                }
                $('.steps-li').attr('current-tab','step-'+crrTab);
            }
            scrollToTop();
        });
        $('.prev-btn').click(function(){
            var crrTab = $('.steps-li').attr('current-tab');
            var crrTab = crrTab.split("-")[1];
            crrTab = parseInt(crrTab)-parseInt(1);
            if(crrTab>0){
                $('li.step-'+crrTab).trigger('click');
                $('.steps-li').attr('current-tab','step-'+crrTab);
                $('.next_and_final').show();
                $('.submitfrm').hide();
            }
        });
    });

    $(function() {
        $('#target_audience').on("click",function(){
            initialize();
        });

        $('#brand_name').on("keyup change blur",function(){
             $('.heading-section').html('<span>'+this.value+'</span>');
        });
        $('#call_to_action').on("keyup change blur",function(){
            if(this.value!=""){
                 $('.website-sec-preview').show();
                 $('.btn-add-prive').html(this.value);
                 $('.app-add-prive-btn').html(this.value);
                 $('.app-add-install-btn').text(this.value);
             }
        });
        $('#heading').on("keyup change blur",function(){
        });
        $('#app_name').on("keyup change blur",function(){
           $('.app-add-icon-txt-head').html(this.value);
        });
	    $('.datepicker').on("change",function(){ 
            $('#campaign_budget').trigger('change');
        }); 
        $('#budget_duartion').on("change",function(){ 
            $('#campaign_budget').trigger('change');
        });   
        $('#campaign_budget').on("keyup change blur",function(){
            calculateSummary();
        });

	    var $uploadCrop;
		$uploadCrop = $('#upload-demo').croppie({
			viewport: {
				width: 600,
				height: 600,
				type: 'Square'
			},
			enableExif: true
		});
		$('#inputGroupFile01').on('change', function () { 
             var fileSize = $(this)[0].files[0].size;
            if(fileSize<5242880){
                var u = URL.createObjectURL(this.files[0]);
                var img = new Image;
                var input = this;
                img.onload = function() {
                    $('#inputGroupFile01').attr('rel-height',img.height);
                    $('#inputGroupFile01').attr('rel-width',img.width);
                };
                img.src = u;
                $('.images-video-section-main').show();
                $('.slider-img-video-section').hide();
                setTimeout(function(){ 
                    var height = $('#inputGroupFile01').attr('rel-height');
                    var width  = $('#inputGroupFile01').attr('rel-width');     
                    console.log(height+"---"+width);
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            if(parseInt(height)==1200 && parseInt(width)==1200){
                                $("#ad_image").attr("src",e.target.result);
                                $("#original_file_display").attr("src",e.target.result);  
                                $('.uploaded-img-section').show();                            
                            }else if(parseInt(height)==600 && parseInt(width)==1200){
                                $("#ad_image").attr("src",e.target.result);
                                $("#original_file_display").attr("src",e.target.result);  
                                $('.uploaded-img-section').show();
                            }else if(parseInt(height)==800 && parseInt(width)==1200){
                                $("#ad_image").attr("src",e.target.result);
                                $("#original_file_display").attr("src",e.target.result);  
                                $('.uploaded-img-section').show();
                            }else if(parseInt(height)>1200 || parseInt(width)>1200){
                                $('.upload-demo').removeClass('hide');
                                $('.upload-demo').addClass('ready');
                                $uploadCrop.croppie('bind', {
                                    url: e.target.result
                                }).then(function(){
                                    jQuery("#original_file_display").attr("src",e.target.result);
                                });
                                $('.upload-demo').addClass('ready');
                                $('.upload1').show();
                                $('.upload2').hide();
                            }else{
                                $('.image-media').append('<label class="err-msg">Minimum image size should be : "1200 x 600px" Or "1200 x 800px" Or "1200 x 800px"</label>');
                            }
                        }
                        reader.readAsDataURL(input.files[0]);
                        var filename1 =  input.files[0].name;
                        jQuery('label[for="inputGroupFile01"]').text(filename1);
                    }
                }, 1000);
                $('.image-media').find('.err-msg').remove();
            }else{
                $('.image-media').append('<label class="err-msg">file size should be less than 5MB</label>');
            }
        });

		$('#upload1').on('click', function (ev) {
            ev.preventDefault();
			$uploadCrop.croppie('result', {
				type: 'canvas',
				size: 'viewport',
				format: 'png', 
			}).then(function (resp) {
				html = '<img src="' + resp + '" />';
                $('.upload-demo').addClass('hide');
                $("#ad_image").attr("src",resp);
                jQuery("#original_file_display").attr("src", resp);  
                $('.uploaded-img-section').show();
   				$("#upload-success").html("Images cropped and uploaded successfully.");
  				$("#upload-success").show();
				var token                   = "{{csrf_token()}}"; 
			});
		});
        $('.close-img').click(function(){
            $('#inputGroupFile01').val('');
            $('label[for="inputGroupFile01"]').text(' ');
            $('.uploaded-img-section').hide();
            $('#ad_image').removeAttr('src');
            $('#ad_image').attr('src',"{{url('/')}}/public/assets/images/logo/twetter-default-img.jpg");
        });



/*--------- App Icon crop -------- */
var $uploadCropIcon; 
$("#app_icon").change(function(){
    var input = this;
    cropIcon(this,$uploadCropIcon);
});


function showWebsite(){
    $('.heading-fld').show();
    $('.website_url').show();
    $('.preview-bottom-heading-section').show();
    $('.preview-bottom-heading-website').show();
}


/*----------------- END ------------------*/

        /*Price Range slider Start*/
        $(function() {
            $("#slider-price-range").slider({
                range: !0,
                min: 18,
                max: 65,
                values: [25, 99],
                slide: function(s, e) {
                    $("#slider_price_range_txt").html("<span class='slider_price_min'> " + e.values[0] + " - </span>  <span class='slider_price_max'>  " + e.values[1] + " </span>")
                }
            }), $("#slider_price_range_txt").html("<span class='slider_price_min'> " + $("#slider-price-range").slider("values", 0) + " - </span>  <span class='slider_price_max'> " + $("#slider-price-range").slider("values", 1) + "  </span>")
        });
        /*Price Range Slider End*/

		function popupResult(result) {
            var html;
            if (result.html) {
                html = result.html;
            }

            if (result.src) {
                $("#category_image").val(result.src);
                html = '<img src="' + result.src + '" />';
            }
            swal({
                title: '',
                html: true,
                text: html,
                allowOutsideClick: true
            });
            setTimeout(function(){
                $('.sweet-alert').css('margin', function() {
                    var top = -1 * ($(this).height() / 2),
                        left = -1 * ($(this).width() / 2);
                    return top + 'px 0 0 ' + left + 'px';
                });
            }, 1);
        }

    });

    
     $(document).ready(function(){

        $('#brand_name').keyup(function(e){
            var brand_name  = $(this).val();
            $(this).next('.err-msg').remove();
            if(brand_name.length>25){
                $(this).parent().append('<label class="err-msg">Only maximum 25 characters are allowed.</label>');
                e.preventDefault();
            }else{
                $(this).next('.err-msg').remove();
            }
        });
        $('#heading').keyup(function(e){
            var heading  = $(this).val();
            $(this).next('.err-msg').remove();
            if(heading.length>34){
                $(this).parent().append('<label class="err-msg">Only maximum 34 characters are allowed.</label>');
                e.preventDefault();
            }else{
                $('.preview-bottom-heading').text(heading);
                $(this).next('.err-msg').remove();
            }
        });
        $('#caption').keyup(function(e){
            var caption  = $(this).val();
            $(this).next('.err-msg').remove();
            if(caption.length>100){
                $(this).parent().append('<label class="err-msg">Only maximum 100 characters are allowed.</label>');
                e.preventDefault();
            }else{
                $(this).parent().find('.err-msg').remove();
            }
        });
     });
     function websiteFocus(){
        if(!$('#website_url').val() || $('#website_url').val()==""){
            $('#website_url').val('https://');
        }
     }
     function checkWebsiteUrl(){
        if(isUrlValid($('#website_url').val())==false){
            $('#website_url').parent().append('<label class="err-msg">* Invalid URL format, e.g. https://example.com/page</label>');
        }else{
            $('#website_url').parent().find('.err-msg').remove();
            $('#weburl').text($('#website_url').val());
        }
     }
     function isUrlValid(url) {
            return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
    }
   
</script>
<script>
    $(function() {
        $( ".datepicker" ).datepicker({
            todayHighlight: true,
            autoclose: true,
            format: 'dd/mm/yyyy',
            startDate: new Date()
        });
    });   
    $(document).ready(function(){
        <?php 
            if(isset($data)){ ?>
                setTimeout(function(){ 
                    $('#heading').trigger('change');
                    $('#brand_name').trigger('change');
                    $('#caption').trigger('change');
                    console.log('trigger clicked');
                }, 6000);
        <?php } ?>
           $('#address').keyup(function(){
                if($('#address').val().length>3){
                    $('#geocode').trigger('click');
                }
            });
            $('#address').change(function(){
                if($('#address').val().length>3){
                    $('#geocode').trigger('click');
                }
            });
           $('.reset-target').click(function(){
             $('#address').val(' ');
           });
           $('.map-close-btn').click(function(){
                $('#target_audience').hide();
           });
            $('#address').trigger('change');

            $('.payment-options').change(function(){
                $('.payment-method').val($(this).val());
            });
       });
    $(document).mouseup(function(e){
        var container = $("#target_audience");
        if (!container.is(e.target) && container.has(e.target).length === 0){
            container.hide();
        }
    });

    function bytesToSize(bytes) {
       var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
       if (bytes == 0) return '0 Byte';
       var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
       return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
    } 
</script>
<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap-datepicker.min.css">
<script src="{{url('/')}}/public/assets/js/bootstrap-datepicker.min.js" type="text/javascript"></script>

<button type="button" class=" balance-popup btn btn-primary add-form-btn btn-add-bussiness waves-effect waves-light" data-toggle="modal" data-target="#paymentMethodForm">
    <span class="text-nowrap"><span class="table-add-txt">Pay Balance</span><span class="table-add-icon"><i class="fal fa-plus"></i></span></span>
</button>
<div class="modal fade text-left defaultSize-modal modal-padding-change balance-modal-section" id="paymentMethodForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Select Payment Method</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Amount to pay : <span class="campaign-budget " style="font-weight: 600;color:#399dd6;">00</span></label>  
                    </div>
                    <div style="display:none;">
                        <div class="campaign-total-budget">00</div>
                        <div class="payment-amount">00</div>
                    </div>
                    <div class="form-group">
                        <label>Choose payment method</label>    
                        <div class="payment-method-section">
                            <?php if($walletBalance>0){ ?>
                            <div class="audience-gender-bx payment-method-wallet">
                                <div class="gender-chk-bx">
                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                        <input type="checkbox" id="wallet_payment"  value="WALLET">
                                        <span class="vs-checkbox">
                                            <span class="vs-checkbox--check">
                                                <i class="vs-icon feather icon-check"></i>
                                            </span>
                                        </span>
                                        <span class=""><span class="checkbox-span"><i class="fal fa-wallet"></i></span> Wallet Balance :<i class="wallet_amount_opt" style="font-weight: 600;color:#399dd6; " >{{$walletBalance}}</i> </span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                            <div class="radio-btns">  
                                <div class="radio-btn">
                                    <input type="radio" class="payment-options" id="f-option" name="payment-method" value="BANKTRANSFER">
                                    <label for="f-option"><span><i class="fal fa-university"></i></span>Bank transfer</label>
                                    <div class="check"></div>
                                </div>
                                <div class="radio-btn">
                                    <input type="radio" class="payment-options" id="s-option" name="payment-method" value="ONLINE">
                                    <label for="s-option"><span><i class="fal fa-credit-card"></i></span>Online payment</label>
                                    <div class="check"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary confirm-payment" onclick="confirmToPay();">Pay Now</button>
                    <button type="button" class="btn btn-primary cancel-payment" data-dismiss="modal" onclick="cancelToPay();">Close</button>
                </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){


        $("#wallet_payment").change(function() {
            var wallet_amount = parseFloat(jQuery('#wallet_amount').val());
            var amountToPay = parseFloat($('input[name="total_budget"]').val());
            if(wallet_amount<amountToPay){
                if(this.checked){
                    $('.campaign-budget').text($('.payment-amount').text());
                }else{
                    $('.campaign-budget').text($('.campaign-total-budget').text());
                }
            }
        });

        $('.post_type').change(function(){
            console.log($(this).val()+"== post type");
            if($(this).val()=="Existing"){
                $('.promote-link').show();
            }else{
                $('.promote-link').hide();
            }
        })

        document.getElementById('browse-image').onclick = function(e) {
            e.preventDefault();
             $('.images-video-section-main').show();
            $('.slider-img-video-section').hide();
            $('#previewImg').hide();
            $('#upload_type').parent().find('.err-msg').remove();
            if($('#upload_type').val()==""){
                $('#upload_type').parent().append('<label class="err-msg">Please select media type. </label>');
            }else{ 
                document.getElementById('inputGroupFile01').click(); 
                $(this).find('.media-options').attr('checked','checked');
            }
        };
        document.getElementById('browse-video').onclick = function(e) {
            e.preventDefault();
            $('.images-video-section-main').show();
            $('.slider-img-video-section').hide();
            $('#previewImg').hide();
            $('#upload_type').parent().find('.err-msg').remove();
            if($('#upload_type').val()==""){
                $('#upload_type').parent().append('<label class="err-msg">Please select media type. </label>');
            }else{ 
                document.getElementById('videofile').click(); 
                $(this).find('.media-options').attr('checked','checked');
            }
        };
    });

    //unused
    function readURL(input){
        $('#app_icon').next('.err-msg').remove();
        $('#app-ico').attr('src'," ");
        if (input.files && input.files[0]) {
            var fileSize = input.files[0].size;
            if(fileSize<5242880){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#app-ico').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
                var app_icon_name =  input.files[0].name;
                jQuery('label[for="app_icon"]').text(app_icon_name);
            }else{
                $('#app_icon').parent().append('<label class="err-msg">file size should be less than 5MB</label>');
            }
        }
    }

</script>

<!---------------------JUGAD------------------->
  <script type="text/javascript">
    $(document).ready(function(){
        var filesArr = [];
        filesArr.push(multiImageCarousel());
        filesArr.push(multiVideoUpload());
        // var intervalId = window.setInterval(function(){
        //     console.log(filesArr);       
        // }, 1000);
    });

    function addMoreImage(){
        $('#addMultiImages').trigger('click');
    }
    function addMultiVideo(){
        $('#videoAddBtn').trigger('click');
    }

    function filesStack(inputFile,files){
        for(let index = 0; index < inputFile[0].files.length; index++) {
          let file = inputFile[0].files[index];
          files.push(file);
        }
        filesArr = files;
        return files;
    }

function multiImageCarousel(){
    let inputFile = $('#multiImageInput');
    let button = $('#addMultiImages');
    let buttonSubmit = $('#mySubmitButton');
    let filesContainer = $('#previewImg');
    var files = [];

    inputFile.change(function(){
        $('.image-media').find('.err-msg').remove();
        var fileSize = $(this)[0].files[0].size;

        var prevHeight = parseInt($('.image-dimesion').attr('rel-height'));
        var prevWidth  = parseInt($('.image-dimesion').attr('rel-width'));  
        
        var uploadedSlides = 0;
        uploadedSlides = parseInt($('#previewImg .uploaded-img-main').length);
        if(uploadedSlides<6){
            if(fileSize<5242880){
                var u = URL.createObjectURL(this.files[0]);
                var img = new Image;
                var input = this;
                img.onload = function() {
                    $('.image-dimesion').attr('rel-height',img.height);
                    $('.image-dimesion').attr('rel-width',img.width);
                };
                img.src = u;
                $('.images-video-section-main').hide();
                $('.slider-img-video-section').show();
                setTimeout(function(){ 
                    var height = $('.image-dimesion').attr('rel-height');
                    var width  = $('.image-dimesion').attr('rel-width');     
                    console.log(height+"---"+width);
                    if (input.files && input.files[0]) {
                        let newFiles = []; 
                        var reader = new FileReader();
                        reader.onload = function (e) {

                            if(parseInt(prevHeight)>0 && parseInt(prevHeight)>0){
                                console.log(prevHeight+"-"+prevWidth);
                                if(parseInt(height)==prevHeight && parseInt(width)==prevWidth){
                                    uploadWithoutCrop(e.target.result);
                                    files = filesStack(inputFile,files);
                                }else if(parseInt(height)>prevHeight || parseInt(width)>prevWidth){
                                    // Crop functionality
                                    $('.crop-btn').hide();
                                    var reader = new FileReader();
                                    for(let index = 0; index < inputFile[0].files.length; index++) {
                                      let file = inputFile[0].files[index];
                                      newFiles.push(file);
                                      files = filesStack(inputFile,files);
                                      reader.onload = function (e) {
                                            var uniqid = Date.now();
                                            var imageSrc = "";
                                            var imageSliderSrc = "";
                                            var src = "";
                                            src = e.target.result;
                                            /************* crop demo *************/
                                            $('#upload-demo').croppie('destroy');
                                            var $uploadCrop;
                                            $uploadCrop = $('#upload-demo').croppie({
                                                viewport: {
                                                    width: 600,
                                                    height: 600,
                                                    type: 'Square'
                                                },
                                                enableExif: true
                                            });
                                            $('.upload-demo').removeClass('hide');
                                            $('.upload-demo').addClass('ready');
                                            $('.upload1').hide();
                                            $('.upload2').show();
                                            $uploadCrop.croppie('bind', {
                                                url: e.target.result
                                            }).then(function(){
                                                        
                                                $('#upload2').on('click', function (ev) {
                                                    ev.preventDefault();
                                                    $uploadCrop.croppie('result', {
                                                        type: 'canvas',
                                                        size: 'viewport',
                                                        format: 'png', 
                                                    }).then(function (resp) {
                                                        $('.upload-demo').addClass('hide');
                                                        var uniqid = Date.now();
                                                        $('.add-preview-btn').remove();
                                                        var imageAddBtn = '<div class="uploaded-img-main add-preview-btn addMultiImages " onclick="addMoreImage();"><div class="uploaded-img"><img src="http://localhost/sweply/public/assets/images/logo/plus-img.jpg" alt=""></div></div>';
                                                        imageSrc = '<div class="uploaded-img-main"><div class="uploaded-img"><img src="'+resp+'" alt="" /></div><span class="close-img"  onclick="removeImage('+uniqid+')"  rel="'+uniqid+'" >??</span></div>';
                                                        $('#previewImg').append(imageSrc+' '+imageAddBtn);
                                                         imageSliderSrc = '<div class="swiper-slide" rel="'+uniqid+'"><img src="'+resp+'" alt="" /></div>';
                                                        $('.swiper-wrapper').append(imageSliderSrc);
                                                    });
                                                });
                                                /******* CROP END ******/
                                            });
                                            $('.upload-demo').addClass('ready');
                                      }
                                      reader.readAsDataURL(file);
                                      //initSlder();
                                    }
                                    //changeCropSize(prevHeight/2,prevWidth/2);
                                    //changeCropSize(300,600);
                                    setTimeout(function(){ 
                                        $('.size-'+prevHeight).trigger('click'); 
                                        console.log('size-'+prevHeight);
                                    }, 600);

                                     $('.image-dimesion').attr('rel-height',prevHeight);
                                     $('.image-dimesion').attr('rel-width',prevWidth);
                                }else{
                                     $('.image-dimesion').attr('rel-height',prevHeight);
                                     $('.image-dimesion').attr('rel-width',prevWidth);
                                    $('.image-media').append('<label class="err-msg">Minimum image size should be : '+prevWidth+' x '+prevHeight+'px </label>');
                                }
                            }else{
                                if(parseInt(height)==1200 && parseInt(width)==1200){
                                    uploadWithoutCrop(e.target.result);
                                    files = filesStack(inputFile,files);
                                }else if(parseInt(height)==600 && parseInt(width)==1200){
                                    uploadWithoutCrop(e.target.result);
                                    files = filesStack(inputFile,files);
                                    
                                }else if(parseInt(height)==800 && parseInt(width)==1200){
                                    uploadWithoutCrop(e.target.result);
                                    files = filesStack(inputFile,files);
                                }else if(parseInt(height)>1200 || parseInt(width)>1200){
                                    // Crop functionality
                                    var reader = new FileReader();
                                    for(let index = 0; index < inputFile[0].files.length; index++) {
                                      let file = inputFile[0].files[index];
                                      newFiles.push(file);
                                      //files.push(file);
                                      files = filesStack(inputFile,files);

                                      reader.onload = function (e) {
                                            var uniqid = Date.now();
                                            var imageSrc = "";
                                            var imageSliderSrc = "";
                                            var src = "";
                                            src = e.target.result;
                                            /************* crop demo *************/
                                            $('#upload-demo').croppie('destroy');
                                            var $uploadCrop;
                                            $uploadCrop = $('#upload-demo').croppie({
                                                viewport: {
                                                    width: 600,
                                                    height: 600,
                                                    type: 'Square'
                                                },
                                                enableExif: true
                                            });
                                            $('.upload-demo').removeClass('hide');
                                            $('.upload-demo').addClass('ready');
                                            $('.upload1').hide();
                                            $('.upload2').show();
                                            $uploadCrop.croppie('bind', {
                                                url: e.target.result
                                            }).then(function(){
                                                        
                                                $('#upload2').on('click', function (ev) {
                                                    ev.preventDefault();
                                                    $uploadCrop.croppie('result', {
                                                        type: 'canvas',
                                                        size: 'viewport',
                                                        format: 'png', 
                                                    }).then(function (resp) {
                                                        $('.upload-demo').addClass('hide');
                                                        var uniqid = Date.now();
                                                        $('.add-preview-btn').remove();
                                                        var imageAddBtn = '<div class="uploaded-img-main add-preview-btn addMultiImages " onclick="addMoreImage();"><div class="uploaded-img"><img src="http://localhost/sweply/public/assets/images/logo/plus-img.jpg" alt=""></div></div>';
                                                        imageSrc = '<div class="uploaded-img-main"><div class="uploaded-img"><img src="'+resp+'" alt="" /></div><span class="close-img"  onclick="removeImage('+uniqid+')"  rel="'+uniqid+'" >??</span></div>';
                                                        $('#previewImg').append(imageSrc+' '+imageAddBtn);
                                                         imageSliderSrc = '<div class="swiper-slide" rel="'+uniqid+'"><img src="'+resp+'" alt="" /></div>';
                                                        $('.swiper-wrapper').append(imageSliderSrc);
                                                    });
                                                });
                                                /******* CROP END ******/
                                            });
                                            $('.upload-demo').addClass('ready');
                                      }
                                      reader.readAsDataURL(file);
                                      //initSlder();
                                    }
                                }else{
                                    $('.image-media').append('<label class="err-msg">Minimum image size should be : "1200 x 600px" Or "1200 x 800px" Or "1200 x 800px"</label>');
                                }
                            }
                        }
                        newFiles.forEach(file => {
                               let fileElement = $(`<p style="display:none;">${file.name}</p>`);
                               fileElement.data('fileData', file);
                               filesContainer.append(fileElement);
                              
                              fileElement.click(function(event) {
                                let fileElement = $(event.target);
                                let indexToRemove = files.indexOf(fileElement.data('fileData'));
                                fileElement.remove();
                                files.splice(indexToRemove, 1);
                              });
                        });
                        reader.readAsDataURL(input.files[0]);
                    }
                },1000);
            }else{
                $('.image-media').append('<label class="err-msg">file size should be less than 5MB</label>');
            }
        }
    });

    button.click(function(e){
        $('#previewImg').show();
        $('.uploaded-img-section').hide();
        $('#upload_type').parent().find('.err-msg').remove();
        if($('#upload_type').val()==""){
            $('#upload_type').parent().append('<label class="err-msg">Please select media type. </label>');
        }else{
            e.preventDefault();
            inputFile.click();
        }
    });
    filesArr  =  files;
    return files;
}


function uploadWithoutCrop(src){
    var uniqid = Date.now();
    var Burl = '<?php echo url("/"); ?>';
    var imageSrc = "";
    var imageSliderSrc = "";
    $('.add-preview-btn').remove();
    var imageAddBtn = '<div class="uploaded-img-main add-preview-btn addMultiImages " onclick="addMoreImage();"><div class="uploaded-img"><img src="'+Burl+'/public/assets/images/logo/plus-img.jpg" alt=""></div></div>';
    imageSrc = '<div class="uploaded-img-main"><div class="uploaded-img"><img src="'+src+'" alt="" /></div><span class="close-img"  onclick="removeImage('+uniqid+')"  rel="'+uniqid+'" >??</span></div>';
    $('#previewImg').append(imageSrc+' '+imageAddBtn);
     imageSliderSrc = '<div class="swiper-slide" rel="'+uniqid+'"><img src="'+src+'" alt="" /></div>';
    $('.swiper-wrapper').append(imageSliderSrc);
    console.log(imageSliderSrc);
}

    function removeImage(imageID){
     $('.swiper-slide[rel="'+imageID+'"]').remove();
     console.log(imageID);
     var recID = $('.close-img[rel="'+imageID+'"]').attr('rec-id');
     var file = $('.close-img[rel="'+imageID+'"]').attr('file');
     console.log(recID);
     $('.close-img[rel="'+imageID+'"]').parent().remove();
        //initSlder();
    }  


    //<!-------- VIDEO FUNCTION ------->
    function multiVideoUpload(){
       let inputVideoFile = $('#multiVideoInput');
        let buttonVideoAdd = $('#videoAddBtn');
        let buttonSubmit = $('#mySubmitButton');
        let filesVideoContainer = $('#myVideoList');
        var files = [];
        inputVideoFile.change(function() {

            $('.images-video-section-main').hide();
            $('.slider-img-video-section').show();

            let newVideoFiles = []; 
            if(checkFileValidation(this)==0){
                // for(let index = 0; index < inputVideoFile[0].files.length; index++) {
                //   let file = inputVideoFile[0].files[index];
                //       newVideoFiles.push(file);
                //       files.push(file);    
                // }
                files = filesStack(inputVideoFile,files);

                newVideoFiles.forEach(file => {
                  let fileElement = $(`<p>${file.name}</p>`);
                  fileElement.data('fileData', file);
                  filesVideoContainer.append(fileElement);
                  
                  fileElement.click(function(event) {
                    let fileElement = $(event.target);
                    let indexToRemove = files.indexOf(fileElement.data('fileData'));
                    fileElement.remove();
                    files.splice(indexToRemove, 1);
                  });
                });
            }else{
              alert('wrong video uploaded ');
            }

           

            console.log('filestack fun op');
            console.log(files);

            return files;
        });

        buttonVideoAdd.click(function(e) {
            $('#previewImg').show();
            $('#upload_type').parent().find('.err-msg').remove();
            if($('#upload_type').val()==""){
                $('#upload_type').parent().append('<label class="err-msg">Please select media type. </label>');
            }else{
                e.preventDefault();
                inputVideoFile.click();
            }
        });
   
    }


    function checkFileValidation(fileObj){
      var err = 0;
      var fileSize = $(fileObj)[0].files[0].size;
      if(fileSize<1073741824){
          var $source = $('#video_here_sample');
          $source[0].src = URL.createObjectURL(fileObj.files[0]);
          var video = document.createElement('video');
          video.preload = 'metadata';
          video.onloadedmetadata = function(){
              window.URL.revokeObjectURL(video.src);
              if(parseFloat(video.duration)<=180){
                  $source.parent()[0].load();
                  $(fileObj).next('.err-msg').remove();
                  var filename_video =  fileObj.files[0].name;
                  //jQuery("label[for='inputGroupFile01']").text(filename_video);
                  err = 0;
              }else{
                  err = 1;
                  //$('.file_multi_video').parent().append('<label class="err-msg">Video duration should be less than 180 seconds </label>');
              }
          }
          video.src = URL.createObjectURL(fileObj.files[0]);
          var uniqid = Date.now();
          var videoSrc = "";
          var videoSliderSrc = "";
         $('.add-preview-btn').remove();
          videoSrc = '<div class="uploaded-img-main"><div class="uploaded-img"><video style="object-fit: cover;width: 100% !important;height: 100% !important;"><source src="'+video.src+'" type="video/mp4"></video></div><span class="close-img"  onclick="removeImage('+uniqid+')"  rel="'+uniqid+'" >??</span></div>';

            var videoAddBtn = '<div class="uploaded-img-main add-preview-btn videoAddBtn " onclick="addMultiVideo()"><div class="uploaded-img"><img src="http://localhost/sweply/public/assets/images/logo/plus-img.jpg" alt=""></div></div>';
            $('#previewImg').append(videoSrc+''+videoAddBtn);

              var videoSliderSrc = '<div class="swiper-slide" rel="'+uniqid+'"><video style="background-color:black;object-fit: cover;width: 100% !important;height:216px !important" loop playsinline muted autoplay><source src="'+video.src+'" type="video/mp4"><source src="'+video.src+'" type="video/ogg"></video></div>';
              $('.swiper-wrapper').append(videoSliderSrc);

      }else{
        err = 1;
          //$('.file_multi_video').parent().append('<label class="err-msg">file size should be less than 1 GB</label>');
      }
      return err;
    }    
  </script>

<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="{{url('/')}}/public/assets/css/swiper.min.css">
<!-- Swiper JS -->
<script src="{{url('/')}}/public/assets/js/swiper.min.js"></script>
<script>
    initSlder();
    var swiper;
    function initSlder(){
        swiper = new Swiper('.images-slider-twitter', {
          slidesPerView: 1,
          spaceBetween: 1,
          centeredSlides: true,  
          loop:true, 
          //slidesPerView: 'auto'
          //freeMode: true,       
        });   
    }

    function submitFrm(){
        if(validateStep2()==1){
            return false;
        }else{
            if(parseFloat($('#wallet_amount').val())<parseFloat($('input[name="total_budget"]').val())){
                $('.balance-popup').trigger('click');
            }else{
                saveCampaignData();
            }
        }
        return true;
    }
    function confirmToPay(){
        saveCampaignData();
    }
    function cancelToPay(){
        swal("Please change budget to continue. Your wallet balance is : SAR "+$('#wallet_amount').val());
    }
    function saveCampaignData(){
        //console.log("in function of file submit"+filesArr);

        //var filesArr = [];
        //filesArr.push(multiImageCarousel());
        //filesArr.push(multiVideoUpload());
        console.log(filesArr);
        console.log("================>");

        var targetAudience = $('.campaign_target_area').val().toString();
        var screen_shot = '';
        var age = $.trim(jQuery(".slider_price_min").html())+ ' '+ $.trim(jQuery(".slider_price_max").html());
        html2canvas($('#preview-section-bx'),{background: '#fff'}).then(function(canvas) {
             var screen_shot = canvas.toDataURL();                
            var gender = jQuery("#gender_f").val();
            if(gender == ''){
                 gender = jQuery("#gender_m").val();
            }else{
                gender += ", "+jQuery("#gender_m").val();
            }
            var file_data = $('#inputGroupFile01').prop('files')[0]; 
            var videofile = $('#videofile').prop('files')[0]; 
            var appIcon = ""; 
            var token    = "{{csrf_token()}}";
            var call_to_action = jQuery("#call_to_action").val();
            var upload_type = $('#upload_type').val();
            var campaign_target = jQuery("#campaign_target").val();
            var campaign_target = jQuery("#campaign_target").val();
            var form_data = new FormData();   
             form_data.append("form_data",$('#twitter_creat').serialize());   
            form_data.append('file', file_data);
            form_data.append('videofile', videofile);
            form_data.append('appicon', appIcon);
            form_data.append('_token', token);
            form_data.append('screen_shot', screen_shot);
            form_data.append('upload_type', upload_type);
            form_data.append('target_audience', campaign_target);
            form_data.append('age', age);
            form_data.append('gender', gender);
            form_data.append('location',targetAudience);

            var image = $('#ad_image').attr('src');    
            form_data.append('image', image);

            ///console.log(filesArr);
            //console.log("===================================>");

            //let formData = new FormData();
            filesArr.forEach(cmp_file => {
                console.log(cmp_file);
              form_data.append('campaign_media[]',cmp_file);
            });
            //form_data.append('campaign_media',filesArr);


            jQuery.ajax({
                url: "{{url('/')}}/user/twitter_store",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                        
                type: 'post',
                beforeSend: function () {
                    $('.loader-section-main').show();
                    console.log("Starting...");
                },
                complete: function () {
                    $('.loader-section-main').hide();
                    console.log("Complete!");
                },
                success: function (data) {
                    if($.trim(data) == 'success'){
                        swal("Thank You!", "Campaign created successfully!", "success")
                            .then((value) => {
                                $('.loader-section-main').show();
                                location.href = "{{url('/')}}/user/campaign/";
                        });
                    }else if($.trim(data)=='updated'){
                        swal("Thank You!", "Campaign Updated successfully!", "success")
                            .then((value) => {
                                $('.loader-section-main').show();
                                 location.href = "{{url('/')}}/user/campaign/";
                        });
                    }else if($.trim(data)=='warning'){
                        location.href = "{{url('/')}}/user/payment/";
                    }else{
                        swal("Oops !", "Something went Wrong", "error")
                        .then((value) => {
                            $('.loader-section-main').hide();
                        });
                    }
                }
            }); 
        });
        $('.loader-section-main').hide();
    } 





function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name) {   
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}


  </script>

    @endsection