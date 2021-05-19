<?php /*
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard</title>
    <!-- <link rel="apple-touch-icon" href="{{url('/')}}/public/assets/images/ico/apple-icon-120.png"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/public/assets/images/logo/Favicon.svg">
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet"> -->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/components.css?v=1.0">
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

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/unimark-user.css">

    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<!-- END: Head-->
<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">   
    <div id="header">
		<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        	<div class="navbar-wrapper">
        		<div class="navbar-container content">
            		<div class="navbar-collapse" id="navbar-mobile">
                		<div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    		<ul class="nav navbar-nav">
                        		<li class="nav-item mobile-menu d-xl-none mr-auto">
									<a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
										<i class="ficon feather icon-menu"></i>
									</a>
								</li>
                    		</ul>
							<ul class="nav navbar-nav">
								<li>
									<div class="create-btn"><a href="create-ads.html">Create Ads</a></div>
								</li>
							</ul>
						</div>
                		<ul class="nav navbar-nav float-right">
							<li class="dropdown dropdown-language nav-item">
								<a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="selected-language">
										<img src="{{url('/')}}/public/assets/images/logo/lan-arabic.svg"/> <span class="select-language-txt">English</span>
									</span>
								</a>
								<div class="dropdown-menu" aria-labelledby="dropdown-flag">
									<a class="dropdown-item" href="#" data-language="en">
										<img src="{{url('/')}}/public/assets/images/logo/lan-arabic.svg"/> <span class="select-language-txt">English</span>
									</a>
									<a class="dropdown-item" href="#" data-language="fr">
										<img src="{{url('/')}}/public/assets/images/logo/lan-arabic.svg"/> <span class="select-language-txt">Arabic</span>
									</a>
								</div>
							</li>
                    		<li class="dropdown dropdown-notification nav-item">
								<a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
									<i class="ficon feather icon-shopping-cart"></i>
									<span class="badge badge-pill badge-primary badge-up cart-item-count">6</span>
								</a>
                        		<ul class="dropdown-menu dropdown-menu-media dropdown-cart dropdown-menu-right">
									<li class="dropdown-menu-header">
										<div class="dropdown-header m-0 p-2">
											<h3 class="white">
												<span class="cart-item-count">6</span>
												<span class="mx-50">Items</span>
											</h3>
											<span class="notification-title">
												In Your Cart
											</span>
										</div>
									</li>
                            		<li class="scrollable-container media-list">
										<a class="cart-item" href="app-ecommerce-details.html">
                                    		<div class="media">
                                        		<div class="media-left d-flex justify-content-center align-items-center">
                                            		<img src="{{url('/')}}/public/assets/images/logo/4.png" width="75" alt="Cart Item">
												</div>
                                        		<div class="media-body">
													<span class="item-title text-truncate text-bold-500 d-block mb-50">
														Apple -Apple Watch Series 1 42mm Space Gray
													</span>
													<span class="item-desc font-small-2 text-truncate d-block">
														 Durable,lightweight aluminum cases in silver,
													</span>
													<div class="d-flex justify-content-between align-items-center mt-1">
														<span class="align-middle d-block">1 x 299 SAR</span><i class="remove-cart-item feather icon-x danger font-medium-1"></i>
													</div>
												</div>
                                    		</div>
										</a>
									</li>
                            		<li class="dropdown-menu-footer">
										<a class="dropdown-item p-1 text-center text-primary" href="app-ecommerce-checkout.html">
											<i class="feather icon-shopping-cart align-middle"></i>
											<span class="align-middle text-bold-600">Checkout</span>
										</a>
									</li>
                            		<li class="empty-cart d-none p-2">Your Cart Is Empty.</li>
                        		</ul>
                    		</li>
                    		<li class="dropdown dropdown-notification nav-item">
								<a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
									<i class="ficon feather icon-bell"></i>
									<span class="badge badge-pill badge-primary badge-up">5</span>
								</a>
								<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
									<li class="dropdown-menu-header">
										<div class="dropdown-header m-0 p-2">
											<h3 class="white">5 New</h3><span class="notification-title">App Notifications</span>
										</div>
									</li>
									<li class="scrollable-container media-list">
										<a class="d-flex justify-content-between" href="javascript:void(0)">
											<div class="media d-flex align-items-start">
												<div class="media-left">
													<i class="feather icon-plus-square font-medium-5 primary"></i>
												</div>
												<div class="media-body">
													<h6 class="primary media-heading">You have new order!</h6>
													<small class="notification-text"> Are your going to meet me	tonight?</small>
												</div>
												<small>
													<time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago</time>
												</small>  
											</div>
										</a>
									</li>
									<li class="dropdown-menu-footer">
										<a class="dropdown-item p-1 text-center" href="javascript:void(0)">View all notifications</a>
									</li>
								</ul>
							</li>
							<li class="dropdown dropdown-user nav-item">
								<a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
									<div class="user-nav d-sm-flex d-none">
										<span class="user-name text-bold-600">
											Ibrahim Mutahar
										</span>
										<span class="user-status">Available</span>
									</div>
									<span>
										<img class="round" src="{{url('/')}}/public/assets/images/logo/avatar-s-1.png" alt="avatar" height="40" width="40">
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="page-user-profile.html">
										<i class="feather icon-user"></i> Edit Profile
									</a>
									<a class="dropdown-item" href="app-email.html">
										<i class="feather icon-mail"></i> 
										My Inbox
									</a>
									<a class="dropdown-item" href="app-todo.html">
										<i class="feather icon-check-square"></i> Task
									</a>
									<a class="dropdown-item" href="app-chat.html">
										<i class="feather icon-message-square"></i> Chats
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="login.html">
										<i class="feather icon-power"></i> Logout
									</a>
								</div>
							</li>
                		</ul>
            		</div>
       			</div>
    		</div>
		</nav>
    </div>  
    <div id="left-menu">
        <!-- BEGIN: Main Menu-->
        <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto">
                        <a class="navbar-brand" href="index.html">
                            <div class="brand-logo"><img src="{{url('/')}}/public/assets/images/logo/logo.png" alt="" /> </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <div class="main-menu-content">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" nav-item">
                        <a href="dashboard.html">
                            <i class="fal fa-tachometer-alt-fast"></i>
                            <span class="menu-title" data-i18n="Email">Dashboard</span>
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a href="#" class="nav-item-link">
                            <i class="fal fa-video-plus"></i>
                            <span class="menu-title" data-i18n="User">Create Ads</span>
                        </a>                    
                        <ul class="menu-content">
                            <li>
                                <a href="create-ads-twitter.html">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">Twitter</span>
                                </a>
                            </li>
                            <li>
                                <a href="create-ads-snapchat.html">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">Snapchat</span>
                                </a>
                            </li>
                            <li>
                                <a href="create-ads-privew-instagram.html">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">Instagram</span>
                                </a>
                            </li>
                            <li>
                                <a href="create-ads-facebook.html">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">linkedin</span>
                                </a>
                            </li>
                            <li>
                                <a href="create-ads-privew-tiktok.html">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">Tiktok</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">Google Ads</span>
                                </a>
                            </li>
                            <li>
                                <a href="create-ads-youtube.html">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">Youtube</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="create-ads.html">
                            <i class="fal fa-bullhorn"></i>
                            <span class="menu-title" >Campaigns</span>
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a href="report.html">
                            <i class="fal fa-file-invoice"></i>
                            <span class="menu-title" >Reports</span>
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a href="wallet.html">
                            <i class="fal fa-wallet"></i>
                            <span class="menu-title" >Wallet</span>
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a href="profile-setting.html">
                            <i class="fal fa-user-cog"></i>
                            <span class="menu-title" >Profile Setting</span>
                        </a> 
                    </li>
                    <li class=" nav-item">
                        <a href="#" class="nav-item-link">
                            <i class="fal fa-credit-card"></i>
                            <span class="menu-title"data-i18n="User">Billing & Payment</span> 
                        </a>                    
                        <ul class="menu-content">
                            <li>
                                <a href="#">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">Wallet</span>
                                </a>
                            </li>
                            <li>
                                <a href="transactions.html">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">Transactions</span>
                                </a>
                            </li>
                            <li>
                                <a href="payment-methods.html">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">Payment Method</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="#" class="nav-item-link">
                            <i class="fal fa-user-headset"></i>
                            <span class="menu-title"data-i18n="User">Help Center</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="faq.html">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">FAQ</span>
                                </a>
                            </li>
                            <li>
                                <a href="contact-us.html">
                                    <i class="feather icon-circle"></i>
                                    <span class="menu-item">Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/')}}/admin/user" class="nav-item-link">
                            <i class="fal fa-user"></i>
                            <span class="menu-title"data-i18n="User">Manage User</span> 
                        </a>                        
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Main Menu-->

        <!-- <script>
            $(".nav-item-link").on("click", function(){                
                $(this).siblings(".menu-content").slideToggle("slow");        
                $(this).parent().siblings().find(".menu-content").slideUp("slow");
            });    
        </script> -->
    </div>

*/ ?>

@extends('admin.layout.master')    
@section('main_content')
    <div class="app-content content">
	   <div class="content-overlay"></div>
	   <div class="header-navbar-shadow"></div>
	   <div class="content-wrapper">		
		<div class="content-body">
			<div>								
				<div class="row">					
					<div class="col-lg-12 col-12">
						<div class="card">							
							<div class="card-body">								
								<div class="row">
									<div class="col-lg-6 col-12">
										<h4 class="card-title">Permissions</h4>
										<h6 class="card-subtitle text-muted">
											Content Type
										</h6>
									</div>
									<div class="col-lg-6 col-12">
										<div class="d-flex align-items-center justify-content-end" style="margin-top: 15px">
											<select class="form-control" id="users-list-role">
												<option value="">All</option>
												<option value="user">User</option>
												<option value="staff">Staff</option>
											</select>                                    
										</div>
									</div>
								</div>																
							</div>
							<div class="mb-0 table-responsive">
								<table role="table" aria-busy="false" aria-colcount="5" class="table b-table table-striped" id="__BVID__874">		
									<thead role="rowgroup" class="">
										<tr role="row" class="">
											<th role="columnheader" scope="col" aria-colindex="1" class="">
												<div>Module</div>
											</th>
											<th role="columnheader" scope="col" aria-colindex="2" class="">
												<div>Select All</div>
											</th>
											<th role="columnheader" scope="col" aria-colindex="3" class="">
												<div>Add</div>
											</th>
											<th role="columnheader" scope="col" aria-colindex="4" class="">
												<div>Edit</div>
											</th>
											<th role="columnheader" scope="col" aria-colindex="5" class="">
												<div>Delete</div>
											</th>
											<th role="columnheader" scope="col" aria-colindex="6" class="">
												<div>View</div>
											</th>
											<th role="columnheader" scope="col" aria-colindex="7" class="">
												<div>List</div>
											</th>
										</tr>
									</thead>
									<tbody role="rowgroup">
										<!---->
										<tr role="row" class="">
											<td aria-colindex="1" role="cell" class="">FAQ</td>
											<td aria-colindex="2" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="3" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="4" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="5" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="6" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="7" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
										</tr>
										<tr role="row" class="">
											<td aria-colindex="1" role="cell" class="">Blog post</td>
											<td aria-colindex="2" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="3" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="4" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="5" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="6" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="7" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
										</tr>
										<tr role="row" class="">
											<td aria-colindex="1" role="cell" class="">Author</td>
											<td aria-colindex="2" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="3" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="4" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="5" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="6" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="7" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
										</tr>
										<tr role="row" class="">
											<td aria-colindex="1" role="cell" class="">Contributor</td>
											<td aria-colindex="2" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="3" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="4" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="5" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="6" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="7" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
										</tr>
										<tr role="row" class="">
											<td aria-colindex="1" role="cell" class="">User</td>
											<td aria-colindex="2" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="3" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="4" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="5" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="6" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
											<td aria-colindex="7" role="cell" class="">
                                                <fieldset>
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" value="false">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </fieldset>
											</td>
										</tr>										
									</tbody>									
								</table>
								<button type="button" class="btn btn-primary" style="float: right;margin:0 15px 15px">
									<span class="text-nowrap">Set Permission</span>
								</button>
								<div class="clearfix"></div>
							</div>							
						</div>
					</div>					
				</div>				
			</div>
		</div>
	   </div>
    </div>
@endsection

