<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62419c781800a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Module\AdvancedCMS\Breadcrumb\Breadcrumb; use Pmpr\Module\AdvancedCMS\Comment\Comment; use Pmpr\Module\AdvancedCMS\Metadata\Metadata; use Pmpr\Module\AdvancedCMS\Rating\Rating; use Pmpr\Module\AdvancedCMS\Relation\Relation; use Pmpr\Module\AdvancedCMS\Shortcode\Shortcode; use Pmpr\Module\AdvancedCMS\TableOfContent\TableOfContent; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Module\AdvancedCMS\Widget\Widget; class AdvancedCMS extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto eouwacqiommmeaqc; } parent::__construct(); eouwacqiommmeaqc: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70", [$this, "\163\141\157\x79\143\153\x65\x6b\x67\x75\167\161\x77\147\143\161"])->qcsmikeggeemccuu("\x61\144\x6d\x69\x6e\x5f\x6d\145\156\165", [$this, "\x65\x75\x71\147\x77\151\x73\143\167\x67\x71\153\x71\153\x65\143"]); parent::wigskegsqequoeks(); } public function aqyikqugcomoqqqi() { Widget::symcgieuakksimmu(); Rating::symcgieuakksimmu(); Comment::symcgieuakksimmu(); Relation::symcgieuakksimmu(); Metadata::symcgieuakksimmu(); Shortcode::symcgieuakksimmu(); Breadcrumb::symcgieuakksimmu(); TableOfContent::symcgieuakksimmu(); } public function saoyckekguwqwgcq() { if (!DecoratorQuery::kccakwkaqugygwmq()) { goto sqwuqegeiisoiiuq; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ieayqiyiuuguowyq("\160\x6f\163\164", ManipulatePost::mwikyscisascoeea())->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\151\x6e\x6c\151\156\145", false)->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\151\x6e\154\x69\x6e\x65\56\152\163"))); sqwuqegeiisoiiuq: } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\160\141\147\x65\137\x74\x69\164\154\x65" => __("\x41\x64\166\x61\156\143\x65\144\x20\x43\115\123", PR__MDL__ADVANCED_CMS), "\155\145\x6e\x75\x5f\x73\154\x75\x67" => $this->akuociswqmoigkas(), "\160\x6f\x73\151\164\151\157\156" => 1]); } }