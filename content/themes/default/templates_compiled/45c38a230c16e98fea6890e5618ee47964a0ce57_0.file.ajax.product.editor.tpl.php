<?php
/* Smarty version 4.1.1, created on 2022-09-26 16:39:26
  from '/home/u0725988/public_html/content/themes/default/templates/ajax.product.editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6331d5bee4f0e0_60575059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45c38a230c16e98fea6890e5618ee47964a0ce57' => 
    array (
      0 => '/home/u0725988/public_html/content/themes/default/templates/ajax.product.editor.tpl',
      1 => 1653410926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_6331d5bee4f0e0_60575059 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <i class="fa fa-shopping-cart mr10" style="color: #2b53a4;"></i><?php echo __("Edit Product");?>

  </h6>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form class="js_ajax-forms" data-url="posts/edit.php">
  <div class="modal-body">
    <div class="form-group">
      <label class="form-control-label"><?php echo __("Product Name");?>
</label>
      <input name="name" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['name'];?>
">
    </div>
    <div class="row">
      <div class="form-group col-md-8">
        <label class="form-control-label"><?php echo __("Price");?>
</label>
        <input name="price" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['price'];?>
">
      </div>
      <div class="form-group col-md-4">
        <label class="form-control-label"><?php echo __("Currency");?>
</label>
        <select name="currency" class="form-control">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['system']->value["enabled_currencies"], 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['currency_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['currency_id'] == $_smarty_tpl->tpl_vars['currency']->value['currency_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
 (<?php echo $_smarty_tpl->tpl_vars['currency']->value['symbol'];?>
)</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-8">
        <label class="form-control-label"><?php echo __("Category");?>
</label>
        <select name="category" class="form-control">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['market_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->tpl_vars['post']->value['product']['category_id']), 0, true);
?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label class="form-control-label"><?php echo __("Status");?>
</label>
        <select name="status" class="form-control">
          <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['status'] == "new") {?>selected<?php }?> value="new"><?php echo __("New");?>
</option>
          <option <?php if ($_smarty_tpl->tpl_vars['post']->value['product']['status'] == "old") {?>selected<?php }?> value="old"><?php echo __("Used");?>
</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="form-control-label"><?php echo __("Location");?>
</label>
      <input name="location" type="text" class="form-control js_geocomplete" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['product']['location'];?>
">
    </div>
    <div class="form-group">
      <label class="form-control-label"><?php echo __("Description");?>
</label>
      <textarea name="message" rows="5" dir="auto" class="form-control"><?php echo $_smarty_tpl->tpl_vars['post']->value['text_plain'];?>
</textarea>
    </div>
    <!-- custom fields -->
    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>false), 0, false);
?>
    <?php }?>
    <!-- custom fields -->
    <!-- error -->
    <div class="alert alert-danger mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <input type="hidden" name="handle" value="product">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
    <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo __("Cancel");?>
</button>
    <button type="submit" class="btn btn-primary"><?php echo __("Save");?>
</button>
  </div>
</form><?php }
}
