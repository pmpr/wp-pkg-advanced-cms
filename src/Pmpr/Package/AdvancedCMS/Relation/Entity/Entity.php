<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             615d8e8e8d637             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Relation\Entity; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\ElementTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Relation\Ajax; use Pmpr\Package\AdvancedCMS\Relation\Common; use Pmpr\Package\AdvancedCMS\Relation\Setting; use stdClass; use WP_Post; use WP_Query; use WP_Term; abstract class Entity extends Common { const SIDE_QUERY_VAR = "\x72\145\154\x61\x74\x69\157\156\137\163\x69\144\145"; const TARGET_QUERY_VAR = "\x72\x65\x6c\x61\164\x69\157\x6e\x5f\x74\x61\162\147\x65\x74"; const META_KEY_QUERY_VAR = "\x72\x65\154\x61\x74\151\x6f\156\x5f\x6d\x65\x74\141\137\153\x65\171"; use FieldTrait, ElementTrait; public ?string $name = null; protected ?string $title = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { goto aoiaykkukcyyoaio; aoiaykkukcyyoaio: $uusmaiomayssaecw = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); goto ksmmosiwmsousgkg; komaoacquqwgysgc: parent::wigskegsqequoeks(); goto ckyeeqwsugcoksek; ksmmosiwmsousgkg: $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\x69\156\151\x74"], 0)->qcsmikeggeemccuu("\160\141\162\x73\145\137\x71\165\145\x72\x79", [$this, "\x75\x75\x71\x71\x63\x75\153\x63\x6b\165\x73\x63\157\x79\141\x73"], 999)->qcsmikeggeemccuu("\167\157\157\143\157\155\x6d\145\x72\143\x65\137\x70\162\157\x64\x75\143\164\137\x71\165\145\162\171", [$this, "\x75\165\161\x71\143\x75\153\x63\153\165\x73\143\x6f\171\x61\163"], 999)->qcsmikeggeemccuu("\142\x65\x66\x6f\162\x65\137\165\x70\144\141\164\x65\137{$uusmaiomayssaecw}", [$this, "\x69\x61\x73\x79\167\x77\x6b\x67\x75\x79\141\x75\x69\171\x77\x75"], 10, 2); goto komaoacquqwgysgc; ckyeeqwsugcoksek: } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\161\x75\145\x72\x79\x5f\x76\141\162\x73", [$this, "\x6d\x75\157\165\155\x67\x6d\151\165\x75\157\141\x77\163\151\167"])->cecaguuoecmccuse(Setting::symcgieuakksimmu()->mmsykuomogaqoaye(), [$this, "\157\x63\157\151\163\163\x79\151\x6d\167\x75\x79\155\x71\x6d\x79"])->cecaguuoecmccuse("\165\160\x64\x61\x74\x65\x5f{$this->aakmagwggmkoiiyu()}\137\x69\x74\145\155\x73\x5f\x62\171\137\155\x65\164\x61\153\145\171", [$this, "\147\151\155\x73\x69\x69\151\167\151\141\x69\x71\143\x69\x69\143"], 10, 2); parent::kgquecmsgcouyaya(); } public function init() { $this->uuycqmsuyqokygky(); } public function uuycqmsuyqokygky() { goto qqocmsauqkwoscqy; kuyeoaemuwcqkoae: if (!($gsgwomokyuwmqqkg && is_array($gsgwomokyuwmqqkg))) { goto myegqayeyqaigmqi; } goto cuwasskqkoysieey; cuwasskqkoysieey: foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { goto uwsgccckqqookusc; zsweawcwmisoogao: ucuyaouwikuyyemm: goto caiiwysgssyqoouc; caiiwysgssyqoouc: siwekyoigwegiosa: goto ycoomucecckyease; uwsgccckqqookusc: $this->uueaoikucyigousq($ayegqaqygsqsmews, $acqqmqmcquukaqsc); goto iwccwiiumyyccquy; iwccwiiumyyccquy: if (!ManipulateArray::get($ayegqaqygsqsmews, self::INVERSABLE)) { goto ucuyaouwikuyyemm; } goto swmmiykiawycgoes; swmmiykiawycgoes: $this->uueaoikucyigousq($this->ggiqwoiwqoieoeqe($ayegqaqygsqsmews), $acqqmqmcquukaqsc); goto zsweawcwmisoogao; ycoomucecckyease: } goto mqigiiusqaieqeaa; wuqysikmouuiawwi: myegqayeyqaigmqi: goto egumckcoaaowkgoy; asoweekcciigkweo: $gsgwomokyuwmqqkg = $this->comscwiqyuuesess(self::uwoqgmuqskqcqsag()); goto kuyeoaemuwcqkoae; mqigiiusqaieqeaa: msegcuqmgweissmw: goto igeiewqcwieuawms; qqocmsauqkwoscqy: $acqqmqmcquukaqsc = []; goto asoweekcciigkweo; igeiewqcwieuawms: ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc); goto wuqysikmouuiawwi; egumckcoaaowkgoy: } public function gimsiiiwiaiqciic($qcgkuqesqqymcuui, $ywmkwiwkosakssii = []) { goto suaouieqqoauuwme; ooiaoiygiiamsmum: quoamckmecwqkkus: goto qkmmgqgcegcuawuu; ouyqaaywykeqimmi: qyeewwmuogssaegc: goto egicsmysugywycqq; yqysciwesgsiuayi: $ayegqaqygsqsmews = $this->ugcmciwwskkeimse($this->uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); goto kwwoucisuqcmqmqu; kewooggoaouemcaq: $oammesyieqmwuwyi = []; goto uwwooikcoamioeaq; egicsmysugywycqq: sumsswekusmugwcc: goto migwkuscokgmogea; uwwooikcoamioeaq: $yguacsiqkqgiauaa = $ywmkwiwkosakssii["\x73\151\x64\145\x73"]; goto qcsceusmgwewumuy; migwkuscokgmogea: $qcgkuqesqqymcuui = [$oammesyieqmwuwyi, $ayegqaqygsqsmews]; goto ooiaoiygiiamsmum; gsewiomcwceysquc: foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { goto uisaoikyqyseiyas; uisaoikyqyseiyas: $mcaisukqqyosuasi = $this->kuksecseqkakwguo($mcaisukqqyosuasi); goto gqaiqcgwsmyugimu; eokgqgsswamgswqu: $oammesyieqmwuwyi[] = $mcaisukqqyosuasi; goto gcumogmsuuyuwsie; gqaiqcgwsmyugimu: $mcaisukqqyosuasi->archive = $this->ouoyuioaimwgosaa($ayegqaqygsqsmews, $mcaisukqqyosuasi); goto akuiskwoukoesuou; akuiskwoukoesuou: $mcaisukqqyosuasi->related = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $muowmkwsoauukiag, $gwiwsycaaqgwmewg, ["\x6c\151\155\151\164" => $ywmkwiwkosakssii["\154\151\155\151\164"]]); goto eokgqgsswamgswqu; gcumogmsuuyuwsie: wiaugmimkuikykys: goto uyouoeaoqcieeayg; uyouoeaoqcieeayg: } goto ouyqaaywykeqimmi; osgmksikyyqqcaag: if (!($iakkeikwceeomgyq && $muowmkwsoauukiag && is_array($yguacsiqkqgiauaa))) { goto sumsswekusmugwcc; } goto gsewiomcwceysquc; kwwoucisuqcmqmqu: if (!$ayegqaqygsqsmews) { goto quoamckmecwqkkus; } goto ukuuumkkameeuesk; muygyqckegkuiwyi: $muowmkwsoauukiag = $ayegqaqygsqsmews->{self::DESTINATION}; goto osgmksikyyqqcaag; ukuuumkkameeuesk: $iakkeikwceeomgyq = $ayegqaqygsqsmews->{self::ORIGIN}; goto muygyqckegkuiwyi; qkmmgqgcegcuawuu: return $qcgkuqesqqymcuui; goto auouiegmaiasywkw; suaouieqqoauuwme: $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x6d\145\164\x61\137\x6b\x65\x79" => '', "\163\x69\144\x65\x73" => [], "\154\x69\155\x69\164" => 5]); goto kewooggoaouemcaq; qcsceusmgwewumuy: $gwiwsycaaqgwmewg = $ywmkwiwkosakssii["\x6d\x65\164\x61\x5f\153\145\171"]; goto yqysciwesgsiuayi; auouiegmaiasywkw: } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return []; } public function uueaoikucyigousq($ayegqaqygsqsmews, &$acqqmqmcquukaqsc = []) { goto ggqmaecmwgeqkuge; gkekqmkyumkmywky: $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg); goto muoougyakwgcicuo; ggqmaecmwgeqkuge: $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); goto ieyimqciuswcokke; ieyimqciuswcokke: $iakkeikwceeomgyq = ManipulateArray::get($ayegqaqygsqsmews, self::ORIGIN); goto csismgmuaiogeucq; aqaseyqwkgoyaiyg: $muowmkwsoauukiag = ManipulateArray::get($ayegqaqygsqsmews, self::DESTINATION); goto gkekqmkyumkmywky; csismgmuaiogeucq: $gwiwsycaaqgwmewg = ManipulateArray::get($ayegqaqygsqsmews, self::METAKEY); goto aqaseyqwkgoyaiyg; muoougyakwgcicuo: $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, true); goto ywgqeosekkwswyac; ywgqeosekkwswyac: } public function agciaameqmyisqgo() { return ConvertArray::kamisyecckmwywwo([self::META_KEY_QUERY_VAR, self::TARGET_QUERY_VAR, self::SIDE_QUERY_VAR], ["\155\x65\x74\141\153\x65\x79", "\x74\x61\x72\147\x65\x74", "\x73\x69\x64\145"]); } public function oewsgacismqeuomk($gqgemcmoicmgaqie = null) { goto egawiicamoykemqq; aqkoqskkimiuyqug: return false; goto kouecqmcueugwcqw; akkwoqycamwckeui: qqcusuaqmyukwyqk: goto goimqkkiyegggysa; kquwekemiawwmuqs: $mcaisukqqyosuasi = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->side); goto cgykkwqwamaougme; wmgyemaskuuowuum: $gwiwsycaaqgwmewg = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->metakey); goto ssqemoqcimayewqm; mkayykckiywayuko: $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); goto wmgyemaskuuowuum; cgykkwqwamaougme: if (!($gwiwsycaaqgwmewg && $ccamueccusigaaio && $mcaisukqqyosuasi)) { goto souucimemowwaseo; } goto gcmmgmowsmgwkoye; ksoygkwycsqicooa: $gqgemcmoicmgaqie = $wp_query; goto akkwoqycamwckeui; goimqkkiyegggysa: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto oqyeyuocsyoeogim; } goto mkayykckiywayuko; gcmmgmowsmgwkoye: return ConvertArray::kamisyecckmwywwo([$gwiwsycaaqgwmewg, $ccamueccusigaaio, $mcaisukqqyosuasi], ["\155\x65\x74\141\x4b\145\x79", "\x74\x61\x72\147\x65\164", "\x73\x69\144\x65"]); goto ugcaeymeciausmao; ugcaeymeciausmao: souucimemowwaseo: goto sygekyuywqgiawas; ssqemoqcimayewqm: $ccamueccusigaaio = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->target); goto kquwekemiawwmuqs; egawiicamoykemqq: if ($gqgemcmoicmgaqie) { goto qqcusuaqmyukwyqk; } goto qqwukskiymcymgqc; sygekyuywqgiawas: oqyeyuocsyoeogim: goto aqkoqskkimiuyqug; qqwukskiymcymgqc: global $wp_query; goto ksoygkwycsqicooa; kouecqmcueugwcqw: } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { goto omqkeukuycyymmke; susauskwueokgaku: return $gqgemcmoicmgaqie; goto usaykyskgyqwquca; wqameeueegakoqya: $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($mcaisukqqyosuasi, $kkeqqkkkqwkocsyu->target, $kkeqqkkkqwkocsyu->metaKey, ["\x6f\x75\x74\x70\x75\164" => "\x69\x64"]); goto eeyksuucagkaqmsi; sgoioieqoekqywik: imsmosgqcqgeksws: goto susauskwueokgaku; eeyksuucagkaqmsi: if (!$oammesyieqmwuwyi) { goto yceksmgauwmiwmsw; } goto ciuwaqyasauagkeu; ciuwaqyasauagkeu: $gqgemcmoicmgaqie = $this->ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); goto gakmkuaayakeymaa; gakmkuaayakeymaa: yceksmgauwmiwmsw: goto sucquwgiacwooomw; sucquwgiacwooomw: oseqayimqaycaycw: goto sgoioieqoekqywik; omqkeukuycyymmke: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto imsmosgqcqgeksws; } goto oiemkksaoaiyckgi; oiemkksaoaiyckgi: $kkeqqkkkqwkocsyu = $this->oewsgacismqeuomk($gqgemcmoicmgaqie); goto wicqcmuwosqwyggg; wwuiwkkgqescsyyw: $mcaisukqqyosuasi = $this->kuksecseqkakwguo($kkeqqkkkqwkocsyu->side, $kkeqqkkkqwkocsyu->target); goto wqameeueegakoqya; wicqcmuwosqwyggg: if (!$kkeqqkkkqwkocsyu) { goto oseqayimqaycaycw; } goto wwuiwkkgqescsyyw; usaykyskgyqwquca: } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { goto qiamskskowaugckg; mewuwwsmewiimgsi: $kkeqqkkkqwkocsyu[] = self::TARGET_QUERY_VAR; goto iaewsguseweeqcqe; msmcmycooiwwqiik: return $kkeqqkkkqwkocsyu; goto imagiycyokkwucge; qiamskskowaugckg: $kkeqqkkkqwkocsyu[] = self::META_KEY_QUERY_VAR; goto mewuwwsmewiimgsi; iaewsguseweeqcqe: $kkeqqkkkqwkocsyu[] = self::SIDE_QUERY_VAR; goto msmcmycooiwwqiik; imagiycyokkwucge: } public static function uwoqgmuqskqcqsag() { return self::symcgieuakksimmu()->aakmagwggmkoiiyu() . self::_ITEMS; } public function ysyeiiyqsecmgoyu($igqsaukqcqscimok, $gsgwomokyuwmqqkg, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { goto ukicwqcoggwiskgo; maqmyigowgsmqaco: $aiwgcyaewwagisoo = []; goto eigowcoqoqkwuoiq; ukicwqcoggwiskgo: $uaqusiikkokccqou = []; goto maqmyigowgsmqaco; eigowcoqoqkwuoiq: foreach ($gsgwomokyuwmqqkg as $aaokuekaimigoyue => $ayegqaqygsqsmews) { goto meuaykaqyqkseycs; ekimmsiekwwoawym: swqwssmgwikmieoa: goto gsimucysiuikweme; meuaykaqyqkseycs: $aiwgcyaewwagisoo[$aaokuekaimigoyue] = ManipulateArray::get($ayegqaqygsqsmews, self::NAME); goto qaswkqkwqgqqcyws; qaswkqkwqgqqcyws: $uaqusiikkokccqou[$aaokuekaimigoyue] = $this->giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $kooyscwkscsogysg); goto ekimmsiekwwoawym; gsimucysiuikweme: } goto iqiuaammwkeiamuo; imygueoqiqikwcws: return $this->iuygowkemiiwqmiw("\x6d\145\x74\141\137\142\x6f\x78\137\164\x61\x62\x73", ["\155\145\164\141\102\157\170\145\x73" => $uaqusiikkokccqou, "\164\x61\162\x67\x65\x74" => "\x23\x72\145\x6c\141\164\151\157\156\55\163\164\165\x66\146", "\156\141\155\145\163" => $aiwgcyaewwagisoo], ["\145\x63\x68\157" => $koaqeegoeiaiccse]); goto zawceoyikyuwoucg; iqiuaammwkeiamuo: gaqcesscgywweieq: goto imygueoqiqikwcws; zawceoyikyuwoucg: } public function giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $ccamueccusigaaio) : ?string { goto aiaayumowqswqqqk; awkmmuyuakwiaqae: $icwicymcioeyeyek = $this->seyyiqmgwymyumoq($igqsaukqcqscimok, $ccamueccusigaaio->name, $gwiwsycaaqgwmewg); goto qogogggqiuuewakw; swmeecwwakawqqcw: $ccamueccusigaaio = $this->mauewaeoemuusikw($ccamueccusigaaio); goto awkmmuyuakwiaqae; qogogggqiuuewakw: return $this->iuygowkemiiwqmiw("\x6d\x65\x74\141\x5f\142\x6f\170", ["\144\x61\x74\x61" => $icwicymcioeyeyek, "\164\141\162\x67\145\164" => $ccamueccusigaaio->name, "\145\x6e\164\151\164\171" => $this->aakmagwggmkoiiyu(), "\x6f\x77\156\145\162" => $igqsaukqcqscimok->ID, "\x6d\x65\x74\x61\113\x65\171" => $gwiwsycaaqgwmewg, "\x6e\x61\155\145" => $ccamueccusigaaio->labels->singular_name, "\145\170\x63\154\x75\x64\x65\163" => $icwicymcioeyeyek ? json_encode(array_map(function ($igqsaukqcqscimok) { goto eqmcakqmqkqkweww; ogmueiimgsogucqa: aqwcyyigiukqikui: goto kyoogyegwukaqoce; smqeaeiimomewqsw: return $aokagokqyuysuksm; goto wkgmgumyswiayyae; eqmcakqmqkqkweww: $aokagokqyuysuksm = 0; goto iwcsismeakueeiya; gkmgqmcgouseqwyg: if (!$igqsaukqcqscimok instanceof WP_Post) { goto aqwcyyigiukqikui; } goto emsqksecccqeueoa; emsqksecccqeueoa: $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($igqsaukqcqscimok); goto ogmueiimgsogucqa; maougsuwuoiecwgy: $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($igqsaukqcqscimok); goto pseqauyuqgmccuwe; eocaacmwsqqqauuc: kmgoiquwmsayywsc: goto maougsuwuoiecwgy; pseqauyuqgmccuwe: gcgckeksyymcgays: goto smqeaeiimomewqsw; iwcsismeakueeiya: if ($igqsaukqcqscimok instanceof WP_Term) { goto kmgoiquwmsayywsc; } goto gkmgqmcgouseqwyg; kyoogyegwukaqoce: goto gcgckeksyymcgays; goto eocaacmwsqqqauuc; wkgmgumyswiayyae: }, $icwicymcioeyeyek)) : "\173\x7d", "\x69\156\x70\165\x74\137\160\154\141\x63\x65\150\157\154\x64\x65\x72" => __("\124\171\160\145\40\x4e\141\155\145\40\157\x66\40\x61\x20\x25\163", PR__PKG__ADVANCED_CMS), "\155\157\166\x65\x5f\x68\141\x6e\144\154\145" => $this->cmeuowkiswiuocqa(), "\162\145\x6d\157\166\x65\137\155\x6f\144\141\x6c" => $this->amsaeiymyieqksqy()]); goto tokguaiieequuwwa; aiaayumowqswqqqk: $gwiwsycaaqgwmewg = $ayegqaqygsqsmews->metakey; goto swmeecwwakawqqcw; tokguaiieequuwwa: } public function ocoissyimwuymqmy($cciauwuwuqaywgce) { goto ewosekcicaqucsua; sgamuuiycksmssoi: ccgmicuyeoggoecu: goto ymsscygscwwicumm; ewosekcicaqucsua: if (!$cciauwuwuqaywgce instanceof Tab) { goto ccgmicuyeoggoecu; } goto mugaisykgmqcaggg; mugaisykgmqcaggg: $cciauwuwuqaywgce->sikqggwmmykuiymy(self::cgygmuguceeosoey(self::RELATION . $this->aakmagwggmkoiiyu(), $this->qcgakseyaikigqco())->ewweaossowcqywaw($this->ugmceccgwaaaigiy())->saemoowcasogykak($this->eyamqkqiykagecsw())); goto sgamuuiycksmssoi; ymsscygscwwicumm: return $cciauwuwuqaywgce; goto oouisuwokmqgwiau; oouisuwokmqgwiau: } public function ugmceccgwaaaigiy() : array { return []; } public function iasywwkguyauiywu($qiouiwasaauyaaue) { $qiouiwasaauyaaue = $this->kmuweyayaqoeqiyw()::wcoqgwyekgsmiueo($qiouiwasaauyaaue, self::uwoqgmuqskqcqsag(), 5); return $qiouiwasaauyaaue; } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x72\145\x6c\x61\164\x69\157\156", $eygsasmqycagyayw->get("\x72\x65\154\x61\164\x69\x6f\156\56\x63\163\163")))->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x72\x65\154\141\x74\x69\157\x6e", $eygsasmqycagyayw->get("\x72\x65\x6c\141\x74\151\x6f\x6e\x2e\152\x73"))->ayuciigykaswwqeo("\152\161\x75\145\162\171"))->ikqyiskqaaymscgw("\162\x65\154\141\x74\x69\x6f\x6e", ["\141\152\x61\170" => Ajax::ACTIONS]); } public abstract function eyamqkqiykagecsw() : ?string; public abstract function mauewaeoemuusikw($muowmkwsoauukiag); public abstract function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); public abstract function goqmcwikekcgyokg() : array; public abstract function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null); public abstract function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); public abstract function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false); }
