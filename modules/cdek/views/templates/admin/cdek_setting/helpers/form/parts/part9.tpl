

<!-- 9 row -->
<div class="form-wrapper row">

    <div class="col-lg-12">

        {foreach $field as $input}
            {block name="input"}
                {if $input.type == 'order_state'}
                    {assign var='name' value=$input.name}
                    {assign var='value' value=$fields_value[$name]}
                    <table class="table table_full_width">
                        <thead>
                        <tr>
                            <th style="text-align: center">{l s='Send order' mod='cdek'}</th>
                            <th style="text-align: center">{l s='Cancel order' mod='cdek'}</th>
                            <th>{l s='Name' mod='cdek'}</th>
                            <th style="text-align: center">{l s='Paid shipping?' mod='cdek'}</th>
                            <th style="text-align: center">{l s='Paid full' mod='cdek'}</th>
                        </tr>
                        </thead>
                        <tbody>
                        {if is_array($input.order_states) && count($input.order_states)}
                            {foreach from=$input.order_states item=order_state}
                                <tr>
                                    <td align="center">
                                        <input class="trigger_row" type="checkbox" name="{$name|escape:'quotes':'UTF-8'}[{$order_state.id_order_state|intval}][send_order]" value="1" {if $value[$order_state.id_order_state]['send_order']}checked{/if} >
                                    </td>
                                    <td align="center">
                                        <input class="trigger_row" type="checkbox" name="{$name|escape:'quotes':'UTF-8'}[{$order_state.id_order_state|intval}][cancel_order]" value="1" {if $value[$order_state.id_order_state]['cancel_order']}checked{/if} >
                                    </td>
                                    <td>
                                        {$order_state.id_order_state|escape:'quotes':'UTF-8'}|{$order_state.name|escape:'quotes':'UTF-8'}
                                    </td>
                                    <td align="center">
                                        <input type="checkbox" name="{$name|escape:'quotes':'UTF-8'}[{$order_state.id_order_state|intval}][free_shipping]" value="1" {if $value[$order_state.id_order_state]['free_shipping']}checked{/if} >
                                    </td>
                                    <td align="center">
                                        <input type="checkbox" name="{$name|escape:'quotes':'UTF-8'}[{$order_state.id_order_state|intval}][paid_full]" value="1" {if $value[$order_state.id_order_state]['paid_full']}checked{/if} >
                                    </td>
                                </tr>
                            {/foreach}
                        {/if}
                        </tbody>
                    </table>
                {/if}
            {/block}
        {/foreach}

    </div>

</div>