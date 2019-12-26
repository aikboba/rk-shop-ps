<?php
/* Smarty version 3.1.33, created on 2019-12-26 11:19:31
  from 'module:pkfavoritesviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e046d13d94115_51967248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6f8d89f86669d93168ea3252c67aac45780370f' => 
    array (
      0 => 'module:pkfavoritesviewstemplates',
      1 => 1577346260,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e046d13d94115_51967248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('pkfp_text', '');
$_smarty_tpl->_assignInScope('pkfp_class', '');
if (!$_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value && $_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to favorites','mod'=>'pk_favorites'),$_smarty_tpl ) );
$_prefixVariable35 = ob_get_clean();
$_smarty_tpl->_assignInScope('pkfp_text', $_prefixVariable35);?>
  <?php $_smarty_tpl->_assignInScope('pkfp_class', 'addToFav');
} elseif ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value && $_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from favorites','mod'=>'pk_favorites'),$_smarty_tpl ) );
$_prefixVariable36 = ob_get_clean();
$_smarty_tpl->_assignInScope('pkfp_text', $_prefixVariable36);?>
  <?php $_smarty_tpl->_assignInScope('pkfp_class', 'removeFromFav icon_checked');
} elseif (!$_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to favorites','mod'=>'pk_favorites'),$_smarty_tpl ) );
$_prefixVariable37 = ob_get_clean();
$_smarty_tpl->_assignInScope('pkfp_text', $_prefixVariable37);?>
  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have to login to add product to Favorites','mod'=>'pk_favorites'),$_smarty_tpl ) );
$_prefixVariable38 = ob_get_clean();
$_smarty_tpl->_assignInScope('pkfp_title', $_prefixVariable38);?>
  <?php $_smarty_tpl->_assignInScope('pkfp_class', 'loginToAdd');
}
if ($_smarty_tpl->tpl_vars['pkfp_text']->value != '') {?>
  <a href="#" class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] !== 'product' || ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product' && !$_smarty_tpl->tpl_vars['customer']->value['is_logged'])) {?>tip_inside<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['pl_hover_lay'] == "2") {?>action-btn<?php }?> noeffect flex-container align-items-center favoritesButton icon-button <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pkfp_class']->value, ENT_QUOTES, 'UTF-8');?>
" title="" data-pid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pid']->value, ENT_QUOTES, 'UTF-8');?>
">
    <i class="rts" data-size="24" data-color="#000000"><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_i_fav'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_i_fav'], ENT_QUOTES, 'UTF-8');
} else { ?>fav1<?php }?></i>

    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
      <?php if (!$_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
        <span>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to favorites','mod'=>'pk_favorites'),$_smarty_tpl ) );?>

        </span>
        <span class="tip">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must be logged in','mod'=>'pk_favorites'),$_smarty_tpl ) );?>

        </span>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
        <?php if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value) {?>
          <span>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This product is in your Favorites','mod'=>'pk_favorites'),$_smarty_tpl ) );?>
</a>
          </span>
        <?php } else { ?>
          <span>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pkfp_text']->value, ENT_QUOTES, 'UTF-8');?>

          </span>
        <?php }?>
      <?php }?>
    <?php } else { ?>
      <?php if (!$_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
        <span class="tip">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must be logged in','mod'=>'pk_favorites'),$_smarty_tpl ) );?>

        </span>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
        <?php if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value) {?>
          <span class="tip">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This product is in your Favorites','mod'=>'pk_favorites'),$_smarty_tpl ) );?>
</a>
          </span>
        <?php } else { ?>
          <span class="tip">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pkfp_text']->value, ENT_QUOTES, 'UTF-8');?>

          </span>
        <?php }?>
      <?php }?>
    <?php }?>

  </a>
<?php }
}
}
