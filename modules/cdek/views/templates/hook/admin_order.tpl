{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    SeoSA <885588@bk.ru>
* @copyright 2012-2017 SeoSA
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
* International Registered Trademark & Property of PrestaShop SA
*}

{if $order_info['Number']}
{if $status_for_print}
    <div class="panel">
        <div class="panel-heading">
            {l s='Print CDEK order' mod='cdek'}
        </div>
        <div class="form-group clearfix">
            <div class="col-lg-12">
                <a class="btn btn-default" target="_blank" href="{$document_link|escape:'quotes':'UTF-8'}&orderPrint&id_order={$id_order|intval}">
                    {l s='Print order' mod='cdek'}
                </a>
            </div>
        </div>
    </div>
{/if}
{if is_array($pvz_list) && count($pvz_list)}
<div class="panel">
    <div class="panel-heading">
        {l s='Change pvz point' mod='cdek'}
    </div>
    <div class="form-group clearfix">
        <label class="control-label col-lg-3">{l s='Pvz list' mod='cdek'}</label>
        <div class="col-lg-4">
            <select name="pvz_list">
                {foreach from=$pvz_list item=pvz_list_item}
                    <option {if $info->pvz_key == $pvz_list_item.Code}selected{/if} value="{$pvz_list_item.Code|escape:'quotes':'UTF-8'}">
                        {$pvz_list_item.City|escape:'quotes':'UTF-8'}, {$pvz_list_item.Address|escape:'quotes':'UTF-8'}
                    </option>
                {/foreach}
            </select>
        </div>
    </div>
</div>
{/if}

<div class="panel">
    <div class="panel-heading">
        {l s='Order CDEK history' mod='cdek'}
    </div>
    {if $info->history_last_update}
        <div class="form-group clearfix">
            <div class="col-lg-12 text-right">
                <label class="label label-info">{l s='Last date update' mod='cdek'}: {$info->history_last_update|escape:'quotes':'UTF-8'}</label>
                <a data-refresh-history-cdek class="label label-default" href="#">
                    <i class="icon icon-refresh"></i>
                </a>
            </div>
        </div>
    {/if}
    <div class="form-group clearfix">
        <label class="control-label col-lg-3">{l s='Weight order' mod='cdek'}:</label>
        <div class="col-lg-9">
            {$info->weight|floatval|escape:'quotes':'UTF-8'} {l s='kg' mod='cdek'}
        </div>
    </div>
    {if $info->delivery_date && $info->delivery_date != '0000-00-00' && $info->delivery_date != '0000-00-00 00:00:00'}
    <div class="form-group clearfix">
        <div class="col-lg-12">
            <label class="control-label col-lg-3">{l s='Desired delivery date' mod='cdek'}</label>
            <div class="col-lg-9">
                {date('Y-m-d', strtotime($info->delivery_date))|escape:'quotes':'UTF-8'} {$info->delivery_time_begin|escape:'quotes':'UTF-8'}-{$info->delivery_time_end|escape:'quotes':'UTF-8'}
            </div>
        </div>
    </div>
    {/if}
    {if $info->delivery_point}
        <div class="form-group clearfix">
            <div class="col-lg-12">
                <label class="control-label col-lg-3">{l s='Pickup point' mod='cdek'}</label>
                <div class="col-lg-9">
                    {$info->delivery_point|escape:'quotes':'UTF-8'}
                </div>
            </div>
        </div>
    {/if}
    <div class="form-group clearfix">
        <div class="col-lg-12">
            <label class="control-label col-lg-3">{l s='Number of transfer and acceptance certificate' mod='cdek'}</label>
            <div class="col-lg-9">
                {$order_info['ActNumber']|escape:'quotes':'UTF-8'}
            </div>
        </div>
    </div>
    <div class="form-group clearfix">
        <div class="col-lg-12">
            <label class="control-label col-lg-3">{l s='Client Number Departure' mod='cdek'}</label>
            <div class="col-lg-9">
                {$order_info['Number']|escape:'quotes':'UTF-8'}
            </div>
        </div>
    </div>
    <div class="form-group clearfix">
        <div class="col-lg-12">
            <label class="control-label col-lg-3">{l s='Departure CDEK number (assigned when you import orders)' mod='cdek'}</label>
            <div class="col-lg-9">
                {$order_info['DispatchNumber']|escape:'quotes':'UTF-8'}
            </div>
        </div>
    </div>
    <div class="form-group clearfix">
        <div class="col-lg-12">
            <label class="control-label col-lg-3">{l s='Delivery date' mod='cdek'}</label>
            <div class="col-lg-9">
                {$order_info['DeliveryDate']|escape:'quotes':'UTF-8'}
            </div>
        </div>
    </div>
    <div class="form-group clearfix">
        <div class="col-lg-12">
            <label class="control-label col-lg-3">{l s='Recipient delivery' mod='cdek'}</label>
            <div class="col-lg-9">
                {$order_info['RecipientName']|escape:'quotes':'UTF-8'}
            </div>
        </div>
    </div>
    <div class="form-group clearfix">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>{l s='Description' mod='cdek'}</th>
                        <th>{l s='Code' mod='cdek'}</th>
                        <th>{l s='Date' mod='cdek'}</th>
                        <th>{l s='City' mod='cdek'}</th>
                    </tr>
                </thead>
                <tbody>
                    {if is_array($order_info['Status']) && count($order_info['Status'])}
                        {foreach from=$order_info['Status'] item=state}
                            <tr>
                                <td>{$state['@attributes']['Description']|escape:'quotes':'UTF-8'}</td>
                                <td>{$state['@attributes']['Code']|escape:'quotes':'UTF-8'}</td>
                                <td>{$state['@attributes']['Date']|escape:'quotes':'UTF-8'}</td>
                                <td>{$state['@attributes']['CityName']|escape:'quotes':'UTF-8'}</td>
                            </tr>
                        {/foreach}
                    {else}
                        <tr>
                            <td colspan="4">
                                {l s='No statuses' mod='cdek'}
                            </td>
                        </tr>
                    {/if}
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(function () {
        var ajax_url = "{$ajax_url|escape:'quotes':'UTF-8'}";

        $('body').delegate('[name="pvz_list"]', 'change', function (e) {
            $.ajax({
                url: ajax_url,
                type: 'POST',
                dataType: 'json',
                data: {
                    ajax: true,
                    action: 'set_pvz',
                    pvz_key: $(this).val(),
                    delivery_point: $(this).find('option:selected').text(),
                    id_cart: {$id_cart|intval}
                },
                success: function (r) {
                    document.location.reload();
                }
            });
        });

        $('body').delegate('[data-refresh-history-cdek]', 'click', function (e) {
            e.preventDefault();
            $.ajax({
                url: ajax_url,
                type: 'POST',
                dataType: 'json',
                data: {
                    ajax: true,
                    action: 'refresh_history_cdek',
                    id_cart: {$id_cart|intval}
                },
                success: function (r) {
                    document.location.reload();
                }
            });
        });
    });
</script>
{else}
    {if !$info->error_create_order}
        <div class="alert alert-warning">
            {l s='Your order has not yet been sent to СDEK. Enter the order statuses:' mod='cdek'}
             "{$status_send_order|escape:'quotes':'UTF-8'}"
            {l s='to send the order' mod='cdek'}
        </div>
    {else}
        <div class="alert alert-danger">
            {l s='Order create with errors:' mod='cdek'} {$info->error_create_order|escape:'quotes':'UTF-8'}
        </div>
    {/if}
{/if}