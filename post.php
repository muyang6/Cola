<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="bgDiv"></div><div class="blog-header">
	<div class="blog-header-overlay"></div>
	<div class="header-image-block" style="background-image: url('<?php  $this->fields->img(); ?>');');"></div>
</div>
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
		</div>
