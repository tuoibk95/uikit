<script src="resources/uikit/js/components/slider.min.js"></script>
<script src="resources/uikit/js/components/slideshow.min.js"></script>
<script src="resources/uikit/js/components/slideset.min.js"></script>
<script src="resources/uikit/js/components/tooltip.min.js"></script>
<script src="resources/uikit/js/components/sticky.min.js"></script>
<script src="resources/uikit/js/core/switcher.min.js"></script>
<script src="resources/uikit/js/components/accordion.min.js"></script>
<script src="resources/uikit/js/components/lightbox.min.js"></script>
<script src="resources/uikit/js/core/scrollspy.min.js"></script>
<script src="resources/plugins/flex-slider/jquery.flexslider-min.js"></script>
<script src="resources/plugins/slick/slick.min.js"></script>
<script src="resources/function.js"></script>
<script src="resources/library/js/library.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
     $('#loadmore').on('click',function(){
       var active = $(this).attr('data-active');
       if(active == 0){
         $(this).html('Thu gọn');
         $(this).attr('data-active', 1);
         $('.extend').removeClass('uk-hidden');
       }else if(active == 1){
         $(this).html('Xem thêm');
         $(this).attr('data-active', 0);
         $('.extend').addClass('uk-hidden');
       }
       return false;
     });
   });
 </script> <!--upper-->
