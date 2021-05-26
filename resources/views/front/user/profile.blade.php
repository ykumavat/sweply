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
                                <div class="col-sm-12 col-md-6 col-lg-12">
                                    <div class="form-group">
                                       <!-- <div class="profile-pic-bx">
                                           <img src="{{url('/')}}/public/assets/images/logo/avatar-s-1.png" alt=""/>
                                       </div> -->
                                    
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
                                <div class="form-group">
                                    <label for="contact_number"> Mobile Number </label>
                                    <input style="padding-left: 55px;" type="text" placeholder="Enter  Mobile Number " class="form-control" id="contact_number" name="contact_number" value="{{$userData->contact_number}}">
                                    <span class="mobile-no-pro">{{$userData->contry_code}}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" placeholder="Enter Email" class="form-control" id="email" name="email" value="{{$userData->email}}">
                                </div>
                            </div>
                            <?php /*
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="company_name"> Company Name </label>
                                    <input type="text" placeholder="Enter  Company Name " class="form-control" id="company_name" name="company_name" value="{{$businessData->business_name}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <input type="text" placeholder="Enter Type" class="form-control" id="type" name="type"  value="{{$userData->type}}">
                                </div>
                            </div>
                            <input type="hidden" name="business_id" value="{{$businessData->id}}" />
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="website_url">Website</label>
                                    <input type="text" placeholder="Enter Website" class="form-control" id="website_url" name="website_url"  value="{{$businessData->website_url}}" >
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="commercial_number"> Commercial Number </label>
                                    <input type="text" placeholder="Enter Commercial Numbe" class="form-control" id="commercial_number" name="commercial_number" value="{{$businessData->contact_number}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="vat_number">  Vat Number </label>
                                    <input type="text" placeholder="Enter Vat Number" class="form-control" id="vat_number" name="vat_number" value="{{$businessData->vat_number}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="emailAddress1">Upload Vat & Cr Certificate</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="vat_cr_certificate" name="vat_cr_certificate"  value="{{$userData->vat_cr_certificate}}">
                                        <label class="custom-file-label" for="vat_cr_certificate">Choose Certificate file</label>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <?php if(isset($userData->vat_cr_certificate) && $userData->vat_cr_certificate!="" ){ ?>
                                        <label><a style="width:100%;" href="<?php echo url('/').'/uploads/user_image/'.$userData->vat_cr_certificate; ?>"  class="uploaded-img-download cirtificate-download"  download><i class="fal fa-download"></i>&nbsp;Download/View certificate</a></label>
                                    <?php } ?>
                                </div>
                            </div>
                            */ ?>

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

    @endsection
