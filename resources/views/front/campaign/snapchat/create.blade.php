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
</style>
<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/croppie/croppie.css" />
<link rel="Stylesheet" type="text/css" href="{{url('/')}}/public/assets/croppie/prism.css" />
<link rel="Stylesheet" type="text/css" href="{{url('/')}}/public/assets/croppie/demo.css" />
<!-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyB9s91K1zHQ4zz0v9oCVPnNingRJt2SGGc&libraries=geometry,places"></script>  -->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="preview-ad-section">
            <div class="breadcrem-section">
                <h2>Snapchat Ad Preview</h2>
                <div class="brea-bx">
                    <ul>
                        <li><a href="{{url('/')}}/user/dashboard/">Home <i class="fal fa-angle-right"></i></a></li>
                        <li><a href="{{url('/')}}/user/create-ads">Create Ads <i class="fal fa-angle-right"></i></a></li>                        
                        <li><a href="#">Snapchat </a></li>                       
                    </ul>
                </div>
                <div class="clearfix"></div>               
            </div>
            <div class="ad-prive-bx">
                <form action="{{url('/')}}/user/snapchat_store" class="number-tab-steps wizard-circle" id="snapchat_creat" name='snapchat_creat' enctype="multipart/form-data">
                    <!-- Step 1 -->
                    <input type="hidden" id="campaign_id" name="campaign_id"  value=""/>    
                    <input type="hidden" id="channel_id" name="channel_id"  value="1"/>    
                    <input type="hidden" id="channel_category_id" name="channel_category_id"  value="1"/> 
                    <?php 
                        if(Session::has('BUSINESSID')){
                            $businessID = Session::get('BUSINESSID');
                        }else{
                            $businessID = $userData['business_id'];
                        }
                    ?>
                    <input type="hidden" id="business_id" name="business_id"  value="<?php echo $businessID;?>"/>    
                    <input type="hidden" id="user_id" name="user_id"  value="<?php echo $userData['id'];?>"/>                      
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
                                    <label for="">Campaign target <span style="color: red">*</span></label>
                                     <select class="form-control" name="campaign_target" id="campaign_target">
                                        <option value="" selected> Select target</option>
                                        <option value="Visit Website" > Visit Website</option>
                                        <option value='App install'>App Install</option>
                                        <option value='App visit'>App Visit</option>
                                        <option value='Awareness'>Awareness</option>     
                                        <option value='Video Views'>Video Views</option>     
                                        <option value='Call to Action'>Call & Text</option>                                       
                                    </select>
                                </div>
                                <div class="form-group website_url" style="display:none;">
                                    <label for="website_url">Website Url </label>
                                    <input type="text" placeholder="http://www.unimarkme.com" class="form-control" id="website_url" name="website_url" onchange="checkWebsiteUrl();" onfocus="websiteFocus();">
                                </div> 
                                <div class="form-group">
                                    <label for="upload_type">Upload Type</label>
                                    <select class="form-control" id="upload_type">
                                        <option value='image'>Image</option>
                                        <option value='video'>Video</option>
                                    </select>
                                </div>
                                <div class="form-group image-input">
                                    <label for="image">Upload image <span style="color: red">*</span> <span class="info-tool-tip"><i class="fas fa-info-circle"></i> <span class="tool-info">Size Required 1920 * 2340</span></span> </label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" accept="image/*" />
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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
                                <div class="form-group video-input" style="display:none;">
                                    <label for="image">Upload video <span class="info-tool-tip"><i class="fas fa-info-circle"></i> <span class="tool-info">Supported type - mp4</span></span> </label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input file_multi_video" id="videofile" accept="video/mp4,video/x-m4v,video/mov" />
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="heading">Heading <span style="color: red">*</span> <span class="info-tool-tip"><i class="fas fa-info-circle"></i> <span class="tool-info">Heading should be maximum 34 characters </span></span> </label>
                                    <input type="text" placeholder="Enter Heading name" class="form-control" id="heading" name="heading" maxlength="34" />
                                </div>                                
                                <div class="form-group">
                                    <label for="brand_name">Brand Name <span style="color: red">*</span> <span class="info-tool-tip"><i class="fas fa-info-circle"></i> <span class="tool-info">Brand name should be maximum 24 characters </span></span> </label>
                                    <input type="text" placeholder="Enter Brand name" class="form-control" id="brand_name" name="brand_name" maxlength="25" />
                                </div> 
                                <div class="form-group">
                                    <label for="Caption">Caption </label>
                                    <input type="text" placeholder="Enter Caption (optional)" class="form-control" id="caption" name="caption" maxlength="100" />
                                </div> 
                                <div class="app-sec" style="display:none;">
                                    <div class="form-group">
                                        <label for="app_name">App Name </label>
                                        <input type="text" placeholder="Enter App Name" class="form-control" id="app_name" name="app_name">
                                    </div> 
                                    <div class="form-group ">
                                        <label for="image">Upload App Icon <span class="info-tool-tip"><i class="fas fa-info-circle"></i> <span class="tool-info">Size Required 1920 * 2340</span></span> </label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="app_icon" name="app_icon">
                                            <label class="custom-file-label" for="app_icon">Choose file</label>
                                        </div>
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
                                <div class="awareness-sec" style="display:none;">
                                </div>
                                <div class="callntext-sec" style="display:none;">
                                    <div class="form-group">
                                        <label for="upload_type">Contact Method</label>
                                        <select class="form-control" name="contact_method"  id="contact-method">
                                            <option>Contact Method</option>
                                            <option value='text-option'>Text My Business</option>                                        
                                            <option value='call-option'>Call My Business
                                            </option>                                        
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_number">Add a new phone</label>
                                        <input type="text" placeholder="Enter phone number" class="form-control" id="contact_number" name="contact_number">
                                    </div> 
                                    <div class="form-group text_msg" style="display:none;">
                                        <label for="text_msg">Optional Text Message</label>
                                        <textarea placeholder="Enter text message" class="form-control" id="text_msg" name="text_msg"></textarea>
                                    </div> 
                                </div>
                                <div class="video-view-sec" style="display:none;">
                                </div>
                                <div class="form-group call_to_action" >
                                    <label for="call_to_action">Choose call to action Tap</label>
                                    <select class="form-control" name="call_to_action" id="call_to_action">
                                        <option value="Apply Now">Apply Now</option>
                                        <option value="Book Now">Book Now</option>
                                        <option value="Buy Ticket">Buy Ticket</option>
                                        <option value="Get Now">Get Now</option>    
                                        <option value="Listen">Listen</option>    
                                        <option value="Read">Read</option>    
                                        <option value="Sign up">Sign up</option>    
                                        <option value="Play">Play</option>    
                                        <option value="More">More</option>
                                    </select>
                                </div>                                
                                <div class="form-group">
                                    <div class="demo-wrap upload-demo hide">
                                        <div class="container">
                                            <div class="grid"> 
                                                <div class="actions-close-modal" onclick="jQuery('.upload-demo').addClass('hide');jQuery('.custom-file-label').html('Choose file');">
                                                    <a href="javascript:void(0);">&times;</a>
                                                </div>                                               
                                                <div class="actions">
                                                    <a href="javascript(0);"class="btn file-btn btn-primary">
                                                        <span>Upload</span>
                                                        <input type="file" id="upload1" value="Choose a file" accept="image/*" />
                                                    </a>
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
                                        $('.select2').select2();
                                    </script>
                                </div>
                                <?php /* Area of target with map 
                                <div class="form-group area-target-drop-main">
                                    <label for="target_audience">Area of target audience</label>
                                    <div class="target-audience bud-sar-padding">
                                        <input type="text" placeholder="Select area of target audience" class="form-control" id="address" name="campaign_target_area" value=""  autocomplete="off" />
                                        <input type="hidden" id="city2" name="city2" />
                                         <input type="hidden" id="cityLat" name="cityLat" />
                                         <input type="hidden" id="cityLng" name="cityLng" />
                                         <input id="radius" type="hidden" value="10">
                                    </div>
                                    <div class="area-target-drop-section" id="target_audience" >
                                        <button class="map-close-btn" type="button">&times;</button>
                                            <table border="1" style="width:100%"> 
                                               <tr>
                                                <td style="display: flex;"> 
                                              </tr> 
                                              <tr> 
                                                <td> 
                                                   <div id="map_canvas" style="width: 100%; height: 350px"></div> 
                                                </td> 
                                                <td valign="top" style="display:none;" > 
                                                   <div id="side_bar" style="width:300px;height:450px; text-decoration: underline; color: #4444ff; overflow:auto;"></div> 
                                                </td> 
                                              </tr> 
                                            </table>
                                    </div>
                                </div>
                                 */ ?>
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
                                <div class="reach-click"><i class="feather icon-users"></i> 40000 - 50000</div>
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
                            </div>
                        </div>
                    </fieldset>             
                </form>
            </div>

            <!------------------------------- PREVIEW BOX -------------------------------------->
            <div class="ad-prive-bx preview-ads-mobile" id="preview-section-bx">  
                <div class="mobile-black-bg"></div>
                <div class="mobile-top-time-icons-strip">
                    <div class="mobile-top-time">
                       17:24 
                    </div>
                    <div class="mobile-top-icons">
                        <span><i class="fas fa-wifi"></i></span>                        
                        <span><i class="fas fa-signal-alt"></i></span>
                        <span><i class="fal fa-battery-three-quarters"></i></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <img src="{{url('/')}}/public/assets/images/logo/mobile.png" alt="" class="mobile-bg-img"/>
                <div class="brand-name-section-main" >                    
                    <div class="brand-name-section">
                        <span><!--Sweply Ad--></span>
                    </div>
                    <div class="clearfix"></div>
                     <div class="heading-section">
                        <span><!--Lorem ipsum--></span>
                    </div> 
                    <div class="menu-dots-section">
                        <span><i class="fal fa-ellipsis-v"></i></span>
                    </div>                  
                </div>   
                <div class="add-img-video-section"> 
                    <img src="{{url('/')}}/public/assets/images/logo/mobile-priview-img.jpg" alt="" id="ad_image"/>
                    <video id="ad_video" style="background-color:black; display:none;object-fit: cover;" loop playsinline muted autoplay>
                        <source src="mov_bbb.mp4" id="video_here" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                    </video>                
                </div>
                <div class="caption-txt-section-block" style="display:none;">
                    Lorem Ipsum App Visit Name Apply Now
                </div>
                <div class="add-prive-btn website-sec-preview" style="display:none;">
                    <span class="btn-add-prive">Apply Now</span>
                </div> 
                <div class="app-add-prive-main app-sec-preview" style="display:none;">
                    <div class="app-add-prive-btn">
                        Apply Now
                    </div>
                    <div class="clearfix"></div>
                    <div class="app-add-prive">
                        <div class="app-add-icon-txt">
                            <div class="app-add-icon">
                                <img src="" id="app-ico" />
                            </div>
                            <div class="app-add-icon-txt-section">
                                <div class="app-add-icon-txt-head">
                                    App Visit Name
                                </div>
                                <div class="app-add-icon-txt-headline">
                                    Headline
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
        $( document ).ready(function() {
            $('#android_url,#ios_url').focus(function(){
                if(!$(this).val() || $(this).val()==""){
                    $(this).val('https://');
                }
            });
            $('#android_url,#ios_url').change(function(){
               if(isUrlValid($(this).val())==false){
                    $(this).parent().append('<label class="err-msg">* Invalid URL format, e.g. https://example.com</label>');
                }else{
                    $(this).parent().find('.err-msg').remove();
                }
            });
            var width = $(".mobile-bg-img").width();
            var height = $(".mobile-bg-img").height();
                $("#ad_video").height(height-57);
            $("#ad_video").width(width-34);
            $('#upload_type').change(function(){
                var mediaType = $(this).val();
                if(mediaType=="video"){
                    $('#ad_image').hide();
                    $('#ad_video').show();
                    $('.video-input').show();
                    $('.image-input').hide();
                }else{
                    $('#ad_image').show();
                    $('#ad_video').hide();
                    $('.video-input').hide();
                    $('.image-input').show();
                }
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
            var $source = $('#video_here');
            $source[0].src = URL.createObjectURL(this.files[0]);
            $source.parent()[0].load();
            $(this).next('.err-msg').remove();
            var filename_video =  this.files[0].name;
            jQuery("label[for='inputGroupFile01']").text(filename_video);
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
            if($('#heading').val()==""){
                $('#heading').parent().append('<label class="err-msg">Please select heading. </label>');
                err = 1;
            }
            if($('#brand_name').val()==""){
                $('#brand_name').parent().append('<label class="err-msg">Please select brand. </label>');
                err = 1;
            }
            <?php if(!isset($data)){ ?>
                    if($('#upload_type').val()=="image"){
                        if($('#inputGroupFile01').val()==""){
                            $('#inputGroupFile01').parent().append('<label class="err-msg">Please select image. </label>');
                            err = 1;
                        }
                    }
                    if($('#upload_type').val()=="video"){
                        if($('#videofile').val()==""){
                            $('#videofile').parent().append('<label class="err-msg">Please select video. </label>');
                            err = 1;
                        }
                    }
            <?php } ?>
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
    <script type="text/javascript" src="{{url('/')}}/public/assets/croppie/croppie.js"></script>
	<script type="text/javascript" src="{{url('/')}}/public/assets/croppie/demo.js"></script>
    <script type="text/javascript" src="{{url('/')}}/public/assets/js/htmltocanvas.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script> -->


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
           /*   var startDay = new Date( start[2], start[1] - 1, start[0]);
                var endDay = new Date( end[2], end[1] - 1, end[0]);
                var millisecondsPerDay = 1000 * 60 * 60 * 24;
                var millisBetween = endDay.getTime() - startDay.getTime();
                var days = millisBetween / millisecondsPerDay;
                days =Math.floor(days); 
            */
            console.log('Days '+days)     

            var budget = $('#campaign_budget').val();
            var budget_duartion = $('#budget_duartion').val();
            if(budget_duartion == 'Daily'){
                budget = budget * days;
            }
            var vat_amount = parseInt(budget) * 0.15; 
            var total = parseInt(budget) + parseInt(vat_amount);
            var service_charges = 10;
            var service_charges = (budget*service_charges)/100;
            var total = parseInt(total) + parseInt(service_charges);
            console.log(vat_amount+' -- '+total+'---'+service_charges);
             $('.service_amount').text("SAR "+service_charges);
             $('.vat_15').html("SAR "+vat_amount);
             $('.total_amount').html("SAR "+total);
             $('.subtotal').html("SAR "+budget);
            $('input[name="service_amount"]').val(service_charges);
            $('input[name="sub_budget"]').val(budget);
            $('input[name="vat_amount"]').val(vat_amount);
            $('input[name="total_budget"]').val(total);
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
                        if($key == 'campaign_target_area'){ /* ?>
                            $('#campaign_target_area_edit').val('<?php print_r($value); ?>');
                            var locations = $('#campaign_target_area_edit').val().split(",");
                            $(".campaign_target_area").select2({
                                multiple: true,
                            });
                            $('.campaign_target_area').val(locations).trigger('change');
                        <?php */ } ?>

                        <?php if($key == 'upload_type'){ 
                                if($value == 'video'){ ?>
                                    $('#ad_image').hide();
                                    $('#ad_video').show();
                                <?php }else{ ?>
                                    $('#ad_image').show();
                                    $('#ad_video').hide();
                                <?php } ?>
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



               <?php }
           } ?>  
<?php }  ?> 
         $('#end_date,#start_date').change(function(){
                var start = $('#start_date').val();
                var end = $('#end_date').val();
                start = start.split("/");
                end = end.split("/");
                var startDay = new Date(start[2]+'-'+start[1]+'-'+(start[0]-1));
                var endDay = new Date(end[2]+'-'+end[1]+'-'+end[0]);
                var diff = new Date(endDay - startDay);
                var days = diff/1000/60/60/24;
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
            $('#upload_type').val('image').trigger('change');
            $('.uploaded-img-section').hide();
            $('#upload_type').removeAttr('disabled');
            if(campaignType == 'App install'){
                $('.app-sec').show();
                $('.app-sec-preview').show();
                $('.app-add-install-btn').text('Install');
            }else if(campaignType == 'App visit'){
                $('.app-sec').show();
                $('.app-sec-preview').show();
                $('.app-add-install-btn').text('Visit');
            }else if(campaignType == 'Visit Website'){
                $('.website_url').show();
            }else if(campaignType == 'Awareness'){
                $('.awareness-sec').show();
            }else if(campaignType == 'Video Views'){
                $('#upload_type').val('video').trigger('change');
                $('#upload_type').attr('disabled','disabled');
                $('.video-view-sec').show();
            }else if(campaignType == 'Call to Action'){
                $('.call_to_action').hide();
                $('.callntext-sec').show();
            }
       });
       $('#videofile').change(function(){
            $('#videofile').parents().find('.err-msg').remove();
       });
       $('#inputGroupFile01').change(function(){
            $('#inputGroupFile01').parents().find('.err-msg').remove();
       });

       $('#start_date').change(function(){
            $('#start_date').parents().find('.err-msg').remove();
       });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#app-ico').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
                var app_icon_name =  input.files[0].name;
                jQuery('label[for="app_icon"]').text(app_icon_name);
            }
        }
        $("#app_icon").change(function(){
            readURL(this);
            var width = $(this).width();
            var height = $(this).height();
            var fileSize = $(this)[0].files[0].size;
            alert(width+'X'+height+' - '+bytesToSize(fileSize));
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
             $('.website-sec-preview').show();
             $('.btn-add-prive').html(this.value);
             $('.app-add-prive-btn').html(this.value);
        });
        $('#heading').on("keyup change blur",function(){
           $('.brand-name-section').html('<span>'+this.value+'</span>');
           $('.app-add-icon-txt-headline').html(this.value);
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
		function readFile(input) {
 			if (input.files && input.files[0]) {
	            var reader = new FileReader();

	            reader.onload = function (e) {

					$('.upload-demo').addClass('ready');
	            	$uploadCrop.croppie('bind', {
	            		url: e.target.result
	            	}).then(function(){
                        jQuery("#original_file_display").attr("src", e.target.result);  
	            		console.log('jQuery bind complete');
	            	});
	            	 $('.upload-demo').addClass('ready');
	            }

	            reader.readAsDataURL(input.files[0]);
                var filename1 =  input.files[0].name;
                jQuery('label[for="inputGroupFile01"]').text(filename1);
	        }
	        else {
		        alert("Sorry - you're browser doesn't support the FileReader API");
		    }
		}
		$uploadCrop = $('#upload-demo').croppie({
			viewport: {
				width: 400,
				height: 700,
				type: 'Square'
			},
			enableExif: true
		});
		$('#inputGroupFile01').on('change', function () { 
			$('.upload-demo').removeClass('hide');
			readFile(this); 
            $(this).next('.err-msg').remove();
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
        });
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

    function submitFrm(){

            if(validateStep2()==1){
                return false;
            }else{
                if(parseFloat($('#wallet_amount').val())<parseFloat($('input[name="total_budget"]').val())){
                    swal({
                        title: "Insufficient wallet balance",
                        text: "Do you want to charge your Wallet?", 
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    }).then((proceed) => {
                          if (proceed) {
                            saveCampaignData();
                        }else{
                            swal("Please change budget to continue. Your wallet balance is : SAR "+$('#wallet_amount').val());
                        }
                    });
                }else{
                    saveCampaignData();
                }
            }
        return true;
    }
     // Validation 
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
        }
     }
     function isUrlValid(url) {
            return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
    }
    function saveCampaignData(){
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
                    var appIcon = $('#app_icon').prop('files')[0]; 
                    var token    = "{{csrf_token()}}";
                    var call_to_action = jQuery("#call_to_action").val();
                    var upload_type = $('#upload_type').val();
                    var campaign_target = jQuery("#campaign_target").val();
                    var campaign_target = jQuery("#campaign_target").val();
                    var form_data = new FormData();   
                     form_data.append("form_data",$('#snapchat_creat').serialize());   
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

                    jQuery.ajax({
                        url: "{{url('/')}}/user/snapchat_store",
                        dataType: 'text',  // <-- what to expect back from the PHP script, if anything
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
                                //$('#wallet_amount').val();
                                location.href = "{{url('/')}}/user/payment/";
                              /*  swal("Thank You!", "Campaign stored successfully!", "success")
                                    .then((value) => {
                                        $('.loader-section-main').show();
                                         location.href = "{{url('/')}}/user/payment/";
                                }); */
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
            //codeAddress(); 
            $('#address').trigger('change');

       });
    $(document).mouseup(function(e){
        var container = $("#target_audience");
        if (!container.is(e.target) && container.has(e.target).length === 0){
            container.hide();
        }
    }); 
</script>
<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap-datepicker.min.css">
<script src="{{url('/')}}/public/assets/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script>
    /*
    var map;
        function initialize() {
          var input = document.getElementById('address');
           var options = {
              types: ['(cities)'],
              componentRestrictions: {country: "sa"}
            };
          var autocomplete = new google.maps.places.Autocomplete(input,options);
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                document.getElementById('city2').value = place.name;
                document.getElementById('cityLat').value = place.geometry.location.lat();
                document.getElementById('cityLng').value = place.geometry.location.lng();
                geocoder = new google.maps.Geocoder();
                var latlng = new google.maps.LatLng(place.geometry.location.lat(),place.geometry.location.lng());
                var mapOptions = {
                  zoom: 8,
                  center: latlng
                }
                map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                new google.maps.Marker({
                    position: latlng,
                    map,
                    title: place.name,
                });
                $(".area-target-drop-section").slideToggle("slow");
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        */
    </script>
    <!-- <script type="text/javascript" src="{{url('/')}}/public/assets/js/map.js"> 
         </script> -->
    @endsection