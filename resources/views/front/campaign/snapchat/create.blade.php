@extends('front.layout.dashboard-master')    
@section('main_content')

<style>
    .area-target-drop-main {position: relative}
    .area-target-drop-main .form-control{line-height: 36px;color: #d4d4d4;}
    .area-target-drop-section{height: 100px;border: 1px solid #C1C1C1;border-radius: 3px;position: absolute;top: 62px;left: 0;width: 100%;background: #ffffff;z-index: 1;display: none}
</style>

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
                        <li><a href="#">Home <i class="fal fa-angle-right"></i></a></li>
                        <li><a href="#">Create Ads <i class="fal fa-angle-right"></i></a></li>                        
                        <li><a href="#">Snapchat </a></li>                       
                    </ul>
                </div>
                <div class="clearfix"></div>               
            </div>
            <div class="ad-prive-bx">
                <form action="{{url('/')}}/user/snapchat_store" class="number-tab-steps wizard-circle">
                    <!-- Step 1 -->
                    <input type="hidden" id="channel_id" name="channel_id"  value=""/>    
                    <input type="hidden" id="channel_category_id" name="channel_category_id"  value=""/>    
                   
                    <h6>Step 1  </h6>
                    <fieldset>
                        <div class="twitter-step-section">
                            <div class="creadte-ad-frm">                                
                                <div class="form-group">
                                    <label for="campaign_name">Camping name</label>
                                    <input type="text"  placeholder="Enter Camping name" class="form-control" id="campaign_name" name="campaign_name">
                                </div>   
                                <div class="form-group">
                                    <label for="brand_name">Brand Name   </label>
                                    <input type="text" placeholder="Enter Brand name" class="form-control" id="brand_name" name="brand_name">
                                </div> 
                                <div class="form-group">
                                    <label for="heading">Heading</label>
                                    <input type="text" placeholder="Enter Heading name" class="form-control" id="heading" name="heading">
                                </div>
                                <div class="form-group">
                                    <label for="">Campgain target</label>
                                     <select class="form-control" id="campaign_target">
                                        <option value="view" selected> View</option>
                                        <option value='image'>Image</option>                                        
                                        <option value='video'>Video</option>                                        
                                    </select>
                                 </div>
                                <div class="form-group">
                                    <label for="upload_type">Upload Type</label>
                                    <select class="form-control" id="upload_type">
                                        <option>Select Upload type</option>
                                        <option value='image'>Image</option>                                        
                                        <option value='video'>Video</option>                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress1">Upload image <span class="info-tool-tip"><i class="fas fa-info-circle"></i> <span class="tool-info">Size Required 1920 * 2340</span></span> </label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose Logo file</label>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="call_to_action">Choose call to action Tap</label>
                                    <select class="form-control" id="call_to_action">
                                        <option>Apply Now</option>
                                        <option>Book Now</option>
                                        <option>Get Now</option>
                                        <option>More</option>                                        
                                    </select>
                                </div>
                                <div class="form-group area-target-drop-main">
                                    <label for="target_audience">Area of target audience</label>
                                    <div class="form-control">Select area of target audience</div>
                                    <div class="area-target-drop-section" id="target_audience" >
                                        Google Map
                                    </div>
                                </div>
                                <div class="audience-gender-bx">
                                    <h3>Select Gender</h3>
                                    <fieldset>                       
                                        <div class="gender-chk-bx">
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" id="gender" checked value="M">
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
                                                <input type="checkbox" id="gender" checked value="F">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                                <span class="">Female</span>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>                                    
                                <div class="audience-gender-bx Age-bx">
                                    <h3>Age</h3>                               
                                    <div class="range-t input-bx">
                                        <div id="slider-price-range" class="slider-rang"></div>
                                        <div class="amount-no" id="slider_price_range_txt"></div>
                                    </div>                              
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="start_date">Start Date</label>
                                            <input id="start_date" name="start_date" placeholder="Select Pickup Date" type='text' class="form-control pickadate" />
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="end_date">End Date</label>
                                            <input id="end_date" name="end_date" placeholder="Select End Date " type='text' class="form-control pickadate" />
                                        </div>
                                    </div>
                                </div>
                                                                    
                                <div class="form-group">
                                    <label for="note">Add Note</label>
                                    <textarea class="form-control" id="note" name="note" rows="2" placeholder="Enter Note"></textarea>
                                </div>                                
                            </div>                   
                        </div>
                    </fieldset>

                    <!-- Step 2 -->
                    <h6>Step 2</h6>
                    <fieldset>
                        <div class="twitter-step-section">        
                            <div class="creadte-ad-frm">
                                <div class="form-group">
                                    <label for="account_username">Username / Email used for Snapchat account</label>
                                    <input type="text" placeholder="Enter Username Name" class="form-control" id="account_username" name="account_username">
                                </div>                    
                                <div class="form-group">
                                    <label for="emailAddress1">Snapchat account password</label>
                                    <input type="password" placeholder="Enter Password" class="form-control"  id="account_password" name="account_password">
                                </div>
                                <div class="form-group bud-sar-padding">
                                    <label for="emailAddress1">Budget</label>
                                    <input type="text" placeholder="Enter Budget" class="form-control" id="campaign_budget" name="campaign_budget">
                                    <span class="budget-sar">SAR</span>
                                </div>                         
                            </div>   
                        </div>

                        <div class="estamations-from-bx">
                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">Estamated Reach</div>
                                <div class="reach-click"><i class="feather icon-users"></i> 40000 - 50000</div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">Service fees </div>
                                <div class="reach-click"> SAR 10</div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">VAT 15%</div>
                                <div class="reach-click"> SAR 40</div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="Estamations-left-right-bx">
                                <div class="reach-people">Total</div>
                                <div class="reach-click"> SAR 500</div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </fieldset>             
                </form>
            </div>
            <div class="ad-prive-bx preview-ads-mobile">  
                <img src="{{url('/')}}/public/assets/images/logo/mobile.png" alt="" class="mobile-bg-img"/>
                <img src="{{url('/')}}/public/assets/images/logo/mobile-priview-img.jpg" alt=""/> 
                <div class="brand-name-section-main">
                    <div class="brand-name-section">
                        Snapchat Ad Preview
                    </div>
                    <div class="heading-section">
                        Lorem ipsum
                    </div>
                </div>    
                <div class="add-prive-btn">
                    <a href="javascript:void(0);" class="btn-add-prive">Apply Now</a>
                </div>           
            </div>
        </div>
    </div>
</div>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Theme CSS-->
    
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/colors.css">    
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/themes/semi-dark-layout.css">
    <!-- BEGIN: Page CSS-->
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
      <link rel="stylesheet" href="/resources/demos/style.css">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END: Custom CSS-->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/jquery-1.11.3.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/bootstrap.min.js"></script>
    <!-- BEGIN: Vendor JS-->
    <script src="{{url('/')}}/public/assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="{{url('/')}}/public/assets/js/core/app-menu.js"></script>
    <script src="{{url('/')}}/public/assets/js/core/app.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/components.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/pages/app-user.js"></script> 
    <script src="{{url('/')}}/public/assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/forms/wizard-steps.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/jquery-ui.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/jquery.ui.touch-punch.min.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/forms/number-input.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
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
</script>

<script>
    $(".area-target-drop-main").on("click", function(){
        $(".area-target-drop-section").slideToggle("slow");
    });
</script>

    @endsection

    
