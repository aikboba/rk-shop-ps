<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__5236da50f79ac8e8e01cc48d8a550d5f008574aa5c3821561ba37e281a25627a */
class __TwigTemplate_7b7922da123cd869b1b1a93f80623c7e469a7ff71f7e2b836ede7d64d717d5ad extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Товары • Магазин Риммы Карамовой</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'ru';
    var lang_is_rtl = '0';
    var full_language_code = 'ru-ru';
    var full_cldr_language_code = 'ru-RU';
    var country_iso_code = 'RU';
    var _PS_VERSION_ = '1.7.6.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'В вашем магазине появился новый заказ.';
    var order_number_msg = 'Номер заказа: ';
    var total_msg = 'Всего: ';
    var from_msg = 'С: ';
    var see_order_msg = 'Смотреть заказ';
    var new_customer_msg = 'Новый клиент зарегистрировался в вашем магазине.';
    var customer_name_msg = 'Имя клиента: ';
    var new_msg = 'Новая сообщение было отправлено в ваш магазин.';
    var see_msg = 'Прочитать это сообщение';
    var token = '4ee72872ecb1535f54b892a96b19e54c';
    var token_admin_orders = '924d99f74496d057766782a3d92727a7';
    var token_admin_customers = '243469754e855af4f364e425929efb6e';
    var token_admin_customer_threads = 'f450241fdb206d0e390cd6456923ffa6';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '5b8759391137443cd17938523b6cfbd0';
    var choose_language_translate = 'Выберите язык';
    var default_language = '1';
    var admin_modules_link = '/admin1370w1suj/index.php/improve/modules/catalog/recommended?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY';
    var admin_notification_get_link = '/admin1370w1suj/index.php/common/notifications?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY';
    var admin_notification_push_link = '/admin1370w1suj/index.php/common/notifications/ack?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Успешно обновлено';
    var errorLogin = 'PrestaShop не может войти в систему Addons, пожалуйста, проверьте свои данные и интернет-соединение.';
    var search_product_msg = 'Искать товар';
  </script>

      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin1370w1suj/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/revsliderprestashop/admin/assets/css/adminicon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ph_simpleblog/css/simpleblog-admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/roy_customizer/css/forall.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin1370w1suj/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin1370w1suj\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin1370w1suj\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\";
var currency = {\"iso_code\":\"RUB\",\"sign\":\"\\u20bd\",\"name\":\"\\u0420\\u043e\\u0441\\u0441\\u0438\\u0439\\u0441\\u043a\\u0438\\u0439 \\u0440\\u0443\\u0431\\u043b\\u044c\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"currencyCode\":\"RUB\",\"currencySymbol\":\"\\u20bd\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/admin1370w1suj/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.1\"></script>
<script type=\"text/javascript\" src=\"/admin1370w1suj/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.1\"></script>
<script type=\"text/javascript\" src=\"/admin1370w1suj/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin1370w1suj/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminAjaxFaviconBO&amp;token=5a56d15c737e9e199c02f802458865b2\";
</script>

<script>
            var admin_gamification_ajax_url = \"https:\\/\\/rimmakaramova-shop.ru\\/admin1370w1suj\\/index.php?controller=AdminGamification&token=40ec2d8ca806850489268f34470a220d\";
            var current_id_tab = 10;
        </script>

";
        // line 179
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-ru adminproducts\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminDashboard&amp;token=a79254ec3e4533b86b26ed96ff06638a\"></a>
      <span id=\"shop_version\">1.7.6.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Быстрый доступ
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminOrders&amp;token=924d99f74496d057766782a3d92727a7\"
                 data-item=\"Заказы\"
      >Заказы</a>
          <a class=\"dropdown-item\"
         href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminCategories&amp;addcategory&amp;token=01f944aa313867f8ec76fa44987cfc93\"
                 data-item=\"Новая категория\"
      >Новая категория</a>
          <a class=\"dropdown-item\"
         href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=fd176f11f5f1286d0d451a131a828cac\"
                 data-item=\"Новый купон\"
      >Новый купон</a>
          <a class=\"dropdown-item\"
         href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php/sell/catalog/products/new?token=bf622bda965590167c8612b8b5ba1644\"
                 data-item=\"Новый товар\"
      >Новый товар</a>
          <a class=\"dropdown-item\"
         href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=6d568cb1d0603c18141845ae4aa1479a\"
                 data-item=\"Оценка каталога\"
      >Оценка каталога</a>
          <a class=\"dropdown-item\"
         href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php/improve/modules/manage?token=bf622bda965590167c8612b8b5ba1644\"
                 data-item=\"Установленные модули\"
      >Установленные модули</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"98\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products\"
        data-post-link=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminQuickAccesses&token=1964041f0993c30a22b0dfa830e7ab88\"
        data-prompt-text=\"Задайте название ярлыка:\"
        data-link=\"Товары - Список\"
      >
        <i class=\"material-icons\">add_circle</i>
        Добавить текущую страницу в Быстрый Доступ
      </a>
        <a class=\"dropdown-item\" href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminQuickAccesses&token=1964041f0993c30a22b0dfa830e7ab88\">
      <i class=\"material-icons\">settings</i>
      Управление быстрым доступом
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin1370w1suj/index.php?controller=AdminSearch&amp;token=be7d66641f401cc8a52cb6bcabc8b659\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Поиск (например, артикул, имя пользователя...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Везде
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Везде\" href=\"#\" data-value=\"0\" data-placeholder=\"Что вы ищете?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Везде</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Каталог\" href=\"#\" data-value=\"1\" data-placeholder=\"Название товара, артикул, ссылка...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Каталог</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по имени\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, имя...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Клиенты по имени</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Клиенты по IP-адресу</a>
        <a class=\"dropdown-item\" data-item=\"Заказы\" href=\"#\" data-value=\"3\" data-placeholder=\"№ заказа\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Заказы</a>
        <a class=\"dropdown-item\" data-item=\"По счетам\" href=\"#\" data-value=\"4\" data-placeholder=\"Номер накладной\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> По счетам</a>
        <a class=\"dropdown-item\" data-item=\"Корзины\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Корзины\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Корзины</a>
        <a class=\"dropdown-item\" data-item=\"Модули\" href=\"#\" data-value=\"7\" data-placeholder=\"Название модуля\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Модули</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">Поиск</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://rimmakaramova-shop.ru/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Перейти в магазин
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Заказы<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Клиенты<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Сообщения<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Сейчас нет новых заказов :(<br>
              Давно проверяли вашу конверсию?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет новых клиентов :(<br>
              Давно отправляли e-mail о покупках?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет сообщений.<br>
              Есть время на кое-что еще!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      c <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - зарегистрировано <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/shop%40rimmakaramova.ru.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Римма</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin1370w1suj/index.php/configure/advanced/employees/1/edit?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\">
      <i class=\"material-icons\">settings</i>
      Ваш профиль
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Тренировка</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Маркет PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminLogin&amp;logout=1&amp;token=ac87b2b61b01f762fd67f0aefcca5a15\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Выход</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin1370w1suj/index.php/configure/advanced/employees/toggle-navigation?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminDashboard&amp;token=a79254ec3e4533b86b26ed96ff06638a\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Пульт</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Продажа</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminOrders&amp;token=924d99f74496d057766782a3d92727a7\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Заказы
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminOrders&amp;token=924d99f74496d057766782a3d92727a7\" class=\"link\"> Заказы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin1370w1suj/index.php/sell/orders/invoices/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> По счетам
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminSlip&amp;token=47cb16165595b87aabb255e8c83def37\" class=\"link\"> Платежные квитанции
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin1370w1suj/index.php/sell/orders/delivery-slips/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Транспортные накладные
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminCarts&amp;token=3174df94d7f62d644f1da105a5356deb\" class=\"link\"> Корзины
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin1370w1suj/index.php/sell/catalog/products?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Каталог
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin1370w1suj/index.php/sell/catalog/products?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Товары
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/admin1370w1suj/index.php/sell/catalog/categories?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Категории
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminTracking&amp;token=ce874aea74b3b895b40ab02e2dc4e9b3\" class=\"link\"> Мониторинг
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminAttributesGroups&amp;token=3c4970ce05b3eee24d7321bf6f51a5f5\" class=\"link\"> Атрибуты и характеристики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/admin1370w1suj/index.php/sell/catalog/brands/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Бренды и Поставщики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminAttachments&amp;token=65b8854b54e06355add0e9ffc7bc8dea\" class=\"link\"> Файлы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminCartRules&amp;token=fd176f11f5f1286d0d451a131a828cac\" class=\"link\"> Скидки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin1370w1suj/index.php/sell/stocks/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/admin1370w1suj/index.php/sell/customers/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Клиенты
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/admin1370w1suj/index.php/sell/customers/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Клиенты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminAddresses&amp;token=c35d6dd571e84970822030edbf501204\" class=\"link\"> Адреса
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminCustomerThreads&amp;token=f450241fdb206d0e390cd6456923ffa6\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Клиентская служба
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminCustomerThreads&amp;token=f450241fdb206d0e390cd6456923ffa6\" class=\"link\"> Клиентская служба
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminOrderMessage&amp;token=833c0015f2adab287c5b3ee1a6c9547e\" class=\"link\"> Сообщения о заказах
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminReturn&amp;token=98eae298bb8334476ab2628c42e04540\" class=\"link\"> Возвраты товаров
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminStats&amp;token=6d568cb1d0603c18141845ae4aa1479a\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Статистика
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Улучшения</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin1370w1suj/index.php/improve/modules/manage?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Модули
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin1370w1suj/index.php/improve/modules/manage?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminPsMboModule&amp;token=43c222058758796774f1bc6fa6b8c220\" class=\"link\"> Каталог модулей
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/admin1370w1suj/index.php/improve/design/themes/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Дизайн
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/admin1370w1suj/index.php/improve/design/themes/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Шаблон и логотип
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminPsMboTheme&amp;token=588a91ce91a9373808bf5ddf911a18d5\" class=\"link\"> Каталог шаблонов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminMailThemeParent\">
                              <a href=\"/admin1370w1suj/index.php/improve/design/mail_theme/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Email Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/admin1370w1suj/index.php/improve/design/cms-pages/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Страницы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin1370w1suj/index.php/improve/design/modules/positions/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Расположение блоков
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminImages&amp;token=b44629a2488817e2dcca912f8bca8de4\" class=\"link\"> Настройки изображений
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/admin1370w1suj/index.php/modules/link-widget/list?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminCarriers&amp;token=ada108e9aab364954cc25ce6dde3244e\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Доставка
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminCarriers&amp;token=ada108e9aab364954cc25ce6dde3244e\" class=\"link\"> Перевозчики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin1370w1suj/index.php/improve/shipping/preferences?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin1370w1suj/index.php/improve/payment/payment_methods?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Оплата
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin1370w1suj/index.php/improve/payment/payment_methods?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Способы оплаты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin1370w1suj/index.php/improve/payment/preferences?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin1370w1suj/index.php/improve/international/localization/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Интернационализация
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin1370w1suj/index.php/improve/international/localization/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Локализация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminZones&amp;token=55bc9ce4af5a2b6442bf3a1f18a49565\" class=\"link\"> География
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/admin1370w1suj/index.php/improve/international/taxes/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Налоги
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin1370w1suj/index.php/improve/international/translations/settings?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Переводы
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"143\" id=\"subtab-AdminBlogForPrestaShop\">
                  <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminSimpleBlogPosts&amp;token=fa96454696c8bab4686dac9e54f547ff\" class=\"link\">
                    <i class=\"material-icons mi-note\">note</i>
                    <span>
                    Blog for PrestaShop
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-143\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"144\" id=\"subtab-AdminSimpleBlogPosts\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminSimpleBlogPosts&amp;token=fa96454696c8bab4686dac9e54f547ff\" class=\"link\"> Posts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"145\" id=\"subtab-AdminSimpleBlogCategories\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminSimpleBlogCategories&amp;token=11f6640d379e9284ea91a8e5a9ac44a0\" class=\"link\"> Категории
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"146\" id=\"subtab-AdminSimpleBlogComments\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminSimpleBlogComments&amp;token=75f7be985a0fb3543a985da5dac7d0a9\" class=\"link\"> Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"147\" id=\"subtab-AdminSimpleBlogTags\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminSimpleBlogTags&amp;token=ef12a53e49e57c5403e91c7c8ba100a7\" class=\"link\"> Tags
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"148\" id=\"subtab-AdminSimpleBlogAuthors\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminSimpleBlogAuthors&amp;token=defdfef4ec3545e0c893a1e1324c44fd\" class=\"link\"> Авторы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"149\" id=\"subtab-AdminSimpleBlogSettings\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminSimpleBlogSettings&amp;token=3f9b01fc00fae492bd9e25eba1fe415a\" class=\"link\"> Settings
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Настроить</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin1370w1suj/index.php/configure/shop/preferences/preferences?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Параметры магазина
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin1370w1suj/index.php/configure/shop/preferences/preferences?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Общее
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin1370w1suj/index.php/configure/shop/order-preferences/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Настройки заказов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin1370w1suj/index.php/configure/shop/product-preferences/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Настройки товаров
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin1370w1suj/index.php/configure/shop/customer-preferences/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Настройки клиента
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/admin1370w1suj/index.php/configure/shop/contacts/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Контакты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin1370w1suj/index.php/configure/shop/seo-urls/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Трафик и SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminSearchConf&amp;token=f1d99a19f879efa52a06a8df0d1d0a17\" class=\"link\"> Поиск
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminGamification&amp;token=40ec2d8ca806850489268f34470a220d\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin1370w1suj/index.php/configure/advanced/system-information/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Расширенные параметры
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin1370w1suj/index.php/configure/advanced/system-information/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Информация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin1370w1suj/index.php/configure/advanced/performance/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Производительность
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin1370w1suj/index.php/configure/advanced/administration/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Администрирование
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin1370w1suj/index.php/configure/advanced/emails/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/admin1370w1suj/index.php/configure/advanced/import/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Импорт
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/admin1370w1suj/index.php/configure/advanced/employees/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Сотрудники
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/admin1370w1suj/index.php/configure/advanced/sql-requests/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> База данных
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin1370w1suj/index.php/configure/advanced/logs/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Журнал событий
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/admin1370w1suj/index.php/configure/advanced/webservice-keys/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" class=\"link\"> Веб службы
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"136\" id=\"tab-AdminRevslider\">
              <span class=\"title\">Revolution Slider</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"137\" id=\"subtab-AdminRevsliderSliders\">
                  <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminRevsliderSliders&amp;token=20c698ef67843bcd86c7db93c3c65d1b\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Sliders
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"138\" id=\"subtab-AdminRevolutionsliderGlobalSettings\">
                  <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminRevolutionsliderGlobalSettings&amp;token=0ad1a6600ca2217d72c4012505bc3ff6\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Global Settings
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"139\" id=\"subtab-AdminRevolutionsliderAddons\">
                  <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminRevolutionsliderAddons&amp;token=8297e245eadffc42b1d0e90b7301e6e7\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Addons
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"140\" id=\"subtab-AdminRevolutionsliderNavigation\">
                  <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminRevolutionsliderNavigation&amp;token=2571f410abda802ed37acfff7e389c45\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Navigation
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Запуск магазина!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Продолжить</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Остановить</a>
  </div>
</div>

</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Каталог</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin1370w1suj/index.php/sell/catalog/products?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\" aria-current=\"page\">Товары</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Товары          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminPsMboModule&token=43c222058758796774f1bc6fa6b8c220';
    var controller = 'AdminProducts';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin1370w1suj/index.php/sell/catalog/products/new?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\"                  title=\"Новый товар: CTRL+P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Новый товар
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin1370w1suj/index.php/improve/modules/catalog?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\"                title=\"Рекомендуемые модули\"
                              >
                Рекомендуемые модули
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Помощь\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin1370w1suj/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fru%252Fdoc%252FAdminProducts%253Fversion%253D1.7.6.1%2526country%253Dru/%D0%9F%D0%BE%D0%BC%D0%BE%D1%89%D1%8C?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\"
                   id=\"product_form_open_help\"
                >
                  Помощь
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
      
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Продолжить</button>
  <a class=\"onboarding-button-shut-down\">Пропустить этот урок</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">\\u0414\\u043e\\u0431\\u0440\\u043e \\u043f\\u043e\\u0436\\u0430\\u043b\\u043e\\u0432\\u0430\\u0442\\u044c!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>\\u041f\\u0440\\u0438\\u0432\\u0435\\u0442! \\u041c\\u0435\\u043d\\u044f \\u0437\\u043e\\u0432\\u0443\\u0442 \\u041f\\u0440\\u0435\\u0441\\u0442\\u043e\\u043d, \\u044f \\u043c\\u043e\\u0433\\u0443 \\u0432\\u0430\\u043c \\u0437\\u0434\\u0435\\u0441\\u044c \\u0432\\u0441\\u0451 \\u043f\\u043e\\u043a\\u0430\\u0437\\u0430\\u0442\\u044c.<\\/p>\\n    <p>\\u0412\\u0430\\u043c \\u0441\\u0442\\u043e\\u0438\\u0442 \\u043e\\u0437\\u043d\\u0430\\u043a\\u043e\\u043c\\u0438\\u0442\\u044c\\u0441\\u044f \\u0441 \\u043d\\u0435\\u043a\\u043e\\u0442\\u043e\\u0440\\u044b\\u043c\\u0438 \\u043d\\u0435\\u043e\\u0431\\u0445\\u043e\\u0434\\u0438\\u043c\\u044b\\u043c\\u0438 \\u0448\\u0430\\u0433\\u0430\\u043c\\u0438 \\u0434\\u043b\\u044f \\u0437\\u0430\\u043f\\u0443\\u0441\\u043a\\u0430 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0430:\\n    \\u0421\\u043e\\u0437\\u0434\\u0430\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448 \\u043f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440, \\u043d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u0442\\u0435 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d, \\u043d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u0442\\u0435 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0443 \\u0438 \\u043f\\u043b\\u0430\\u0442\\u0435\\u0436\\u0438...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>\\u041f\\u0440\\u0438\\u0441\\u0442\\u0443\\u043f\\u0438\\u043c!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">\\u041f\\u043e\\u0437\\u0436\\u0435<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">\\u041f\\u0443\\u0441\\u043a<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/rimmakaramova-shop.ru\\/admin1370w1suj\\/index.php?controller=AdminDashboard&token=a79254ec3e4533b86b26ed96ff06638a\"}]},{\"title\":\"\\u0414\\u0430\\u0432\\u0430\\u0439\\u0442\\u0435 \\u0441\\u043e\\u0437\\u0434\\u0430\\u0434\\u0438\\u043c \\u0412\\u0430\\u0448 \\u043f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440\",\"subtitle\":{\"1\":\"\\u0427\\u0442\\u043e \\u0432\\u044b \\u0445\\u043e\\u0442\\u0438\\u0442\\u0435 \\u0441\\u043e\\u043e\\u0431\\u0449\\u0438\\u0442\\u044c \\u043e\\u0431 \\u044d\\u0442\\u043e\\u043c? \\u041f\\u043e\\u0434\\u0443\\u043c\\u0430\\u0439\\u0442\\u0435, \\u0447\\u0442\\u043e \\u0445\\u043e\\u0442\\u044f\\u0442 \\u0443\\u0437\\u043d\\u0430\\u0442\\u044c \\u0432\\u0430\\u0448\\u0438 \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u044b.\",\"2\":\"\\u0414\\u043e\\u0431\\u0430\\u0432\\u044c\\u0442\\u0435 \\u044f\\u0441\\u043d\\u0443\\u044e \\u0438 \\u043f\\u0440\\u0438\\u0432\\u043b\\u0435\\u043a\\u0430\\u0442\\u0435\\u043b\\u044c\\u043d\\u0443\\u044e \\u0438\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0438\\u044e. \\u041f\\u043e\\u0437\\u0436\\u0435 \\u0435\\u0451 \\u043c\\u043e\\u0436\\u043d\\u043e \\u0438\\u0441\\u043f\\u0440\\u0430\\u0432\\u0438\\u0442\\u044c :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0414\\u0430\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448\\u0435\\u043c\\u0443 \\u0442\\u043e\\u0432\\u0430\\u0440\\u0443 \\u0438\\u043d\\u0442\\u0435\\u0440\\u0435\\u0441\\u043d\\u043e\\u0435 \\u043d\\u0430\\u0437\\u0432\\u0430\\u043d\\u0438\\u0435.\",\"options\":[\"savepoint\"],\"page\":[\"\\/admin1370w1suj\\/index.php\\/sell\\/catalog\\/products\\/new?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\",\"admin1370w1suj\\/index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0417\\u0430\\u043f\\u043e\\u043b\\u043d\\u0438\\u0442\\u0435 \\u043d\\u0435\\u043e\\u0431\\u0445\\u043e\\u0434\\u0438\\u043c\\u0443\\u044e \\u0438\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0438\\u044e \\u0432 \\u044d\\u0442\\u043e\\u0439 \\u0432\\u043a\\u043b\\u0430\\u0434\\u043a\\u0435. \\u0414\\u0440\\u0443\\u0433\\u0438\\u0435 \\u0432\\u043a\\u043b\\u0430\\u0434\\u043a\\u0438 \\u0434\\u043b\\u044f \\u0440\\u0430\\u0441\\u0448\\u0438\\u0440\\u0435\\u043d\\u043d\\u043e\\u0439 \\u0438\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0438\\u0438.\",\"page\":\"admin1370w1suj\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0414\\u043e\\u0431\\u0430\\u0432\\u044c\\u0442\\u0435 \\u043e\\u0434\\u043d\\u043e \\u0438\\u043b\\u0438 \\u043d\\u0435\\u0441\\u043a\\u043e\\u043b\\u044c\\u043a\\u043e \\u0438\\u0437\\u043e\\u0431\\u0440\\u0430\\u0436\\u0435\\u043d\\u0438\\u0439, \\u0447\\u0442\\u043e\\u0431\\u044b \\u0432\\u0430\\u0448 \\u0442\\u043e\\u0432\\u0430\\u0440 \\u0432\\u044b\\u0433\\u043b\\u044f\\u0434\\u0435\\u043b \\u043f\\u0440\\u0438\\u0432\\u043b\\u0435\\u043a\\u0430\\u0442\\u0435\\u043b\\u044c\\u043d\\u043e!\",\"page\":\"admin1370w1suj\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u041a\\u0430\\u043a \\u0434\\u043e\\u0440\\u043e\\u0433\\u043e \\u0432\\u044b \\u0445\\u043e\\u0442\\u0438\\u0442\\u0435 \\u043f\\u0440\\u043e\\u0434\\u0430\\u0432\\u0430\\u0442\\u044c?\",\"page\":\"admin1370w1suj\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"\\u0423\\u0445! \\u0412\\u044b \\u0442\\u043e\\u043b\\u044c\\u043a\\u043e \\u0447\\u0442\\u043e \\u0441\\u043e\\u0437\\u0434\\u0430\\u043b\\u0438 \\u0432\\u0430\\u0448 \\u043f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u0442\\u043e\\u0432\\u0430\\u0440. \\u0417\\u0434\\u043e\\u0440\\u043e\\u0432\\u043e, \\u043d\\u0435 \\u0442\\u0430\\u043a \\u043b\\u0438?\",\"page\":\"admin1370w1suj\\/index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"\\u041f\\u0440\\u0438\\u0434\\u0430\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448\\u0435\\u043c\\u0443 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0443 \\u0438\\u043d\\u0434\\u0438\\u0432\\u0438\\u0434\\u0443\\u0430\\u043b\\u044c\\u043d\\u043e\\u0441\\u0442\\u044c\",\"subtitle\":{\"1\":\"\\u041a\\u0430\\u043a \\u043f\\u043e-\\u0432\\u0430\\u0448\\u0435\\u043c\\u0443 \\u0434\\u043e\\u043b\\u0436\\u0435\\u043d \\u0432\\u044b\\u0433\\u043b\\u044f\\u0434\\u0435\\u0442\\u044c \\u0432\\u0430\\u0448 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d? \\u0427\\u0442\\u043e \\u0434\\u0435\\u043b\\u0430\\u0435\\u0442 \\u0435\\u0433\\u043e \\u043e\\u0441\\u043e\\u0431\\u0435\\u043d\\u043d\\u044b\\u043c?\",\"2\":\"\\u041d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u0442\\u0435 \\u0432\\u0430\\u0448 \\u0448\\u0430\\u0431\\u043b\\u043e\\u043d \\u0438\\u043b\\u0438 \\u0432\\u044b\\u0431\\u0435\\u0440\\u0438\\u0442\\u0435 \\u043d\\u0430\\u043b\\u0438\\u0443\\u0447\\u0448\\u0438\\u0439 \\u0432 \\u043d\\u0430\\u0448\\u0435\\u043c \\u043a\\u0430\\u0442\\u0430\\u043b\\u043e\\u0433\\u0435 \\u0448\\u0430\\u0431\\u043b\\u043e\\u043d\\u043e\\u0432.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0425\\u043e\\u0440\\u043e\\u0448\\u0430\\u044f \\u0438\\u0434\\u0435\\u044f - \\u043d\\u0430\\u0447\\u0430\\u0442\\u044c \\u0441 \\u0437\\u0430\\u0434\\u0430\\u043d\\u0438\\u044f \\u0432\\u0430\\u0448\\u0435\\u0433\\u043e \\u043b\\u043e\\u0433\\u043e\\u0442\\u0438\\u043f\\u0430!\",\"options\":[\"savepoint\"],\"page\":\"\\/admin1370w1suj\\/index.php\\/improve\\/design\\/themes\\/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\",\"selector\":\"#form_shop_logos_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0415\\u0441\\u043b\\u0438 \\u0432\\u0430\\u043c \\u043d\\u0443\\u0436\\u043d\\u043e \\u0447\\u0442\\u043e-\\u0442\\u043e \\u0434\\u0435\\u0439\\u0441\\u0442\\u0432\\u0438\\u0442\\u0435\\u043b\\u044c\\u043d\\u043e \\u043e\\u0441\\u043e\\u0431\\u0435\\u043d\\u043d\\u043e\\u0435, \\u043f\\u043e\\u0441\\u0435\\u0442\\u0438\\u0442\\u0435 \\u043d\\u0430\\u0448 \\u043a\\u0430\\u0442\\u0430\\u043b\\u043e\\u0433 \\u0448\\u0430\\u0431\\u043b\\u043e\\u043d\\u043e\\u0432!\",\"page\":\"\\/admin1370w1suj\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"\\u041f\\u043e\\u0434\\u0433\\u043e\\u0442\\u043e\\u0432\\u0438\\u0442\\u044c \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d \\u043a \\u043f\\u0440\\u0438\\u0435\\u043c\\u0443 \\u043f\\u043b\\u0430\\u0442\\u0435\\u0436\\u0435\\u0439\",\"subtitle\":{\"1\":\"\\u041a\\u0430\\u043a \\u0432\\u0430\\u0448\\u0438 \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u044b \\u0434\\u043e\\u043b\\u0436\\u043d\\u044b \\u0440\\u0430\\u0441\\u043f\\u043b\\u0430\\u0447\\u0438\\u0432\\u0430\\u0442\\u044c\\u0441\\u044f \\u0441 \\u0432\\u0430\\u043c\\u0438?\",\"2\":\"\\u0418\\u0434\\u0438\\u0442\\u0435 \\u0432 \\u043d\\u043e\\u0433\\u0443 \\u0441 \\u0440\\u044b\\u043d\\u043a\\u043e\\u043c: \\u043f\\u0440\\u0435\\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u044c\\u0442\\u0435 \\u0441\\u0430\\u043c\\u044b\\u0435 \\u043f\\u043e\\u043f\\u0443\\u043b\\u044f\\u0440\\u043d\\u044b\\u0435 \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u044b \\u043e\\u043f\\u043b\\u0430\\u0442\\u044b \\u0441\\u0432\\u043e\\u0438\\u043c \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430\\u043c!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0421\\u043f\\u043e\\u0441\\u043e\\u0431\\u044b \\u043e\\u043f\\u043b\\u0430\\u0442\\u044b, \\u0443\\u0436\\u0435 \\u0434\\u043e\\u0441\\u0442\\u0443\\u043f\\u043d\\u044b\\u0435 \\u0432\\u0430\\u0448\\u0438\\u043c \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430\\u043c.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin1370w1suj\\/index.php\\/improve\\/payment\\/payment_methods?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0417\\u0434\\u0435\\u0441\\u044c \\u0432\\u044b \\u043c\\u043e\\u0436\\u0435\\u0442\\u0435 \\u0432\\u044b\\u0431\\u0440\\u0430\\u0442\\u044c \\u0438 \\u0434\\u043e\\u0431\\u0430\\u0432\\u0438\\u0442\\u044c \\u0434\\u0440\\u0443\\u0433\\u0438\\u0435 \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u044b \\u043e\\u043f\\u043b\\u0430\\u0442\\u044b!\",\"page\":\"\\/admin1370w1suj\\/index.php\\/improve\\/payment\\/payment_methods?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1), .card:eq(1) .module-item-list div:eq(0) div:eq(1)\",\"position\":\"top\"}]},{\"title\":\"\\u041d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0439\\u043a\\u0430 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438\",\"subtitle\":{\"1\":\"\\u041a\\u0430\\u043a \\u0432\\u044b \\u0445\\u043e\\u0442\\u0438\\u0442\\u0435 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043b\\u044f\\u0442\\u044c \\u0432\\u0430\\u0448\\u0438 \\u0442\\u043e\\u0432\\u0430\\u0440\\u044b?\",\"2\":\"\\u0412\\u044b\\u0431\\u0435\\u0440\\u0438\\u0442\\u0435 \\u043d\\u0430\\u0438\\u0431\\u043e\\u043b\\u0435\\u0435 \\u0443\\u0434\\u043e\\u0431\\u043d\\u044b\\u0435 \\u0432\\u0430\\u0448\\u0438\\u043c \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430\\u043c \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u044b \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u0438\\u043a! \\u0421\\u043e\\u0437\\u0434\\u0430\\u0439\\u0442\\u0435 \\u0441\\u043e\\u0431\\u0441\\u0442\\u0432\\u0435\\u043d\\u043d\\u043e\\u0433\\u043e \\u043f\\u0435\\u0440\\u0435\\u0432\\u043e\\u0437\\u0447\\u0438\\u043a\\u0430 \\u0438\\u043b\\u0438 \\u0434\\u043e\\u0431\\u0430\\u0432\\u044c\\u0442\\u0435 \\u0433\\u043e\\u0442\\u043e\\u0432\\u044b\\u0435 \\u043c\\u043e\\u0434\\u0443\\u043b\\u0438.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0412\\u043e\\u0442 \\u0441\\u043f\\u0438\\u0441\\u043e\\u043a \\u0434\\u043e\\u0441\\u0442\\u0443\\u043f\\u043d\\u044b\\u0445 \\u0432 \\u0432\\u0430\\u0448\\u0435\\u043c \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0435 \\u0441\\u043f\\u043e\\u0441\\u043e\\u0431\\u043e\\u0432 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438.\",\"options\":[\"savepoint\"],\"page\":\"https:\\/\\/rimmakaramova-shop.ru\\/admin1370w1suj\\/index.php?controller=AdminCarriers&token=ada108e9aab364954cc25ce6dde3244e\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0412\\u044b \\u043c\\u043e\\u0436\\u0435\\u0442\\u0435 \\u043f\\u0440\\u0435\\u0434\\u043b\\u043e\\u0436\\u0438\\u0442\\u044c \\u043d\\u0435\\u0441\\u043a\\u043e\\u043b\\u044c\\u043a\\u043e \\u0432\\u0430\\u0440\\u0438\\u0430\\u043d\\u0442\\u043e\\u0432 \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0438, \\u043d\\u0430\\u0441\\u0442\\u0440\\u043e\\u0438\\u0432 \\u043d\\u0435\\u0441\\u043a\\u043e\\u043b\\u044c\\u043a\\u043e \\u043f\\u0435\\u0440\\u0435\\u0432\\u043e\\u0437\\u0447\\u0438\\u043a\\u043e\\u0432\",\"page\":\"https:\\/\\/rimmakaramova-shop.ru\\/admin1370w1suj\\/index.php?controller=AdminCarriers&token=ada108e9aab364954cc25ce6dde3244e\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"\\u0423\\u043b\\u0443\\u0447\\u0448\\u0438\\u0442\\u0435 \\u0441\\u0432\\u043e\\u0439 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d \\u0441 \\u043f\\u043e\\u043c\\u043e\\u0449\\u044c\\u044e \\u043c\\u043e\\u0434\\u0443\\u043b\\u0435\\u0439\",\"subtitle\":{\"1\":\"\\u0414\\u043e\\u0431\\u0430\\u0432\\u043b\\u044f\\u0439\\u0442\\u0435 \\u043d\\u043e\\u0432\\u044b\\u0435 \\u0444\\u0443\\u043d\\u043a\\u0446\\u0438\\u0438 \\u0438 \\u0443\\u043f\\u0440\\u0430\\u0432\\u043b\\u044f\\u0439\\u0442\\u0435 \\u0441\\u0443\\u0449\\u0435\\u0441\\u0442\\u0432\\u0443\\u044e\\u0449\\u0438\\u043c\\u0438 \\u043f\\u043e\\u0441\\u0440\\u0435\\u0434\\u0441\\u0442\\u0432\\u043e\\u043c \\u043c\\u043e\\u0434\\u0443\\u043b\\u0435\\u0439.\",\"2\":\"\\u041d\\u0435\\u043a\\u043e\\u0442\\u043e\\u0440\\u044b\\u0435 \\u043c\\u043e\\u0434\\u0443\\u043b\\u0438 \\u0443\\u0436\\u0435 \\u043f\\u0440\\u0435\\u0434\\u0443\\u0441\\u0442\\u0430\\u043d\\u043e\\u0432\\u043b\\u0435\\u043d\\u044b, \\u043f\\u0440\\u043e\\u0447\\u0438\\u0435 \\u043c\\u043e\\u0433\\u0443\\u0442 \\u0431\\u044b\\u0442\\u044c \\u043f\\u043b\\u0430\\u0442\\u043d\\u044b\\u043c\\u0438 \\u0438\\u043b\\u0438 \\u0431\\u0435\\u0441\\u043f\\u043b\\u0430\\u0442\\u043d\\u044b\\u043c\\u0438 - \\u043f\\u043e\\u0441\\u043c\\u043e\\u0442\\u0440\\u0438\\u0442\\u0435 \\u043d\\u0430\\u0448\\u0443 \\u043a\\u043e\\u043b\\u043b\\u0435\\u043a\\u0446\\u0438\\u044e \\u0438 \\u0432\\u044b\\u0431\\u0435\\u0440\\u0438\\u0442\\u0435 \\u043f\\u043e\\u0434\\u0445\\u043e\\u0434\\u044f\\u0449\\u0438\\u0435!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u041e\\u0437\\u043d\\u0430\\u043a\\u043e\\u043c\\u044c\\u0442\\u0435\\u0441\\u044c \\u0441 \\u043d\\u0430\\u0448\\u0435\\u0439 \\u043f\\u043e\\u0434\\u0431\\u043e\\u0440\\u043a\\u043e\\u0439 \\u043c\\u043e\\u0434\\u0443\\u043b\\u0435\\u0439 \\u043d\\u0430 \\u043f\\u0435\\u0440\\u0432\\u043e\\u0439 \\u0432\\u043a\\u043b\\u0430\\u0434\\u043a\\u0435, \\u0443\\u043f\\u0440\\u0430\\u0432\\u043b\\u0435\\u043d\\u0438\\u0435 \\u0438\\u043c\\u0438 \\u043d\\u0430 \\u0432\\u0442\\u043e\\u0440\\u043e\\u0439, \\u0443\\u0432\\u0435\\u0434\\u043e\\u043c\\u043b\\u0435\\u043d\\u0438\\u044f - \\u043d\\u0430 \\u0442\\u0440\\u0435\\u0442\\u044c\\u0435\\u0439.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin1370w1suj\\/index.php\\/improve\\/modules\\/catalog?_token=np9CxApBg3gA42m9hzpBaKvCtXqDdAZyAPWQDgoH7pY\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u0412\\u0430\\u043c \\u0434\\u043e\\u0441\\u0442\\u0430\\u0442\\u043e\\u0447\\u043d\\u043e!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          \\u0412\\u044b \\u0443\\u0432\\u0438\\u0434\\u0435\\u043b\\u0438 \\u043c\\u0438\\u043d\\u0438\\u043c\\u0443\\u043c, \\u043d\\u043e \\u0437\\u0434\\u0435\\u0441\\u044c \\u0435\\u0441\\u0442\\u044c \\u0433\\u043e\\u0440\\u0430\\u0437\\u0434\\u043e \\u0431\\u043e\\u043b\\u044c\\u0448\\u0435 \\u0432\\u0435\\u0449\\u0435\\u0439 \\u0434\\u043b\\u044f \\u043e\\u0437\\u043d\\u0430\\u043a\\u043e\\u043c\\u043b\\u0435\\u043d\\u0438\\u044f.<br \\/>\\n          \\u041d\\u0435\\u043a\\u043e\\u0442\\u043e\\u0440\\u044b\\u0435 \\u0440\\u0435\\u0441\\u0443\\u0440\\u0441\\u044b, \\u0434\\u043b\\u044f \\u043f\\u043e\\u043c\\u043e\\u0449\\u0438 \\u0432\\u0430\\u043c \\u0432 \\u0434\\u0430\\u043b\\u044c\\u043d\\u0435\\u0439\\u0448\\u0435\\u043c:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0420\\u0443\\u043a\\u043e\\u0432\\u043e\\u0434\\u0441\\u0442\\u0432\\u043e \\u043d\\u0430\\u0447\\u0438\\u043d\\u0430\\u044e\\u0449\\u0435\\u0433\\u043e<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0424\\u043e\\u0440\\u0443\\u043c<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0422\\u0440\\u0435\\u043d\\u0438\\u0440\\u043e\\u0432\\u043a\\u0430<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0412\\u0438\\u0434\\u0435\\u043e\\u0443\\u0440\\u043e\\u043a\\u0438<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">\\u042f \\u0433\\u043e\\u0442\\u043e\\u0432<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"admin1370w1suj\\/index.php\\/improve\\/modules\\/catalog\"}]}]}, 1, \"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminWelcome&token=2542db9b8e8c7ce58d57e2ef65600a3a\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Ау! Вы потерялись?</p>    <p>Для продолжения кликните здесь:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Продолжить</button>    </div>    <p>Если хотите совсем остановить урок, кликните здесь:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Выход из Приветственного урока</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Шаг <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Вперед</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1460
        $this->displayBlock('content_header', $context, $blocks);
        // line 1461
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1462
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1463
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1464
        echo "
             
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Рекомендованные Модули и Сервисы</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>О, нет!</h1>
  <p class=\"mt-3\">
    Мобильная версия этой страницы еще не доступна.
  </p>
  <p class=\"mt-2\">
    Используйте настольный компьютер для просмотра этой страницы, пока она не адаптирована для мобильных устройств.
  </p>
  <p class=\"mt-2\">
    Спасибо.
  </p>
  <a href=\"https://rimmakaramova-shop.ru/admin1370w1suj/index.php?controller=AdminDashboard&amp;token=a79254ec3e4533b86b26ed96ff06638a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Назад
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-RU&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/ru/login?email=shop%40rimmakaramova.ru&amp;firstname=%D0%A0%D0%B8%D0%BC%D0%BC%D0%B0&amp;lastname=%D0%9A%D0%B0%D1%80%D0%B0%D0%BC%D0%BE%D0%B2%D0%B0&amp;website=http%3A%2F%2Frimmakaramova-shop.ru%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin1370w1suj/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Подключите Ваш магазин к маркету PrestaShop для автоматического импорта приобретенных дополнений.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Нет учетной записи?</h4>
\t\t\t\t\t\t<p class='text-justify'>Откройте для себя мощь PrestaShop Addons! Исследуйте официальный PrestaShop-маркет.  В нем более 3500 инновационных модулей и шаблонов, оптимизирующих коэффициент конверсии, повышающих посещаемость, укрепляющих лояльность, повышающих вашу производительность</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Присоединиться к PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/ru/forgot-your-password\">Я забыл пароль</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/ru/login?email=shop%40rimmakaramova.ru&amp;firstname=%D0%A0%D0%B8%D0%BC%D0%BC%D0%B0&amp;lastname=%D0%9A%D0%B0%D1%80%D0%B0%D0%BC%D0%BE%D0%B2%D0%B0&amp;website=http%3A%2F%2Frimmakaramova-shop.ru%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tСоздать учетную запись
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Войти
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1585
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 179
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1460
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1461
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1462
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1463
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1585
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__5236da50f79ac8e8e01cc48d8a550d5f008574aa5c3821561ba37e281a25627a";
    }

    public function getDebugInfo()
    {
        return array (  1675 => 1585,  1670 => 1463,  1665 => 1462,  1660 => 1461,  1655 => 1460,  1646 => 179,  1638 => 1585,  1515 => 1464,  1512 => 1463,  1509 => 1462,  1506 => 1461,  1504 => 1460,  219 => 179,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5236da50f79ac8e8e01cc48d8a550d5f008574aa5c3821561ba37e281a25627a", "");
    }
}
