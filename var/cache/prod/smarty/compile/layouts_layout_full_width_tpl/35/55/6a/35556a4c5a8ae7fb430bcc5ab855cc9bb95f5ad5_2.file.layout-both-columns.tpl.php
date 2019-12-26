<?php
/* Smarty version 3.1.33, created on 2019-12-26 16:11:56
  from 'C:\OSPanel\domains\localhost\themes\ayon\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e04b19c4a5b51_06306506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35556a4c5a8ae7fb430bcc5ab855cc9bb95f5ad5' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\ayon\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1577346261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/side.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5e04b19c4a5b51_06306506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19021828435e04b19c43b230_93976464', 'head');
?>


  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['roythemes']->value['o_add']) && $_smarty_tpl->tpl_vars['roythemes']->value['o_add'] == "1") {?> add1<?php }?>">

    <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_loader']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_loader'] == "1") {?>
      <div class="roy-loader">
        <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_logo']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_logo'] !== "1") {?>
          <img class="logo_loader" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/roy_customizer/upload/logo-loader-<?php echo htmlspecialchars(Context::getContext()->shop->id, ENT_QUOTES, 'UTF-8');?>
.<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_logo_ext'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_logo_ext'], ENT_QUOTES, 'UTF-8');
} else { ?>png<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_logo']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_logo'] !== "3") {?>
          <div class="icon_loader"><span></span><span></span><span></span></div>
        <?php }?>

      </div>
    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17896667765e04b19c459534_97477550', 'hook_after_body_opening_tag');
?>


    <main class="roy-reload <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_loader']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_loader'] == "1") {?>animsition<?php }?>">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9037448515e04b19c45ddf4_61075365', 'product_activation');
?>


      <header id="header" class="<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_trans']) && $_smarty_tpl->tpl_vars['roythemes']->value['header_trans'] == "2") {?>normal<?php }
if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_ns']) && $_smarty_tpl->tpl_vars['roythemes']->value['header_ns'] == "1") {?> toppanel<?php }?>" data-trans="<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_trans']) && $_smarty_tpl->tpl_vars['roythemes']->value['header_trans'] == "2") {?>normal<?php } else { ?>trans<?php }?>" data-hide="<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_hide']) && $_smarty_tpl->tpl_vars['roythemes']->value['header_hide'] == "1") {?>yes<?php } else { ?>no<?php }?>" data-top="<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_ns']) && $_smarty_tpl->tpl_vars['roythemes']->value['header_ns'] == "1") {?>yes<?php } else { ?>no<?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10258338295e04b19c46ea26_07753515', 'header');
?>

      </header>

      <section id="wrapper" class="stick_parent_lb">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19545238835e04b19c471862_73024248', "top_column");
?>


        <div class="container">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9701262855e04b19c481c47_05458454', "left_column");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3404098585e04b19c48aa04_13128563', "content_wrapper");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2996715155e04b19c492892_36924076', "right_column");
?>


        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <section id="bottom_column">
        <div class="container">
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11560665885e04b19c497f65_77724531', 'hook_footer_before');
?>

        </div>
      </section>

      <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11854851345e04b19c499e32_10486577', "footer");
?>

      </footer>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10691016765e04b19c49e264_55113355', "side");
?>


    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17213745825e04b19c4a0605_13516653', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12341267345e04b19c4a3100_85778493', 'hook_before_body_closing_tag');
?>


    
        <!-- Yandex.Metrika counter -->
        <?php echo '<script'; ?>
 type="text/javascript" >
          (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
          (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

          ym(55782319, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true,
            ecommerce:"dataLayer"
          });
        <?php echo '</script'; ?>
>
        <noscript><div><img src="https://mc.yandex.ru/watch/55782319" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    
  </body>

</html>
<?php }
/* {block 'head'} */
class Block_19021828435e04b19c43b230_93976464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_19021828435e04b19c43b230_93976464',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_17896667765e04b19c459534_97477550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_17896667765e04b19c459534_97477550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_9037448515e04b19c45ddf4_61075365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_9037448515e04b19c45ddf4_61075365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_10258338295e04b19c46ea26_07753515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_10258338295e04b19c46ea26_07753515',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'breadcrumb'} */
class Block_3620129615e04b19c47f535_67890764 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "top_column"} */
class Block_19545238835e04b19c471862_73024248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top_column' => 
  array (
    0 => 'Block_19545238835e04b19c471862_73024248',
  ),
  'breadcrumb' => 
  array (
    0 => 'Block_3620129615e04b19c47f535_67890764',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="top_column" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category' && $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'] && isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_cat_img']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_cat_img'] == "1" && isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_cat_imglay']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_cat_imglay'] == "2") {?>style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
)"<?php }?>>

            <div class="container">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3620129615e04b19c47f535_67890764', 'breadcrumb', $this->tplIndex);
?>

          </div>
        <?php
}
}
/* {/block "top_column"} */
/* {block "left_column"} */
class Block_9701262855e04b19c481c47_05458454 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_9701262855e04b19c481c47_05458454',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="left-column" class="col-md-12 col-lg-3 side-column">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_4205390805e04b19c48e6d7_89918170 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_3404098585e04b19c48aa04_13128563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_3404098585e04b19c48aa04_13128563',
  ),
  'content' => 
  array (
    0 => 'Block_4205390805e04b19c48e6d7_89918170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-12">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4205390805e04b19c48e6d7_89918170', "content", $this->tplIndex);
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_2996715155e04b19c492892_36924076 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_2996715155e04b19c492892_36924076',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="right-column" class="col-md-12 col-lg-3 side-column">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "right_column"} */
/* {block 'hook_footer_before'} */
class Block_11560665885e04b19c497f65_77724531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_11560665885e04b19c497f65_77724531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

           <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

         <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block "footer"} */
class Block_11854851345e04b19c499e32_10486577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11854851345e04b19c499e32_10486577',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block "side"} */
class Block_10691016765e04b19c49e264_55113355 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'side' => 
  array (
    0 => 'Block_10691016765e04b19c49e264_55113355',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender("file:_partials/side.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block "side"} */
/* {block 'javascript_bottom'} */
class Block_17213745825e04b19c4a0605_13516653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_17213745825e04b19c4a0605_13516653',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_12341267345e04b19c4a3100_85778493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_12341267345e04b19c4a3100_85778493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
