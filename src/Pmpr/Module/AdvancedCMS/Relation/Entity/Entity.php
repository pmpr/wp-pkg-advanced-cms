<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624029fab98f6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation\Entity; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\ElementTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\AdvancedCMS\Relation\Ajax; use Pmpr\Module\AdvancedCMS\Relation\Common; use Pmpr\Module\AdvancedCMS\Relation\Setting; use stdClass; use WP_Post; use WP_Query; use WP_Term; abstract class Entity extends Common { const gsogeeomsuykagku = "\162\145\x6c\141\164\x69\157\x6e\137\163\151\x64\145"; const osaqscycewgywasc = "\162\x65\154\x61\x74\x69\157\156\137\x74\x61\162\x67\145\164"; const gummygkewuamuwec = "\162\x65\154\x61\x74\x69\x6f\x6e\x5f\155\x65\164\x61\137\153\x65\x79"; use FieldTrait, ElementTrait; public ?string $name = null; protected ?string $title = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $uusmaiomayssaecw = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\151\156\151\x74"], 0)->qcsmikeggeemccuu("\160\x61\x72\x73\145\137\161\x75\x65\x72\x79", [$this, "\x75\x75\x71\161\x63\x75\153\143\x6b\165\x73\x63\x6f\x79\x61\163"], 999)->qcsmikeggeemccuu("\167\x6f\x6f\x63\157\155\155\x65\162\x63\x65\x5f\160\x72\x6f\144\165\x63\x74\137\x71\165\x65\x72\171", [$this, "\x75\x75\161\161\x63\x75\x6b\143\153\x75\x73\143\x6f\171\x61\x73"], 999)->qcsmikeggeemccuu("\x62\x65\146\157\162\145\137\165\x70\144\x61\164\145\137{$uusmaiomayssaecw}", [$this, "\151\x61\163\x79\167\x77\x6b\147\165\x79\x61\x75\151\x79\x77\x75"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x71\165\x65\x72\x79\x5f\166\x61\x72\x73", [$this, "\155\165\157\x75\x6d\x67\x6d\151\x75\165\x6f\141\x77\x73\151\167"])->cecaguuoecmccuse(Setting::symcgieuakksimmu()->mmsykuomogaqoaye(), [$this, "\157\x63\x6f\151\163\163\x79\151\155\167\x75\171\x6d\x71\x6d\x79"])->cecaguuoecmccuse("\165\x70\x64\141\164\x65\137{$this->aakmagwggmkoiiyu()}\137\x69\164\145\x6d\x73\137\x62\171\137\155\x65\164\141\153\145\171", [$this, "\147\151\x6d\163\x69\x69\151\x77\x69\x61\x69\x71\143\151\x69\143"], 10, 2); parent::kgquecmsgcouyaya(); } public function init() { $this->uuycqmsuyqokygky(); } public function uuycqmsuyqokygky() { $acqqmqmcquukaqsc = []; $gsgwomokyuwmqqkg = $this->comscwiqyuuesess(self::uwoqgmuqskqcqsag()); if (!($gsgwomokyuwmqqkg && is_array($gsgwomokyuwmqqkg))) { goto eyiwqgqcsqakwqss; } foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $this->uueaoikucyigousq($ayegqaqygsqsmews, $acqqmqmcquukaqsc); if (!ManipulateArray::get($ayegqaqygsqsmews, self::iycuamekoueuemoy)) { goto yuoeumyiuqkuouey; } $this->uueaoikucyigousq($this->ggiqwoiwqoieoeqe($ayegqaqygsqsmews), $acqqmqmcquukaqsc); yuoeumyiuqkuouey: eoyiumycaigawmmc: } mgcuiguaomoqwwwm: ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc); eyiwqgqcsqakwqss: } public function gimsiiiwiaiqciic($qcgkuqesqqymcuui, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x6d\145\164\141\x5f\x6b\145\x79" => '', "\163\151\144\x65\x73" => [], "\x6c\151\x6d\151\164" => 5]); $oammesyieqmwuwyi = []; $yguacsiqkqgiauaa = $ywmkwiwkosakssii["\163\151\x64\145\x73"]; $gwiwsycaaqgwmewg = $ywmkwiwkosakssii["\x6d\145\x74\x61\137\153\145\171"]; $ayegqaqygsqsmews = $this->ugcmciwwskkeimse($this->uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto osmmoyqkqoucsgow; } $iakkeikwceeomgyq = $ayegqaqygsqsmews->{self::igecewwoemccgwsq}; $muowmkwsoauukiag = $ayegqaqygsqsmews->{self::gygsikewooaciecc}; if (!($iakkeikwceeomgyq && $muowmkwsoauukiag && is_array($yguacsiqkqgiauaa))) { goto ooqksueucyagyuoe; } foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $mcaisukqqyosuasi = $this->kuksecseqkakwguo($mcaisukqqyosuasi); $mcaisukqqyosuasi->archive = $this->weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi); $mcaisukqqyosuasi->related = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $muowmkwsoauukiag, $gwiwsycaaqgwmewg, ["\x6c\x69\x6d\151\164" => $ywmkwiwkosakssii["\x6c\x69\155\151\164"]]); $oammesyieqmwuwyi[] = $mcaisukqqyosuasi; yssqmyoaokkksukc: } sckioayasmkcoeoo: ooqksueucyagyuoe: $qcgkuqesqqymcuui = [$oammesyieqmwuwyi, $ayegqaqygsqsmews]; osmmoyqkqoucsgow: return $qcgkuqesqqymcuui; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return []; } public function uueaoikucyigousq($ayegqaqygsqsmews, &$acqqmqmcquukaqsc = []) { $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $iakkeikwceeomgyq = ManipulateArray::get($ayegqaqygsqsmews, self::igecewwoemccgwsq); $gwiwsycaaqgwmewg = ManipulateArray::get($ayegqaqygsqsmews, self::moegqsqomeumiomk); $muowmkwsoauukiag = ManipulateArray::get($ayegqaqygsqsmews, self::gygsikewooaciecc); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, true); } public function agciaameqmyisqgo() { return ConvertArray::kamisyecckmwywwo([self::gummygkewuamuwec, self::osaqscycewgywasc, self::gsogeeomsuykagku], ["\x6d\x65\164\141\x6b\145\171", "\x74\x61\x72\x67\145\x74", "\163\151\144\145"]); } public function oewsgacismqeuomk($gqgemcmoicmgaqie = null) { if ($gqgemcmoicmgaqie) { goto wgiygcmqaokywuqa; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; wgiygcmqaokywuqa: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto aukucaieceiwesmm; } $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $gwiwsycaaqgwmewg = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->metakey); $ccamueccusigaaio = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->target); $mcaisukqqyosuasi = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->side); if (!($gwiwsycaaqgwmewg && $ccamueccusigaaio && $mcaisukqqyosuasi)) { goto iauwuugggmegwisk; } return ConvertArray::kamisyecckmwywwo([$gwiwsycaaqgwmewg, $ccamueccusigaaio, $mcaisukqqyosuasi], ["\x6d\145\x74\141\x4b\145\171", "\164\x61\162\147\145\164", "\x73\x69\144\x65"]); iauwuugggmegwisk: aukucaieceiwesmm: return false; } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto iwueukqcywkiyqge; } $kkeqqkkkqwkocsyu = $this->oewsgacismqeuomk($gqgemcmoicmgaqie); if (!$kkeqqkkkqwkocsyu) { goto micceocwuwkyusic; } $mcaisukqqyosuasi = $this->kuksecseqkakwguo($kkeqqkkkqwkocsyu->side, $kkeqqkkkqwkocsyu->target); $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($mcaisukqqyosuasi, $kkeqqkkkqwkocsyu->target, $kkeqqkkkqwkocsyu->metaKey, ["\157\x75\x74\160\x75\164" => "\x69\144"]); if (!$oammesyieqmwuwyi) { goto kqyoakickmseyyeq; } $gqgemcmoicmgaqie = $this->ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); kqyoakickmseyyeq: micceocwuwkyusic: iwueukqcywkiyqge: return $gqgemcmoicmgaqie; } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::gummygkewuamuwec; $kkeqqkkkqwkocsyu[] = self::osaqscycewgywasc; $kkeqqkkkqwkocsyu[] = self::gsogeeomsuykagku; return $kkeqqkkkqwkocsyu; } public static function uwoqgmuqskqcqsag() { return self::symcgieuakksimmu()->aakmagwggmkoiiyu() . self::gmsyiecgeegkooym; } public function ysyeiiyqsecmgoyu($igqsaukqcqscimok, $gsgwomokyuwmqqkg, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { $uaqusiikkokccqou = []; $aiwgcyaewwagisoo = []; foreach ($gsgwomokyuwmqqkg as $aaokuekaimigoyue => $ayegqaqygsqsmews) { $aiwgcyaewwagisoo[$aaokuekaimigoyue] = ManipulateArray::get($ayegqaqygsqsmews, self::NAME); $uaqusiikkokccqou[$aaokuekaimigoyue] = $this->giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $kooyscwkscsogysg); acggikioyeueeowg: } ykwasaaoeeiuomim: return $this->iuygowkemiiwqmiw("\155\145\x74\x61\x5f\142\x6f\170\x5f\164\x61\142\163", ["\155\x65\164\141\x42\x6f\170\x65\163" => $uaqusiikkokccqou, "\x74\141\162\147\145\x74" => "\43\x72\145\154\141\x74\151\x6f\x6e\55\x73\164\165\x66\146", "\156\x61\x6d\145\163" => $aiwgcyaewwagisoo], ["\x65\143\x68\157" => $koaqeegoeiaiccse]); } public function giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $ccamueccusigaaio) : ?string { $gwiwsycaaqgwmewg = $ayegqaqygsqsmews->metakey; $ccamueccusigaaio = $this->mauewaeoemuusikw($ccamueccusigaaio); $icwicymcioeyeyek = $this->seyyiqmgwymyumoq($igqsaukqcqscimok, $ccamueccusigaaio->name, $gwiwsycaaqgwmewg); return $this->iuygowkemiiwqmiw("\x6d\x65\x74\141\137\x62\157\170", ["\x64\x61\164\x61" => $icwicymcioeyeyek, "\x74\x61\x72\x67\145\164" => $ccamueccusigaaio->name, "\145\156\164\151\164\x79" => $this->aakmagwggmkoiiyu(), "\157\x77\x6e\x65\162" => $igqsaukqcqscimok->ID, "\155\145\164\141\x4b\x65\171" => $gwiwsycaaqgwmewg, "\156\141\x6d\145" => $ccamueccusigaaio->labels->singular_name, "\145\170\x63\x6c\x75\x64\x65\x73" => $icwicymcioeyeyek ? json_encode(array_map(function ($igqsaukqcqscimok) { $aokagokqyuysuksm = 0; if ($igqsaukqcqscimok instanceof WP_Term) { goto egaymskkosukqeao; } if (!$igqsaukqcqscimok instanceof WP_Post) { goto cwikoaeqmmoimmso; } $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($igqsaukqcqscimok); cwikoaeqmmoimmso: goto kaiesowkgwogqseg; egaymskkosukqeao: $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($igqsaukqcqscimok); kaiesowkgwogqseg: return $aokagokqyuysuksm; }, $icwicymcioeyeyek)) : "\x7b\x7d", "\151\156\x70\165\164\x5f\x70\154\141\x63\145\150\157\x6c\x64\145\162" => __("\124\171\x70\145\x20\116\141\155\x65\40\157\146\40\x61\40\45\x73", PR__MDL__ADVANCED_CMS), "\x6d\x6f\166\145\x5f\x68\x61\156\x64\154\145" => $this->cmeuowkiswiuocqa(), "\162\x65\155\157\x76\145\x5f\155\157\144\x61\x6c" => $this->amsaeiymyieqksqy()]); } public function ocoissyimwuymqmy($cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto kicwiowcogmauwiy; } $cciauwuwuqaywgce->sikqggwmmykuiymy(self::cgygmuguceeosoey(self::ygyiacciqgemekwc . $this->aakmagwggmkoiiyu(), $this->qcgakseyaikigqco())->ewweaossowcqywaw($this->ugmceccgwaaaigiy())->saemoowcasogykak($this->eyamqkqiykagecsw())); kicwiowcogmauwiy: return $cciauwuwuqaywgce; } public function ugmceccgwaaaigiy() : array { return []; } public function iasywwkguyauiywu($qiouiwasaauyaaue) { return $this->kmuweyayaqoeqiyw()::wcoqgwyekgsmiueo($qiouiwasaauyaaue, self::uwoqgmuqskqcqsag(), 5); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!$eygsasmqycagyayw) { goto cwswueuqoamqasya; } $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\162\x65\154\141\164\151\157\156", $eygsasmqycagyayw->get("\x72\145\154\141\x74\x69\157\x6e\56\143\163\x73")))->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x72\145\x6c\x61\164\x69\157\x6e", $eygsasmqycagyayw->get("\162\x65\x6c\141\x74\x69\x6f\x6e\56\152\163"))->simswskycwagoeqy())->ikqyiskqaaymscgw("\x72\x65\154\x61\x74\151\x6f\x6e", ["\141\x6a\141\170" => Ajax::myikkigscysoykgy]); cwswueuqoamqasya: } public abstract function eyamqkqiykagecsw() : ?string; public abstract function mauewaeoemuusikw($muowmkwsoauukiag); public abstract function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); public abstract function goqmcwikekcgyokg() : array; public abstract function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null); public abstract function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); public abstract function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false); }
