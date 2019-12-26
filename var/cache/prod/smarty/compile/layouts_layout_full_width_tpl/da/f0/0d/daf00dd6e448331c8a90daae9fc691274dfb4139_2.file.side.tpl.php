<?php
/* Smarty version 3.1.33, created on 2019-12-26 16:11:59
  from 'C:\OSPanel\domains\localhost\themes\ayon\templates\_partials\side.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e04b19faeda77_61025341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daf00dd6e448331c8a90daae9fc691274dfb4139' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\ayon\\templates\\_partials\\side.tpl',
      1 => 1577346260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/side/side_search.tpl' => 1,
    'file:_partials/side/side_menu.tpl' => 1,
    'file:_partials/side/side_acc.tpl' => 1,
  ),
),false)) {
function content_5e04b19faeda77_61025341 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="side_menu"
data-menu="<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_m'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_m'], ENT_QUOTES, 'UTF-8');
}?>"
data-search="<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_s'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_s'], ENT_QUOTES, 'UTF-8');
}?>"
data-cart="<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_c'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_c'], ENT_QUOTES, 'UTF-8');
}?>"
data-acc="<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_a'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['click_lay_a'], ENT_QUOTES, 'UTF-8');
}?>"
>
  <div class="side_menu_rel">
    <div id="side_cart_wrap">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_shoppingcart'),$_smarty_tpl ) );?>

    </div>
    <div id="side_search_wrap">
      <?php $_smarty_tpl->_subTemplateRender('file:_partials/side/side_search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displaySideSearch"),$_smarty_tpl ) );?>

    </div>
    <div id="side_menu_wrap">
      <?php $_smarty_tpl->_subTemplateRender('file:_partials/side/side_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displaySideMenu"),$_smarty_tpl ) );?>

    </div>
    <div id="side_acc_wrap">
      <?php $_smarty_tpl->_subTemplateRender('file:_partials/side/side_acc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  </div>
</div>
<div class="side_close">
  <i>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>4</title><g id="Layer_4" data-name="Layer 4"><path d="M19.78,17,14.83,12l4.95-4.95a1,1,0,0,0,0-1.41L18.36,4.24a1,1,0,0,0-1.41,0L12,9.19,7.05,4.24a1,1,0,0,0-1.41,0L4.22,5.65a1,1,0,0,0,0,1.41L9.17,12,4.22,17a1,1,0,0,0,0,1.41L5.64,19.8a1,1,0,0,0,1.41,0L12,14.85l4.95,4.95a1,1,0,0,0,1.41,0l1.41-1.41A1,1,0,0,0,19.78,17Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></g></svg>
  </i>
</div>
<?php }
}
