<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="bgDiv"></div><div class="dynamic-intro-section without-content">
	<div class="hero-recent-post-list-wrapper w-dyn-list">
		<div class="hero-recent-post-list w-dyn-items">
			<div class="hero-recent-post-item w-dyn-item" style="background-image: url('<?php  $this->fields->img(); ?>');"></div>
		</div>
	</div>
</div>
<div class="section">
	<div class="container w-container">
		<div class="section-title-wrapper" style="text-align: left">
			 <h3 class="archive-title"><?php $this->archiveTitle(array(
      'category'  =>  _t('分类 %s 下的文章'),
      'search'    =>  _t('包含关键字 %s 的文章'),
      'tag'       =>  _t('标签 %s 下的文章'),
      'author'    =>  _t('%s 发布的文章')
  ), '', ''); ?></h3></h3>
				</div>	
		<?php while($this->next()): ?>
		<div class="blog-list-wrapper w-dyn-list">
			<div class="w-dyn-items">
				<div class="first-blog-post-item w-dyn-item">
					<a class="big-archive blog-post-image-link-block w-inline-block" title="<?php $this->title() ?>" href="<?php $this->permalink() ?>" style="background-image: url('<?php  $this->fields->img(); ?>');">
						<div class="first-blog-post-overlay">
							<div class="blog-author-wrapper w-clearfix">							<div class="blog-author-image-block" style="background-image:url(<?php echo $this->options->headImg ? $this->options->headImg : 'https://secure.gravatar.com/avatar/14ab100a9730e44cb11e3d2e9844936f?s=220&r=X&d=mm' ?>)"></div>
		<div class="blog-author-name"><?php $this->author();?></div>
		<div class="blog-date"><?php $this->date('F j, Y'); ?></div>
		</div>
		<div class="first-blog-post-title"><?php $this->title() ?></div>
		</div>
		</a>
		</div>
		</div>
		</div>
<?php endwhile; ?>		
		</div>
		<div class="tint white-content-block-content-wrapper" style="padding-top: 10px;padding-bottom: 10px;margin-top: 30px;">没有更多文章了...</div>		
	</div>