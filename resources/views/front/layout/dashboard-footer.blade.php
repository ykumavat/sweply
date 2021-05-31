   <div class="loader-section-main" >
        <div class="lds-default">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/extensions/shepherd-theme-default.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/plugins/tour/tour.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/assets/css/plugins/forms/wizard.css">

    <!-- <script src="{{url('/')}}/public/assets/js/core/app-menu.js"></script> -->
    <script src="{{url('/')}}/public/assets/js/core/app.js"></script>

    <script>        
        $(".form-control-position").on("click", function(){                
            $(this).parent(".search-bar").toggleClass("search-open");
        });    
        function setBusinessDashboard(businessID){
            var token    = "{{csrf_token()}}";
            $.ajax({
                url: "{{url('/')}}/set_business_dashboard",
                type: 'post',
                data: {businessID: businessID,_token:token},
                success: function(data){
                   console.log('Done');
                   //location.href="{{url('/')}}/user/dashboard";
                   location.reload();
                }
             });

        }  
        function showLoader(){
            $('.loader-section-main').show();
        }  
        function hideLoader(){
            $('.loader-section-main').hide();
        } 

        //document.addEventListener("DOMContentLoaded", showLoader());

        function scrollToTop() {
          //window.scrollTo({top: 0, behavior: 'smooth'});
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }

    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            setTimeout(function(){ 
                $('.loader-section-main').fadeOut('slow');
             }, 1000);
        });
    </script>

</body>
<!-- END: Body-->
</html>