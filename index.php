<?php
/**
 * 我爱喝可乐！
 *
 * @package Cola
 * @author Cola
 * @version 1.0
 * @link https://cxcat.cn
 */

/** 文章置顶 */

$sticky = $this->options->sticky;
if($sticky && $this->is('index') || $this->is('front')){
    $sticky_cids = explode(',', strtr($sticky, ' ', ',')); 
    $sticky_html = "<span style='color:red;' class='fa fa-bookmark'>123</span>"; 
    $db = Typecho_Db::get();
    $pageSize = $this->options->pageSize;
    $select1 = $this->select()->where('type = ?', 'post');
    $select2 = $this->select()->where('type = ? && status = ? && created < ?', 'post','publish',time());
    $this->row = [];
    $this->stack = [];
    $this->length = 0;
    $order = '';
    foreach($sticky_cids as $i => $cid) {
        if($i == 0) $select1->where('cid = ?', $cid);
        else $select1->orWhere('cid = ?', $cid);
        $order .= " when $cid then $i";
        $select2->where('table.contents.cid != ?', $cid); 
    }
    if ($order) $select1->order(null,"(case cid$order end)"); 
    if ($this->_currentPage == 1) foreach($db->fetchAll($select1) as $sticky_post){ 
        $sticky_post['sticky'] = $sticky_html;
        $this->push($sticky_post); 
    }
$uid = $this->user->uid; 
    if($uid) $select2->orWhere('authorId = ? && status = ?',$uid,'private');
    $sticky_posts = $db->fetchAll($select2->order('table.contents.created', Typecho_Db::SORT_DESC)->page($this->_currentPage, $this->parameter->pageSize));
    foreach($sticky_posts as $sticky_post) $this->push($sticky_post); 
    $this->setTotal($this->getTotal()-count($sticky_cids)); 
}

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