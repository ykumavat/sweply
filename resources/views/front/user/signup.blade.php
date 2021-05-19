@extends('front.layout.master')
@section('main_content')
    <div class="breadcurmb-section">
        <div class="container">
            <div class="breadcurmb-section-head">
                Sign Up
            </div>
            <div class="breadcurmb-li-section">
                <ul>
                    <li><a href="{{url('/')}}">Home</a> <i class="fal fa-angle-right"></i> </li>
                    <li><a class="signup-link-tag" href="javascript:void(0);">Sign Up</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="signup-section-main">
        <form method="POST" action="{{url('/')}}/process_register">
            @csrf
            <div class="container">
                <div class="signup-form-section">
                    <div class="signup-form-head">
                        Sign Up
                    </div>
                    <div class="signup-form-semihead">
                        Please Sign Up to your account. 
                    </div>
                    <div class="radio-btns">  
                        <div class="radio-btn">
                            <input type="radio" id="f-option" name="selector" checked value="personal">
                            <label for="f-option">Personal Business</label>
                            <div class="check"></div>
                        </div>
                        <div class="radio-btn">
                            <input type="radio" id="s-option" name="selector" value="commercial">
                            <label for="s-option">Commercial Business</label>
                            <div class="check"></div>
                        </div>
                        <DIV class="clearfix"></DIV>
                    </div>
                    <div class="personal box" style="display: block;">                    
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your first name" />
                            <?php if($errors->first('name')){ echo '<label for="name" class="error err-msg">'.$errors->first("name").'</label>';} ?>

                        </div>            
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Enter your last name" />
                        </div>            
                        <div class="form-group mobile-number-section">
                            <label>Mobile Number</label>
                            <div style="position: relative;">
                                <input type="hidden" class="form-control" id="code" name="code"  value="+91" />
                                <input type="text" class="form-control" placeholder="XXXXXXX" name="contact_number" id="contact_number" />
                                <span class="number-flag-id">
                                    <span><img src="{{url('/')}}/public/assets/images/logo/flag-arb.png" alt="" /></span> 
                                    <span style="padding-top: 1px;">+966&nbsp&nbsp&nbsp 05</span>
                                </span>
                            </div>
                            <?php if($errors->first('contact_number')){ echo '<label for="name" class="error err-msg">'.$errors->first("contact_number").'</label>'; }?>

                        </div>            
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter your email address" />
                        </div>                    
                    </div>
                    <div class="commercial box" style="display:none;">                    
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control" name="company_name"  placeholder="Enter your company name" />
                        </div> 
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" name="business_type" >
                                <option>Type1</option>
                                <option>Type1</option>
                            </select>
                            <span class="select-drop-icon"><i class="fal fa-angle-down"></i></span>
                        </div>                 
                        <div class="form-group">
                            <label>Website</label>
                            <input type="text" class="form-control" name="website"  placeholder="Enter website" />
                        </div>                        
                        <div class="form-group">
                            <label>Commercial Numbe</label>
                            <input type="text" class="form-control" name="commercial_number"  placeholder="Enter commercial numbe" />
                        </div>                        
                        <div class="form-group">
                            <label>Vat Number</label>
                            <input type="text" class="form-control" name="vat_number"  placeholder="Enter vat number" />
                        </div>
                    </div>

                    <!-- <div id="recaptcha-container"></div>
                        <div class="form-group">
                            <label>Verification Code</label>
                            <input type="text" id="verificationcode" class="form-control" name="otp" placeholder="Enter OTP ">
                        </div> -->


                    <div class="check-box">
                        <input id="filled-in-box" class="filled-in" name="terms_conditions"  checked="checked" type="checkbox">
                        <label for="filled-in-box">Please confirm that you agree to our</label>
                        <span><a href="javascript:void(0);">Privacy Policy</a> and <a href="javascript:void(0);">Terms and Conditions</a></span>
                    </div>
                    <div class="more-services-btn animation-fadeinup signup-btn">
                        <!-- <a href="dashboard.html" class="btn-more-services">Sign Up</a> -->
                        <button type="submit" class="btn-more-services">Sign Up</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="login-man-img">
            <img src="{{url('/')}}/public/assets/images/logo/Signup-man.png" alt="" />
        </div>
    </div>
     <script type="text/javascript">
        $(document).ready(function(){
            $('input[type="radio"]').click(function(){
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue).show();
                //alert(inputValue);
                if(inputValue=="personal"){
                    $('.commercial').hide();
                }

                // $(".box").not(targetBox).hide();
                // $(targetBox).show();
            });
        });
    </script>

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
window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container'); 
     var contact_number = jQuery('#contact_number').val();
     var code = jQuery('#code').val();
     var mobile_number = '+919657375881';
     var mobile_number = code+''+contact_number;

    firebase.auth().signInWithPhoneNumber(mobile_number, window.recaptchaVerifier) 
    .then(function(confirmationResult) { 
        window.confirmationResult = confirmationResult; 
        a(confirmationResult); 
    }); 
var myFunction = function() { 
    window.confirmationResult.confirm(document.getElementById("verificationcode").value) 
    .then(function(result) { 
        jQuery('.login-btn').show();
        jQuery('.verify-otp').hide();
    }, function(error) { 
        alert(error); 
    }); 
};
</script>

@endsection