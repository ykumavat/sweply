@extends('front.layout.dashboard-master')    
@section('main_content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- page users view start -->
                <section class="page-users-view">                    
                    <div class="type-boxes">
                        <div class="title-bx">
                            <h3>Test Page</h3>
                            <p>Yahooooooo!</p>
                        </div>
                        <div class="all-social-box-width">
                            <div class="select-ads-type">
                                <a href="{{url('/')}}/user/snapchat">
                                    <img src="{{url('/')}}/public/assets/images/logo/ads-6-snapchat.svg" alt="" />
                                    <h2>Yogesh</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- page users view end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @endsection
