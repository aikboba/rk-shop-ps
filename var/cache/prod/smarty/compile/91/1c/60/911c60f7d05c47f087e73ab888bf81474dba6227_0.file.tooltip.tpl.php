<?php
/* Smarty version 3.1.33, created on 2019-09-26 14:32:30
  from '/var/www/rimmakaramova-shop/data/modules/welcome/views/templates/tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8ca1ceaf2ba4_72837523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '911c60f7d05c47f087e73ab888bf81474dba6227' => 
    array (
      0 => '/var/www/rimmakaramova-shop/data/modules/welcome/views/templates/tooltip.tpl',
      1 => 1569480855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8ca1ceaf2ba4_72837523 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
</div>
<?php }
}
