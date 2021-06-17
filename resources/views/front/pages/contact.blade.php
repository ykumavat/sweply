@extends('front.layout.dashboard-master')    
@section('main_content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            
            <div class="content-body">
              <div class="main-bck-section contact-us-page">

                <div class="send-us-email-section-main">
                    <div class="container">
                        <div class="send-us-email-head">
                            Send us an Email
                        </div>
                        <div class="send-email-semihead">
                            Behind Every Great Success Is a Great Support Team
                        </div>                       
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">                        
                                <div class="image-text">                                   
                                    <img src="{{url('/')}}/public/assets/images/logo/contact-us-info-icon1.png" alt=""/>
                                    <h3>Administrative Office</h3>
                                    <div class="contact-details">
                                        Intersection of King Abdul Aziz with Imam Riyadh: 11361 
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">                        
                                <div class="image-text">
                                    <img src="{{url('/')}}/public/assets/images/logo/contact-us-info-icon2.png" alt=""/>
                                    <h3>Whatsapp</h3>
                                    <div class="contact-details">
                                        +966 557387151
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">                        
                                <div class="image-text last-box">
                                    <img src="{{url('/')}}/public/assets/images/logo/contact-us-info-icon3.png" alt=""/>
                                    <h3>Email</h3>
                                    <div class="contact-details">
                                        support@sweply.com
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="contact-us-form">
                    <div class="container">
                        <div class="easy-steps-head">
                            Stay in Touch
                            <div class="heading-bottom-border"></div>
                        </div>
                        <div class="easy-steps-content-section">
                            Behind Every Great Success Is a Great <br>Support Team
                        </div>
                        <div class="contact-us-form-section">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="emailAddress1">Full Name</label>
                                        <input type="text" placeholder="Enter Your Full Name" class="form-control" id="emailAddress1">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="emailAddress1">Email Address</label>
                                        <input type="text" placeholder="Enter Your Full Name" class="form-control" id="emailAddress1">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="emailAddress1">Mobile Number</label>
                                        <input type="text" placeholder="Enter Your Mobile Number" class="form-control" id="emailAddress1">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="accountSelect">Contact For</label>
                                        <select class="form-control" id="accountSelect">
                                            <option>Test</option>
                                            <option>Test</option>
                                            <option>Test</option>
                                                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-12">
                                    <div class="form-group">
                                        <label for="emailAddress1">Message</label>
                                        <textarea class="form-control" id="basicTextarea" rows="4" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="create-btn contact-us-btn"><a href="create-ads.html">Submit</a></div>
                           
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>





              </div>               
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @endsection

