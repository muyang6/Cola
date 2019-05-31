<?php
/**
 * 我爱喝可乐！
 *
 * @package Cola
 * @author Cola
 * @version 1.0
 * @link https://cxcat.cn
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<body class="home blog">

<div class="bgDiv"></div><div class="dynamic-intro-section">
	<div class="hero-overlay-section mobile">
		<div class="container w-container">
			<div class="white-content-block">
				<div class="blog-list-wrapper w-dyn-list">
					<div class="blog-archive-list fullwidth w-clearfix w-dyn-items">
						<div class="blog-post-item w-dyn-item">
							<a class="blog-post-image-link-block w-inline-block" title="<?php $this->title() ?>" href="<?php $this->permalink() ?>" style="background-image: url('<?php  $this->fields->img(); ?>');">
							<div class="blog-posts first-blog-post-overlay">
								<div class="blog-author-wrapper w-clearfix">
												
<div class="blog-author-image-block"  style="background-image:url(<?php echo $this->options->headImg ? $this->options->headImg : 'https://secure.gravatar.com/avatar/14ab100a9730e44cb11e3d2e9844936f?s=220&r=X&d=mm' ?>)"></div>
					
									<div class="blog-author-name"><?php $this->author(); ?></div>
																		<div class="blog-date"><?php $this->date('F j, Y'); ?></div>
								</div>
								<div class="first-blog-post-title"><?php  $this->title() ?></div>
							</div>
							</a>
							<div class="blog-summary-content-wrapper">
								<div class="summary-block">
									<div class="summary-gradient"></div>
									<p class="blog-summary-paragraph"><?php $this->content('Continue Reading...'); ?></p>
								</div>
								<a href="<?php $this->permalink() ?>">阅读更多 →</a>
							</div>
												</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="hero-recent-post-list-wrapper w-dyn-list">
		<div class="hero-recent-post-list w-dyn-items">
			<div class="hero-recent-post-item w-dyn-item" style="background-image: url('<?php  $this->fields->img(); ?>');"></div>
		</div>
	</div>
</div>
<?php while($this->next()): ?>
<div class="section">
	<div class="container w-container">
		
				
		
		
		<div class="blog-list-wrapper w-dyn-list">
			<div class="w-dyn-items">
				<div class="first-blog-post-item w-dyn-item">
					<a class="big-archive blog-post-image-link-block w-inline-block" title="<?php $this->title() ?>" href="<?php $this->permalink() ?>" style="background-image: url('<?php  $this->fields->img(); ?>');">
						<div class="first-blog-post-overlay">
							<div class="blog-author-wrapper w-clearfix">
																<div class="blog-author-image-block" style="background-image:url(<?php echo $this->options->headImg ? $this->options->headImg : 'https://secure.gravatar.com/avatar/14ab100a9730e44cb11e3d2e9844936f?s=220&r=X&d=mm' ?>)"></div>
								<div class="blog-author-name"><?php $this->author(); ?></div>
																<div class="blog-date"><?php $this->date('F j, Y'); ?></div>
							</div>
							<div class="first-blog-post-title"><?php $this->title() ?>

</div>
						</div>

					</a>
					</div>
			</div>
		</div>
	</div>
</div>


<?php endwhile; ?>
<div id="pages" class="clear">
  <?php $this->pageLink('更多 >','next'); ?>
  <?php $this->pageLink('< 返回','prev'); ?>			
	</div>
<?php $this->need('footer.php'); ?>
</body>
