<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621d26886b72d             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\AdvancedCMS\Breadcrumb\Breadcrumb; use Pmpr\Package\AdvancedCMS\Comment\Comment; use Pmpr\Package\AdvancedCMS\Metadata\Metadata; use Pmpr\Package\AdvancedCMS\Rating\Rating; use Pmpr\Package\AdvancedCMS\Relation\Relation; use Pmpr\Package\AdvancedCMS\Shortcode\Shortcode; use Pmpr\Package\AdvancedCMS\TableOfContent\TableOfContent; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateMenu; use Pmpr\Package\AdvancedCMS\Widget\Widget; class AdvancedCMS extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto ugykmcouiwiscoqu; } parent::__construct(); ugykmcouiwiscoqu: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\160", [$this, "\163\x61\157\x79\143\x6b\x65\153\147\165\167\161\167\x67\143\161"])->qcsmikeggeemccuu("\x61\144\155\x69\x6e\137\155\145\x6e\165", [$this, "\145\165\161\147\x77\151\163\x63\167\x67\161\153\x71\x6b\145\143"]); parent::wigskegsqequoeks(); } public function soaaswucwaeokauk() { Widget::symcgieuakksimmu(); Rating::symcgieuakksimmu(); Comment::symcgieuakksimmu(); Relation::symcgieuakksimmu(); Metadata::symcgieuakksimmu(); Shortcode::symcgieuakksimmu(); Breadcrumb::symcgieuakksimmu(); TableOfContent::symcgieuakksimmu(); } public function saoyckekguwqwgcq() { if (!DecoratorQuery::kccakwkaqugygwmq()) { goto isewysikysqewkis; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ieayqiyiuuguowyq("\160\x6f\x73\164", ManipulatePost::mwikyscisascoeea())->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\151\x6e\154\x69\x6e\145", false)->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\151\x6e\154\151\156\145\56\x6a\163"))); isewysikysqewkis: } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\160\141\x67\145\137\x74\x69\x74\x6c\x65" => __("\x41\x64\166\x61\x6e\143\x65\x64\40\x43\115\x53", PR__PKG__ADVANCED_CMS), "\155\145\x6e\165\137\163\154\x75\147" => $this->akuociswqmoigkas(), "\160\157\x73\151\164\x69\x6f\156" => 1]); } }
