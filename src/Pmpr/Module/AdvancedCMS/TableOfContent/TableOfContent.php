<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62419c781800a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\TableOfContent; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class TableOfContent extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\160\137\x69\x6e\x73\x65\x72\x74\137\160\157\x73\x74\x5f\x64\x61\x74\141", [$this, "\155\x75\x65\x67\x73\x6d\155\151\x63\163\161\163\x67\x75\143\x6d"]); parent::kgquecmsgcouyaya(); } public function muegsmmicsqsgucm($icwicymcioeyeyek) { return $this->iumiqmcwkquqecso($icwicymcioeyeyek, true); } public function iumiqmcwkquqecso($icwicymcioeyeyek, $cwwowqyuwccuykom = false) { $iueymcwwscwqkiyq = ManipulateArray::get($icwicymcioeyeyek, "\x70\x6f\163\164\x5f\163\x74\x61\164\165\x73"); if (!(in_array(ManipulatePost::gueasuouwqysmomu($icwicymcioeyeyek), $this->esciskwmewkgwaik()) && $iueymcwwscwqkiyq === "\160\165\142\154\151\x73\x68")) { goto iymaiwqimisgacmk; } $icwicymcioeyeyek = Generator::symcgieuakksimmu()->goeuwocuuigcicgu($icwicymcioeyeyek, $cwwowqyuwccuykom); iymaiwqimisgacmk: return $icwicymcioeyeyek; } public function iemaakgqgqosiecm() { Widget::symcgieuakksimmu(); if (!is_admin()) { goto mugscgugcogcasue; } Setting::symcgieuakksimmu(); mugscgugcogcasue: } }