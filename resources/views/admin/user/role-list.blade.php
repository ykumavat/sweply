<?php /*<!DOCTYPE html>
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
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/bootstrap.min.css">
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

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">   
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
											<span class="notification-title">In Your Cart</span>
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
														<span class="align-middle d-block">
															1 x 299 SAR
														</span>
														<i class="remove-cart-item feather icon-x danger font-medium-1"></i>
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
											<h3 class="white">5 New</h3>
											<span class="notification-title">App Notifications</span>                                        
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
													<small class="notification-text"> Are your going to meet me tonight?</small>
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
										<span class="user-name text-bold-600">Ibrahim Mutahar</span>
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
										<i class="feather icon-mail"></i> My Inbox
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
		<!---->
		<div class="content-body">
			<div>				
				<div class="card mb-0">					
					<div class="m-2">
						<div class="row">							
							<div class="users-list-filter col-md-12 col-12">
								<form>
									<div class="row">
										<div class="col-12 col-sm-6 col-lg-3">
											<fieldset class="form-group">
												<select class="form-control" id="users-list-role">
													<option value="">Select Role</option>
													<option value="">All</option>
													<option value="user">User</option>
													<option value="staff">Staff</option>
												</select>
											</fieldset>
										</div>
										<div class="col-12 col-sm-6 col-lg-3">
											<!-- <label for="users-list-status">Plan</label> -->
											<fieldset class="form-group">
												<select class="form-control" id="users-list-status">
													<option value="">Select Plan</option>
													<option value="">All</option>
													<option value="Active">Active</option>
													<option value="Blocked">Blocked</option>
													<option value="deactivated">Deactivated</option>
												</select>
											</fieldset>
										</div>
										<div class="col-12 col-sm-6 col-lg-3">
											<!-- <label for="users-list-verified">Status</label> -->
											<fieldset class="form-group">
												<select class="form-control" id="users-list-verified">
													<option value="">Select Status</option>
													<option value="">All</option>
													<option value="true">Yes</option>
													<option value="false">No</option>
												</select>
											</fieldset>
										</div>                                    
									</div>
								</form>
							</div>	
							<div class="col-md-12 col-12">
								<div class="d-flex align-items-center justify-content-end">
									<button type="button" class="btn btn-primary add-form-btn"  data-toggle="modal" data-target="#inlineForm">
										<span class="text-nowrap">Add Roll</span>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="position-relative table-responsive">
						<table class="table b-table">							
							<thead role="rowgroup" class="">								
								<tr role="row" class="">
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="1" aria-sort="none" class="">
										<div>User</div>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="2" aria-sort="none" class="">
										<div>Email</div>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
										<div>Role</div>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="4" aria-sort="none" class="">
										<div>Plan</div>
									</th>
									<th role="columnheader" scope="col" tabindex="0" aria-colindex="5" aria-sort="none" class="">
										<div>Status</div>
									</th>
									<th role="columnheader" scope="col" aria-colindex="6" class="">
										<div>Actions</div>
									</th>
								</tr>
							</thead>
							<tbody role="rowgroup">
								<!---->
								<tr role="row" class="">
									<td aria-colindex="1" role="cell" class="">
										<div class="media">
											<div class="media-aside align-self-center">
												<a href="{{url('/')}}/admin/user/view" class="b-avatar badge-light-info rounded-circle" target="_self" style="width: 32px; height: 32px;">
													<span class="b-avatar-img">
														<img src="{{url('/')}}/public/assets/images/logo/table-img.png" alt="avatar">
													</span>
												</a>
											</div>
											<div class="media-body">
												<a href="{{url('/')}}/admin/user/view" class="font-weight-bold d-block text-nowrap" target="_self"> Beverlie Krabbe 
												</a>
												<small class="text-muted">@bkrabbe1d</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">bkrabbe1d@home.pl</td>
									<td aria-colindex="3" role="cell" class="">
										<div class="text-nowrap">
											<svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-edit-2 text-info">
												<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
											</svg><span class="align-text-top text-capitalize">editor</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Company</td>
									<td aria-colindex="5" role="cell" class=""><span class="badge text-capitalize badge-light-success badge-pill"> active </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle cx="12" cy="12" r="1"></circle>
														<circle cx="12" cy="5" r="1"></circle>
														<circle cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
														<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
														<polyline points="14 2 14 8 20 8"></polyline>
														<line x1="16" y1="13" x2="8" y2="13"></line>
														<line x1="16" y1="17" x2="8" y2="17"></line>
														<polyline points="10 9 9 9 8 9"></polyline>
													</svg><span class="align-middle ml-50">Details</span>
												</a>											
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
														<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
														<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
													</svg><span class="align-middle ml-50">Edit</span>
												</a>
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
														<polyline points="3 6 5 6 21 6"></polyline>
														<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													</svg><span class="align-middle ml-50">Delete</span>
												</a>												
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_49" data-pk="49" class="">
									<td aria-colindex="1" role="cell" class="">
										<div class="media">
											<div class="media-aside align-self-center"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/49" class="b-avatar badge-light-primary rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>PD</span></span><!----></a>
											</div>
											<div class="media-body"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/49" class="font-weight-bold d-block text-nowrap" target="_self"> Paulie Durber </a><small class="text-muted">@pdurber1c</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">pdurber1c@gov.uk</td>
									<td aria-colindex="3" role="cell" class="">
										<div class="text-nowrap">
											<svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-user text-primary">
												<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
												<circle cx="12" cy="7" r="4"></circle>
											</svg><span class="align-text-top text-capitalize">subscriber</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Team</td>
									<td aria-colindex="5" role="cell" class=""><span class="badge text-capitalize badge-light-secondary badge-pill"> inactive </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle cx="12" cy="12" r="1"></circle>
														<circle cx="12" cy="5" r="1"></circle>
														<circle cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
														<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
														<polyline points="14 2 14 8 20 8"></polyline>
														<line x1="16" y1="13" x2="8" y2="13"></line>
														<line x1="16" y1="17" x2="8" y2="17"></line>
														<polyline points="10 9 9 9 8 9"></polyline>
													</svg><span class="align-middle ml-50">Details</span>
												</a>											
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
														<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
														<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
													</svg><span class="align-middle ml-50">Edit</span>
												</a>
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
														<polyline points="3 6 5 6 21 6"></polyline>
														<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													</svg><span class="align-middle ml-50">Delete</span>
												</a>												
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_48" data-pk="48" class="">
									<td aria-colindex="1" role="cell" class="">
										<div class="media">
											<div class="media-aside align-self-center"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/48" class="b-avatar badge-light-danger rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>OW</span></span><!----></a>
											</div>
											<div class="media-body"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/48" class="font-weight-bold d-block text-nowrap" target="_self"> Onfre Wind </a><small class="text-muted">@owind1b</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">owind1b@yandex.ru</td>
									<td aria-colindex="3" role="cell" class="">
										<div class="text-nowrap">
											<svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-server text-danger">
												<rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
												<rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
												<line x1="6" y1="6" x2="6.01" y2="6"></line>
												<line x1="6" y1="18" x2="6.01" y2="18"></line>
											</svg><span class="align-text-top text-capitalize">admin</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Basic</td>
									<td aria-colindex="5" role="cell" class=""><span class="badge text-capitalize badge-light-warning badge-pill"> pending </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle cx="12" cy="12" r="1"></circle>
														<circle cx="12" cy="5" r="1"></circle>
														<circle cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
														<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
														<polyline points="14 2 14 8 20 8"></polyline>
														<line x1="16" y1="13" x2="8" y2="13"></line>
														<line x1="16" y1="17" x2="8" y2="17"></line>
														<polyline points="10 9 9 9 8 9"></polyline>
													</svg><span class="align-middle ml-50">Details</span>
												</a>											
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
														<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
														<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
													</svg><span class="align-middle ml-50">Edit</span>
												</a>
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
														<polyline points="3 6 5 6 21 6"></polyline>
														<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													</svg><span class="align-middle ml-50">Delete</span>
												</a>												
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_47" data-pk="47" class="">
									<td aria-colindex="1" role="cell" class="">
										<div class="media">
											<div class="media-aside align-self-center"><a href="{{url('/')}}/admin/user/view" class="b-avatar badge-light-danger rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-img"><img src="{{url('/')}}/public/assets/images/logo/table-img.png" alt="avatar"></span><!----></a>
											</div>
											<div class="media-body"><a href="{{url('/')}}/admin/user/view" class="font-weight-bold d-block text-nowrap" target="_self"> Karena Courtliff </a><small class="text-muted">@kcourtliff1a</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">kcourtliff1a@bbc.co.uk</td>
									<td aria-colindex="3" role="cell" class="">
										<div class="text-nowrap">
											<svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-server text-danger">
												<rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
												<rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
												<line x1="6" y1="6" x2="6.01" y2="6"></line>
												<line x1="6" y1="18" x2="6.01" y2="18"></line>
											</svg><span class="align-text-top text-capitalize">admin</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Basic</td>
									<td aria-colindex="5" role="cell" class=""><span class="badge text-capitalize badge-light-success badge-pill"> active </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle cx="12" cy="12" r="1"></circle>
														<circle cx="12" cy="5" r="1"></circle>
														<circle cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
														<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
														<polyline points="14 2 14 8 20 8"></polyline>
														<line x1="16" y1="13" x2="8" y2="13"></line>
														<line x1="16" y1="17" x2="8" y2="17"></line>
														<polyline points="10 9 9 9 8 9"></polyline>
													</svg><span class="align-middle ml-50">Details</span>
												</a>											
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
														<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
														<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
													</svg><span class="align-middle ml-50">Edit</span>
												</a>
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
														<polyline points="3 6 5 6 21 6"></polyline>
														<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													</svg><span class="align-middle ml-50">Delete</span>
												</a>												
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_46" data-pk="46" class="">
									<td aria-colindex="1" role="cell" class="">
										<div class="media">
											<div class="media-aside align-self-center"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/46" class="b-avatar badge-light-success rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>SO</span></span><!----></a>
											</div>
											<div class="media-body"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/46" class="font-weight-bold d-block text-nowrap" target="_self"> Saunder Offner </a><small class="text-muted">@soffner19</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">soffner19@mac.com</td>
									<td aria-colindex="3" role="cell" class="">
										<div class="text-nowrap">
											<svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-database text-success">
												<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
												<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
												<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
											</svg><span class="align-text-top text-capitalize">maintainer</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Enterprise</td>
									<td aria-colindex="5" role="cell" class=""><span class="badge text-capitalize badge-light-warning badge-pill"> pending </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle cx="12" cy="12" r="1"></circle>
														<circle cx="12" cy="5" r="1"></circle>
														<circle cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
														<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
														<polyline points="14 2 14 8 20 8"></polyline>
														<line x1="16" y1="13" x2="8" y2="13"></line>
														<line x1="16" y1="17" x2="8" y2="17"></line>
														<polyline points="10 9 9 9 8 9"></polyline>
													</svg><span class="align-middle ml-50">Details</span>
												</a>											
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
														<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
														<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
													</svg><span class="align-middle ml-50">Edit</span>
												</a>
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
														<polyline points="3 6 5 6 21 6"></polyline>
														<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													</svg><span class="align-middle ml-50">Delete</span>
												</a>												
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_45" data-pk="45" class="">
									<td aria-colindex="1" role="cell" class="">
										<div class="media">
											<div class="media-aside align-self-center"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/45" class="b-avatar badge-light-primary rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-img"><img src="{{url('/')}}/public/assets/images/logo/table-img.png" alt="avatar"></span><!----></a>
											</div>
											<div class="media-body"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/45" class="font-weight-bold d-block text-nowrap" target="_self"> Corrie Perot </a><small class="text-muted">@cperot18</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">cperot18@goo.ne.jp</td>
									<td aria-colindex="3" role="cell" class="">
										<div class="text-nowrap">
											<svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-user text-primary">
												<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
												<circle cx="12" cy="7" r="4"></circle>
											</svg><span class="align-text-top text-capitalize">subscriber</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Team</td>
									<td aria-colindex="5" role="cell" class=""><span class="badge text-capitalize badge-light-warning badge-pill"> pending </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle cx="12" cy="12" r="1"></circle>
														<circle cx="12" cy="5" r="1"></circle>
														<circle cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
														<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
														<polyline points="14 2 14 8 20 8"></polyline>
														<line x1="16" y1="13" x2="8" y2="13"></line>
														<line x1="16" y1="17" x2="8" y2="17"></line>
														<polyline points="10 9 9 9 8 9"></polyline>
													</svg><span class="align-middle ml-50">Details</span>
												</a>											
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
														<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
														<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
													</svg><span class="align-middle ml-50">Edit</span>
												</a>
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
														<polyline points="3 6 5 6 21 6"></polyline>
														<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													</svg><span class="align-middle ml-50">Delete</span>
												</a>												
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_44" data-pk="44" class="">
									<td aria-colindex="1" role="cell" class="">
										<div class="media">
											<div class="media-aside align-self-center"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/44" class="b-avatar badge-light-warning rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>VK</span></span><!----></a>
											</div>
											<div class="media-body"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/44" class="font-weight-bold d-block text-nowrap" target="_self"> Vladamir Koschek </a><small class="text-muted">@vkoschek17</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">vkoschek17@abc.net.au</td>
									<td aria-colindex="3" role="cell" class="">
										<div class="text-nowrap">
											<svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-settings text-warning">
												<circle cx="12" cy="12" r="3"></circle>
												<path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
											</svg><span class="align-text-top text-capitalize">author</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Team</td>
									<td aria-colindex="5" role="cell" class=""><span class="badge text-capitalize badge-light-success badge-pill"> active </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle cx="12" cy="12" r="1"></circle>
														<circle cx="12" cy="5" r="1"></circle>
														<circle cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
														<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
														<polyline points="14 2 14 8 20 8"></polyline>
														<line x1="16" y1="13" x2="8" y2="13"></line>
														<line x1="16" y1="17" x2="8" y2="17"></line>
														<polyline points="10 9 9 9 8 9"></polyline>
													</svg><span class="align-middle ml-50">Details</span>
												</a>											
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
														<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
														<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
													</svg><span class="align-middle ml-50">Edit</span>
												</a>
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
														<polyline points="3 6 5 6 21 6"></polyline>
														<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													</svg><span class="align-middle ml-50">Delete</span>
												</a>												
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_43" data-pk="43" class="">
									<td aria-colindex="1" role="cell" class="">
										<div class="media">
											<div class="media-aside align-self-center"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/43" class="b-avatar badge-light-danger rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>MM</span></span><!----></a>
											</div>
											<div class="media-body"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/43" class="font-weight-bold d-block text-nowrap" target="_self"> Micaela McNirlan </a><small class="text-muted">@mmcnirlan16</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">mmcnirlan16@hc360.com</td>
									<td aria-colindex="3" role="cell" class="">
										<div class="text-nowrap">
											<svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-server text-danger">
												<rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
												<rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
												<line x1="6" y1="6" x2="6.01" y2="6"></line>
												<line x1="6" y1="18" x2="6.01" y2="18"></line>
											</svg><span class="align-text-top text-capitalize">admin</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Basic</td>
									<td aria-colindex="5" role="cell" class=""><span class="badge text-capitalize badge-light-secondary badge-pill"> inactive </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle cx="12" cy="12" r="1"></circle>
														<circle cx="12" cy="5" r="1"></circle>
														<circle cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
														<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
														<polyline points="14 2 14 8 20 8"></polyline>
														<line x1="16" y1="13" x2="8" y2="13"></line>
														<line x1="16" y1="17" x2="8" y2="17"></line>
														<polyline points="10 9 9 9 8 9"></polyline>
													</svg><span class="align-middle ml-50">Details</span>
												</a>											
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
														<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
														<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
													</svg><span class="align-middle ml-50">Edit</span>
												</a>
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
														<polyline points="3 6 5 6 21 6"></polyline>
														<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													</svg><span class="align-middle ml-50">Delete</span>
												</a>												
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_42" data-pk="42" class="">
									<td aria-colindex="1" role="cell" class="">
										<div class="media">
											<div class="media-aside align-self-center"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/42" class="b-avatar badge-light-info rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>BR</span></span><!----></a>
											</div>
											<div class="media-body"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/42" class="font-weight-bold d-block text-nowrap" target="_self"> Benedetto Rossiter </a><small class="text-muted">@brossiter15</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">brossiter15@craigslist.org</td>
									<td aria-colindex="3" role="cell" class="">
										<div class="text-nowrap">
											<svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-edit-2 text-info">
												<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
											</svg><span class="align-text-top text-capitalize">editor</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Team</td>
									<td aria-colindex="5" role="cell" class=""><span class="badge text-capitalize badge-light-secondary badge-pill"> inactive </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle cx="12" cy="12" r="1"></circle>
														<circle cx="12" cy="5" r="1"></circle>
														<circle cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
														<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
														<polyline points="14 2 14 8 20 8"></polyline>
														<line x1="16" y1="13" x2="8" y2="13"></line>
														<line x1="16" y1="17" x2="8" y2="17"></line>
														<polyline points="10 9 9 9 8 9"></polyline>
													</svg><span class="align-middle ml-50">Details</span>
												</a>											
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
														<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
														<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
													</svg><span class="align-middle ml-50">Edit</span>
												</a>
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
														<polyline points="3 6 5 6 21 6"></polyline>
														<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													</svg><span class="align-middle ml-50">Delete</span>
												</a>												
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" id="__BVID__648__row_41" data-pk="41" class="">
									<td aria-colindex="1" role="cell" class="">
										<div class="media">
											<div class="media-aside align-self-center"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/41" class="b-avatar badge-light-success rounded-circle" target="_self" style="width: 32px; height: 32px;"><span class="b-avatar-text" style="font-size: calc(12.8px);"><span>EB</span></span><!----></a>
											</div>
											<div class="media-body"><a href="/demo/vuexy-vuejs-admin-dashboard-template/demo-1/apps/users/view/41" class="font-weight-bold d-block text-nowrap" target="_self"> Edwina Baldetti </a><small class="text-muted">@ebaldetti14</small>
											</div>
										</div>
									</td>
									<td aria-colindex="2" role="cell" class="">ebaldetti14@theguardian.com</td>
									<td aria-colindex="3" role="cell" class="">
										<div class="text-nowrap">
											<svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-50 feather feather-database text-success">
												<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
												<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
												<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
											</svg><span class="align-text-top text-capitalize">maintainer</span>
										</div>
									</td>
									<td aria-colindex="4" role="cell" class="">Team</td>
									<td aria-colindex="5" role="cell" class=""><span class="badge text-capitalize badge-light-warning badge-pill"> pending </span>
									</td>
									<td aria-colindex="6" role="cell" class="">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle text-body feather feather-more-vertical">
														<circle cx="12" cy="12" r="1"></circle>
														<circle cx="12" cy="5" r="1"></circle>
														<circle cx="12" cy="19" r="1"></circle>
												</svg>
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
														<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
														<polyline points="14 2 14 8 20 8"></polyline>
														<line x1="16" y1="13" x2="8" y2="13"></line>
														<line x1="16" y1="17" x2="8" y2="17"></line>
														<polyline points="10 9 9 9 8 9"></polyline>
													</svg><span class="align-middle ml-50">Details</span>
												</a>											
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
														<path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
														<path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
													</svg><span class="align-middle ml-50">Edit</span>
												</a>
												<a href="#" class="dropdown-item">
													<svg xmlns="http://www.w3.org/2000/svg" width="14px" height="14px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
														<polyline points="3 6 5 6 21 6"></polyline>
														<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
													</svg><span class="align-middle ml-50">Delete</span>
												</a>												
											</div>
										</div>
									</td>
								</tr>								
							</tbody>							
						</table>
					</div>
					<div class="mx-2 mb-2">
						<div class="row">
							<div class="d-flex align-items-center justify-content-center justify-content-sm-start col-sm-6 col-12"><span class="text-muted">Showing 1 to 10 of 50 entries</span>
							</div>							
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade text-left defaultSize-modal modal-padding-change" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel33">Add Role</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="#">
				<div class="modal-body">
					<label>Role Name: </label>
					<div class="form-group">
						<input type="text" placeholder="Email Address" class="form-control">
					</div>					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- BEGIN: Vendor JS-->
<script src="{{url('/')}}/public/assets/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->
    @endsection
