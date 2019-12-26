

<!-- 8 row -->
<div class="form-wrapper row">
    <div class="col-lg-12">

        {foreach $field as $input}
            {block name="input"}
                {if $input.type == 'carrier'}
                    {assign var='name' value=$input.name}
                    {assign var='value' value=$fields_value[$name]}
                    <table class="table table_full_width">
                        <thead>
                        <th>{l s='Carriers' mod='cdek'}</th>
                        <th style="text-align: center">{l s='Commission' mod='cdek'}</th>
                        <th style="text-align: center">{l s='Free shipping?' mod='cdek'}</th>
                        <th style="text-align: center">{l s='Free shipping from weight' mod='cdek'}</th>
                        <th style="text-align: center">{l s='Free shipping from price' mod='cdek'}</th>
                        </thead>
                        <tbody>
                        {if is_array($input.carriers) && count($input.carriers)}
                            {foreach from=$input.carriers item=carrier}
                                <tr>
                                    <td>
                                        {$carrier.id_reference|escape:'quotes':'UTF-8'}|{$carrier.name|escape:'quotes':'UTF-8'}
                                    </td>
                                    <td align="center">
                                        <input type="text" class="fixed-width-xs" name="{$name|escape:'quotes':'UTF-8'}[{$carrier.id_reference|intval}][commission]" value="{$value[$carrier.id_reference]['commission']|escape:'quotes':'UTF-8'}">
                                    </td>
                                    <td align="center">
                                        <input type="checkbox" class="free_shipping" name="{$name|escape:'quotes':'UTF-8'}[{$carrier.id_reference|intval}][free_shipping]" value="1" {if $value[$carrier.id_reference]['free_shipping']}checked{/if} >
                                    </td>
                                    <td align="center">
                                        <input type="text" class="fixed-width-xs" name="{$name|escape:'quotes':'UTF-8'}[{$carrier.id_reference|intval}][free_shipping_weight_from]" value="{$value[$carrier.id_reference]['free_shipping_weight_from']|escape:'quotes':'UTF-8'}">
                                    </td>
                                    <td align="center">
                                        <input type="text" class="fixed-width-xs" name="{$name|escape:'quotes':'UTF-8'}[{$carrier.id_reference|intval}][free_shipping_price_from]" value="{$value[$carrier.id_reference]['free_shipping_price_from']|escape:'quotes':'UTF-8'}">
                                    </td>
                                </tr>
                            {/foreach}
                        {/if}
                        </tbody>
                    </table>
                    <script>
                        $('.free_shipping').live('change', function () {
                            var free_shipping_fields = $(this).closest('tr').find(
                                '[name$="[free_shipping_weight_from]"], [name$="[free_shipping_price_from]"]'
                            );
                            if ($(this).is(':checked')) {
                                free_shipping_fields.removeAttr('disabled');
                            } else {
                                free_shipping_fields.attr('disabled', true);
                            }
                        }).trigger('change');
                    </script>
                {/if}
            {/block}
        {/foreach}

    </div>

</div>