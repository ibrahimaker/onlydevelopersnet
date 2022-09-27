<?php
/* Smarty version 4.1.1, created on 2022-09-26 16:40:43
  from '/home/u0725988/public_html/content/themes/default/templates/ajax.story.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6331d60be4ef97_97808741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd15a69f0e355c7e22962df34302e7c406572f9d5' => 
    array (
      0 => '/home/u0725988/public_html/content/themes/default/templates/ajax.story.publisher.tpl',
      1 => 1647972224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6331d60be4ef97_97808741 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <i class="fa fa-photo-video mr10" style="color: #673ab7;"></i><?php echo __("Create New Story");?>

  </h6>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form class="publisher-mini">
  <div class="modal-body">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label class="form-control-label"><?php echo __("Message");?>
</label>
          <textarea name="message" rows="5" dir="auto" class="form-control"></textarea>
        </div>
      </div>
    </div>

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

    <div class="form-group">
      <label class="form-control-label"><?php echo __("Videos");?>
</label>
      <div class="attachments clearfix" data-type="videos">
        <ul>
          <li class="add">
            <i class="fa fa-video js_x-uploader" data-type="video" data-handle="publisher-mini" data-multiple="true"></i>
          </li>
        </ul>
      </div>
    </div>

    <!-- error -->
    <div class="alert alert-danger mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-primary js_publisher-btn js_publisher-story"><?php echo __("Publish");?>
</button>
  </div>
</form><?php }
}
