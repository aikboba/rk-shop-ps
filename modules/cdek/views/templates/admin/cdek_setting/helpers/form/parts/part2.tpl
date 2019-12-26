<!-- 2 row -->
<div class="form-wrapper row">
  <label class="control-label col-lg-3 font-weight-bold text-left">
    {l s='Sender data' mod='cdek'}:
  </label>
  <div class="col-lg-9">

    <div class="row">
      <div class="col-lg-6">

        <div class="form-group">
          {foreach $field as $input}
          {block name="label"}
          {if $input.name == ConfSK::formatConfName('company')}
          {if isset($input.label)}
            <label class="control-label col-lg-6" data-toggle="tooltip" data-html="true" title="">
              {$input.label}
            </label>
          {/if}
          {/if}
          {/block}

          {block name="input"}
          {if $input.name == ConfSK::formatConfName('company')}
          {if isset($input.lang) AND $input.lang}
          {if $languages|count > 1}
            <div class="form-group">
              {/if}
              {foreach $languages as $language}
                {assign var='value_text' value=$fields_value[$input.name][$language.id_lang]}
                {if $languages|count > 1}
                  <div class="translatable-field lang-{$language.id_lang}" {if $language.id_lang != $defaultFormLanguage}style="display:none"{/if}>
                  <div class="col-lg-9">
                {/if}
                {if $input.type == 'tags'}
                {literal}
                  <script type="text/javascript">
                      $().ready(function () {
                          var input_id = '{/literal}{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}{literal}';
                          $('#' + input_id).tagify({
                              delimiters: [13, 44],
                              addTagPrompt: '{/literal}{l s='Add tag' js=1}{literal}'
                          });
                          $({/literal}'#{$table}{literal}_form').submit(function () {
                              $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                          });
                      });
                  </script>
                {/literal}
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
                {if isset($input.maxchar) && $input.maxchar}
                  <span id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"
                        class="input-group-addon">
                                        <span class="text-count-down">{$input.maxchar|intval}</span>
                                    </span>
                {/if}
                {if isset($input.prefix)}
                  <span class="input-group-addon">
                                        {$input.prefix}
                                    </span>
                {/if}
                <input type="text"
                       id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"
                       name="{$input.name}_{$language.id_lang}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required} required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder} placeholder="{$input.placeholder}"{/if} />
                {if isset($input.suffix)}
                  <span class="input-group-addon">
                                        {$input.suffix}
                                    </span>
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                </div>
              {/if}
                {if $languages|count > 1}
                  </div>
                  <div class="col-lg-2">
                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                      {$language.iso_code}
                      <i class="icon-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                      {foreach from=$languages item=language}
                        <li><a href="javascript:hideOtherLanguage({$language.id_lang});"
                               tabindex="-1">{$language.name}</a></li>
                      {/foreach}
                    </ul>
                  </div>
                  </div>
                {/if}
              {/foreach}
              {if isset($input.maxchar) && $input.maxchar}
                <script type="text/javascript">
                    $(document).ready(function () {
                      {foreach from=$languages item=language}
                        countDown($("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"), $("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"));
                      {/foreach}
                    });
                </script>
              {/if}
              {if $languages|count > 1}
            </div>
          {/if}
            {else}
          {if $input.type == 'tags'}
          {literal}
            <script type="text/javascript">
                $().ready(function () {
                    var input_id = '{/literal}{if isset($input.id)}{$input.id}{else}{$input.name}{/if}{literal}';
                    $('#' + input_id).tagify({
                        delimiters: [13, 44],
                        addTagPrompt: '{/literal}{l s='Add tag'}{literal}'
                    });
                    $({/literal}'#{$table}{literal}_form').submit(function () {
                        $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                    });
                });
            </script>
          {/literal}
          {/if}
            {assign var='value_text' value=$fields_value[$input.name]}
          {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
              {if isset($input.maxchar) && $input.maxchar}
                <span id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"
                      class="input-group-addon"><span class="text-count-down">{$input.maxchar|intval}</span></span>
              {/if}
              {if isset($input.prefix)}
                <span class="input-group-addon">
                                    {$input.prefix}
                                </span>
              {/if}
              <div class="col-md-6">
                <input type="text"
                       name="{$input.name}"
                       id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if} fixed-width-lg"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required } required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder } placeholder="{$input.placeholder}"{/if}
                />
              </div>
              {if isset($input.suffix)}
                <span class="input-group-addon">
                                    {$input.suffix}
                                </span>
              {/if}

              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            </div>
          {/if}
          {if isset($input.maxchar) && $input.maxchar}
            <script type="text/javascript">
                $(document).ready(function () {
                    countDown($("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"), $("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"));
                });
            </script>
          {/if}
          {/if}
          {/if}
          {/block}
          {/foreach}

        </div>

        <div class="form-group">

          {foreach $field as $input}
          {block name="label"}
          {if $input.name == ConfSK::formatConfName('name')}
          {if isset($input.label)}
            <label class="control-label col-lg-6" data-toggle="tooltip" data-html="true" title="">
              {$input.label}
            </label>
          {/if}
          {/if}
          {/block}

          {block name="input"}
          {if $input.name == ConfSK::formatConfName('name')}
          {if isset($input.lang) AND $input.lang}
          {if $languages|count > 1}
            <div class="form-group">
              {/if}
              {foreach $languages as $language}
                {assign var='value_text' value=$fields_value[$input.name][$language.id_lang]}
                {if $languages|count > 1}
                  <div class="translatable-field lang-{$language.id_lang}" {if $language.id_lang != $defaultFormLanguage}style="display:none"{/if}>
                  <div class="col-lg-9">
                {/if}
                {if $input.type == 'tags'}
                {literal}
                  <script type="text/javascript">
                      $().ready(function () {
                          var input_id = '{/literal}{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}{literal}';
                          $('#' + input_id).tagify({
                              delimiters: [13, 44],
                              addTagPrompt: '{/literal}{l s='Add tag' js=1}{literal}'
                          });
                          $({/literal}'#{$table}{literal}_form').submit(function () {
                              $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                          });
                      });
                  </script>
                {/literal}
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
                {if isset($input.maxchar) && $input.maxchar}
                  <span id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"
                        class="input-group-addon">
                                        <span class="text-count-down">{$input.maxchar|intval}</span>
                                    </span>
                {/if}
                {if isset($input.prefix)}
                  <span class="input-group-addon">
                                        {$input.prefix}
                                    </span>
                {/if}
                <input type="text"
                       id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"
                       name="{$input.name}_{$language.id_lang}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required} required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder} placeholder="{$input.placeholder}"{/if} />
                {if isset($input.suffix)}
                  <span class="input-group-addon">
                                        {$input.suffix}
                                    </span>
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                </div>
              {/if}
                {if $languages|count > 1}
                  </div>
                  <div class="col-lg-2">
                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                      {$language.iso_code}
                      <i class="icon-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                      {foreach from=$languages item=language}
                        <li><a href="javascript:hideOtherLanguage({$language.id_lang});"
                               tabindex="-1">{$language.name}</a></li>
                      {/foreach}
                    </ul>
                  </div>
                  </div>
                {/if}
              {/foreach}
              {if isset($input.maxchar) && $input.maxchar}
                <script type="text/javascript">
                    $(document).ready(function () {
                      {foreach from=$languages item=language}
                        countDown($("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"), $("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"));
                      {/foreach}
                    });
                </script>
              {/if}
              {if $languages|count > 1}
            </div>
          {/if}
            {else}
          {if $input.type == 'tags'}
          {literal}
            <script type="text/javascript">
                $().ready(function () {
                    var input_id = '{/literal}{if isset($input.id)}{$input.id}{else}{$input.name}{/if}{literal}';
                    $('#' + input_id).tagify({
                        delimiters: [13, 44],
                        addTagPrompt: '{/literal}{l s='Add tag'}{literal}'
                    });
                    $({/literal}'#{$table}{literal}_form').submit(function () {
                        $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                    });
                });
            </script>
          {/literal}
          {/if}
            {assign var='value_text' value=$fields_value[$input.name]}
          {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
              {if isset($input.maxchar) && $input.maxchar}
                <span id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"
                      class="input-group-addon"><span class="text-count-down">{$input.maxchar|intval}</span></span>
              {/if}
              {if isset($input.prefix)}
                <span class="input-group-addon">
                                    {$input.prefix}
                                </span>
              {/if}
              <div class="col-md-6">
                <input type="text"
                       name="{$input.name}"
                       id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if} fixed-width-lg"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required } required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder } placeholder="{$input.placeholder}"{/if}
                />
              </div>
              {if isset($input.suffix)}
                <span class="input-group-addon">
                                    {$input.suffix}
                                </span>
              {/if}

              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            </div>
          {/if}
          {if isset($input.maxchar) && $input.maxchar}
            <script type="text/javascript">
                $(document).ready(function () {
                    countDown($("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"), $("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"));
                });
            </script>
          {/if}
          {/if}
          {/if}
          {/block}
          {/foreach}

        </div>

        <div class="form-group">
          {foreach $field as $input}
          {block name="label"}
          {if $input.name == ConfSK::formatConfName('phone')}
          {if isset($input.label)}
            <label class="control-label col-lg-6" data-toggle="tooltip" data-html="true" title="">
              {$input.label}
            </label>
          {/if}
          {/if}
          {/block}

          {block name="input"}
          {if $input.name == ConfSK::formatConfName('phone')}
          {if isset($input.lang) AND $input.lang}
          {if $languages|count > 1}
            <div class="form-group">
              {/if}
              {foreach $languages as $language}
                {assign var='value_text' value=$fields_value[$input.name][$language.id_lang]}
                {if $languages|count > 1}
                  <div class="translatable-field lang-{$language.id_lang}" {if $language.id_lang != $defaultFormLanguage}style="display:none"{/if}>
                  <div class="col-lg-9">
                {/if}
                {if $input.type == 'tags'}
                {literal}
                  <script type="text/javascript">
                      $().ready(function () {
                          var input_id = '{/literal}{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}{literal}';
                          $('#' + input_id).tagify({
                              delimiters: [13, 44],
                              addTagPrompt: '{/literal}{l s='Add tag' js=1}{literal}'
                          });
                          $({/literal}'#{$table}{literal}_form').submit(function () {
                              $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                          });
                      });
                  </script>
                {/literal}
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
                {if isset($input.maxchar) && $input.maxchar}
                  <span id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"
                        class="input-group-addon">
                                        <span class="text-count-down">{$input.maxchar|intval}</span>
                                    </span>
                {/if}
                {if isset($input.prefix)}
                  <span class="input-group-addon">
                                        {$input.prefix}
                                    </span>
                {/if}
                <input type="text"
                       id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"
                       name="{$input.name}_{$language.id_lang}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required} required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder} placeholder="{$input.placeholder}"{/if} />
                {if isset($input.suffix)}
                  <span class="input-group-addon">
                                        {$input.suffix}
                                    </span>
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                </div>
              {/if}
                {if $languages|count > 1}
                  </div>
                  <div class="col-lg-2">
                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                      {$language.iso_code}
                      <i class="icon-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                      {foreach from=$languages item=language}
                        <li><a href="javascript:hideOtherLanguage({$language.id_lang});"
                               tabindex="-1">{$language.name}</a></li>
                      {/foreach}
                    </ul>
                  </div>
                  </div>
                {/if}
              {/foreach}
              {if isset($input.maxchar) && $input.maxchar}
                <script type="text/javascript">
                    $(document).ready(function () {
                      {foreach from=$languages item=language}
                        countDown($("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"), $("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"));
                      {/foreach}
                    });
                </script>
              {/if}
              {if $languages|count > 1}
            </div>
          {/if}
            {else}
          {if $input.type == 'tags'}
          {literal}
            <script type="text/javascript">
                $().ready(function () {
                    var input_id = '{/literal}{if isset($input.id)}{$input.id}{else}{$input.name}{/if}{literal}';
                    $('#' + input_id).tagify({
                        delimiters: [13, 44],
                        addTagPrompt: '{/literal}{l s='Add tag'}{literal}'
                    });
                    $({/literal}'#{$table}{literal}_form').submit(function () {
                        $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                    });
                });
            </script>
          {/literal}
          {/if}
            {assign var='value_text' value=$fields_value[$input.name]}
          {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
              {if isset($input.maxchar) && $input.maxchar}
                <span id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"
                      class="input-group-addon"><span class="text-count-down">{$input.maxchar|intval}</span></span>
              {/if}
              {if isset($input.prefix)}
                <span class="input-group-addon">
                                    {$input.prefix}
                                </span>
              {/if}
              <div class="col-md-6">
                <input type="text"
                       name="{$input.name}"
                       id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if} fixed-width-lg"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required } required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder } placeholder="{$input.placeholder}"{/if}
                />
              </div>
              {if isset($input.suffix)}
                <span class="input-group-addon">
                                    {$input.suffix}
                                </span>
              {/if}

              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            </div>
          {/if}
          {if isset($input.maxchar) && $input.maxchar}
            <script type="text/javascript">
                $(document).ready(function () {
                    countDown($("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"), $("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"));
                });
            </script>
          {/if}
          {/if}
          {/if}
          {/block}
          {/foreach}

        </div>

        <div class="form-group">
          {foreach $field as $input}
          {block name="label"}
          {if $input.name == ConfSK::formatConfName('postcode')}
          {if isset($input.label)}
            <label class="control-label col-lg-6" data-toggle="tooltip" data-html="true" title="">
              {$input.label}
            </label>
          {/if}
          {/if}
          {/block}

          {block name="input"}
          {if $input.name == ConfSK::formatConfName('postcode')}
          {if isset($input.lang) AND $input.lang}
          {if $languages|count > 1}
            <div class="form-group">
              {/if}
              {foreach $languages as $language}
                {assign var='value_text' value=$fields_value[$input.name][$language.id_lang]}
                {if $languages|count > 1}
                  <div class="translatable-field lang-{$language.id_lang}" {if $language.id_lang != $defaultFormLanguage}style="display:none"{/if}>
                  <div class="col-lg-9">
                {/if}
                {if $input.type == 'tags'}
                {literal}
                  <script type="text/javascript">
                      $().ready(function () {
                          var input_id = '{/literal}{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}{literal}';
                          $('#' + input_id).tagify({
                              delimiters: [13, 44],
                              addTagPrompt: '{/literal}{l s='Add tag' js=1}{literal}'
                          });
                          $({/literal}'#{$table}{literal}_form').submit(function () {
                              $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                          });
                      });
                  </script>
                {/literal}
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
                {if isset($input.maxchar) && $input.maxchar}
                  <span id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"
                        class="input-group-addon">
                                        <span class="text-count-down">{$input.maxchar|intval}</span>
                                    </span>
                {/if}
                {if isset($input.prefix)}
                  <span class="input-group-addon">
                                        {$input.prefix}
                                    </span>
                {/if}
                <input type="text"
                       id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"
                       name="{$input.name}_{$language.id_lang}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required} required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder} placeholder="{$input.placeholder}"{/if} />
                {if isset($input.suffix)}
                  <span class="input-group-addon">
                                        {$input.suffix}
                                    </span>
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                </div>
              {/if}
                {if $languages|count > 1}
                  </div>
                  <div class="col-lg-2">
                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                      {$language.iso_code}
                      <i class="icon-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                      {foreach from=$languages item=language}
                        <li><a href="javascript:hideOtherLanguage({$language.id_lang});"
                               tabindex="-1">{$language.name}</a></li>
                      {/foreach}
                    </ul>
                  </div>
                  </div>
                {/if}
              {/foreach}
              {if isset($input.maxchar) && $input.maxchar}
                <script type="text/javascript">
                    $(document).ready(function () {
                      {foreach from=$languages item=language}
                        countDown($("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"), $("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"));
                      {/foreach}
                    });
                </script>
              {/if}
              {if $languages|count > 1}
            </div>
          {/if}
            {else}
          {if $input.type == 'tags'}
          {literal}
            <script type="text/javascript">
                $().ready(function () {
                    var input_id = '{/literal}{if isset($input.id)}{$input.id}{else}{$input.name}{/if}{literal}';
                    $('#' + input_id).tagify({
                        delimiters: [13, 44],
                        addTagPrompt: '{/literal}{l s='Add tag'}{literal}'
                    });
                    $({/literal}'#{$table}{literal}_form').submit(function () {
                        $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                    });
                });
            </script>
          {/literal}
          {/if}
            {assign var='value_text' value=$fields_value[$input.name]}
          {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
              {if isset($input.maxchar) && $input.maxchar}
                <span id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"
                      class="input-group-addon"><span class="text-count-down">{$input.maxchar|intval}</span></span>
              {/if}
              {if isset($input.prefix)}
                <span class="input-group-addon">
                                    {$input.prefix}
                                </span>
              {/if}
              <div class="col-md-6">
                <input type="text"
                       name="{$input.name}"
                       id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if} fixed-width-lg"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required } required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder } placeholder="{$input.placeholder}"{/if}
                />
              </div>
              {if isset($input.suffix)}
                <span class="input-group-addon">
                                    {$input.suffix}
                                </span>
              {/if}

              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            </div>
          {/if}
          {if isset($input.maxchar) && $input.maxchar}
            <script type="text/javascript">
                $(document).ready(function () {
                    countDown($("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"), $("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"));
                });
            </script>
          {/if}
          {/if}
          {/if}
          {/block}
          {/foreach}

        </div>
        <div class="form-group">
          {foreach $field as $input}
            {block name="label"}
              {if $input.name == ConfSK::formatConfName('AddService')}
                {if isset($input.label)}
                  <label class="control-label col-lg-6" data-toggle="tooltip" data-html="true" title="">
                    {$input.label}
                  </label>
                {/if}
              {/if}
            {/block}
            {block name="input"}
              {if $input.name == ConfSK::formatConfName('AddService')}
                <div class="col-md-6">
                                    <span class="switch prestashop-switch fixed-width-lg">
                                        {foreach $input.values as $value}
                                          <input type="radio"
                                                 name="{$input.name}"{if $value.value == 1} id="{$input.name}_on"{else} id="{$input.name}_off"{/if}
                                                 value="{$value.value}"{if $fields_value[$input.name] == $value.value} checked="checked"{/if}{if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}/>



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
        </div>
      </div>

      <div class="col-lg-6">

        <div class="form-group">

          {foreach $field as $input}
          {block name="label"}
          {if $input.name == ConfSK::formatConfName('address')}
          {if isset($input.label)}
            <label class="control-label col-lg-6" data-toggle="tooltip" data-html="true" title="">
              {$input.label}
            </label>
          {/if}
          {/if}
          {/block}

          {block name="input"}
          {if $input.name == ConfSK::formatConfName('address')}
          {if isset($input.lang) AND $input.lang}
          {if $languages|count > 1}
            <div class="form-group">
              {/if}
              {foreach $languages as $language}
                {assign var='value_text' value=$fields_value[$input.name][$language.id_lang]}
                {if $languages|count > 1}
                  <div class="translatable-field lang-{$language.id_lang}" {if $language.id_lang != $defaultFormLanguage}style="display:none"{/if}>
                  <div class="col-lg-9">
                {/if}
                {if $input.type == 'tags'}
                {literal}
                  <script type="text/javascript">
                      $().ready(function () {
                          var input_id = '{/literal}{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}{literal}';
                          $('#' + input_id).tagify({
                              delimiters: [13, 44],
                              addTagPrompt: '{/literal}{l s='Add tag' js=1}{literal}'
                          });
                          $({/literal}'#{$table}{literal}_form').submit(function () {
                              $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                          });
                      });
                  </script>
                {/literal}
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
                {if isset($input.maxchar) && $input.maxchar}
                  <span id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"
                        class="input-group-addon">
                                        <span class="text-count-down">{$input.maxchar|intval}</span>
                                    </span>
                {/if}
                {if isset($input.prefix)}
                  <span class="input-group-addon">
                                        {$input.prefix}
                                    </span>
                {/if}
                <input type="text"
                       id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"
                       name="{$input.name}_{$language.id_lang}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required} required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder} placeholder="{$input.placeholder}"{/if} />
                {if isset($input.suffix)}
                  <span class="input-group-addon">
                                        {$input.suffix}
                                    </span>
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                </div>
              {/if}
                {if $languages|count > 1}
                  </div>
                  <div class="col-lg-2">
                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                      {$language.iso_code}
                      <i class="icon-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                      {foreach from=$languages item=language}
                        <li><a href="javascript:hideOtherLanguage({$language.id_lang});"
                               tabindex="-1">{$language.name}</a></li>
                      {/foreach}
                    </ul>
                  </div>
                  </div>
                {/if}
              {/foreach}
              {if isset($input.maxchar) && $input.maxchar}
                <script type="text/javascript">
                    $(document).ready(function () {
                      {foreach from=$languages item=language}
                        countDown($("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"), $("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"));
                      {/foreach}
                    });
                </script>
              {/if}
              {if $languages|count > 1}
            </div>
          {/if}
            {else}
          {if $input.type == 'tags'}
          {literal}
            <script type="text/javascript">
                $().ready(function () {
                    var input_id = '{/literal}{if isset($input.id)}{$input.id}{else}{$input.name}{/if}{literal}';
                    $('#' + input_id).tagify({
                        delimiters: [13, 44],
                        addTagPrompt: '{/literal}{l s='Add tag'}{literal}'
                    });
                    $({/literal}'#{$table}{literal}_form').submit(function () {
                        $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                    });
                });
            </script>
          {/literal}
          {/if}
            {assign var='value_text' value=$fields_value[$input.name]}
          {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
              {if isset($input.maxchar) && $input.maxchar}
                <span id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"
                      class="input-group-addon"><span class="text-count-down">{$input.maxchar|intval}</span></span>
              {/if}
              {if isset($input.prefix)}
                <span class="input-group-addon">
                                    {$input.prefix}
                                </span>
              {/if}
              <div class="col-md-6">
                <input type="text"
                       name="{$input.name}"
                       id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if} fixed-width-lg"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required } required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder } placeholder="{$input.placeholder}"{/if}
                />
              </div>
              {if isset($input.suffix)}
                <span class="input-group-addon">
                                    {$input.suffix}
                                </span>
              {/if}

              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            </div>
          {/if}
          {if isset($input.maxchar) && $input.maxchar}
            <script type="text/javascript">
                $(document).ready(function () {
                    countDown($("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"), $("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"));
                });
            </script>
          {/if}
          {/if}
          {/if}
          {/block}
          {/foreach}

        </div>

        <div class="form-group">

          {foreach $field as $input}
          {block name="label"}
          {if $input.name == ConfSK::formatConfName('street')}
          {if isset($input.label)}
            <label class="control-label col-lg-6" data-toggle="tooltip" data-html="true" title="">
              {$input.label}
            </label>
          {/if}
          {/if}
          {/block}

          {block name="input"}
          {if $input.name == ConfSK::formatConfName('street')}
          {if isset($input.lang) AND $input.lang}
          {if $languages|count > 1}
            <div class="form-group">
              {/if}
              {foreach $languages as $language}
                {assign var='value_text' value=$fields_value[$input.name][$language.id_lang]}
                {if $languages|count > 1}
                  <div class="translatable-field lang-{$language.id_lang}" {if $language.id_lang != $defaultFormLanguage}style="display:none"{/if}>
                  <div class="col-lg-9">
                {/if}
                {if $input.type == 'tags'}
                {literal}
                  <script type="text/javascript">
                      $().ready(function () {
                          var input_id = '{/literal}{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}{literal}';
                          $('#' + input_id).tagify({
                              delimiters: [13, 44],
                              addTagPrompt: '{/literal}{l s='Add tag' js=1}{literal}'
                          });
                          $({/literal}'#{$table}{literal}_form').submit(function () {
                              $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                          });
                      });
                  </script>
                {/literal}
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
                {if isset($input.maxchar) && $input.maxchar}
                  <span id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"
                        class="input-group-addon">
                                        <span class="text-count-down">{$input.maxchar|intval}</span>
                                    </span>
                {/if}
                {if isset($input.prefix)}
                  <span class="input-group-addon">
                                        {$input.prefix}
                                    </span>
                {/if}
                <input type="text"
                       id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"
                       name="{$input.name}_{$language.id_lang}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required} required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder} placeholder="{$input.placeholder}"{/if} />
                {if isset($input.suffix)}
                  <span class="input-group-addon">
                                        {$input.suffix}
                                    </span>
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                </div>
              {/if}
                {if $languages|count > 1}
                  </div>
                  <div class="col-lg-2">
                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                      {$language.iso_code}
                      <i class="icon-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                      {foreach from=$languages item=language}
                        <li><a href="javascript:hideOtherLanguage({$language.id_lang});"
                               tabindex="-1">{$language.name}</a></li>
                      {/foreach}
                    </ul>
                  </div>
                  </div>
                {/if}
              {/foreach}
              {if isset($input.maxchar) && $input.maxchar}
                <script type="text/javascript">
                    $(document).ready(function () {
                      {foreach from=$languages item=language}
                        countDown($("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"), $("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"));
                      {/foreach}
                    });
                </script>
              {/if}
              {if $languages|count > 1}
            </div>
          {/if}
            {else}
          {if $input.type == 'tags'}
          {literal}
            <script type="text/javascript">
                $().ready(function () {
                    var input_id = '{/literal}{if isset($input.id)}{$input.id}{else}{$input.name}{/if}{literal}';
                    $('#' + input_id).tagify({
                        delimiters: [13, 44],
                        addTagPrompt: '{/literal}{l s='Add tag'}{literal}'
                    });
                    $({/literal}'#{$table}{literal}_form').submit(function () {
                        $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                    });
                });
            </script>
          {/literal}
          {/if}
            {assign var='value_text' value=$fields_value[$input.name]}
          {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
              {if isset($input.maxchar) && $input.maxchar}
                <span id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"
                      class="input-group-addon"><span class="text-count-down">{$input.maxchar|intval}</span></span>
              {/if}
              {if isset($input.prefix)}
                <span class="input-group-addon">
                                    {$input.prefix}
                                </span>
              {/if}
              <div class="col-md-6">
                <input type="text"
                       name="{$input.name}"
                       id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if} fixed-width-lg"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required } required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder } placeholder="{$input.placeholder}"{/if}
                />
              </div>
              {if isset($input.suffix)}
                <span class="input-group-addon">
                                    {$input.suffix}
                                </span>
              {/if}

              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            </div>
          {/if}
          {if isset($input.maxchar) && $input.maxchar}
            <script type="text/javascript">
                $(document).ready(function () {
                    countDown($("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"), $("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"));
                });
            </script>
          {/if}
          {/if}
          {/if}
          {/block}
          {/foreach}

        </div>

        <div class="form-group">

          {foreach $field as $input}
          {block name="label"}
          {if $input.name == ConfSK::formatConfName('house')}
          {if isset($input.label)}
            <label class="control-label col-lg-6" data-toggle="tooltip" data-html="true" title="">
              {$input.label}
            </label>
          {/if}
          {/if}
          {/block}

          {block name="input"}
          {if $input.name == ConfSK::formatConfName('house')}
          {if isset($input.lang) AND $input.lang}
          {if $languages|count > 1}
            <div class="form-group">
              {/if}
              {foreach $languages as $language}
                {assign var='value_text' value=$fields_value[$input.name][$language.id_lang]}
                {if $languages|count > 1}
                  <div class="translatable-field lang-{$language.id_lang}" {if $language.id_lang != $defaultFormLanguage}style="display:none"{/if}>
                  <div class="col-lg-9">
                {/if}
                {if $input.type == 'tags'}
                {literal}
                  <script type="text/javascript">
                      $().ready(function () {
                          var input_id = '{/literal}{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}{literal}';
                          $('#' + input_id).tagify({
                              delimiters: [13, 44],
                              addTagPrompt: '{/literal}{l s='Add tag' js=1}{literal}'
                          });
                          $({/literal}'#{$table}{literal}_form').submit(function () {
                              $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                          });
                      });
                  </script>
                {/literal}
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
                {if isset($input.maxchar) && $input.maxchar}
                  <span id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"
                        class="input-group-addon">
                                        <span class="text-count-down">{$input.maxchar|intval}</span>
                                    </span>
                {/if}
                {if isset($input.prefix)}
                  <span class="input-group-addon">
                                        {$input.prefix}
                                    </span>
                {/if}
                <input type="text"
                       id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"
                       name="{$input.name}_{$language.id_lang}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required} required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder} placeholder="{$input.placeholder}"{/if} />
                {if isset($input.suffix)}
                  <span class="input-group-addon">
                                        {$input.suffix}
                                    </span>
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                </div>
              {/if}
                {if $languages|count > 1}
                  </div>
                  <div class="col-lg-2">
                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                      {$language.iso_code}
                      <i class="icon-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                      {foreach from=$languages item=language}
                        <li><a href="javascript:hideOtherLanguage({$language.id_lang});"
                               tabindex="-1">{$language.name}</a></li>
                      {/foreach}
                    </ul>
                  </div>
                  </div>
                {/if}
              {/foreach}
              {if isset($input.maxchar) && $input.maxchar}
                <script type="text/javascript">
                    $(document).ready(function () {
                      {foreach from=$languages item=language}
                        countDown($("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"), $("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"));
                      {/foreach}
                    });
                </script>
              {/if}
              {if $languages|count > 1}
            </div>
          {/if}
            {else}
          {if $input.type == 'tags'}
          {literal}
            <script type="text/javascript">
                $().ready(function () {
                    var input_id = '{/literal}{if isset($input.id)}{$input.id}{else}{$input.name}{/if}{literal}';
                    $('#' + input_id).tagify({
                        delimiters: [13, 44],
                        addTagPrompt: '{/literal}{l s='Add tag'}{literal}'
                    });
                    $({/literal}'#{$table}{literal}_form').submit(function () {
                        $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                    });
                });
            </script>
          {/literal}
          {/if}
            {assign var='value_text' value=$fields_value[$input.name]}
          {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
              {if isset($input.maxchar) && $input.maxchar}
                <span id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"
                      class="input-group-addon"><span class="text-count-down">{$input.maxchar|intval}</span></span>
              {/if}
              {if isset($input.prefix)}
                <span class="input-group-addon">
                                    {$input.prefix}
                                </span>
              {/if}
              <div class="col-md-6">
                <input type="text"
                       name="{$input.name}"
                       id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if} fixed-width-lg"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required } required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder } placeholder="{$input.placeholder}"{/if}
                />
              </div>
              {if isset($input.suffix)}
                <span class="input-group-addon">
                                    {$input.suffix}
                                </span>
              {/if}

              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            </div>
          {/if}
          {if isset($input.maxchar) && $input.maxchar}
            <script type="text/javascript">
                $(document).ready(function () {
                    countDown($("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"), $("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"));
                });
            </script>
          {/if}
          {/if}
          {/if}
          {/block}
          {/foreach}

        </div>

        <div class="form-group">
          {foreach $field as $input}
          {block name="label"}
          {if $input.name == ConfSK::formatConfName('flat')}
          {if isset($input.label)}
            <label class="control-label col-lg-6" data-toggle="tooltip" data-html="true" title="">
              {$input.label}
            </label>
          {/if}
          {/if}
          {/block}

          {block name="input"}
          {if $input.name == ConfSK::formatConfName('flat')}
          {if isset($input.lang) AND $input.lang}
          {if $languages|count > 1}
            <div class="form-group">
              {/if}
              {foreach $languages as $language}
                {assign var='value_text' value=$fields_value[$input.name][$language.id_lang]}
                {if $languages|count > 1}
                  <div class="translatable-field lang-{$language.id_lang}" {if $language.id_lang != $defaultFormLanguage}style="display:none"{/if}>
                  <div class="col-lg-9">
                {/if}
                {if $input.type == 'tags'}
                {literal}
                  <script type="text/javascript">
                      $().ready(function () {
                          var input_id = '{/literal}{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}{literal}';
                          $('#' + input_id).tagify({
                              delimiters: [13, 44],
                              addTagPrompt: '{/literal}{l s='Add tag' js=1}{literal}'
                          });
                          $({/literal}'#{$table}{literal}_form').submit(function () {
                              $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                          });
                      });
                  </script>
                {/literal}
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
                {if isset($input.maxchar) && $input.maxchar}
                  <span id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"
                        class="input-group-addon">
                                        <span class="text-count-down">{$input.maxchar|intval}</span>
                                    </span>
                {/if}
                {if isset($input.prefix)}
                  <span class="input-group-addon">
                                        {$input.prefix}
                                    </span>
                {/if}
                <input type="text"
                       id="{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"
                       name="{$input.name}_{$language.id_lang}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required} required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder} placeholder="{$input.placeholder}"{/if} />
                {if isset($input.suffix)}
                  <span class="input-group-addon">
                                        {$input.suffix}
                                    </span>
                {/if}
              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
                </div>
              {/if}
                {if $languages|count > 1}
                  </div>
                  <div class="col-lg-2">
                    <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                      {$language.iso_code}
                      <i class="icon-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                      {foreach from=$languages item=language}
                        <li><a href="javascript:hideOtherLanguage({$language.id_lang});"
                               tabindex="-1">{$language.name}</a></li>
                      {/foreach}
                    </ul>
                  </div>
                  </div>
                {/if}
              {/foreach}
              {if isset($input.maxchar) && $input.maxchar}
                <script type="text/javascript">
                    $(document).ready(function () {
                      {foreach from=$languages item=language}
                        countDown($("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}"), $("#{if isset($input.id)}{$input.id}_{$language.id_lang}{else}{$input.name}_{$language.id_lang}{/if}_counter"));
                      {/foreach}
                    });
                </script>
              {/if}
              {if $languages|count > 1}
            </div>
          {/if}
            {else}
          {if $input.type == 'tags'}
          {literal}
            <script type="text/javascript">
                $().ready(function () {
                    var input_id = '{/literal}{if isset($input.id)}{$input.id}{else}{$input.name}{/if}{literal}';
                    $('#' + input_id).tagify({
                        delimiters: [13, 44],
                        addTagPrompt: '{/literal}{l s='Add tag'}{literal}'
                    });
                    $({/literal}'#{$table}{literal}_form').submit(function () {
                        $(this).find('#' + input_id).val($('#' + input_id).tagify('serialize'));
                    });
                });
            </script>
          {/literal}
          {/if}
            {assign var='value_text' value=$fields_value[$input.name]}
          {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            <div class="input-group{if isset($input.class)} {$input.class}{/if}">
              {/if}
              {if isset($input.maxchar) && $input.maxchar}
                <span id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"
                      class="input-group-addon"><span class="text-count-down">{$input.maxchar|intval}</span></span>
              {/if}
              {if isset($input.prefix)}
                <span class="input-group-addon">
                                    {$input.prefix}
                                </span>
              {/if}
              <div class="col-md-6">
                <input type="text"
                       name="{$input.name}"
                       id="{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"
                       value="{if isset($input.string_format) && $input.string_format}{$value_text|string_format:$input.string_format|escape:'html':'UTF-8'}{else}{$value_text|escape:'html':'UTF-8'}{/if}"
                       class="{if isset($input.class)}{$input.class}{/if}{if $input.type == 'tags'} tagify{/if} fixed-width-lg"
                        {if isset($input.size)} size="{$input.size}"{/if}
                        {if isset($input.maxchar) && $input.maxchar} data-maxchar="{$input.maxchar|intval}"{/if}
                        {if isset($input.maxlength) && $input.maxlength} maxlength="{$input.maxlength|intval}"{/if}
                        {if isset($input.readonly) && $input.readonly} readonly="readonly"{/if}
                        {if isset($input.disabled) && $input.disabled} disabled="disabled"{/if}
                        {if isset($input.autocomplete) && !$input.autocomplete} autocomplete="off"{/if}
                        {if isset($input.required) && $input.required } required="required" {/if}
                        {if isset($input.placeholder) && $input.placeholder } placeholder="{$input.placeholder}"{/if}
                />
              </div>
              {if isset($input.suffix)}
                <span class="input-group-addon">
                                    {$input.suffix}
                                </span>
              {/if}

              {if isset($input.maxchar) || isset($input.prefix) || isset($input.suffix)}
            </div>
          {/if}
          {if isset($input.maxchar) && $input.maxchar}
            <script type="text/javascript">
                $(document).ready(function () {
                    countDown($("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}"), $("#{if isset($input.id)}{$input.id}{else}{$input.name}{/if}_counter"));
                });
            </script>
          {/if}
          {/if}
          {/if}
          {/block}
          {/foreach}

        </div>
      </div>
    </div>

  </div>
</div>

