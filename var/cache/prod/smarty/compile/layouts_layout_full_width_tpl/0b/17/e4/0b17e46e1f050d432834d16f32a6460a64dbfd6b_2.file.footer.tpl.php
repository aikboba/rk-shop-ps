<?php
/* Smarty version 3.1.33, created on 2019-12-26 16:11:59
  from 'C:\OSPanel\domains\localhost\themes\ayon\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e04b19f16f308_16722873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b17e46e1f050d432834d16f32a6460a64dbfd6b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\ayon\\templates\\_partials\\footer.tpl',
      1 => 1577346260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e04b19f16f308_16722873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="footer-container">
  <div class="container">

    <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])) {?>

      <?php if ($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'] == "1") {?>
      <div class="row">
        <div class="col-md-12 wrapper foot-links">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_linklist','hook'=>'displayFooter'),$_smarty_tpl ) );?>

        </div>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'] == "2") {?>
      <div class="row">
        <div class="col-md-4 wrapper foot-social">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_socialfollow'),$_smarty_tpl ) );?>

        </div>

        <div class="col-md-8 wrapper foot-mail">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_emailsubscription'),$_smarty_tpl ) );?>

        </div>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'] == "3") {?>
      <div class="row">
        <div class="col-md-2 wrapper foot-logo">
          <img class="logo_footer img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/roy_customizer/upload/logo-footer-<?php echo htmlspecialchars(Context::getContext()->shop->id, ENT_QUOTES, 'UTF-8');?>
.<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['logo_footer_ext'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['logo_footer_ext'], ENT_QUOTES, 'UTF-8');
} else { ?>png<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>

        <div class="col-md-8 wrapper foot-text">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter','mod'=>'roy_content'),$_smarty_tpl ) );?>

        </div>

        <div class="col-md-2 wrapper foot-social">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_socialfollow'),$_smarty_tpl ) );?>

        </div>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'] == "4") {?>
      <div class="row top">
        <div class="col-md-9 wrapper foot-links">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_linklist','hook'=>'displayFooter'),$_smarty_tpl ) );?>

        </div>

        <div class="col-md-3 wrapper foot-logo">
          <img class="logo_footer img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/roy_customizer/upload/logo-footer-<?php echo htmlspecialchars(Context::getContext()->shop->id, ENT_QUOTES, 'UTF-8');?>
.<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['logo_footer_ext'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['logo_footer_ext'], ENT_QUOTES, 'UTF-8');
} else { ?>png<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
      </div>
      <div class="row bottom">
        <div class="col-md-9 wrapper foot-text">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter','mod'=>'roy_content'),$_smarty_tpl ) );?>

        </div>

        <div class="col-md-3 wrapper foot-social">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_socialfollow'),$_smarty_tpl ) );?>

        </div>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'] == "5") {?>
      <div class="row top">
        <div class="col-md-3 wrapper">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_socialfollow'),$_smarty_tpl ) );?>

        </div>

        <div class="col-md-9 wrapper foot-links">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_linklist','hook'=>'displayFooter'),$_smarty_tpl ) );?>

        </div>
      </div>
      <div class="row bottom">
        <div class="col-md-9 wrapper foot-text">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter','mod'=>'roy_content'),$_smarty_tpl ) );?>

        </div>

        <div class="col-md-3 wrapper foot-logo">
          <img class="logo_footer img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/roy_customizer/upload/logo-footer-<?php echo htmlspecialchars(Context::getContext()->shop->id, ENT_QUOTES, 'UTF-8');?>
.<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['logo_footer_ext'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['logo_footer_ext'], ENT_QUOTES, 'UTF-8');
} else { ?>png<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
        </div>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'] == "6") {?>
      <div class="row">
        <div class="col-md-5 wrapper text">
          <img class="logo_footer img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/roy_customizer/upload/logo-footer-<?php echo htmlspecialchars(Context::getContext()->shop->id, ENT_QUOTES, 'UTF-8');?>
.<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['logo_footer_ext'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['logo_footer_ext'], ENT_QUOTES, 'UTF-8');
} else { ?>png<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter','mod'=>'roy_content'),$_smarty_tpl ) );?>

        </div>

        <div class="col-md-3 wrapper">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_linklist','hook'=>'displayFooter'),$_smarty_tpl ) );?>

        </div>

        <div class="col-md-4 wrapper">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_emailsubscription'),$_smarty_tpl ) );?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_socialfollow'),$_smarty_tpl ) );?>

        </div>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'] == "7") {?>
      <div class="row">
        <div class="col-md-3 wrapper text">
          <img class="logo_footer img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/roy_customizer/upload/logo-footer-<?php echo htmlspecialchars(Context::getContext()->shop->id, ENT_QUOTES, 'UTF-8');?>
.<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['logo_footer_ext'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['logo_footer_ext'], ENT_QUOTES, 'UTF-8');
} else { ?>png<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter','mod'=>'roy_content'),$_smarty_tpl ) );?>

        </div>

        <div class="col-md-3 wrapper">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_linklist','hook'=>'displayFooter'),$_smarty_tpl ) );?>

        </div>

        <div class="col-md-3 wrapper">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_socialfollow'),$_smarty_tpl ) );?>

        </div>

        <div class="col-md-3 wrapper">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_emailsubscription'),$_smarty_tpl ) );?>

        </div>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'] == "8") {?>
      <div class="row">
        <div class="col-md-3 wrapper text">
          <img class="logo_footer img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/roy_customizer/upload/logo-footer-<?php echo htmlspecialchars(Context::getContext()->shop->id, ENT_QUOTES, 'UTF-8');?>
.<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['logo_footer_ext'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['logo_footer_ext'], ENT_QUOTES, 'UTF-8');
} else { ?>png<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter','mod'=>'roy_content'),$_smarty_tpl ) );?>

        </div>

        <div class="col-md-6 wrapper">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_linklist','hook'=>'displayFooter'),$_smarty_tpl ) );?>

        </div>

        <div class="col-md-3 wrapper">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>'ps_socialfollow'),$_smarty_tpl ) );?>

        </div>
      </div>
      <?php }?>

    <?php }?>

    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20173862475e04b19f16ca10_21833634', 'hook_footer_after');
?>

    </div>
  </div>
</div>
<div id="is_media"></div>
<?php }
/* {block 'hook_footer_after'} */
class Block_20173862475e04b19f16ca10_21833634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_20173862475e04b19f16ca10_21833634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
}
