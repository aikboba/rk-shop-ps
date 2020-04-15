<?php

$b1 = 1;
$result &= $this->installFixture('1','top', $b1, '4', 'Custom HTML goes here', $this->context->shop->id, $language['id_lang']);
$text1 = null;
$result &= $this->installFixture('2','top', $text1, '8', '
<div style="text-align:right">
<h2 style="font-size:110px; line-height:100px;">Claire Fonzo</h2>
<p>&nbsp;</p>
<p style="font-size:26px">Lets meet, I founded my little factory at 24,<br />
here in my beloved Paris. A unique style<br />
according to our patterns.
<p>&nbsp;</p>
<p style="font-size:26px">Ignoring trends, we will create our own.<br />
Top quality and no limits. Join now.</p>
</div>
', $this->context->shop->id, $language['id_lang']);


$space1 = null;
$result &= $this->installFixture('3','top', $space1, '12', '
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
', $this->context->shop->id, $language['id_lang']);


$text2 = null;
$result &= $this->installFixture('4','top', $text2, '6', '
<h2 style="font-size:110px; line-height:100px;">My<br />
Colors</h2>
<p>&nbsp;</p>
<p style="font-size:26px">Create own rules for unlimited style freedom.<br />
Unique color schemes. Extra fashion.</p>
', $this->context->shop->id, $language['id_lang']);
$b2 = 2;
$result &= $this->installFixture('5','top', $b2, '6', 'Custom HTML goes here', $this->context->shop->id, $language['id_lang']);



$footer = null;
$result &= $this->installFixture('1','footer', $footer, '12', '
Copyright 2019 © RoyThemes.<br />
Phone: +0 123 456 78 - Mail: <a href="ayon@roythemes.com">ayon@roythemes.com</a>
', $this->context->shop->id, $language['id_lang']);

?>
