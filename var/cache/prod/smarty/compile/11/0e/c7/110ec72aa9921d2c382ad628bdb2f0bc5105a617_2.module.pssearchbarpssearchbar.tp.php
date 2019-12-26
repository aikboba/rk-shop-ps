<?php
/* Smarty version 3.1.33, created on 2019-12-26 16:12:00
  from 'module:pssearchbarpssearchbar.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e04b1a01b67f8_39234596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:pssearchbarpssearchbar.tp',
      1 => 1577346260,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e04b1a01b67f8_39234596 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block search module TOP -->
<div class="search-widget<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['search_lay'])) {?> search<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['search_lay'], ENT_QUOTES, 'UTF-8');
}?>" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['search_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['search_lay'] == "4") {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Start typing here...','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
}?>" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
		<button type="submit" <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['search_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['search_lay'] !== "4") {?>class="search_nogo"<?php }?>>
      <i class="rts" data-size="28" data-color="#000000"><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_i_search'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_i_search'], ENT_QUOTES, 'UTF-8');
} else { ?>search1<?php }?></i>
      <span class="text hidden-xl-down"><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['search_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['search_lay'] !== "4") {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
}?></span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }
}
