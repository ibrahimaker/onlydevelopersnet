<?php
/* Smarty version 4.1.1, created on 2022-09-26 14:00:31
  from '/home/u0725988/public_html/content/themes/default/templates/ajax.product.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6331b07fc4c256_23477569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd3427e6ebca8a93a44508c4b27ca92aee55d1e3' => 
    array (
      0 => '/home/u0725988/public_html/content/themes/default/templates/ajax.product.publisher.tpl',
      1 => 1653341816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_6331b07fc4c256_23477569 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <i class="fa fa-shopping-cart mr10" style="color: #2b53a4;"></i><?php echo __("Sell New Product");?>

  </h6>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form class="publisher-mini">
  <div class="modal-body">
    <div class="form-group">
      <label class="form-control-label"><?php echo __("Product Name");?>
</label>
      <input name="name" type="text" class="form-control">
    </div>
    <div class="row">
      <div class="form-group col-md-8">
        <label class="form-control-label"><?php echo __("Price");?>
</label>
        <input name="price" type="text" class="form-control">
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
"><?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
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
            <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
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
          <option value="new"><?php echo __("New");?>
</option>
          <option value="old"><?php echo __("Used");?>
</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="form-control-label"><?php echo __("Location");?>
</label>
      <input name="location" type="text" class="form-control js_geocomplete">
    </div>
    <div class="form-group">
      <label class="form-control-label"><?php echo __("Description");?>
</label>
      <textarea name="message" rows="5" dir="auto" class="form-control"></textarea>
    </div>
    <!-- custom fields -->
    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, false);
?>
    <?php }?>
    <!-- custom fields -->
    <div class="form-group">
      <label class="form-control-label"><?php echo __("Photos");?>
</label>
      <div class="attachments clearfix" data-type="photos">
        <ul>
          <li class="add">
            <i class="fa fa-camera js_x-uploader" data-handle="publisher-mini" data-multiple="true"></i>
          </li>
        </ul>
      </div>
    </div>
    <!-- error -->
    <div class="alert alert-danger mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-primary js_publisher-btn js_publisher-product"><?php echo __("Publish");?>
</button>
  </div>
</form><?php }
}
