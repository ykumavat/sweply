<!doctype html>
<?php $trl=""; if(App::getLocale()=='ar'){ $trl='dir="rtl"';}  ?>
<html  <?php echo $trl; ?> lang=en-US>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <title>Sweply</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/public/assets/images/logo/Favicon.png">
    <!-- ======================================================================== -->
    <!-- Bootstrap CSS -->
    <link href="{{url('/')}}/public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!--font-awesome-css-start-here {{url('/')}} -->
    <link rel="stylesheet" href="{{url('/')}}/public/assets/css/fontawesome-v5.7.2-pro.min.css" />
    <link rel="stylesheet" href="{{url('/')}}/public/assets/css/swiper.min.css">
    <!--Custom Css-->
    <link rel="stylesheet" href="{{url('/')}}/public/assets/css/unimark.css">    
    <!--Main JS-->
    <script type="text/javascript" src="{{url('/')}}/public/assets/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/public/assets/js/bootstrap.min.js"></script>
    <link rel="icon" href="{{url('/')}}/public/assets/images/logo/favicon.png" type="image/x-icon" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



    <?php if(App::getLocale()=='ar'){ ?>
        <link rel="stylesheet" href="{{url('/')}}/public/assets/css/swiply-rtl.css">
        <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700;800&display=swap" rel="stylesheet"> 
    <?php } ?>




</head>

<body>
    <?php
    $logoClass = ""; 
    if(Request::is('/')){ $logoClass = "home-header"; } 
    ?>

    <div id="main"></div>
    <div class="header-main {{$logoClass}}">
        <div class="container">
            <div class="logo-section">
                <a href="{{url('/')}}">
                    <span>
                        <img src="{{url('/')}}/public/assets/images/logo/inner-logo.png" alt="" />
                    </span>
                </a>
            </div>
            <div class="login-signup-btns">
                <ul>
                    <?php if(App::getLocale()=='ar'){ ?>
                        <li><span onclick="setLanguage('en')"><span><img src="{{url('/')}}/public/assets/images/logo/flag-en.jpg" alt="" /></span> <span>English</span></li>
                     <?php }else{ ?>
                        <li><span onclick="setLanguage('ar')"><span><img src="{{url('/')}}/public/assets/images/logo/flag-arb.png" alt="" /></span> <span>Arabic</span></li>
                     <?php } ?>
                    <li>
                        <a href="{{url('/')}}/login">{{translate('login')}}</a>
                    </li>
                    <li class="mobile-hide">
                        <a href="{{url('/')}}/signup">{{translate('sign-up')}}</a>
                    </li>                    
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>