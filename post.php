<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="bgDiv"></div><div class="blog-header">
	<div class="blog-header-overlay"></div>
	<div class="header-image-block" style="background-image: url('<?php  $this->fields->img(); ?>');');"></div>
</div>
<div class="test"></div>
<div class="blog-post-section section">
	<div class="blog-post-container container w-container">
		<div class="white-content-block">
			<div class="blog-post-image-block" style="background-image: url('<?php  $this->fields->img(); ?>');');">
				             
                                    			<div class="blog-post-header">


					<div class="blog-header-title-wrapper">
<h2 style="margin-top:0px;" class="blog-post-title"><?php $this->title() ?></h2>
						<div class="blog-post-date"><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?>&nbsp</time><?php $this->category(','); ?></div>

						
					</div>
				</div>
			</div>

			<div class="align-left white-content-block-content-wrapper">
                                 <?php $this->content(); ?> </div>



<div class="post-content" itemprop="articleBody"> 

<div><p style="margin-left: 60px;">标签：<?php $this->tags(',', true, 'none'); ?></p></div>
				</div>
<?php include('comments.php'); ?>
<?php include('footer.php'); ?>

				
			</div>



<div class="leftNav-item">
<i title="返回顶部" class="for-top">
<i class="fa fa-arrow-up fa-4x"></i>

</div>

		</div>
 <script>
$(function() {
    $(".leftNav-item li").hover(function(e) {
        var alias = $(this).attr("lay-data");
        var str = $(this).attr("data-fooc");
        var icon = $(this).children("i").attr("class");
        if (!alias) {
            return false;
        }
        $(this).append(setlayer(alias, str, icon));
        $(this).children("div").show(300);
    },
 function(e) {
        $(this).children("div").remove();
    });
   
    $(window).scroll(function() {
        var scrollTop = $(document).scrollTop();
        if (scrollTop >= 1000) {
            $(".for-top").show();
        } else {
            $(".for-top").hide();
        }
    });
    $(".for-top").click(function() {
        console.log("Are You Ok?");
        $('html,body').animate({
            scrollTop: 0
        },
        700);
    })
})

 </script>
<script>
	$('.test').headBand({
		'background':'#50bcb6',
		'height':"3"
	});
</script>