<?php

$t1 = null;
$result &= $this->installFixture('1','footerbefore', $t1, '3', '
<h2 style="text-align:center"><a href="#" class="underline">Our Instagram .</a></h2>
', $this->context->shop->id, $language['id_lang']);
$t2 = null;
$result &= $this->installFixture('2','footerbefore', $t2, '3', '
<h2 style="text-align:center"><a href="#" class="underline">Top Sellers .</a></h2>
', $this->context->shop->id, $language['id_lang']);
$t3 = null;
$result &= $this->installFixture('3','footerbefore', $t3, '3', '
<h2 style="text-align:center"><a href="#" class="underline">Featured Collection .</a></h2>
', $this->context->shop->id, $language['id_lang']);
$t4 = null;
$result &= $this->installFixture('4','footerbefore', $t4, '3', '
<h2 style="text-align:center"><a href="#" class="underline">Contact .</a></h2>
', $this->context->shop->id, $language['id_lang']);
$t5 = null;
$result &= $this->installFixture('5','footerbefore', $t5, '12', '
<p>&nbsp;</p>
<p>&nbsp;</p>
', $this->context->shop->id, $language['id_lang']);

$b1 = 1;
$result &= $this->installFixture('6','footerbefore', $b1, '12', 'Custom HTML goes here', $this->context->shop->id, $language['id_lang']);

$t6 = null;
$result &= $this->installFixture('7','footerbefore', $t6, '12', '
<p>&nbsp;</p>
<p>&nbsp;</p>
</p>
<h5 style="text-align:center">Our little fabric located in Amsterdam.<br />
We a glad to make you feel comfort and amazing quality of handmade bags and backpacks.</h5>
', $this->context->shop->id, $language['id_lang']);

$footer = null;
$result &= $this->installFixture('1','footer', $footer, '12', '
Copyright 2019 © RoyThemes. South city, Sunny st. 22, 2nd floor, first door.<br />
Phone: +0 123 456 78. Store Working Time: 10.00 - 22.00
', $this->context->shop->id, $language['id_lang']);


?>
