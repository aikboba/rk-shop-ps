<h4 class="side_title">{l s='Account' d='Shop.Theme.Customeraccount'}</h4>
<span class="close_cross"><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></i></span>

{if isset($roythemes.nc_cl) && $roythemes.nc_cl == "1"}
<div class="menu_selectors">
  {widget name='ps_languageselector'}
  {widget name='ps_currencyselector'}
</div>
{/if}

{if $customer.is_logged && !$customer.is_guest}
<div class="acc_ul links">

    <span class="name"><a href="{$urls.pages.my_account}" title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}" rel="nofollow"><span>{$customer.firstname} {$customer.lastname}</span></a></span>

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
    </a>


    <a class="logout" href="{$urls.actions.logout}" rel="nofollow">
        <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg></i>
        {l s='Sign out' d='Shop.Theme.Customeraccount'}
    </a>

</div>
{else}
    <div class="acc_ul links">
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
        </a></div>
  <div class="acc_nolog acc_ul">
    <div class="acc_text_login">
      {l s='You should login to your account:' d='Shop.Theme.Customeraccount'}
    </div>
    <a class="btn btn-primary login wide" href="{$urls.pages.my_account}" rel="nofollow" title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}">{l s='Sign in' d='Shop.Theme.Customeraccount'}</a>
    <div class="acc_text_create">
      {l s='No account?' d='Shop.Theme.Customeraccount'}
    </div>
    <a class="create btn btn-primary wide" href="{$urls.pages.register}" data-link-action="display-register-form">
      {l s='Create an Account' d='Shop.Theme.Customeraccount'}
    </a>
  </div>
{/if}
