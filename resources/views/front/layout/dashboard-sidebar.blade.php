<?php 
    $userData = [];
    $userData = getLoggedUserData(); 
    ?>
<div id="left-menu">
        <!-- BEGIN: Main Menu-->
        <div class="left-menu-section-main" data-scroll-to-active="true">
            <div class="navbar-header">                
                <a class="navbar-brand" href="{{url('/')}}/user/dashboard/">                    
                    <img src="{{url('/')}}/public/assets/images/logo/logo.png" alt="">                    
                </a>                
            </div>
            <div class="shadow-bottom"></div>
            <div class="main-menu-content">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                    <li class=" nav-item"><a href="{{url('/')}}/user/dashboard/"><i class="fal fa-tachometer-alt-fast"></i><span class="menu-title" data-i18n="Email">Dashboard</span></a></li>


                    
                <?php 
                    if($userData['business_type']==1){ // commercial ?>

                    <li class=" nav-item"><a href="javascript:void(0);" class="nav-item-link"><i class="fal fa-briefcase"></i><span class="menu-title" data-i18n="User">Business</span></a>
                        <ul class="menu-content">
                            <li><a href="{{url('/')}}/user/business/"><i class="feather icon-circle"></i><span class="menu-item">Business</span></a></li>
                            <li><a href="{{url('/')}}/user/business-user/"><i class="feather icon-circle"></i><span class="menu-item">Business Team</span></a></li>
                        </ul>
                    </li>


                    <li class=" nav-item"><a href="javascript:void(0);" class="nav-item-link"><i class="fal fa-user-cog"></i><span class="menu-title" data-i18n="User">Permissions</span></a>
                        <ul class="menu-content">
                            <li><a href="{{url('/')}}/user/role/"><i class="feather icon-circle"></i><span class="menu-item">User Role</span></a></li>
                        </ul>
                    </li>

                <?php } ?>




                    <li class=" nav-item"><a href="javascript:void(0);" class="nav-item-link"><i class="fal fa-video-plus"></i><span class="menu-title" data-i18n="User">Create Ads</span> <!-- <i class="fal fa-angle-down"></i> --></a>                    
                        <ul class="menu-content">
                            <li><a href="{{url('/')}}/user/create-ads"><i class="feather icon-circle"></i><span class="menu-item">Twitter</span></a></li>
                            <li><a href="{{url('/')}}/user/snapchat"><i class="feather icon-circle"></i><span class="menu-item">Snapchat</span></a></li>
                            <li><a href="{{url('/')}}/user/create-ads"><i class="feather icon-circle"></i><span class="menu-item">Instagram</span></a></li>
                            <li><a href="{{url('/')}}/user/create-ads"><i class="feather icon-circle"></i><span class="menu-item">Facebook</span></a></li>
                            <li><a href="{{url('/')}}/user/create-ads"><i class="feather icon-circle"></i><span class="menu-item">linkedin</span></a></li>
                            <li><a href="{{url('/')}}/user/create-ads"><i class="feather icon-circle"></i><span class="menu-item">Tiktok</span></a></li>
                            <li><a href="{{url('/')}}/user/create-ads"><i class="feather icon-circle"></i><span class="menu-item">Google Ads</span></a></li>
                            <li><a href="{{url('/')}}/user/create-ads"><i class="feather icon-circle"></i><span class="menu-item">Youtube</span></a></li>
                        </ul>
                    </li>

                    


                    <li class=" nav-item"><a href="{{url('/')}}/user/campaign/"><i class="fal fa-bullhorn"></i><span class="menu-title" >Campaigns</span></a></li>
                    <li class=" nav-item"><a href="{{url('/')}}/user/report/"><i class="fal fa-file-invoice"></i><span class="menu-title" >Reports</span></a></li>
                    <li class=" nav-item"><a href="{{url('/')}}/user/wallet-list/"><i class="fal fa-wallet"></i><span class="menu-title" >Wallet</span></a></li>
                    <li class=" nav-item"><a href="{{url('/')}}/user/profile/"><i class="fal fa-user-cog"></i><span class="menu-title" >Profile Setting</span></a> </li>
                    <li class=" nav-item"><a href="javascript:void(0);" class="nav-item-link"><i class="fal fa-credit-card"></i><span class="menu-title"data-i18n="User">Billing & Payment</span> <!-- <i class="fal fa-angle-down"></i> --></a>                    
                        <ul class="menu-content">
                            <li><a href="{{url('/')}}/user/wallet/"><i class="feather icon-circle"></i><span class="menu-item">Wallet</span></a></li>
                            <li><a href="{{url('/')}}/user/transactions/"><i class="feather icon-circle"></i><span class="menu-item">Transactions</span></a></li>
                            <li><a href="{{url('/')}}/user/payment/"><i class="feather icon-circle"></i><span class="menu-item">Payment Method</span></a></li>

                        </ul>
                    </li>
                    <li class=" nav-item"><a href="javascript:void(0);" class="nav-item-link"><i class="fal fa-user-headset"></i><span class="menu-title"data-i18n="User">Help Center</span> <!-- <i class="fal fa-angle-down"></i> --></a>
                        <ul class="menu-content">
                            <li><a href="{{url('/')}}/user/faq/"><i class="feather icon-circle"></i><span class="menu-item">FAQ</span></a></li>
                            <li><a href="{{url('/')}}/user/contact/"><i class="feather icon-circle"></i><span class="menu-item">Contact Us</span></a></li>
                        </ul>
                    </li>                    
                    <li class=" nav-item language-for-mobile">
                        <a href="javascript:void(0);" class="nav-item-link"><i class="fal fa-globe-asia"></i><span class="menu-title"data-i18n="User">Language</span> <!-- <i class="fal fa-angle-down"></i> --></a>
                        <ul class="menu-content">
                            <li><a href="javascript:void(0);"><i class="feather icon-circle"></i><span class="menu-item">English</span></a></li>
                            <li><a href="javascript:void(0);"><i class="feather icon-circle"></i><span class="menu-item">Arabic</span></a></li>
                        </ul>
                    </li>      
                    <li class=" nav-item language-for-mobile">
                        <a href="javascript:void(0);" class="nav-item-link select-business-menu"><i class="fal fa-briefcase"></i><span class="menu-title"data-i18n="User"   data-toggle="modal"  data-target="#multi-business-select" >Select Business</span></a>
                        <!-- <ul class="menu-content">
                            <?php 
                            if($userData['business_type']==1){ // commercial 
                                $businessArr = [];
                                if(Session::has('BUSINESSID')){
                                    $businessArr = getBusinessDetails(Session::get('BUSINESSID'));
                                     if(sizeof($businessArr) == 0){
                                       $businessArr['business_name'] ='Switch Business';
                                    }
                                }
                                //echo  getActiveBusinessList()['mobileDD'];
                            } ?>  
                        </ul> -->
                    </li>    
                    <li class=" nav-item"><a href="{{url('/')}}/logout"><i class="fal fa-sign-out-alt"></i><span class="menu-title" >Logout</span></a></li>                
                    <li class="nav-item language-leftbar-section">
                        <a href="javascript:void(0);">
                            <div class="language-word">
                                <img src="{{url('/')}}/public/assets/images/logo/flag-arb.png"/> 
                                <span class="menu-title" >Language</span>
                            </div>
                            <div class="language-txt">
                                English
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>                    
                </ul>                            
            </div>
        </div>
        <!-- END: Main Menu-->
        <script>
            $(document).ready(function(){
                $(".nav-item-link").on("click", function(){                
                    $(this).siblings(".menu-content").slideToggle("slow");        
                    $(this).parent().siblings().find(".menu-content").slideUp("slow");
                    $(this).toggleClass("inner-menu-open");
                    $(this).parent().siblings().find(".nav-item-link").removeClass("inner-menu-open");
                });    
            });
            $(document).ready(function(){
                $(".select-business-menu").on("click", function(){   
                    $("body").removeClass("sidebar-open"); 
                });    
            });            
        </script>
    </div>  

