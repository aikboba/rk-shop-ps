<?php
/* Smarty version 3.1.33, created on 2019-12-26 11:19:28
  from 'module:roycustomcategory1viewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e046d10969d98_85085094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '052eb2a9630e562f010f4c30f0c90dc34b38a1de' => 
    array (
      0 => 'module:roycustomcategory1viewste',
      1 => 1577346227,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/miniatures/product-mini.tpl' => 1,
  ),
),false)) {
function content_5e046d10969d98_85085094 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="featured-products roy_cc1 clearfix mt-3<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_cc1_slider']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_cc1_slider'] == "1") {?> slideme<?php }
if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_cc1_per'])) {?> pl_per<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_cc1_per'], ENT_QUOTES, 'UTF-8');
}
if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_cc1_spa'])) {?> pl_spa<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_cc1_spa'], ENT_QUOTES, 'UTF-8');
}
if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pl_lay'])) {?> pl_lay<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['pl_lay'], ENT_QUOTES, 'UTF-8');
}
if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_cc1_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_cc1_lay'] == "2") {?> mini<?php }
if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_cc1_width']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_cc1_width'] == "2") {?> col-lg-6<?php }?>"
data-auto="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_cc1_auto'], ENT_QUOTES, 'UTF-8');?>
"
data-max-slides="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_cc1_per'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if (false) {?>
  <h2 class="h1 products-section-title text-uppercase">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our products','mod'=>'roy_customcategory1'),$_smarty_tpl ) );?>

    </a>
  </h2>
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_hp_title']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_hp_title'] == "2") {?>
    <div class="undertitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check the people choice','mod'=>'roy_customcategory1'),$_smarty_tpl ) );?>
</div>
  <?php }?>
  <div class="products">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'hp', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_hp']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_hp']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_hp']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_hp']->value['total'];
?>
      <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_cc1_lay']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_cc1_lay'] == "1") {?>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
      <?php } else { ?>

        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_hp']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_hp']->value['iteration'] : null) == 1) {?><div class="products-box"><?php }?>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-mini.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_hp']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_hp']->value['last'] : null)) {?>
        </div>
        <?php } else { ?>
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_hp']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_hp']->value['iteration'] : null)%3 == 0) {?>
            </div><div class="products-box">
            <?php }?>
        <?php }?>

      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</section>
<?php }
}
