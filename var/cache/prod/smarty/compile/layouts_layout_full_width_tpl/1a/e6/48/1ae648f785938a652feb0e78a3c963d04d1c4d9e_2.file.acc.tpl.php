<?php
/* Smarty version 3.1.33, created on 2019-12-26 16:11:58
  from 'C:\OSPanel\domains\localhost\themes\ayon\templates\_partials\acc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e04b19e422d19_92020610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ae648f785938a652feb0e78a3c963d04d1c4d9e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\ayon\\templates\\_partials\\acc.tpl',
      1 => 1577346260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e04b19e422d19_92020610 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="acc_top <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_a']) && ($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_a'] !== "3")) {?>box-acc<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_a']) && ($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_a'] == "3")) {?>tip_inside<?php }?>">
  <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_a']) && ($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_a'] == "3")) {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
  <?php }?>
    <i class="rts" data-size="28" data-color="#000000"><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['acc_icon'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['acc_icon'], ENT_QUOTES, 'UTF-8');
} else { ?>acc1<?php }?></i>
    <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged'] && !$_smarty_tpl->tpl_vars['customer']->value['is_guest']) {?>
      <span class="acc_check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polyline points="17 3 19 5 23 1" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></svg></span>
      <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['acc_name']) && ($_smarty_tpl->tpl_vars['roythemes']->value['acc_name'] == "1")) {?>
        <span class="acc_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php } else { ?>
      <span class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account'),$_smarty_tpl ) );?>
</span>
      <?php }?>
    <?php } else { ?>
      <span class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account'),$_smarty_tpl ) );?>
</span>
    <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_a']) && ($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_a'] == "3")) {?>
    </a>
    <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged'] && !$_smarty_tpl->tpl_vars['customer']->value['is_guest']) {?>
      <span class="tip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open My Account'),$_smarty_tpl ) );?>
</span>
    <?php } else { ?>
      <span class="tip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login / Sign up'),$_smarty_tpl ) );?>
</span>
    <?php }?>
  <?php }?>
</div>
<?php }
}
