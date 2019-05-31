<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>

<style>
.blog-author-image-block,.blog-author-name{_display: none !important}
    #topbar {
      box-sizing: border-box;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1;
      width: 100%;
      padding: 10px;
      text-align: center;
      background: rgba(179, 173, 173, 0.8);
    }


</style>

 <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
<link rel="stylesheet" href=<?php $this->options->themeUrl('prism.css'); ?> /> 
<link rel='stylesheet'  href=<?php $this->options->themeUrl('style.css'); ?> type='text/css' media='all' />
<script src="//cxcat.cn/usr/themes/cxcat/prism.js"></script>
<link href="<?php $this->options->themeUrl('favicon.jpg'); ?>" rel="shortcut icon" type="image/x-icon"></head>
<div class="navbar w-nav" style="text-align: left">
	<div class="container w-container">			
		 <div id="topbar">
<a  href="<?php $this->options->siteUrl(); ?>">Home&nbsp&nbsp</a>
<?php $this->widget('Widget_Contents_Page_List')
               ->parse('<a href="{permalink}">{title}&nbsp&nbsp</a>'); ?>
</div>
<div class="rightNav">
 <div class="site-meta" >
        <h1 class="site-title ">
            <?php $this->options->title() ?>
        </h1>
        <p class="site-description header-words"><?php $this->options->description() ?></p>
    </div><!-- end .site-meta -->
    <div class="going-down header-words fly-to-view">
    </div>
		</div>
	</div>

</div>


