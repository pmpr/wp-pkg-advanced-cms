<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b6cbeee4b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class MultiButton extends Field { protected array $buttons = []; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) { parent::__construct("\x6d\165\154\x74\151\x5f\x62\x75\x74\164\157\156\x73", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); $this->qigsyyqgewgskemg("\x6d\x6c\x2d\x31"); } public function micmwmywmkguiyyk() { return $this->qigsyyqgewgskemg("\142\165\164\x74\x6f\x6e\55\160\x72\151\x6d\141\162\171"); } public function imswwiyicyksouus() : array { return $this->buttons; } public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self { $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs; return $this; } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if (isset($kkeqqkkkqwkocsyu["\x62\165\x74\x74\157\x6e\x73"]) && $kkeqqkkkqwkocsyu["\x62\165\x74\164\x6f\156\163"] && is_array($kkeqqkkkqwkocsyu["\x62\165\164\164\157\156\163"])) { foreach ($kkeqqkkkqwkocsyu["\142\x75\x74\x74\157\x6e\163"] as $uusmaiomayssaecw => $gskauacumcmekigs) { if ($gskauacumcmekigs instanceof Field) { $kkeqqkkkqwkocsyu["\x62\x75\164\x74\157\156\x73"][$uusmaiomayssaecw] = $gskauacumcmekigs->sacmkccceuywoqsq(false, $ywmkwiwkosakssii); } } } return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii); } }
