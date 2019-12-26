
    <div class="form-group clearfix">

        {foreach $field as $input}
            {block name="label"}
                {if $input.name == ConfSK::formatConfName('write_log')}
                    {if isset($input.label)}
                        <label class="control-label float-left margin-right" data-toggle="tooltip" data-html="true" title="">
                            {$input.label}
                        </label>
                    {/if}
                {/if}
            {/block}

            {block name="input"}
                {if $input.name == ConfSK::formatConfName('write_log')}
                    <div class="float-left margin-right-lg">
                        <span class="switch prestashop-switch fixed-width-md">
                            {foreach $input.values as $value}
                                <input type="radio" name="{$input.name}"{if $value.value == 1} id="{$input.name}_on"{else} id="{$input.name}_off"{/if} value="{$value.value}"{if $fields_value[$input.name] == $value.value} checked="checked"{/if}{if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}/>
                                {strip}
                                    <label {if $value.value == 1} for="{$input.name}_on"{else} for="{$input.name}_off"{/if}>
                                        {if $value.value == 1}
                                            {l s='Yes'}
                                        {else}
                                            {l s='No'}
                                        {/if}
                                    </label>
                                {/strip}
                            {/foreach}
                            <a class="slide-button btn"></a>
                        </span>
                    </div>
                {/if}
            {/block}
        {/foreach}

        <div class="float-left margin-right-lg">
            <button type="button" class="btn btn-default clear_log">
                {l s='Clear log' mod='cdek'}
            </button>
        </div>

        <label class="control-label float-left margin-right">{l s='Method' mod='cdek'}</label>
        <div class="float-left margin-right-lg">
            <select name="search[method]" class="fixed-width-md">
                <option value="">-</option>
                {foreach from=$methods item=method}
                    <option value="{$method.method}">{$method.method}</option>
                {/foreach}
            </select>
        </div>

        <label class="control-label float-left margin-right">{l s='Date range' mod='cdek'}</label>
        <div class="float-left margin-right">
            <input type="text" class="form-control datepicker fixed-width-sm" placeholder="{l s='Begin' mod='cdek'}" readonly name="search[date_begin]">
        </div>
        <div class="float-left margin-right-lg">
            <input type="text" class="form-control datepicker fixed-width-sm" placeholder="{l s='End' mod='cdek'}" readonly name="search[date_end]">
        </div>

        <div class="float-left">
            <button type="button" class="btn btn-default applyFilterLogger">
                {l s='Apply' mod='cdek'}
            </button>
        </div>

    </div>
    <div class="form-group clearfix">
        <table class="table table-bordered cdek_logger">
            <thead>
            <tr>
                <td>{l s='ID' mod='cdek'}</td>
                <td>{l s='Method' mod='cdek'}</td>
                <td>{l s='Message' mod='cdek'}</td>
                <td>{l s='Request' mod='cdek'}</td>
                <td>{l s='Response' mod='cdek'}</td>
                <td>{l s='Date' mod='cdek'}</td>
            </tr>
            </thead>
            <tbody>
            {if is_array($log_items) && count($log_items)}
                {foreach from=$log_items item=row}
                    {include file="./table_log_row.tpl"}
                {/foreach}
            {/if}
            </tbody>
        </table>
    </div>
    <div class="form-group clearfix">
        <button type="button" class="btn btn-success show_more">
            {l s='Show more' mod='cdek'}
        </button>
    </div>

<script>
    var pages = [];
    var total_pages = {$pages|intval};

    $(document).ready(function() {
        for (var i = 2; i <= total_pages; i++) {
            pages.push(i);
        }
        checkPagination();
    });
</script>