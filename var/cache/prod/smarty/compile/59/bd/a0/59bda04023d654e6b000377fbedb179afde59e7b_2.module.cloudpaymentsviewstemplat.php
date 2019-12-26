<?php
/* Smarty version 3.1.33, created on 2019-12-26 16:11:42
  from 'module:cloudpaymentsviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e04b18e162648_73313272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59bda04023d654e6b000377fbedb179afde59e7b' => 
    array (
      0 => 'module:cloudpaymentsviewstemplat',
      1 => 1577346195,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e04b18e162648_73313272 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="prestashop_module_payment_cloudpayments">
    <input type="hidden" name="pay_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payType']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <input type="hidden" name="widget_data" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widgetData']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <input type="hidden" name="success_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['successUrl']->value, ENT_QUOTES, 'UTF-8');?>
"/>
</form>

<?php }
}
