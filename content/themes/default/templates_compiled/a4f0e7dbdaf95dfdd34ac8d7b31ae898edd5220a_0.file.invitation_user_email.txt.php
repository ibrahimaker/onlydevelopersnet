<?php
/* Smarty version 4.1.1, created on 2022-09-26 14:26:58
  from '/home/u0725988/public_html/content/themes/default/templates/emails/invitation_user_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6331b6b2c6e111_06791788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4f0e7dbdaf95dfdd34ac8d7b31ae898edd5220a' => 
    array (
      0 => '/home/u0725988/public_html/content/themes/default/templates/emails/invitation_user_email.txt',
      1 => 1648036554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6331b6b2c6e111_06791788 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
,

<?php echo __("Your friend");?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
 <?php echo __("invite you to our website");?>
 <?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>


<?php echo __("To complete the registration process, please follow this link");?>
:
<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
&invitation_code=<?php echo $_smarty_tpl->tpl_vars['code']->value;?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
