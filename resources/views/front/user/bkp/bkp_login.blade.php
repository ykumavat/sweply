@extends('front.layout.master')
@section('main_content')
<div class="breadcurmb-section">
        <div class="container">
            <div class="breadcurmb-section-head">
                Login
            </div>
            <div class="breadcurmb-li-section">
                <ul>
                    <li><a href="{{url('/')}}">Home</a> <i class="fal fa-angle-right"></i> </li>
                    <li><a class="signup-link-tag" href="javascript:void(0);">Login</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="signup-section-main">
        <div class="container">
            <div class="signup-form-section login-form-main">
                <div class="signup-form-head">
                    Login
                </div>
                <div class="signup-form-semihead">
                    Please Login to your account. 
                </div>    
                    <!-- <form action="{{url('/')}}/user" method="POST"> -->
                    <form method="POST" action="{{url('/')}}/process_login">            
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                                @csrf
                                <div class="form-group mobile-number-section">
                                    <label>Enter your mobile number</label>
                                    <div style="position: relative;">
                                        <input type="hidden" class="form-control" id="code" name="code"  value="+91" />
                                        <input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="XXXXXXX" />
                                        <span class="number-flag-id">
                                            <span><img src="{{url('/')}}/public/assets/images/logo/flag-arb.png" alt="" /></span> 
                                            <span>+966&nbsp&nbsp&nbsp 05</span>
                                        </span>

                                        <!-- <span class="start-5">05</span> -->
                                    </div>
                            <?php if($errors->first('contact_number')){ echo '<label for="contact_number" class="error err-msg">'.$errors->first("contact_number").'</label>';} ?>


                                    <div id="recaptcha-container"></div>
                                    <div class="form-group otp-fld" style="display:none;">
                                        <label>Verification Code</label>
                                        <input type="text" id="verificationcode" class="form-control" name="otp" placeholder="Enter OTP ">
                                    </div>
                                </div>
                        </div>                    
                    </div>                
                    <div class="more-services-btn animation-fadeinup signup-btn">
                        <button type="button" value="Submit" class="btn-more-services activate-captcha" onclick="getCaptcha()"> Next</button>
                        <button type="button" value="Submit" class="btn-more-services verify-otp" onclick="myFunction()" style="display:none;" > Verify OTP</button>
                        <button style="display:none;" class="btn-more-services login-btn" type="submit">Login</button>
                    </div>
                </form>

                <div class="dont-have-account-section">
                    Don't have an account? <a href="{{url('/')}}/signup">Sign Up</a>
                </div>
            </div>
        </div>
        <div class="login-man-img">
            <img src="{{url('/')}}/public/assets/images/logo/Signup-man.png" alt="" />
        </div>
    </div>


<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-analytics.js"></script>

<script>
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyADr41HZn6HMuDpZP3A5KgZA1yHYEB5h14",
    authDomain: "sweply-b2af6.firebaseapp.com",
    projectId: "sweply-b2af6",
    storageBucket: "sweply-b2af6.appspot.com",
    messagingSenderId: "250573483295",
    appId: "1:250573483295:web:a0beef516c5794c0bc942a",
    measurementId: "G-YZ30667150"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script type="text/javascript"> 
    function getCaptcha(){
        var contact_number = jQuery('#contact_number').val();
        var code = jQuery('#code').val();
        var token = "{{csrf_token()}}";
        jQuery.ajax({
            url: "{{url('/')}}/verify_contact",
            data: {contact_number:contact_number,_token:token,code:code},
            type: 'post',
            success: function (data) {
                if($.trim(data) == 'success'){
                    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container'); 
                     var contact_number = jQuery('#contact_number').val();
                     var code = jQuery('#code').val();
                     var mobile_number = code+''+contact_number;
                     console.log(mobile_number);
                    firebase.auth().signInWithPhoneNumber(mobile_number, window.recaptchaVerifier).then(function(confirmationResult) { 
                            window.confirmationResult = confirmationResult; 
                            a(confirmationResult); 
                    }); 
                    $('.otp-fld').show();
                    $('.activate-captcha').hide();
                    $('.verify-otp').show();
                }else{
                    swal("Oops !", "Contact not exists, Signup now", "error")
                    .then((value) => {
                        location.href = "{{url('/')}}/signup/";
                    });
                }
            }
        }); 
    }

        /*if(resp==="success"){
            window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container'); 
             var contact_number = jQuery('#contact_number').val();
             var code = jQuery('#code').val();
             var mobile_number = code+''+contact_number;
            firebase.auth().signInWithPhoneNumber(mobile_number, window.recaptchaVerifier) 
            .then(function(confirmationResult) { 
                window.confirmationResult = confirmationResult; 
                a(confirmationResult); 
            }); 
            $('.otp-fld').show();
            $('.activate-captcha').hide();
            $('.verify-otp').show();
        }*/
    


var myFunction = function() { 
    window.confirmationResult.confirm(document.getElementById("verificationcode").value) 
    .then(function(result) { 
        jQuery('.login-btn').show();
        jQuery('.login-btn').trigger('click');
        jQuery('.verify-otp').hide();
    }, function(error) { 
        alert(error); 
    }); 
};

</script>


@endsection