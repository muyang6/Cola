<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php //if (!$_SERVER['HTTP_X_PJAX']) {
?>
</div><!-- end #body -->

<footer class="footer" role="contentinfo">
	    	<?php echo $this->options->footerHtml ? $this->options->footerHtml : "" ?>
</footer><!-- end #footer -->


<script type="text/javascript" src="//upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.3.min.js"></script>
<link href="//cdn.bootcss.com/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/fancybox/3.5.6/jquery.fancybox.min.js"></script>

<script>
$("img").each(function () {
    var element = document.createElement("a");

    $(element).attr("data-fancybox","");
    $(element).attr("href", $(this).attr("src"));
    $(this).wrap(element);


});

 </script>

<?php $this->footer(); ?>
</body>
</html>
<?php //} ?>
