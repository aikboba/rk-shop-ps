<!-- 7 row -->
<div class="form-wrapper row">
    <div class="col-lg-12">

        {foreach $field as $input}
            {block name="input"}
                {if $input.type == 'category'}
                    {assign var='name' value=$input.name}
                    {assign var='value' value=$fields_value[$name]}
                    <table class="table table_full_width">
                        <thead>
                        <th>{l s='Category' mod='cdek'}</th>
                        <th style="text-align: center">{l s='Width' mod='cdek'}</th>
                        <th style="text-align: center">{l s='Height' mod='cdek'}</th>
                        <th style="text-align: center">{l s='Length' mod='cdek'}</th>
                        <th style="text-align: center">{l s='Weight' mod='cdek'}</th>
                        </thead>
                        <tbody>
                        {if is_array($input.categories) && count($input.categories)}
                            {foreach from=$input.categories item=category}
                                <tr>
                                    <td>
                                        {$category.id_category|escape:'quotes':'UTF-8'}|{$category.name|escape:'quotes':'UTF-8'}
                                    </td>
                                    <td align="center">
                                        <input type="text" class=" fixed-width-xs" name="{$name|escape:'quotes':'UTF-8'}[{$category.id_category|intval}][width]" value="{$value[$category.id_category]['width']|escape:'quotes':'UTF-8'}">
                                    </td>
                                    <td align="center">
                                        <input type="text" class=" fixed-width-xs" name="{$name|escape:'quotes':'UTF-8'}[{$category.id_category|intval}][height]" value="{$value[$category.id_category]['height']|escape:'quotes':'UTF-8'}">
                                    </td>
                                    <td align="center">
                                        <input type="text" class=" fixed-width-xs" name="{$name|escape:'quotes':'UTF-8'}[{$category.id_category|intval}][length]" value="{$value[$category.id_category]['length']|escape:'quotes':'UTF-8'}">
                                    </td>
                                    <td align="center">
                                        <input type="text" class=" fixed-width-xs" name="{$name|escape:'quotes':'UTF-8'}[{$category.id_category|intval}][weight]" value="{$value[$category.id_category]['weight']|escape:'quotes':'UTF-8'}">
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