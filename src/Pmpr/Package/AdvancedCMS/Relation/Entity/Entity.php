<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             622ee2abb3faf             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Relation\Entity; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\ElementTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Relation\Ajax; use Pmpr\Package\AdvancedCMS\Relation\Common; use Pmpr\Package\AdvancedCMS\Relation\Setting; use stdClass; use WP_Post; use WP_Query; use WP_Term; abstract class Entity extends Common { const gsogeeomsuykagku = "\162\x65\154\141\x74\x69\x6f\156\x5f\163\x69\144\145"; const osaqscycewgywasc = "\162\x65\154\141\164\151\157\x6e\137\x74\141\x72\147\x65\x74"; const gummygkewuamuwec = "\x72\x65\x6c\141\164\151\x6f\x6e\137\x6d\x65\164\141\137\153\145\x79"; use FieldTrait, ElementTrait; public ?string $name = null; protected ?string $title = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $uusmaiomayssaecw = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\151\x6e\151\x74"], 0)->qcsmikeggeemccuu("\160\x61\162\x73\145\137\161\x75\145\x72\x79", [$this, "\165\x75\161\x71\143\x75\153\143\153\165\163\143\157\x79\x61\163"], 999)->qcsmikeggeemccuu("\167\x6f\x6f\x63\157\155\155\x65\162\x63\145\137\x70\162\x6f\x64\165\143\164\x5f\161\x75\x65\162\171", [$this, "\x75\165\x71\x71\x63\165\153\143\x6b\x75\163\x63\157\x79\x61\163"], 999)->qcsmikeggeemccuu("\x62\145\x66\157\x72\x65\x5f\x75\160\x64\141\x74\x65\x5f{$uusmaiomayssaecw}", [$this, "\x69\x61\x73\x79\167\x77\153\147\165\x79\141\x75\151\x79\167\x75"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x71\x75\145\162\x79\x5f\166\x61\x72\x73", [$this, "\x6d\165\157\165\155\x67\x6d\151\165\x75\157\141\167\x73\x69\x77"])->cecaguuoecmccuse(Setting::symcgieuakksimmu()->mmsykuomogaqoaye(), [$this, "\x6f\x63\x6f\151\x73\x73\171\151\155\x77\165\x79\155\161\155\171"])->cecaguuoecmccuse("\x75\x70\144\x61\x74\x65\137{$this->aakmagwggmkoiiyu()}\x5f\151\164\x65\155\163\x5f\x62\171\137\155\x65\164\x61\153\x65\x79", [$this, "\147\151\x6d\163\151\151\151\167\x69\x61\151\x71\x63\151\x69\x63"], 10, 2); parent::kgquecmsgcouyaya(); } public function init() { $this->uuycqmsuyqokygky(); } public function uuycqmsuyqokygky() { $acqqmqmcquukaqsc = []; $gsgwomokyuwmqqkg = $this->comscwiqyuuesess(self::uwoqgmuqskqcqsag()); if (!($gsgwomokyuwmqqkg && is_array($gsgwomokyuwmqqkg))) { goto yuoeumyiuqkuouey; } foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $this->uueaoikucyigousq($ayegqaqygsqsmews, $acqqmqmcquukaqsc); if (!ManipulateArray::get($ayegqaqygsqsmews, self::iycuamekoueuemoy)) { goto eoyiumycaigawmmc; } $this->uueaoikucyigousq($this->ggiqwoiwqoieoeqe($ayegqaqygsqsmews), $acqqmqmcquukaqsc); eoyiumycaigawmmc: mgcuiguaomoqwwwm: } smcguieygyqcaqgs: ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc); yuoeumyiuqkuouey: } public function gimsiiiwiaiqciic($qcgkuqesqqymcuui, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\155\x65\x74\141\137\153\x65\x79" => '', "\163\151\144\x65\163" => [], "\154\151\155\151\164" => 5]); $oammesyieqmwuwyi = []; $yguacsiqkqgiauaa = $ywmkwiwkosakssii["\x73\x69\144\145\163"]; $gwiwsycaaqgwmewg = $ywmkwiwkosakssii["\x6d\x65\164\141\x5f\x6b\145\x79"]; $ayegqaqygsqsmews = $this->ugcmciwwskkeimse($this->uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto ooqksueucyagyuoe; } $iakkeikwceeomgyq = $ayegqaqygsqsmews->{self::igecewwoemccgwsq}; $muowmkwsoauukiag = $ayegqaqygsqsmews->{self::gygsikewooaciecc}; if (!($iakkeikwceeomgyq && $muowmkwsoauukiag && is_array($yguacsiqkqgiauaa))) { goto yssqmyoaokkksukc; } foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $mcaisukqqyosuasi = $this->kuksecseqkakwguo($mcaisukqqyosuasi); $mcaisukqqyosuasi->archive = $this->weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi); $mcaisukqqyosuasi->related = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $muowmkwsoauukiag, $gwiwsycaaqgwmewg, ["\x6c\151\155\x69\x74" => $ywmkwiwkosakssii["\x6c\x69\x6d\151\x74"]]); $oammesyieqmwuwyi[] = $mcaisukqqyosuasi; sckioayasmkcoeoo: } eyiwqgqcsqakwqss: yssqmyoaokkksukc: $qcgkuqesqqymcuui = [$oammesyieqmwuwyi, $ayegqaqygsqsmews]; ooqksueucyagyuoe: return $qcgkuqesqqymcuui; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return []; } public function uueaoikucyigousq($ayegqaqygsqsmews, &$acqqmqmcquukaqsc = []) { $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $iakkeikwceeomgyq = ManipulateArray::get($ayegqaqygsqsmews, self::igecewwoemccgwsq); $gwiwsycaaqgwmewg = ManipulateArray::get($ayegqaqygsqsmews, self::moegqsqomeumiomk); $muowmkwsoauukiag = ManipulateArray::get($ayegqaqygsqsmews, self::gygsikewooaciecc); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, true); } public function agciaameqmyisqgo() { return ConvertArray::kamisyecckmwywwo([self::gummygkewuamuwec, self::osaqscycewgywasc, self::gsogeeomsuykagku], ["\155\145\164\141\153\x65\171", "\164\141\x72\147\x65\x74", "\x73\x69\144\145"]); } public function oewsgacismqeuomk($gqgemcmoicmgaqie = null) { if ($gqgemcmoicmgaqie) { goto osmmoyqkqoucsgow; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; osmmoyqkqoucsgow: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto iauwuugggmegwisk; } $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $gwiwsycaaqgwmewg = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->metakey); $ccamueccusigaaio = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->target); $mcaisukqqyosuasi = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->side); if (!($gwiwsycaaqgwmewg && $ccamueccusigaaio && $mcaisukqqyosuasi)) { goto wgiygcmqaokywuqa; } return ConvertArray::kamisyecckmwywwo([$gwiwsycaaqgwmewg, $ccamueccusigaaio, $mcaisukqqyosuasi], ["\155\x65\164\141\x4b\145\x79", "\164\141\x72\x67\145\164", "\163\x69\x64\x65"]); wgiygcmqaokywuqa: iauwuugggmegwisk: return false; } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto micceocwuwkyusic; } $kkeqqkkkqwkocsyu = $this->oewsgacismqeuomk($gqgemcmoicmgaqie); if (!$kkeqqkkkqwkocsyu) { goto kqyoakickmseyyeq; } $mcaisukqqyosuasi = $this->kuksecseqkakwguo($kkeqqkkkqwkocsyu->side, $kkeqqkkkqwkocsyu->target); $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($mcaisukqqyosuasi, $kkeqqkkkqwkocsyu->target, $kkeqqkkkqwkocsyu->metaKey, ["\x6f\165\x74\x70\x75\164" => "\151\x64"]); if (!$oammesyieqmwuwyi) { goto aukucaieceiwesmm; } $gqgemcmoicmgaqie = $this->ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); aukucaieceiwesmm: kqyoakickmseyyeq: micceocwuwkyusic: return $gqgemcmoicmgaqie; } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::gummygkewuamuwec; $kkeqqkkkqwkocsyu[] = self::osaqscycewgywasc; $kkeqqkkkqwkocsyu[] = self::gsogeeomsuykagku; return $kkeqqkkkqwkocsyu; } public static function uwoqgmuqskqcqsag() { return self::symcgieuakksimmu()->aakmagwggmkoiiyu() . self::gmsyiecgeegkooym; } public function ysyeiiyqsecmgoyu($igqsaukqcqscimok, $gsgwomokyuwmqqkg, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { $uaqusiikkokccqou = []; $aiwgcyaewwagisoo = []; foreach ($gsgwomokyuwmqqkg as $aaokuekaimigoyue => $ayegqaqygsqsmews) { $aiwgcyaewwagisoo[$aaokuekaimigoyue] = ManipulateArray::get($ayegqaqygsqsmews, self::NAME); $uaqusiikkokccqou[$aaokuekaimigoyue] = $this->giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $kooyscwkscsogysg); ykwasaaoeeiuomim: } iwueukqcywkiyqge: return $this->iuygowkemiiwqmiw("\x6d\145\x74\x61\137\x62\157\170\x5f\x74\141\x62\163", ["\155\x65\164\x61\102\157\x78\x65\x73" => $uaqusiikkokccqou, "\164\141\x72\x67\x65\x74" => "\x23\162\145\154\141\x74\151\157\x6e\55\x73\x74\x75\146\146", "\156\x61\x6d\145\x73" => $aiwgcyaewwagisoo], ["\x65\x63\x68\x6f" => $koaqeegoeiaiccse]); } public function giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $ccamueccusigaaio) : ?string { $gwiwsycaaqgwmewg = $ayegqaqygsqsmews->metakey; $ccamueccusigaaio = $this->mauewaeoemuusikw($ccamueccusigaaio); $icwicymcioeyeyek = $this->seyyiqmgwymyumoq($igqsaukqcqscimok, $ccamueccusigaaio->name, $gwiwsycaaqgwmewg); return $this->iuygowkemiiwqmiw("\155\x65\x74\x61\137\142\x6f\170", ["\x64\141\164\141" => $icwicymcioeyeyek, "\x74\141\162\147\x65\x74" => $ccamueccusigaaio->name, "\145\156\164\151\164\171" => $this->aakmagwggmkoiiyu(), "\x6f\167\156\145\162" => $igqsaukqcqscimok->ID, "\x6d\145\x74\x61\x4b\x65\171" => $gwiwsycaaqgwmewg, "\156\141\155\145" => $ccamueccusigaaio->labels->singular_name, "\145\170\x63\x6c\x75\144\x65\x73" => $icwicymcioeyeyek ? json_encode(array_map(function ($igqsaukqcqscimok) { $aokagokqyuysuksm = 0; if ($igqsaukqcqscimok instanceof WP_Term) { goto cwikoaeqmmoimmso; } if (!$igqsaukqcqscimok instanceof WP_Post) { goto acggikioyeueeowg; } $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($igqsaukqcqscimok); acggikioyeueeowg: goto egaymskkosukqeao; cwikoaeqmmoimmso: $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($igqsaukqcqscimok); egaymskkosukqeao: return $aokagokqyuysuksm; }, $icwicymcioeyeyek)) : "\x7b\x7d", "\151\156\160\x75\x74\x5f\x70\x6c\x61\x63\145\x68\157\154\144\145\162" => __("\x54\171\x70\145\x20\116\x61\155\x65\40\x6f\146\x20\141\40\45\x73", PR__PKG__ADVANCED_CMS), "\155\157\166\x65\x5f\150\x61\156\x64\x6c\x65" => $this->cmeuowkiswiuocqa(), "\x72\x65\x6d\157\x76\145\137\155\157\144\141\x6c" => $this->amsaeiymyieqksqy()]); } public function ocoissyimwuymqmy($cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto kaiesowkgwogqseg; } $cciauwuwuqaywgce->sikqggwmmykuiymy(self::cgygmuguceeosoey(self::ygyiacciqgemekwc . $this->aakmagwggmkoiiyu(), $this->qcgakseyaikigqco())->ewweaossowcqywaw($this->ugmceccgwaaaigiy())->saemoowcasogykak($this->eyamqkqiykagecsw())); kaiesowkgwogqseg: return $cciauwuwuqaywgce; } public function ugmceccgwaaaigiy() : array { return []; } public function iasywwkguyauiywu($qiouiwasaauyaaue) { return $this->kmuweyayaqoeqiyw()::wcoqgwyekgsmiueo($qiouiwasaauyaaue, self::uwoqgmuqskqcqsag(), 5); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x72\x65\x6c\x61\164\151\157\x6e", $eygsasmqycagyayw->get("\x72\145\154\x61\x74\151\157\x6e\x2e\143\x73\x73")))->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\162\x65\154\141\x74\151\x6f\x6e", $eygsasmqycagyayw->get("\162\145\x6c\141\164\151\157\156\x2e\152\163"))->ayuciigykaswwqeo("\152\161\165\145\162\171"))->ikqyiskqaaymscgw("\162\x65\x6c\x61\x74\151\x6f\x6e", ["\x61\x6a\x61\170" => Ajax::myikkigscysoykgy]); } public abstract function eyamqkqiykagecsw() : ?string; public abstract function mauewaeoemuusikw($muowmkwsoauukiag); public abstract function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); public abstract function goqmcwikekcgyokg() : array; public abstract function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null); public abstract function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); public abstract function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false); }
