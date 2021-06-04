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
                            <h3>Create Ads</h3>
                            <p>How would you like to create today?</p>
                        </div>

                        <div class="all-social-box-width">

                            <?php
                            $attribute = "'channel_id'";
                            if(isset($channel_list)){
                                foreach($channel_list as $channel){
                                    echo '<div class="select-ads-type">
                                        <a href="'.url('/').'/user/'.$channel->url_slug.'"  channel-id="'.$channel->id.'"   onclick="setSessionAttribute('.$attribute.','.$channel->id.')" >
                                            <img src="'.url('/').'/uploads/channel_image/'.$channel->channel_image.'" alt="" />
                                            <h2>'.$channel->channel_name.'</h2>
                                        </a>
                                    </div>'; 
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </section>
                <!-- page users view end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @endsection
