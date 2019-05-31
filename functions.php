<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $headImg = new Typecho_Widget_Helper_Form_Element_Text('headImg', NULL, NULL, _t('作者头像地址'), _t(''));
    $form->addInput($headImg);

  $footerHtml = new Typecho_Widget_Helper_Form_Element_Textarea('footerHtml', NULL, NULL, _t('底部Footer附加内容'), _t('在这里填入Html代码，包括但不限于跟踪代码'));
    $form->addInput($footerHtml);
 


}




