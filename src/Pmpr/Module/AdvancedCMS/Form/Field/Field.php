<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b6cbeee4b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; use JsonException; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AttributeTrait; use Pmpr\Common\Foundation\Traits\ToArrayTrait; use Pmpr\Module\AdvancedCMS\Form\MetaBox; class Field { use HelperTrait, WrapperTrait, ToArrayTrait, TemplateTrait, AttributeTrait; protected $sanitizer = "\163\x61\x6e\x69\x74\x69\x7a\145\137\164\145\x78\x74\x5f\x66\151\145\x6c\x64"; protected array $ignorables = []; protected array $errors = []; protected ?string $id = null; protected ?int $priority = 0; protected ?string $type = null; protected ?string $name = null; protected $default = null; protected ?string $desc = null; protected $classes; protected $defaultCb = null; protected $restValueCb; protected $value; protected $showOnCb = null; protected ?string $rowEnd = ''; protected ?string $rowStart = ''; public function __construct(?string $sqeykgyoooqysmca, ?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) { if (!$sqeykgyoooqysmca) { wp_die("\146\151\145\x6c\x64\40\x74\171\160\x65\x20\x69\163\40\156\x6f\164\40\x73\145\164\x2c\40\x6d\x65\164\141\x42\157\170\72\40" . static::class); } $this->ggiaseqygioygumq($aokagokqyuysuksm); $this->type = $sqeykgyoooqysmca; $this->name = $ymqmyyeuycgmigyo; $this->desc = $mkqqqewsokcswckc; $this->attributes = []; $this->imgcoakmmgqsckkm(12); if (!in_array($this->gueasuouwqysmomu(), ["\147\x72\x6f\165\x70", "\162\x61\x64\151\157", "\142\165\x74\x74\157\x6e", "\x6d\x75\x6c\164\x69\137\x62\165\x74\x74\x6f\156\163"])) { $this->qigsyyqgewgskemg("\167\x2d\61\60\x30"); } if ($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\x73\141\156\151\x74\151\x7a\x65")) { $this->sanitizer = [$this, $qgciuiagkkguykgs]; } } public function kyayukmuuqaokgmm(?callable $cygiacuaaswggouy) : self { $this->showOnCb = $cygiacuaaswggouy; return $this; } public function aeuecemcqwokyewi($ekcswiguywieeeoc) : self { $this->kyayukmuuqaokgmm(static function () use($ekcswiguywieeeoc) { return $ekcswiguywieeeoc; }); return $this; } public function mugkkmkwquagcecw(?string $ogygkgwwyemqousg) : self { $this->rowEnd = $ogygkgwwyemqousg; return $this; } public function kkauggiwqygmwesc(?string $kqskugkaoecgcywm) : self { $this->rowStart = $kqskugkaoecgcywm; return $this; } public function ioiaiuywsieaeseo($imgcoakmmgqsckkm) : self { return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x73\x6d"); } public function iyouqgqicyqkiswi($imgcoakmmgqsckkm) : self { return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\155\144"); } public function oiwawawcmigageco($imgcoakmmgqsckkm) : self { return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x6c\147"); } public function imgcoakmmgqsckkm($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self { $egkyssmuqcwaciya = "\143\157\x6c"; if ($gcgsqcoqciockquc) { $egkyssmuqcwaciya .= "\x2d{$gcgsqcoqciockquc}"; } $egkyssmuqcwaciya .= "\55{$imgcoakmmgqsckkm}"; $this->usoqcyyugsuyiewc($egkyssmuqcwaciya); return $this; } public function mgymikeweqyoaweq() : self { return $this->usoqcyyugsuyiewc("\x70\x78\55\60"); } public function eqmqucasseomgsce($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self { $egkyssmuqcwaciya = "\143\x6f\x6c"; if ($gcgsqcoqciockquc) { $egkyssmuqcwaciya .= "\55{$gcgsqcoqciockquc}"; } $egkyssmuqcwaciya .= "\55{$imgcoakmmgqsckkm}"; $this->yqoekuewicqoescm($egkyssmuqcwaciya); return $this; } public function iemaiogyauaiiesq() : self { $emkaqwyswammaako = ['', "\x73\x6d", "\155\144", "\154\147"]; for ($imgcoakmmgqsckkm = 1; $imgcoakmmgqsckkm <= 12; $imgcoakmmgqsckkm++) { foreach ($emkaqwyswammaako as $gcgsqcoqciockquc) { $this->eqmqucasseomgsce($imgcoakmmgqsckkm, $gcgsqcoqciockquc); } } return $this; } public function mwikyscisascoeea() : ?string { return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self { $this->id = $aokagokqyuysuksm; $this->yaqyemmwkmgegwqy($aokagokqyuysuksm); return $this; } public function yaqyemmwkmgegwqy($aokagokqyuysuksm) : self { $this->mykogkuaqwmycgog("\146\151\145\154\x64\55\151\144\55{$this->mwikyscisascoeea()}"); return $this->qigsyyqgewgskemg("\x66\151\x65\x6c\x64\x2d\x69\x64\x2d{$aokagokqyuysuksm}")->gmywsauuqwcmakuc("\x66\x69\x65\x6c\144\55\x69\x64", $aokagokqyuysuksm); } public function yywskysiycwkwsgw() : ?int { return $this->priority; } public function jyumyyugiwwiqomk($sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function iukseawoegcgwcoy(&$wwgucssaecqekuek, $ggauoeuaesiymgee, $uusmaiomayssaecw = null) : self { $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $ggauoeuaesiymgee); return $this; } public function miwgyweukiaicmos() { return $this->defaultCb; } public function qqowmcseeoiskoug($qwiycwgywyomkoog) : self { $this->defaultCb = $qwiycwgywyomkoog; return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } protected function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function oiswysuiioecsaae($aokagokqyuysuksm = null) { $ggauoeuaesiymgee = $this->default; if ($aokagokqyuysuksm) { $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($aokagokqyuysuksm, $ggauoeuaesiymgee); } else { $eqgoocgaqwqcimie = $ggauoeuaesiymgee; } return $eqgoocgaqwqcimie; } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { $this->default = $ggauoeuaesiymgee; return $this; } public function uuwsoaqmkwcgaqes() : ?string { return $this->desc; } public function ccmwycqioaicegoc(?string $mkqqqewsokcswckc) : self { $this->desc = $mkqqqewsokcswckc; return $this; } public function cuisiyiswcqkuogm() { return $this->classes; } public function eumecwmqmukqgyea() : self { return $this->qcgocuceocquqcuw("\162\x65\x71\165\151\x72\145\x64", "\x72\145\161\x75\151\x72\x65\x64"); } public function msmiagueogcsucgc() : ?string { return $this->waecsyqmwascmqoa("\x72\x65\161\x75\x69\162\145\144"); } public function awyimywmcyoukaao() : self { return $this->masauymeceuiyceo(); } public function masauymeceuiyceo() : self { return $this->qigsyyqgewgskemg("\144\151\162\x65\143\164\x69\157\x6e\x2d\x72\x74\x6c"); } public function eigeeiacogyacogm() : self { return $this->yskkmqiusguummwa(); } public function yskkmqiusguummwa() : self { return $this->qigsyyqgewgskemg("\x64\151\162\x65\x63\x74\x69\157\x6e\55\154\164\x72"); } public function usoqcyyugsuyiewc(?string $egkyssmuqcwaciya) : self { $this->classes = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($this->cuisiyiswcqkuogm(), null, $egkyssmuqcwaciya); return $this; } public function yqoekuewicqoescm(?string $egkyssmuqcwaciya) : self { $this->classes = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ogaeogwycyqqckeu($this->cuisiyiswcqkuogm(), null, $egkyssmuqcwaciya); return $this; } public function wkmawgqeysyeiakk(array $cmkqisoeyioisqaw) : self { foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $this->usoqcyyugsuyiewc($egkyssmuqcwaciya); } return $this; } public function mkmssscwmeekwgqo() : self { return $this->usoqcyyugsuyiewc("\x63\155\x62\x2d\x72\157\x77\x2d\x69\x6e\154\x69\156\x65"); } public function yoimakcqmoqokkcu() : self { return $this->mgymikeweqyoaweq()->usoqcyyugsuyiewc("\143\155\142\x2d\x72\x6f\x77\x2d\142\x6c\157\143\153"); } public function oykaosmaegqwmoga() : self { return $this->qigsyyqgewgskemg("\144\151\163\141\142\154\x65\x64")->qcgocuceocquqcuw("\x64\151\x73\x61\142\154\x65\x64", "\x64\x69\163\141\142\154\145\144"); } public function qooeaookuemoqecm() { return $this->value; } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->value = $eqgoocgaqwqcimie; return $this; } public function ccakgucwwemiwkoi($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { if (is_array($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie, JSON_THROW_ON_ERROR); } $this->qigsyyqgewgskemg("\x64\x65\160\145\156\x64\145\x64\55\x74\157")->gmywsauuqwcmakuc("\144\x65\x70\x65\x6e\144\x65\x64", $uusmaiomayssaecw)->gmywsauuqwcmakuc("\x64\145\x70\x65\156\144\x65\x64\x2d\x76\x61\154\165\x65", $eqgoocgaqwqcimie); return $this; } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $eqgoocgaqwqcimie = self::oiswysuiioecsaae($this->mwikyscisascoeea()); if ($eqgoocgaqwqcimie) { $kkeqqkkkqwkocsyu[Constants::wikgqsqysyuoykse] = $eqgoocgaqwqcimie; } return $kkeqqkkkqwkocsyu; } public function agkauiesooccqsae() : ?callable { return $this->restValueCb; } public function aygqoksyisymwcuw(callable $wkmuskegugkocuwc) : self { $this->restValueCb = $wkmuskegugkocuwc; return $this; } public function awakiiaoeeiaiqgo() : self { $this->qigsyyqgewgskemg("\x77\x2d\x6d\144\x2d\61\60\60"); return $this; } public function giaekmqwqoqmqcic() { return $this->ignorables; } public function qicwqseeaecsiiia($momcykaoccoymeig) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->giaekmqwqoqmqcic(), $momcykaoccoymeig); } public function kqkccuwgcwemskey($momcykaoccoymeig, $ikgwqyuyckaewsow) : self { $oyumuuqqsmuacmak = $this->qicwqseeaecsiiia($momcykaoccoymeig); $oyumuuqqsmuacmak[Constants::ymckmcsiymwqucoq] = $ikgwqyuyckaewsow; $this->ignorables[$momcykaoccoymeig] = $oyumuuqqsmuacmak; return $this; } public function oeeumggeiyyckkom($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, bool $iiwmeimguameeome = false) : self { if ($ikgwqyuyckaewsow === $this->mwikyscisascoeea() || is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow, true)) { wp_die("\171\x6f\x75\x20\141\162\x65\40\x74\x72\171\x69\156\147\x20\164\157\x20\x69\147\156\157\162\x65\x20{$this->mwikyscisascoeea()}\40\151\x6e\160\165\x74\40\x62\171\40\x69\x74\163\x65\x6c\x66\x2e"); } $this->ignorables[] = [Constants::REVERSE => $iiwmeimguameeome, Constants::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]; return $this; } public function render(?string $aokagokqyuysuksm = '', bool $koaqeegoeiaiccse = false) { $ywmkwiwkosakssii = [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::qaacaqioeyiuakeu => $koaqeegoeiaiccse]; return MetaBox::iuaucuookgoqiiio([$this], $ywmkwiwkosakssii); } public function msqsseeaasqysese($iswcokucwmiosiaq) : self { if ($iswcokucwmiosiaq) { $this->errors[] = $iswcokucwmiosiaq; } return $this; } public function ymoyyqeymakckaee() : array { return $this->errors; } public function aoimcoqycewceekq(?callable $umcwwewscqegoqoe) : void { $this->sanitizer = $umcwwewscqegoqoe; } public function ikaukuqokwgsyeia() : ?callable { return $this->sanitizer; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if ($aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic()) { $this->qigsyyqgewgskemg("\x70\x72\x2d\x69\x67\156\x6f\162\141\x62\x6c\x65\55\151\x6e\x70\x75\164")->eskgwaywimqcwcyy("\x69\147\156\x6f\162\x61\x62\154\x65\55\x74\x61\x72\x67\145\164", $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($aoaumkkqqmwekemo, JSON_UNESCAPED_SLASHES)); } if ($ueeagokqmgisgauy = $this->ymoyyqeymakckaee()) { $this->eskgwaywimqcwcyy(Constants::iwyueouqaqegmcas, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ueeagokqmgisgauy)); $ukwokcuqauuosmoo = $this->uuwsoaqmkwcgaqes(); foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) { $ukwokcuqauuosmoo .= $iswcokucwmiosiaq; } $this->ccmwycqioaicegoc($ukwokcuqauuosmoo); } if (is_string($this->qooeaookuemoqecm()) && !in_array($this->gueasuouwqysmomu(), ["\144\x69\x73\160\x6c\141\171", "\x74\145\x78\164\141\x72\145\x61", "\167\171\x73\151\x77\171\x67"])) { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $this->qooeaookuemoqecm()); } } }
