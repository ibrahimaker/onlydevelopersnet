<?php
/* Smarty version 4.1.1, created on 2022-09-26 14:39:41
  from '/home/u0725988/public_html/content/themes/default/templates/emails/test_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6331b9ad643bb7_67832525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77455f59ff9ecb989a0901eefbfc6de9c1df06d9' => 
    array (
      0 => '/home/u0725988/public_html/content/themes/default/templates/emails/test_email.txt',
      1 => 1648036554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6331b9ad643bb7_67832525 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
,

<?php echo __("This is a test email");?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
