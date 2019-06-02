<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php //if (!$_SERVER['HTTP_X_PJAX']) {
?>
</div><!-- end #body -->

<footer class="footer" role="contentinfo">
	    	<?php echo $this->options->footerHtml ? $this->options->footerHtml : "" ?>
</footer><!-- end #footer -->


<script type="text/javascript" src="//upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.3.min.js"></script>
<script src="https://cdn.bootcss.com/fancybox/3.5.6/jquery.fancybox.min.js"></script>
<script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>

<script>
$("img").each(function () {
    var element = document.createElement("a");

    $(element).attr("data-fancybox","");
    $(element).attr("href", $(this).attr("src"));
    $(this).wrap(element);


});

 </script>


<script>
(function($){$.fn.extend({headBand:function(option){var ViewH=$(window).height(),ScrollH=$('body')[0].scrollHeight,S_V=ScrollH-ViewH,getThis=this.prop("className")!==""?"."+this.prop("className"):this.prop("id")!==""?"#"+this.prop("id"):this.prop("nodeName");$(window).scroll(function(){var ViewH_s=$(this).height(),ScrollH_s=$('body')[0].scrollHeight,ScoT_s=$(this).scrollTop(),Band_w=100-(ScrollH_s-ViewH_s-ScoT_s)/S_V*100;defaultSetting={background:"green",height:3,width:Band_w+'%'};setting=$.extend(defaultSetting,option);$(getThis).css({"background":setting.background,'position':'fixed','top':'0','z-index':'99999',"height":setting.height+"px",'width':defaultSetting.width})});return this}})}(jQuery));
 </script>



<?php $this->footer(); ?>
</body>
</html>
<?php //} ?>
