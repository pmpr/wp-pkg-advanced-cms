<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8e680a4c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class BSSelect extends Select { protected ?array $items = []; protected bool $isCustom = false; protected ?string $target = null; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) { parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\x62\163\163\x65\154\145\143\x74"); $this->gmywsauuqwcmakuc("\163\x74\x79\154\145", "\x62\x74\156\55\x77\x68\x69\x74\x65")->gmywsauuqwcmakuc("\x6c\x69\x76\145\55\163\x65\141\162\143\x68", "\x74\x72\x75\x65")->gmywsauuqwcmakuc("\144\145\x73\x65\154\145\143\x74\55\x61\x6c\x6c\55\x74\145\170\x74", __("\104\x65\163\145\x6c\145\x63\x74", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\x70\162\x2d\x62\x6f\157\x73\164\x72\x61\160\x2d\163\x65\x6c\145\x63\164\40\142\x6f\157\163\164\162\x61\160\x2d\163\x65\x6c\145\143\164"); } public function wasgwsogmuquqeaa() : ?array { return $this->items; } public function icsmsougoccqosgc(?array $oammesyieqmwuwyi) : self { $this->items = $oammesyieqmwuwyi; return $this; } public function oeewiaacscgyamai($igqsaukqcqscimok) : self { $this->items[] = $igqsaukqcqscimok; return $this; } public function wiweskwucmkcukcm($oammesyieqmwuwyi = []) : self { if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) { goto gicyayswqyuoekcq; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $this->oeewiaacscgyamai($igqsaukqcqscimok); kosaqwikueyksqmw: } mqkmcysgoiaouiwm: gicyayswqyuoekcq: return $this; } public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self { if (!$giqggecqqikcysgq) { goto iikiiioqiyegyaak; } $this->gmywsauuqwcmakuc("\155\x61\170\55\x6f\160\164\151\157\156\163", (string) $giqggecqqikcysgq); iikiiioqiyegyaak: return $this; } public function soyqkauogoaqekos() : self { $this->oockkiieqcwiocga("\165\163\x65\x72\163"); return $this; } public function yyayequseyasoyks() : self { $this->oockkiieqcwiocga("\164\145\x72\x6d\x73"); return $this; } public function smmismmuuccmscya() : self { $this->oockkiieqcwiocga("\x70\157\163\164\x73"); return $this; } public function wkqyoukciomqiyew() : self { $this->oockkiieqcwiocga("\x6d\157\144\x65\154\x73"); return $this; } public function kacywqgmseagyuyu() : self { $this->oockkiieqcwiocga("\x69\x63\157\156\x73"); return $this; } public function imwouwmsiukakwqi() : self { $this->oockkiieqcwiocga("\x63\157\155\155\145\x6e\x74\163"); return $this; } public function euagkaqymgiigyaa() : self { $this->oockkiieqcwiocga("\163\164\141\164\151\143\x5f\151\x6d\x61\147\x65\163"); return $this; } public function squsacgomqgkakaw() : ?string { return $this->target; } public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self { $this->target = $ccamueccusigaaio; return $this; } public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self { $this->gmywsauuqwcmakuc(Constants::okeuagwgwkmiokac, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ywmkwiwkosakssii, JSON_UNESCAPED_SLASHES)); return $this; } public function osmkwgikieoyykwg() : self { $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\157\x72\164\x61\x62\x6c\x65\x2d\x73\145\x6c\x65\x63\164")->qigsyyqgewgskemg("\163\157\x72\164\141\142\x6c\x65\55\x73\x65\154\x65\143\164"); return $this; } public function somyygqqawwswkyk() : ?bool { return $this->isCustom; } public function yogkakywcccsikkg(bool $somyygqqawwswkyk) : self { $this->isCustom = $somyygqqawwswkyk; return $this; } public function oikgogcweiiaocka() : self { $this->sanitizer = null; return $this->aseocggwwegcmqes("\155\165\154\164\151{$this->gueasuouwqysmomu()}")->iqiasugacuagiwcw(); } public function zosqeeykkcqmmkqs() : bool { return strpos($this->gueasuouwqysmomu(), "\155\165\154\164\x69") !== false; } public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self { return $this->qcgocuceocquqcuw(Constants::qescuiwgsyuikume, $iwiewowoqmoekyqi); } public function iqiasugacuagiwcw($gaeqamemwmwsyukm = null) : self { $uiymkeeaukcyqqik = "\x63\x6f\165\156\x74"; if (!$gaeqamemwmwsyukm) { goto uiosisocuwokwkie; } $uiymkeeaukcyqqik = "{$uiymkeeaukcyqqik}\x20\x3e\x20{$gaeqamemwmwsyukm}"; uiosisocuwokwkie: return $this->gmywsauuqwcmakuc("\x73\x65\x6c\x65\x63\x74\x65\x64\55\164\145\x78\x74\x2d\x66\157\162\x6d\141\x74", $uiymkeeaukcyqqik); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); if (!is_array($oammesyieqmwuwyi)) { goto gcckqucukawcasgk; } if (!$this->squsacgomqgkakaw()) { goto cuumeogeomowqisc; } $this->gmywsauuqwcmakuc(Constants::mgsccwumkcawaqcy, $this->squsacgomqgkakaw()); cuumeogeomowqisc: $this->gmywsauuqwcmakuc(Constants::qwumqqyuasyskkkc, wp_json_encode($oammesyieqmwuwyi, JSON_THROW_ON_ERROR)); gcckqucukawcasgk: if ($this->msmiagueogcsucgc()) { goto csammceowmqwaamq; } $iwiewowoqmoekyqi = __("\103\150\x6f\157\163\x65\x20\x61\x6e\x20\157\x70\164\x69\157\156\56\x2e\x2e", PR__CMN__FOUNDATION); $this->gmywsauuqwcmakuc("\x64\x65\x73\x65\x6c\145\x63\164\55\x61\x6c\154\55\x74\145\x78\164", __("\x44\145\x73\x65\154\145\143\164", PR__CMN__FOUNDATION)); if ($this->zosqeeykkcqmmkqs()) { goto qmkaeeomgkwggoyo; } $this->options = ['' => $iwiewowoqmoekyqi] + $this->options; qmkaeeomgkwggoyo: csammceowmqwaamq: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if (!$this->squsacgomqgkakaw()) { goto ocaguquugeamqckq; } $kkeqqkkkqwkocsyu["\x62\x65\146\x6f\x72\x65"] = "\x3c\x64\151\x76\40\x63\154\141\163\x73\x3d\x22\160\157\163\x69\x74\151\157\156\x2d\162\145\x6c\141\164\x69\166\145\42\x3e"; $kkeqqkkkqwkocsyu["\x61\146\x74\145\x72"] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->kqmkicmuscsgqeoi([Constants::waguuiqqgsysuukq => "\61\170", "\143\x6f\156\x74\141\151\156\145\162\x5f\143\154\x61\x73\163" => "\x70\157\163\x69\164\151\x6f\156\55\163\164\141\164\151\x63"]) . "\74\57\144\151\166\x3e"; ocaguquugeamqckq: return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii); } }
