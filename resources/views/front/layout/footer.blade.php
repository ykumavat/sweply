<div class="copyright-bx">
        <div class="container">
            <div class="copyright-bx-txt">
                &copy; Copyright
                <script>new Date().getFullYear() > document.write(new Date().getFullYear());</script> Sweply All Rights
                Reserved.
            </div>
            <div class="copyright-bx-social">
                <ul>
                    <li><a target="_blank" href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a target="_blank" href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                    <li><a target="_blank" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a target="_blank" href="javascript:void(0);"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>


 <script src="{{url('/')}}/public/assets/js/common.js"></script>
<!-- Swiper JS -->
<script src="{{url('/')}}/public/assets/js/swiper.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/public/assets/js/infiniteslidev2.js"></script>


 <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.home-banner-slider', {
            centeredSlides: true,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('.scroll1').infiniteslide({
                speed: 50,
            });
        });
    </script>


    <script>
        function setLanguage(obj){
            var lang = obj;
            $.ajax({
                url  :"{{url('/')}}/change_language",
                type :'POST',
                data :{'lang':lang ,'_token':'<?php echo csrf_token();?>'},
                success:function(data){
                  location.reload(true);
                }
            });
        }
    </script>


<div class="loader-section-main" style="display:none;">
    <img src="{{url('/')}}/public/assets/images/logo/loader.gif" alt=""/>
    <!-- <div class="lds-default">
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
    </div> -->
</div>

</body>

</html>
