<?php
/* Smarty version 3.1.33, created on 2019-12-26 16:11:59
  from 'C:\OSPanel\domains\localhost\themes\ayon\templates\_partials\side\side_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e04b19ff2d1e1_92385514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7606207ff69d173d35c9046e37c6947ff911bae' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\ayon\\templates\\_partials\\side\\side_search.tpl',
      1 => 1577346260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e04b19ff2d1e1_92385514 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="side_title">&nbsp;</h4>
<span class="close_cross"><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></i></span>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_searchbar'),$_smarty_tpl ) );?>


<div id="search_results"></div>
<?php }
}
