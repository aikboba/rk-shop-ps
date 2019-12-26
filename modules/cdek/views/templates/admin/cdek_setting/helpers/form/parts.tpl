
<ul class="nav nav-tabs">
    <li class="nav-item active">
        <a class="nav-link" id="home-tab" data-toggle="tab" href="#tab1">{l s='General settings' mod='cdek'}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab5" >{l s='Select tariffs' mod='cdek'}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab7" >{l s='Categories setting' mod='cdek'}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab8" >{l s='Carriers settings' mod='cdek'}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab9" >{l s='Order state settings' mod='cdek'}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tab10" >{l s='Logger' mod='cdek'}</a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane fade active in" id="tab1">
        {include file="./parts/part1.tpl"}
        {include file="./parts/part2.tpl"}
        {include file="./parts/part3.tpl"}
        {include file="./parts/part4.tpl"}
    </div>
    <div class="tab-pane fade" id="tab5">
        {include file="./parts/part5.tpl"}
    </div>
    <div class="tab-pane fade" id="tab7">
        {include file="./parts/part7.tpl"}
    </div>
    <div class="tab-pane fade" id="tab8">
        {include file="./parts/part8.tpl"}
    </div>
    <div class="tab-pane fade" id="tab9">
        {include file="./parts/part9.tpl"}
    </div>
    <div class="tab-pane fade" id="tab10">
        {include file="./parts/part10.tpl"}
    </div>
</div>


