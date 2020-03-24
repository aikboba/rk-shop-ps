<h4 class="side_title"><a class="menu_acc" href="{$urls.pages.my_account}">{l s='Account' d='Shop.Theme.Customeraccount'}</a></h4>
<span class="close_cross"><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></i></span>

<div class="menu_selectors">
  {widget name='ps_languageselector'}
  {widget name='ps_currencyselector'}
</div>



<div class="menu_mob_wrapper">
  {hook h='displayMegaMenu'}
  

</div>
<div id="side_acc_wrap" class="show">
<div class="acc_ul links">
<br>
        <a href="https://rimmakaramova-shop.ru/content/7-information">
            {l s='Общая информация' d='Shop.Theme.Customeraccount'}
        </a>
        <a href="https://rimmakaramova-shop.ru/content/8-composition-and-care">
            {l s='Состав и уход' d='Shop.Theme.Customeraccount'}
        </a>
        <a href="https://rimmakaramova-shop.ru">
            {l s='Каталог' d='Shop.Theme.Customeraccount'}
        </a>
        <a href="https://rimmakaramova-shop.ru/content/6-exchange-and-return">
            {l s='Порядок осуществления обмена/возврата' d='Shop.Theme.Customeraccount'}
        </a>
        <a href="https://rimmakaramova-shop.ru/content/2-privacy-policy">
            {l s='Политика конфиденциальности' d='Shop.Theme.Customeraccount'}
        </a>
        <a href="https://rimmakaramova-shop.ru/content/3-dogovor-oferty">
            {l s='Договор оферты' d='Shop.Theme.Customeraccount'}
        </a>
        <a href="https://rimmakaramova-shop.ru/content/9-contacts">
            {l s='Контакты' d='Shop.Theme.Customeraccount'}
        </a></div></div>
{hook h="displaySideMobileMenu"}
