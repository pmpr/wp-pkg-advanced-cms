<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce116c94039             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Traits; use CMB2; use CMB2_hookup; use CMB2_JS; use Exception; use Pmpr\Module\AdvancedCMS\Form\Field as Fields; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; trait FieldTrait { public static function qugwsaawyageaqgy($aokagokqyuysuksm, $ymqmyyeuycgmigyo = null, $mkqqqewsokcswckc = null) : Fields\Size { return new Fields\Size($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function ymuegqgyuagyucws(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null) : Fields\Text { return new Fields\Text($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function sgsesoiwcgqgckoo(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null) : Fields\Date { return new Fields\Date($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function sciaycsmsiekqueg(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null, array $qiouiwasaauyaaue = []) : Fields\Editor { return new Fields\Editor($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue); } public static function kimoeccokowuaiic(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo = null, string $mkqqqewsokcswckc = null) : Fields\File { return new Fields\File($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function uouyygwcgsmygaee(string $aokagokqyuysuksm, string $ymqmyyeuycgmigyo, string $mkqqqewsokcswckc = null) : Fields\Textarea { return new Fields\Textarea($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function cwiuiiakukcsaakw(string $aokagokqyuysuksm, ?string $eqgoocgaqwqcimie = null) : Fields\Hidden { return new Fields\Hidden($aokagokqyuysuksm, $eqgoocgaqwqcimie); } public static function aikamsoikcwsewac(string $aokagokqyuysuksm) : Fields\Html { return new Fields\Html($aokagokqyuysuksm); } public static function wcwmusaouiqaqeww(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) : Fields\Checkbox { return new Fields\Checkbox($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function mwmcsiqiwkweayuw(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) : Fields\Colorpicker { return new Fields\Colorpicker($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public function qywgugocoiwoayqa(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $cwucaoaqgwqcwews = [], ?string $mkqqqewsokcswckc = null) : Fields\Depended { return new Fields\Depended($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $cwucaoaqgwqcwews, $mkqqqewsokcswckc); } public static function meikyccyyskqkqks(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\MultiCheck { return new Fields\MultiCheck($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc); } public static function yyuwuqsiucweeoue(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\Radio { return new Fields\Radio($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc); } public static function mccagaqeagiikkec($aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\Select { return new Fields\Select($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc); } public static function kqcemgcowgomaqwa(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\Select2 { return new Fields\Select2($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc); } public static function ckuwucygcwsiawms(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) : Fields\BSSelect { return new Fields\BSSelect($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc); } public static function qoeiescseggagsqs(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) : Fields\Button { return new Fields\Button($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function yqeauksoiomwkqkq(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) : Fields\MultiButton { return new Fields\MultiButton($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); } public static function iseogkiymousogom(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $ikgwqyuyckaewsow = [], ?string $mkqqqewsokcswckc = null) : Fields\Group { return new Fields\Group($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $ikgwqyuyckaewsow, $mkqqqewsokcswckc); } public static function aowmyucqigeeakaa(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, array $somsiuiquigiqsmk = [], ?string $mkqqqewsokcswckc = null, array $ucwamkesemusoeyc = []) : Fields\Slider { return new Fields\Slider($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $somsiuiquigiqsmk, $ucwamkesemusoeyc, $mkqqqewsokcswckc); } public static function scweoguicmyeqqem(?string $aokagokqyuysuksm, ?string $eqgoocgaqwqcimie, ?string $ymqmyyeuycgmigyo = null) : Fields\Display { return new Fields\Display($aokagokqyuysuksm, $eqgoocgaqwqcimie, $ymqmyyeuycgmigyo); } public static function ekakmekqeqwcuacm(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $ukwokcuqauuosmoo = null) : Fields\Title { return new Fields\Title($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $ukwokcuqauuosmoo); } public static function asimeyiqqkeawyoq() { CMB2_JS::enqueue(); CMB2_hookup::enqueue_cmb_js(); CMB2_hookup::enqueue_cmb_css(); } public static function iuaucuookgoqiiio(?array $ikgwqyuyckaewsow, $uiewakwqscemywuo = []) { $nsmgceoqaqogqmuw = ''; $aokagokqyuysuksm = self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->get($uiewakwqscemywuo, Constants::gouqcwikiiygyasc); if ($aokagokqyuysuksm) { goto wkwamkgkwykeqkec; } $aokagokqyuysuksm = Constants::wqmuacwuckqmqcqs; $uiewakwqscemywuo[Constants::gouqcwikiiygyasc] = $aokagokqyuysuksm; wkwamkgkwykeqkec: $koaqeegoeiaiccse = self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->get($uiewakwqscemywuo, Constants::qaacaqioeyiuakeu, true, false); if (!$ikgwqyuyckaewsow) { goto yykqaowwsqgqysmq; } $eaoumsseceiowgsk = self::mosueiikcgoscauq($ikgwqyuyckaewsow, $uiewakwqscemywuo); ob_start(); $eaoumsseceiowgsk->object_id($aokagokqyuysuksm); self::asimeyiqqkeawyoq(); $eaoumsseceiowgsk->show_form(); $nsmgceoqaqogqmuw = ob_get_clean(); if (!($omwmuycmeqcqokom = self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->get($uiewakwqscemywuo, "\160\x61\x72\145\x6e\x74", false))) { goto oeocukauoyosicso; } $wwgucssaecqekuek = []; if (!is_array($omwmuycmeqcqokom)) { goto oimkeqocuguqqsqk; } $wwgucssaecqekuek = $omwmuycmeqcqokom; oimkeqocuguqqsqk: $nsmgceoqaqogqmuw = self::iwgqamekocwaigci()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($nsmgceoqaqogqmuw, self::iwgqamekocwaigci()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\154\141\163\163", "\x66\x6f\162\x6d\55\x63\x6f\156\164\141\x69\x6e\x65\162")); oeocukauoyosicso: if (!self::iwgqamekocwaigci()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto suqceasgacskcmkc; } $nsmgceoqaqogqmuw .= self::iwgqamekocwaigci()->wgqqgewcmcemoewo()->ssqqsemoqaeqcqka("\x50\x4d\x50\122\x54\162\151\147\147\145\162\x2e\x64\157\101\143\x74\x69\x6f\156\x28\x27\x66\x69\145\154\x64\x5f\141\144\144\x65\144\x5f\x74\157\137\x64\x6f\155\47\x2c\x20\x24\x28\x27\x23\x63\155\142\x32\55\x6d\145\x74\141\x62\x6f\170\55{$aokagokqyuysuksm}\47\51\51"); suqceasgacskcmkc: yykqaowwsqgqysmq: if (!$koaqeegoeiaiccse) { goto kwiggogcgciwuwqk; } echo $nsmgceoqaqogqmuw; kwiggogcgciwuwqk: return $nsmgceoqaqogqmuw; } public static function mosueiikcgoscauq(?array $ikgwqyuyckaewsow = [], array $uiewakwqscemywuo = []) { $eaoumsseceiowgsk = null; if (!(is_array($ikgwqyuyckaewsow) && $ikgwqyuyckaewsow)) { goto yoqakewookqoqacm; } $ikgwqyuyckaewsow = self::yceyooiweyiqgsam($ikgwqyuyckaewsow); $eaoumsseceiowgsk = new CMB2($uiewakwqscemywuo); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $eaoumsseceiowgsk->add_field($aiowsaccomcoikus); ikuuiauwouuqawuw: } uckewycoogsogwiy: yoqakewookqoqacm: return $eaoumsseceiowgsk; } public static function owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A) { $sogksuscggsicmac = null; if (!$aiowsaccomcoikus instanceof Fields\Field) { goto mscgewkcqcoowweg; } if ($aqykuigiuwmmcieu === ARRAY_A) { goto esaqcqqwuussiiwo; } $aiowsaccomcoikus = $aiowsaccomcoikus->mwikyscisascoeea(); goto ikqeeaysmqgcgawq; esaqcqqwuussiiwo: $aiowsaccomcoikus->ggiaseqygioygumq($yuwymayicwwqiske . $aiowsaccomcoikus->mwikyscisascoeea()); $oyumuuqqsmuacmak = $aiowsaccomcoikus->giaekmqwqoqmqcic(); if (!($yuwymayicwwqiske && $oyumuuqqsmuacmak)) { goto okkmcocqokkskasy; } foreach ($oyumuuqqsmuacmak as $ymqmyyeuycgmigyo => $ccamueccusigaaio) { if (is_array($ccamueccusigaaio)) { goto iwsmmkqaoksmocok; } $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo] = $yuwymayicwwqiske . $ccamueccusigaaio; goto esikeyqyuikmaiek; iwsmmkqaoksmocok: foreach ($ccamueccusigaaio as $uusmaiomayssaecw => $igqsaukqcqscimok) { $oyumuuqqsmuacmak[$ymqmyyeuycgmigyo][$uusmaiomayssaecw] = $yuwymayicwwqiske . $igqsaukqcqscimok; emqswoaawgeyosmi: } ocywegekakimmwcq: esikeyqyuikmaiek: yuimwyoywaiiqacs: } gswcoeiisamakwii: okkmcocqokkskasy: if (!$aiowsaccomcoikus instanceof Fields\Group) { goto qiiigwkqeoewsuwm; } $aiowsaccomcoikus->acakyumkgoeiskqq(self::yceyooiweyiqgsam($aiowsaccomcoikus->ugmceccgwaaaigiy(), $yuwymayicwwqiske)); qiiigwkqeoewsuwm: $sogksuscggsicmac = $aiowsaccomcoikus->sacmkccceuywoqsq(); ikqeeaysmqgcgawq: mscgewkcqcoowweg: if (!is_string($aiowsaccomcoikus)) { goto suqcsgaosywaauuu; } $sogksuscggsicmac = $yuwymayicwwqiske . $aiowsaccomcoikus; suqcsgaosywaauuu: return $sogksuscggsicmac; } public static function yceyooiweyiqgsam($ikgwqyuyckaewsow, $yuwymayicwwqiske = null, $aqykuigiuwmmcieu = ARRAY_A) : array { $ikgwqyuyckaewsow = self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow, "\x67\145\164\120\162\151\157\162\151\x74\x79"); foreach ($ikgwqyuyckaewsow as $uusmaiomayssaecw => $aiowsaccomcoikus) { $ikgwqyuyckaewsow[$uusmaiomayssaecw] = self::owyqomusqsqksswm($aiowsaccomcoikus, $yuwymayicwwqiske, $aqykuigiuwmmcieu); gsygwgsiawgmqiyi: } wwukgaquuyoissgy: return $ikgwqyuyckaewsow; } public static function gkkckkcwsagoakki(string $aokagokqyuysuksm, $ymqmyyeuycgmigyo) : Fields\Radio { $sckumcuqemuukces = __("\155\x69\156", PR__CMN__FOUNDATION); $ygykagaqyuawwiyo = __("\150\x72", PR__CMN__FOUNDATION); $aucgsoysiakkacqc = [1 => $sckumcuqemuukces, 5 => $sckumcuqemuukces, 10 => $sckumcuqemuukces, 30 => $sckumcuqemuukces, 60 => $ygykagaqyuawwiyo, 1440 => $ygykagaqyuawwiyo]; $qiouiwasaauyaaue = [0 => __("\x4e\x6f\x20\x4c\151\x6d\151\164", PR__CMN__FOUNDATION)]; foreach ($aucgsoysiakkacqc as $cqgoimumaewouews => $iyqygqimawuycsyq) { $pkyyagewkiyckmwy = $iyqygqimawuycsyq == $sckumcuqemuukces ? $cqgoimumaewouews : $cqgoimumaewouews / 60; $qiouiwasaauyaaue[$cqgoimumaewouews] = "{$pkyyagewkiyckmwy}\40\40{$iyqygqimawuycsyq}"; yqagomygmeoecwey: } qsgqwyqaqiowkmco: $aiowsaccomcoikus = self::yyuwuqsiucweeoue($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue)->awagieqcmmwkgwgs(true); $aiowsaccomcoikus->eumecwmqmukqgyea(); return $aiowsaccomcoikus; } public function wgqeagqksicwasgo($pkyyagewkiyckmwy, $wwgucssaecqekuek) { return array_merge([Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy], $wwgucssaecqekuek); } private static function _getIconsMarkup($ykiyyumywksqcisg = []) { foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $ykiyyumywksqcisg[$uusmaiomayssaecw] = json_encode([Constants::gouqcwikiiygyasc => $uusmaiomayssaecw, Constants::TEXT => $wkaqekwwgqsqwcoi]); eucqomyqykgoiuge: } qikaewekoecykeou: return $ykiyyumywksqcisg; } public static function _getEscapedIcons($ykiyyumywksqcisg = IconInterface::class, $iwkyyocymeukcceu = []) : array { $gskuwmeemyeuwogc = self::iwgqamekocwaigci()->wgqqgewcmcemoewo()->cuumgioggkmuecyo(); $ygogqywsaqoukoqy = []; $mwaeiygkcuuqqgga = false; if (is_string($ykiyyumywksqcisg) && interface_exists($ykiyyumywksqcisg)) { goto aiccyaswigkaycqk; } if (!is_array($ykiyyumywksqcisg)) { goto usymasgsyqgsuocg; } $mwaeiygkcuuqqgga = true; usymasgsyqgsuocg: goto sqyokemumceysegy; aiccyaswigkaycqk: try { $kowuaykiywgmuuec = self::iwgqamekocwaigci()->ekkwaykokcgqkmoi()->cmmaeeeoaaeqqqmm($ykiyyumywksqcisg, "\x67\x65\164\103\157\x6e\163\x74\141\x6e\164\x73"); $ykiyyumywksqcisg = array_slice($kowuaykiywgmuuec, 0, 500); } catch (Exception $wgaoewqkwgomoaai) { $ykiyyumywksqcisg = []; } sqyokemumceysegy: if (!$ykiyyumywksqcisg) { goto ucuoeymyqeokgsya; } foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $swmoiamakysysggq = self::iwgqamekocwaigci()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\154\141\x73\163" => "\160\x72\55\x69\143\157\x6e\x20\x69\143\x6f\x6e\55\x70\162\x69\x6d\x61\x72\x79"], [Constants::ELEMENT => "\x69\x6d\x67"]); $meqocwsecsywiiqs = array_reverse(explode(DIRECTORY_SEPARATOR, self::iwgqamekocwaigci()->ywqgcuymeiswqyqc()->get($iwkyyocymeukcceu, $uusmaiomayssaecw, $wkaqekwwgqsqwcoi))); $aqykuigiuwmmcieu = sprintf($gskuwmeemyeuwogc, reset($meqocwsecsywiiqs), $swmoiamakysysggq); if ($mwaeiygkcuuqqgga) { goto aueaceeyommgkicu; } $ygogqywsaqoukoqy[$wkaqekwwgqsqwcoi] = $aqykuigiuwmmcieu; goto mysueeoswqgccmui; aueaceeyommgkicu: $ygogqywsaqoukoqy[$uusmaiomayssaecw] = $aqykuigiuwmmcieu; mysueeoswqgccmui: zayqqeqgcwkekwws: } oqousikwiiqagoyw: if ($mwaeiygkcuuqqgga) { goto egmayaiikwsskgmy; } $ygogqywsaqoukoqy = self::haqswuugoswcyoia()->mmsykuomogaqoaye()->sscegwueamckwmcy("\145\163\x63\141\160\x65\144\137\x69\143\x6f\x6e\163\137\144\162\x6f\160\144\x6f\x77\156", $ygogqywsaqoukoqy, $gskuwmeemyeuwogc); egmayaiikwsskgmy: ucuoeymyqeokgsya: return array_map("\145\x73\x63\137\141\x74\164\162", $ygogqywsaqoukoqy); } private static function _getColorText($cmwygeyygwqaemaq, $qoiwmokisgikggia = '') : string { $qimgcsugeskcqeyc = "\x77\150\151\x74\x65"; if ($qoiwmokisgikggia) { goto yuuyikiacmmueosu; } $qoiwmokisgikggia = self::iwgqamekocwaigci()->owgcciayoweymuws()->igcwuwuymeuomaqo($cmwygeyygwqaemaq); yuuyikiacmmueosu: if (!(false !== strpos($qoiwmokisgikggia, "\x6c\x69\147\x68\164") || false !== strpos($qoiwmokisgikggia, "\x74\x65\x72\164\151\x61\162\171") || false !== strpos($qoiwmokisgikggia, "\x71\165\141\x74\145\x72\156\141\162\171") || false !== strpos($qoiwmokisgikggia, $qimgcsugeskcqeyc))) { goto sguskaeaaqcagqgc; } $qimgcsugeskcqeyc = "\144\x61\162\x6b"; sguskaeaaqcagqgc: return self::iwgqamekocwaigci()->wgqqgewcmcemoewo()->iaaacsuskiakkwui(self::iwgqamekocwaigci()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\143\154\x61\163\x73" => "\x6c\x68\x2d\154\x67"]), ["\x63\x6c\141\163\x73" => "\x62\x67\x2d{$qoiwmokisgikggia}\40\x74\x65\170\x74\x2d{$qimgcsugeskcqeyc}\x20\x74\x65\x78\164\55\143\145\156\x74\x65\162\x20\x70\157\x73\x69\164\x69\157\156\55\x61\142\163\157\x6c\165\x74\145\x20\x77\55\61\60\x30\40\x68\x2d\61\x30\60\x20\164\x6f\160\55\x30\40\154\x65\146\164\x2d\60\x20\162\x6f\165\x6e\x64\145\x64"]); } private static function _generateColors($yyiwywqmmsqmwqes) : array { $ukqisiguweqciuei = ['' => __("\116\157\156\145", PR__CMN__FOUNDATION)]; foreach ($yyiwywqmmsqmwqes as $qoiwmokisgikggia) { $meqocwsecsywiiqs = ucfirst($qoiwmokisgikggia); $ukqisiguweqciuei[$qoiwmokisgikggia] = self::_getColorText($meqocwsecsywiiqs); syuaummumssgwwee: } agkmiayuawacakau: return $ukqisiguweqciuei; } public static function eqmqmmymowieiqwm($aokagokqyuysuksm, array $ukqisiguweqciuei = []) : Fields\BSSelect { if ($ukqisiguweqciuei) { goto oocuemosmeeekgas; } $ukqisiguweqciuei = self::haqswuugoswcyoia()->mmsykuomogaqoaye()->sscegwueamckwmcy(self::iwgqamekocwaigci()->mmsykuomogaqoaye()->ygyygikyocoymgaw("\143\x6f\x6c\157\x72\x5f\x64\162\x6f\160\144\x6f\x77\156\137\151\164\145\x6d\x73"), []); oocuemosmeeekgas: $ukqisiguweqciuei = self::_generateColors($ukqisiguweqciuei); foreach ($ukqisiguweqciuei as $uusmaiomayssaecw => $qoiwmokisgikggia) { $ukqisiguweqciuei[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $uusmaiomayssaecw, "\144\x61\164\x61\55\143\x6f\156\164\x65\x6e\x74" => $qoiwmokisgikggia]; uoeasoimegouymka: } qkcsykuocwuyaice: return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\103\x6f\154\x6f\162", PR__CMN__FOUNDATION), $ukqisiguweqciuei); } public static function awcycqsqygcuoucs(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = [], $iwkyyocymeukcceu = [], $pacsomcuwcegguua = false) : Fields\Select { $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu); $gmksciycsesoouoi = self::kqcemgcowgomaqwa($aokagokqyuysuksm, __("\x49\143\x6f\156", PR__CMN__FOUNDATION), $ykiyyumywksqcisg); if ($pacsomcuwcegguua) { goto egsycocugqyyswsi; } $iwkyyocymeukcceu = self::_getIconsMarkup($ykiyyumywksqcisg); egsycocugqyyswsi: $gmksciycsesoouoi->icsmsougoccqosgc($iwkyyocymeukcceu); return $gmksciycsesoouoi; } public static function auouusgocuwkgaok(?string $aokagokqyuysuksm, $ykiyyumywksqcisg = IconInterface::class, $iwkyyocymeukcceu = []) : Fields\BSSelect { $ykiyyumywksqcisg = self::_getEscapedIcons($ykiyyumywksqcisg, $iwkyyocymeukcceu); foreach ($ykiyyumywksqcisg as $uusmaiomayssaecw => $wkaqekwwgqsqwcoi) { $ykiyyumywksqcisg[$uusmaiomayssaecw] = [Constants::uissasisiuymwsmu => $uusmaiomayssaecw, "\x64\x61\164\141\x2d\x63\157\156\164\145\x6e\x74" => $wkaqekwwgqsqwcoi]; aoquoewagkseayug: } qiaimmucomukkeka: return self::ckuwucygcwsiawms($aokagokqyuysuksm, __("\x49\143\157\156", PR__CMN__FOUNDATION), $ykiyyumywksqcisg); } public static function scgissgkcwaumgky(?string $aokagokqyuysuksm, $meqocwsecsywiiqs = '') : Fields\BSSelect { if ($meqocwsecsywiiqs) { goto osuscoaaomwcqkew; } $meqocwsecsywiiqs = __("\111\x63\157\x6e", PR__CMN__FOUNDATION); osuscoaaomwcqkew: return self::ckuwucygcwsiawms($aokagokqyuysuksm, $meqocwsecsywiiqs)->kacywqgmseagyuyu(); } }