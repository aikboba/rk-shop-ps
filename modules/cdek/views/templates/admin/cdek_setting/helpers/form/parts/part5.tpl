
<!-- 5 row -->
<div class="form-wrapper row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6">
                {foreach $field as $input}
                    {block name="input"}
                        {if $input.type == 'checkbox'}
                            {if isset($input.expand)}
                                <a class="btn btn-default show_checkbox{if strtolower($input.expand.default) == 'hide'} hidden{/if}" href="#">
                                    <i class="icon-{$input.expand.show.icon}"></i>
                                    {$input.expand.show.text}
                                    {if isset($input.expand.print_total) && $input.expand.print_total > 0}
                                        <span class="badge">{$input.expand.print_total}</span>
                                    {/if}
                                </a>
                                <a class="btn btn-default hide_checkbox{if strtolower($input.expand.default) == 'show'} hidden{/if}" href="#">
                                    <i class="icon-{$input.expand.hide.icon}"></i>
                                    {$input.expand.hide.text}
                                    {if isset($input.expand.print_total) && $input.expand.print_total > 0}
                                        <span class="badge">{$input.expand.print_total}</span>
                                    {/if}
                                </a>
                            {/if}
                            {foreach $input.values.query as $value}
                                {if $value.value < 63}
                                    {assign var=id_checkbox value=$input.name|cat:'_'|cat:$value[$input.values.id]}
                                    <div class="checkbox{if isset($input.expand) && strtolower($input.expand.default) == 'show'} hidden{/if}">
                                        {strip}
                                            <label for="{$id_checkbox}">
                                                <input type="checkbox" name="{$id_checkbox}" id="{$id_checkbox}" class="{if isset($input.class)}{$input.class}{/if}"{if isset($value.val)} value="{$value.val|escape:'html':'UTF-8'}"{/if}{if isset($fields_value[$id_checkbox]) && $fields_value[$id_checkbox]} checked="checked"{/if} />
                                                {$value[$input.values.name]}
                                            </label>
                                        {/strip}
                                    </div>
                                {/if}
                            {/foreach}
                        {/if}
                    {/block}
                {/foreach}
            </div>

            <div class="col-lg-6">
                {foreach $field as $input}
                    {block name="input"}
                        {if $input.type == 'checkbox'}
                            {if isset($input.expand)}
                                <a class="btn btn-default show_checkbox{if strtolower($input.expand.default) == 'hide'} hidden{/if}" href="#">
                                    <i class="icon-{$input.expand.show.icon}"></i>
                                    {$input.expand.show.text}
                                    {if isset($input.expand.print_total) && $input.expand.print_total > 0}
                                        <span class="badge">{$input.expand.print_total}</span>
                                    {/if}
                                </a>
                                <a class="btn btn-default hide_checkbox{if strtolower($input.expand.default) == 'show'} hidden{/if}" href="#">
                                    <i class="icon-{$input.expand.hide.icon}"></i>
                                    {$input.expand.hide.text}
                                    {if isset($input.expand.print_total) && $input.expand.print_total > 0}
                                        <span class="badge">{$input.expand.print_total}</span>
                                    {/if}
                                </a>
                            {/if}
                            {foreach $input.values.query as $value}
                                {if $value.value > 62}
                                    {assign var=id_checkbox value=$input.name|cat:'_'|cat:$value[$input.values.id]}
                                    <div class="checkbox{if isset($input.expand) && strtolower($input.expand.default) == 'show'} hidden{/if}">
                                        {strip}
                                            <label for="{$id_checkbox}">
                                                <input type="checkbox" name="{$id_checkbox}" id="{$id_checkbox}" class="{if isset($input.class)}{$input.class}{/if}"{if isset($value.val)} value="{$value.val|escape:'html':'UTF-8'}"{/if}{if isset($fields_value[$id_checkbox]) && $fields_value[$id_checkbox]} checked="checked"{/if} />
                                                {$value[$input.values.name]}
                                            </label>
                                        {/strip}
                                    </div>
                                {/if}
                            {/foreach}
                        {/if}
                    {/block}
                {/foreach}
            </div>
        </div>
    </div>
</div>
