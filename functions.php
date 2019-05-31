<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $headImg = new Typecho_Widget_Helper_Form_Element_Text('headImg', NULL, NULL, _t('作者头像地址'), _t(''));
    $form->addInput($headImg);
$sticky = new Typecho_Widget_Helper_Form_Element_Text('sticky', NULL,NULL, _t('文章置顶'), _t('置顶的文章cid(后台鼠标放置文章标题即可看到)，按照排序输入, 请以半角逗号或空格分隔'));
    $form->addInput($sticky);


  $footerHtml = new Typecho_Widget_Helper_Form_Element_Textarea('footerHtml', NULL, NULL, _t('底部Footer附加内容'), _t('在这里填入Html代码，包括但不限于跟踪代码'));
    $form->addInput($footerHtml);
 


}




