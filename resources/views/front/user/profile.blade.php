@extends('front.layout.dashboard-master')    
@section('main_content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <div class="main-bck-section profile-main-section">
                    <div class="profile-setting-warp">
                        <div class="from-tab-section">
                            <form id="user_profile" name="user_profile" >
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">                       
                                            <div style="position: relative;" class="profile-img-block">
                                                <div class="pro-img"><img src="{{$userData->profile_photo}}" class="img-responsive img-preview" alt=""/></div>
                                                <div class="update-pic-btns">
                                                    <button href="#" class="up-btn"><i class="fal fa-user-edit"></i></button>
                                                    <input style="height: 100%; width: 100%; z-index: 99;" id="logo_id" name="logo"  type="file" class="attachment_upload">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" placeholder="Enter First Name" class="form-control" id="first_name" name="first_name" value="{{$userData->first_name}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" placeholder="Enter Last Name" class="form-control" id="last_name" name="last_name" value="{{$userData->last_name}}">
                                        </div>
                                    </div>
                                    <?php

                                    if($userData->contry_code==""){
                                        $userData->contry_code = "+91";
                                    }
                                    ?>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group change-btn-form-group">
                                            <label for="contact_number"> Mobile Number </label>
                                            <input style="padding-left: 40px;" type="text" placeholder="Enter  Mobile Number " class="form-control" id="contact_number" name="contact_number" value="{{$userData->contact_number}}">
                                            <span class="mobile-no-pro">{{$userData->contry_code}}</span>
                                            <button class="mobile-change-btn">Change</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group change-btn-form-group">
                                            <label for="email">Email <span class="verofy-txt-section"><i class="fas fa-shield-check"></i> Verified</span></label>
                                            <input type="text" placeholder="Enter Email" class="form-control" id="email" name="email" value="{{$userData->email}}">
                                            <button class="mobile-change-btn">Change</button>
                                        </div>
                                    </div>



                                    <?php
                                    /********************* Yogesh Added **********************/
                                        $cityArr = DB::table('city')->where('country_id','1')->get();
                                        $optionStr = "";
                                        if($cityArr){
                                            foreach($cityArr as $city){
                                                $selected = ""; 
                                                if($userData->city == $city->city_name){
                                                    $selected = "selected";
                                                }
                                                $optionStr .= '<option '.$selected.' value="'.$city->city_name.'">'.$city->city_name.'</option>';
                                            }
                                        }
                                    ?>

                                    <div class=" col-sm-12 col-md-6 col-lg-6 form-group">
                                        <label for="account_access">City</label>
                                        <select class="form-control" name="city" id="city">
                                            <option>Select City</option>
                                            <?php echo $optionStr; ?>
                                        </select>
                                    </div>
                                    <div class=" col-sm-12 col-md-6 col-lg-6 form-group">
                                        <label for="account_access">Gender</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option value="Male" <?php if($userData->gender=="Male"){ echo "selected"; } ?> >Male</option>
                                            <option value="Female" <?php if($userData->gender=="Female"){ echo "selected"; } ?>>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="occupation"> Profession </label>
                                            <select class="form-control" name="occupation" id="occupation">
                                                <option value="Student">Student</option>
                                                <option value="Employee">Employee</option>
                                            </select>
                                            <!-- <input type="text" placeholder="Enter  Occupation Name " class="form-control" id="occupation" name="occupation" value="{{$userData->occupation}}"> -->
                                        </div>
                                    </div>      

                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="age"> Age </label>
                                            <input type="text" placeholder="Enter Age" class="form-control" id="age" name="age" value="{{$userData->age}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Date Of Birth <span style="color: red">*</span></label>
                                            <input name="DOB" placeholder="Select date of birth" type='text' class="form-control datepicker" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                                <a style="width: 100%;" href="javascript:void(0);" onclick="update_profile();" class="btn btn-primary shadow waves-effect waves-light mt-2">Update</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <script type="text/javascript">
       $(document).ready(function() {
        var brand = document.getElementById('logo_id');
        brand.className = 'attachment_upload';
        brand.onchange = function() {
            //document.getElementById('fakeUploadLogo').value = this.value.substring(12);
        };

        // Source: http://stackoverflow.com/a/4459419/6396981
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.img-preview').attr('src', e.target.result);

                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#logo_id").change(function() {
            readURL(this);
        });

    });
    
    function update_profile(){
      
       
            showLoader();
            
            var file_data = "";
            var logo = $('#logo_id').prop('files')[0]; 
            //var file_data = $('#vat_cr_certificate').prop('files')[0]; 
            var token    = "{{csrf_token()}}";
            
          
            
            var form_data = new FormData();   
             form_data.append("form_data",$('#user_profile').serialize());           
            form_data.append('file', file_data);
            form_data.append('logo', logo);
            form_data.append('_token', token);
           
            jQuery.ajax({
                url: "{{url('/')}}/user/update_profile",
                dataType: 'text',  // <-- what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function (data) {
                    
                    if(data != ''){
                        swal("Thank You!", "User Profile Updated successfully!", "success")
                            .then((value) => {
                                location.href = "{{url('/')}}/user/profile/";
                        });
                    }else{
                            swal("Oops !", "Something went Wrong", "error")
                        .then((value) => {
                                //location.href = "{{url('/')}}/user/profile/";
                        });
                    }
                }
            });  
            //hideLoader();
        }
            
    </script> 
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap-datepicker.min.css">
    <script src="{{url('/')}}/public/assets/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script>
        $(function() {
            $( ".datepicker" ).datepicker({
                todayHighlight: true,
                autoclose: true,
                format: 'dd/mm/yyyy',
                startDate: new Date()
            });
        });       
    </script>   
    @endsection
