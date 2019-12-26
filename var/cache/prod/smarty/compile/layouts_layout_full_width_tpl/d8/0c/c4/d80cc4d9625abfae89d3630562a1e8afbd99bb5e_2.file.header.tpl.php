<?php
/* Smarty version 3.1.33, created on 2019-12-26 16:11:57
  from 'C:\OSPanel\domains\localhost\themes\ayon\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e04b19d475280_04358716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd80cc4d9625abfae89d3630562a1e8afbd99bb5e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\localhost\\themes\\ayon\\templates\\_partials\\header.tpl',
      1 => 1577346260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/menu.tpl' => 2,
    'file:_partials/acc.tpl' => 3,
  ),
),false)) {
function content_5e04b19d475280_04358716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_ns']) && ($_smarty_tpl->tpl_vars['roythemes']->value['header_ns'] == "1")) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10465564605e04b19d3e6899_29809938', 'header_nav');
?>

<?php }?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10685519965e04b19d3ef5b3_08132945', 'header_top');
?>

<?php }
/* {block 'header_nav'} */
class Block_10465564605e04b19d3e6899_29809938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_10465564605e04b19d3e6899_29809938',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="header-nav hidden-md-down">
      <div class="container">
        <div class="row">
          <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_toppanel_lay'])) {?>
            <?php if ($_smarty_tpl->tpl_vars['roythemes']->value['nc_toppanel_lay'] !== "1") {?>
              <div class="col-md-3 col-xs-3 curlan">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

              </div>
            <?php }?>
              <div class="col-md-<?php if ($_smarty_tpl->tpl_vars['roythemes']->value['nc_toppanel_lay'] == "1") {?>12<?php } else { ?>9<?php }?> roycon">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderContent'),$_smarty_tpl ) );?>

              </div>
          <?php }?>
        </div>
      </div>
    </nav>
  <?php
}
}
/* {/block 'header_nav'} */
/* {block 'menu_top'} */
class Block_12540522895e04b19d41b5d6_98036685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender("file:_partials/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'menu_top'} */
/* {block 'acc_top'} */
class Block_17682443475e04b19d420bf1_98607519 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender("file:_partials/acc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'acc_top'} */
/* {block 'menu_top'} */
class Block_2163411085e04b19d42f601_27735358 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender("file:_partials/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                  <?php
}
}
/* {/block 'menu_top'} */
/* {block 'acc_top'} */
class Block_6291270285e04b19d441852_01728104 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                 <?php $_smarty_tpl->_subTemplateRender("file:_partials/acc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
               <?php
}
}
/* {/block 'acc_top'} */
/* {block 'acc_top'} */
class Block_11951899925e04b19d4482d4_56751802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender("file:_partials/acc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                  <?php
}
}
/* {/block 'acc_top'} */
/* {block 'header_top'} */
class Block_10685519965e04b19d3ef5b3_08132945 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_10685519965e04b19d3ef5b3_08132945',
  ),
  'menu_top' => 
  array (
    0 => 'Block_12540522895e04b19d41b5d6_98036685',
    1 => 'Block_2163411085e04b19d42f601_27735358',
  ),
  'acc_top' => 
  array (
    0 => 'Block_17682443475e04b19d420bf1_98607519',
    1 => 'Block_6291270285e04b19d441852_01728104',
    2 => 'Block_11951899925e04b19d4482d4_56751802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">

       <div class="row action header_lay<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'], ENT_QUOTES, 'UTF-8');
}?>">
         <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay']) && ($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'] !== "4" && $_smarty_tpl->tpl_vars['roythemes']->value['header_lay'] !== "6")) {?>
            <div class="head_logo" id="_desktop_logo">
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                <img class="logo logo-normal img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/roy_customizer/upload/logo-normal-<?php echo htmlspecialchars(Context::getContext()->shop->id, ENT_QUOTES, 'UTF-8');?>
.<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_logo_normal_ext'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_logo_normal_ext'], ENT_QUOTES, 'UTF-8');
} else { ?>png<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                <img class="logo logo-trans img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/roy_customizer/upload/logo-trans-<?php echo htmlspecialchars(Context::getContext()->shop->id, ENT_QUOTES, 'UTF-8');?>
.<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_logo_trans_ext'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_logo_trans_ext'], ENT_QUOTES, 'UTF-8');
} else { ?>png<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
              </a>
              <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay']) && ($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'] == "3")) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_searchbar"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay']) && ($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'] !== "5")) {?>
            <div class="head_menu">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegaMenu'),$_smarty_tpl ) );?>

            </div>
            <?php }?>
            <div class="head_action">
              <ul>
                <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_cl']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_cl'] == "2") {?>
                  <li class="curlan">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_languageselector"),$_smarty_tpl ) );?>

                  </li>
                  <li class="curlan">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_currencyselector"),$_smarty_tpl ) );?>

                  </li>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay']) && ($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'] == "5")) {?>
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12540522895e04b19d41b5d6_98036685', 'menu_top', $this->tplIndex);
?>

                <?php }?>
                <li>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17682443475e04b19d420bf1_98607519', 'acc_top', $this->tplIndex);
?>

                </li>
                <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay']) && ($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'] !== "3")) {?>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_searchbar"),$_smarty_tpl ) );?>
</li>
                <?php }?>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_shoppingcart"),$_smarty_tpl ) );?>
</li>
              </ul>
            </div>
          <?php }?>

          <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay']) && ($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'] == "4" || $_smarty_tpl->tpl_vars['roythemes']->value['header_lay'] == "6")) {?>
            <div class="head_action">
              <ul>
                <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay']) && ($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'] == "6")) {?>
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2163411085e04b19d42f601_27735358', 'menu_top', $this->tplIndex);
?>

                <?php }?>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_searchbar"),$_smarty_tpl ) );?>
</li>
              </ul>
            </div>
            <div class="head_logo" id="_desktop_logo">
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                <img class="logo logo-normal img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/roy_customizer/upload/logo-normal-<?php echo htmlspecialchars(Context::getContext()->shop->id, ENT_QUOTES, 'UTF-8');?>
.<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_logo_normal_ext'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_logo_normal_ext'], ENT_QUOTES, 'UTF-8');
} else { ?>png<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                <img class="logo logo-trans img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/roy_customizer/upload/logo-trans-<?php echo htmlspecialchars(Context::getContext()->shop->id, ENT_QUOTES, 'UTF-8');?>
.<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_logo_trans_ext'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_logo_trans_ext'], ENT_QUOTES, 'UTF-8');
} else { ?>png<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
              </a>
              <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay']) && ($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'] == "3")) {?>
               <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6291270285e04b19d441852_01728104', 'acc_top', $this->tplIndex);
?>

              <?php }?>
            </div>
            <div class="head_action">
              <ul>
                <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_cl']) && $_smarty_tpl->tpl_vars['roythemes']->value['nc_cl'] == "2") {?>
                  <li class="curlan">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_languageselector"),$_smarty_tpl ) );?>

                  </li>
                  <li class="curlan">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_currencyselector"),$_smarty_tpl ) );?>

                  </li>
                <?php }?>
                <li>
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11951899925e04b19d4482d4_56751802', 'acc_top', $this->tplIndex);
?>

                </li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_shoppingcart"),$_smarty_tpl ) );?>
</li>
              </ul>
            </div>
          <?php }?>
        </div>

        <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay']) && ($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'] == "4")) {?>
        <div class="head_menu">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegaMenu'),$_smarty_tpl ) );?>

        </div>
        <?php }?>

      </div>

      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>

  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

  <div class="header-mobile hidden-lg-up">
    <div class="header-mobile-wrap">
      <div class="logo-mobile">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
          <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/roy_customizer/upload/logo-mobile-<?php echo htmlspecialchars(Context::getContext()->shop->id, ENT_QUOTES, 'UTF-8');?>
.<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_mobile_logo_ext'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_mobile_logo_ext'], ENT_QUOTES, 'UTF-8');
} else { ?>png<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
        </a>
      </div>
      <div class="head_action">
        <ul>
          <li><i class="box-search rts" data-size="26" data-color="#000000"><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_i_search'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['nc_i_search'], ENT_QUOTES, 'UTF-8');
} else { ?>search1<?php }?></i></li>
          <li><i class="box-cart rts" data-size="26" data-color="#000000"><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['cart_icon'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['roythemes']->value['cart_icon'], ENT_QUOTES, 'UTF-8');
} else { ?>cart1<?php }?></i><span class="box-cart cart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span></li>
          <li class="menu_top"><i class="box-menu"><span></span><span></span><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_m_icon']) && ($_smarty_tpl->tpl_vars['roythemes']->value['nc_m_icon'] !== "menu4") && ($_smarty_tpl->tpl_vars['roythemes']->value['nc_m_icon'] !== "menu5")) {?><span></span><?php }?></i></li>
        </ul>
      </div>
    </div>
  </div>


<?php
}
}
/* {/block 'header_top'} */
}
