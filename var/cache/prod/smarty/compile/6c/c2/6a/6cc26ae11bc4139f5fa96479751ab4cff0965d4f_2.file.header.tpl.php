<?php
/* Smarty version 3.1.33, created on 2019-12-26 16:11:50
  from 'C:\OSPanel\domains\localhost\modules\cdek\views\templates\hook\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e04b1962a25d8_24725237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cc26ae11bc4139f5fa96479751ab4cff0965d4f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\modules\\cdek\\views\\templates\\hook\\header.tpl',
      1 => 1577346195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e04b1962a25d8_24725237 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var cdek_carriers = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['cdek_carriers']->value ));?>
;
    var cdek_dir = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cdek_dir']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    var cdek_address_parameter = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['cdek_address_parameter']->value), ENT_QUOTES, 'UTF-8');?>
;
    var hourText = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'h','mod'=>'cdek'),$_smarty_tpl ) );?>
";
    var cdek_order_info = {
        date: "<?php if ($_smarty_tpl->tpl_vars['cdek_order_info']->value->delivery_date && $_smarty_tpl->tpl_vars['cdek_order_info']->value->delivery_date != '0000-00-00 00:00:00' && $_smarty_tpl->tpl_vars['cdek_order_info']->value->delivery_date != '0000-00-00') {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['cdek_order_info']->value->delivery_date)),'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>00-00-0000<?php }?>",
        time_begin: "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cdek_order_info']->value->delivery_time_begin,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
        time_end: "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cdek_order_info']->value->delivery_time_end,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
    };
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/html" id="cdek_address">
    <div class="cdek_address">
                                                                                                                                                                                                                        </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/html" id="cdek_pvz_list">
    <div class="cdek_pvz_list">
        <div class="cdek_selected">
            %selected%
        </div>
        <div class="cdek_list">
            %list%
        </div>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/html" id="cdek_pvz_list_item">
    <div class="cdek_pvz_list_item %active%" data-delivery-point="%city%, %address%" data-code="%code%" daat>
        <div class="cdek_info">
            <div class="cdek_item_address"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address','mod'=>'cdek'),$_smarty_tpl ) );?>
: %city%, %address%</div>
            <div class="cdek_item_phone"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone','mod'=>'cdek'),$_smarty_tpl ) );?>
: %phone%</b></div>
            <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Work time','mod'=>'cdek'),$_smarty_tpl ) );?>
:<br> %work_time%</div>
            <div class="click_for_select">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select','mod'=>'cdek'),$_smarty_tpl ) );?>

            </div>
            <div class="cdek_item_info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Item selected','mod'=>'cdek'),$_smarty_tpl ) );?>
</div>
        </div>
            </div>
<?php echo '</script'; ?>
><?php }
}
