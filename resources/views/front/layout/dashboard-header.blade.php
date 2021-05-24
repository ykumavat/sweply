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
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/public/assets/images/logo/Favicon.png">
    <!-- BEGIN: Theme CSS-->
     <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/public/assets/images/logo/Favicon.png">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/fontawesome-v5.7.2-pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/unimark-user.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="{{url('/')}}/public/assets/vendors/js/vendors.min.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/charts/apexcharts.min.js"></script>    
    <script src="{{url('/')}}/public/assets/js/scripts/components.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/forms/wizard-steps.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/forms/select/form-select2.js"></script>  
    <script src="{{url('/')}}/public/assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/jquery.ui.touch-punch.min.js"></script>
    <script src="{{url('/')}}/public/assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="{{url('/')}}/public/assets/js/scripts/forms/number-input.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <!--- Datatable ---->
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <?php 
    $userData = [];
    $userData = getLoggedUserData(); 
    ?>
    <div class="black-bg-section"></div>
    <div id="header">
         <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
                <div class="navbar-wrapper">
                    <div class="navbar-container content">
                        <div class="navbar-collapse" id="navbar-mobile">
                            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item mobile-menu d-xl-none mr-auto">
                                        <a class="nav-link-icon-menu" href="#">
                                            <i class="ficon feather icon-menu"></i>
                                        </a>
                                    </li>
                                </ul>

                                <?php 
                                    $businessArr = [];
                                    if(Session::has('BUSINESSID')){
                                        $businessArr = getBusinessDetails(Session::get('BUSINESSID'));
                    				   if(sizeof($businessArr) == 0){
                    					  $businessArr['business_name'] ='Switch Business';
                    				   }	
                                    }
                                ?>

                                <ul class="nav navbar-nav">
                                    <li>
                                        <div class="create-btn"><a href="{{url('/')}}/user/create-ads/">Create Ads</a></div>
                                    </li>
                                    <?php 
                                       if($userData['business_type']==1){ ?>
                                        <li>
                                            <div class="filtter-btn business-btn">
                                                <div class="btn-group">
                                                    <div class="dropdown">
                                                        <button class="btn btn-warning dropdown-toggle mr-1 waves-effect waves-light" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <?php if(Session::has('BUSINESSID')){ 
    							
                                                                echo $businessArr['business_name'];
                                                             }else{ echo "Switch Business"; }
                                                            ?>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 40px; left: 20px; transform: translate3d(0px, 37px, 0px);">
                                                            <!-- <a class="dropdown-item" href="#">Year</a> -->
                                                            <?php echo getActiveBusinessList(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php }else{ ?>
                                        <!-- <li>
                                            <div class="create-btn"><a href="#" data-toggle="modal" data-target="#upgrade-account">Upgrade Now</a></div>
                                         </li> -->
                                   <?php } ?>
                                </ul>
                            </div>
                            <ul class="nav navbar-nav float-right">
                                <?php if($userData['business_type']==0){ ?>
                                <li class="upgrade-now-btn-link">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#upgrade-account">Upgrade Now</a>
                                </li>
                                <?php } ?>
                                <li class="dropdown-language nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="selected-language">
                                            <img src="{{url('/')}}/public/assets/images/logo/flag-arb.png"/> 
                                            <span class="select-language-txt">English</span>
                                        </span>
                                    </a>                                    
                                </li>
                                
                                <?php 
                                $notificationArr = [];
                                $notificationArr['count'] = 0;

                                $notificationArr = getAllNotifications(array("to_id"=>Session::get('LoggedUser')));

                                ?>
                                
                                <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                                        data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                                            class="badge badge-pill badge-primary badge-up">{{$notificationArr['count']}}</span></a>
                                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                        <li class="dropdown-menu-header">
                                            <div class="dropdown-header m-0 p-2">
                                                <h3 class="white">{{$notificationArr['count']}} New</h3><span class="notification-title">App Notifications</span>
                                                    
                                            </div>
                                        </li>

                                        <?php if(count($notificationArr['data'])>0){ 
                                            foreach($notificationArr['data'] as $notification){

                                            ?>
                                        <li class="scrollable-container media-list">
                                            <a class="d-flex justify-content-between" href="javascript:void(0)">
                                                <div class="media d-flex align-items-start">
                                                    <div class="media-left"><i
                                                            class="feather icon-plus-square font-medium-5 primary"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="primary media-heading"><?php echo $notification->title; ?>!</h6><small
                                                            class="notification-text"><?php echo $notification->message; ?></small>
                                                    </div>
                                                    <small>
                                                        <time class="media-meta">
                                                            <?php 
                                                            $seconds = strtotime(date('Y-m-d H:i:s')) - strtotime($notification->created_at);
                                                             $hours = $seconds/60/60;

                                                            echo date('d M Y',strtotime($notification->created_at)); ?>
                                                        </time></small>                                                
                                                </div>
                                            </a>
                                        </li>
                                        <?php } 
                                            }  
                                        ?>
                                       
                                        <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                                href="javascript:void(0)">View all notifications</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-user nav-item"><a
                                        class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                        <div class="user-nav d-sm-flex d-none"><span class="user-name">
                                           <?php echo $userData["name"]; ?>
                                            </span><span class="user-status">Available</span></div><span>
					<?php if($userData["profile_photo"] == ''){ ?>
					<img class="round" src="{{url('/')}}/public/assets/images/profile.png" alt="avatar" height="40" width="40">

					<?php }else{ ?>

					<img class="round" src="{{url('/')}}//uploads/user_image/<?php echo $userData["profile_photo"]; ?>" alt="avatar" height="40" width="40">
					<?php } ?>

					</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item"
                                            href="{{url('/')}}/user/profile"><i class="feather icon-user"></i> Edit Profile</a>
                                            <!-- <a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My
                                            Inbox</a>
                                            <a class="dropdown-item" href="app-todo.html"><i
                                                class="feather icon-check-square"></i> Task</a>
                                            <a class="dropdown-item"
                                            href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a> -->
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('/')}}/logout"><i
                                                class="feather icon-power"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </nav>
    </div>     
    
    <script>
        $(".nav-link-icon-menu").on("click", function(){
            $("body").addClass("sidebar-open");
        });
        $(".black-bg-section").on("click", function(){
            $("body").removeClass("sidebar-open");
        });
              
    </script> 

    <div class="modal fade text-left defaultSize-modal modal-padding-change" id="upgrade-account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Upgrade account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('/')}}/user/upgrade-account" method="POST" id="accountUpgradeFrm">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Company Name: </label>                   
                        <input type="text" name="business_name" placeholder="Company Name" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Website: </label>                    
                        <input type="text" name="website_url" placeholder="Website" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Commercial Number: </label>                   
                        <input type="text" placeholder="Commercial Number" name="contact_number" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label>Vat Number: </label>                 
                        <input type="text" placeholder="Vat Number" name="vat_number" class="form-control">
                    </div>                  
                </div>
                <div class="modal-footer">
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    <button type="button" class="btn btn-primary validate-frm-upgrade">Submit</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.validate-frm-upgrade').click(function(){
            $('.err-msg').remove();
            var flag = 0;
            if($('input[name="business_name"]').val()=="" || $('input[name="business_name"]').val()=="undefined"){
                flag = 1;
                $('input[name="business_name"]').parent().append('<span class="err-msg">Please enter business name</span>');
            }
            if(flag==0){
                //$('#accountUpgradeFrm').submit(function(e){
                //e.preventDefault();
                $.ajax({
                 type: "POST",
                  url: "{{url('/')}}/user/upgrade-account",
                  data: $('#accountUpgradeFrm').serialize(),
                  success: function(data) {
                    // callback code here
                        if(data=="success"){
                            swal("Thank You !", "Your account is successfully upgraded.", "success").then((value) => {
                                location.reload();
                            });
                        }else{
                            swal("Oops !", "Something went wrong.", "error").then((value) => {
                                location.reload();
                            });
                        }
                   }
                });
                //});
            }
        });

    });
</script>