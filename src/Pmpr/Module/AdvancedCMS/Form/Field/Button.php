<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce116c94039             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class Button extends Field { protected ?string $link = null; protected ?string $element = null; protected ?string $target = null; protected ?string $label = null; protected ?string $icon = null; protected ?string $action = null; public function __construct(?string $aokagokqyuysuksm, ?string $pkyyagewkiyckmwy, ?string $mkqqqewsokcswckc = null) { parent::__construct("\142\165\x74\164\x6f\156", $aokagokqyuysuksm, '', $mkqqqewsokcswckc); $this->eqggmusacqoqcwuk($pkyyagewkiyckmwy)->comqsuwokcsmkcau("\x62\165\164\x74\157\x6e"); } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs = null) : self { return $this->igmaewykumgwoaoy("\x74\x69\x74\154\x65", $meqocwsecsywiiqs); } public function micmwmywmkguiyyk() { return $this->qigsyyqgewgskemg("\x62\x75\164\x74\157\156\55\160\162\x69\x6d\x61\x72\171"); } public function eqggmusacqoqcwuk(?string $pkyyagewkiyckmwy) : self { $this->label = $pkyyagewkiyckmwy; return $this; } public function uikgwcuascgeissw() : ?string { return $this->label; } public function qoowicksguscqyks(?string $iwywmkygwewiamwm) : self { $this->link = $iwywmkygwewiamwm; $this->comqsuwokcsmkcau("\x61"); return $this; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function cwqickkaaokiquuo(?string $aiamqeawckcsuaou) : self { $this->action = $aiamqeawckcsuaou; return $this; } public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self { $this->target = $ccamueccusigaaio; return $this; } public function comqsuwokcsmkcau(?string $kqywgoqsmuswammk) : self { $this->element = $kqywgoqsmuswammk; return $this; } public function ygagwkucacyassau() : self { return $this->usoqcyyugsuyiewc("\160\162\x2d\141\x63\x74\151\157\x6e"); } public function gioaiiyakuoimewa($qoiwmokisgikggia, $quyoyomkimissiqu = false) : self { $quyoyomkimissiqu = $quyoyomkimissiqu ? "\x2d\x6f\165\164\154\x69\x6e\145" : ''; return $this->qigsyyqgewgskemg("\x62\164\x6e\40\x62\x74\156{$quyoyomkimissiqu}\x2d{$qoiwmokisgikggia}"); } public function muywawimuacwmkgw($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\x64\x61\156\x67\145\162", $quyoyomkimissiqu); } public function wksqkiomigqkkcgu($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\x77\x61\162\x6e\151\156\147", $quyoyomkimissiqu); } public function miqekcqciusawwie($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\151\156\x66\x6f", $quyoyomkimissiqu); } public function gmscmskmuissgywk($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\x70\x72\x69\155\x61\x72\x79", $quyoyomkimissiqu); } public function goqoickiksqsaeyk($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\x73\x65\143\x6f\x6e\x64\x61\x72\171", $quyoyomkimissiqu); } public function mweyuoqsqugqwcca($quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa("\163\165\143\143\x65\x73\x73", $quyoyomkimissiqu); } public function igkwmqewuauogeus(string $gwgqcsmomamyqsmy) : self { return $this->eskgwaywimqcwcyy("\156\157\x6e\x63\145", wp_create_nonce($gwgqcsmomamyqsmy)); } public function ukmcmuaawacquume($ywmkwiwkosakssii = [], $kqywgoqsmuswammk = "\142\165\x74\164\157\156") : self { $this->qigsyyqgewgskemg("\160\162\x2d\143\157\156\x66\151\x72\x6d\141\x62\154\145\x2d\141\143\x74\x69\x6f\x6e"); return $this->gmywsauuqwcmakuc("\x63\x6f\x6e\146\x69\147", $this->caokeucsksukesyo()->wmkogisswkckmeua()->uskieqmcqyecigmy($ywmkwiwkosakssii, $kqywgoqsmuswammk)); } }