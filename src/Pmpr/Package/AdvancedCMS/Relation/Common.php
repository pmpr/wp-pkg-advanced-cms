<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45eee7c0b2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Relation; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\AdvancedCMS\Container; use stdClass; class Common extends Container { const ygyiacciqgemekwc = "\x72\x65\x6c\x61\164\151\157\x6e"; const ggsoiqkcasskkeae = "\x70\157\163\164\137\x5f\x69\x6e\137\162\x65\x6c\x61\164\151\x6f\156"; public function iucouyoswwsakqyc($ccamueccusigaaio) { $oammesyieqmwuwyi = []; $cmaccwokqweqweqi = $this->weysguygiseoukqw($ccamueccusigaaio, []); foreach ($cmaccwokqweqweqi as $momcykaoccoymeig => $igqsaukqcqscimok) { $uusmaiomayssaecw = ManipulateArray::get($igqsaukqcqscimok, self::ascagqcquwgmygkm); if (!$uusmaiomayssaecw) { goto ueigkucgaucgeimc; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = $igqsaukqcqscimok; ueigkucgaucgeimc: kqgcyoscsusgoaqi: } wgewmqieuamsoayy: return $oammesyieqmwuwyi; } public function ggiqwoiwqoieoeqe($ayegqaqygsqsmews) { if (!$ayegqaqygsqsmews) { goto owmuceyswmgueasi; } $wkmckkosmqouwqko = clone $ayegqaqygsqsmews; if (!$wkmckkosmqouwqko instanceof stdClass) { goto qmuwoecuacmkwgem; } $gmawcgiwcmsukeiu = [self::igecewwoemccgwsq => self::gygsikewooaciecc, self::qgwwgcuuykqagamk => self::uyqakoogaigomqmq]; foreach ($gmawcgiwcmsukeiu as $sysgmomuyiiawwcm => $gcegymooyemmaysk) { if (!isset($wkmckkosmqouwqko->{$sysgmomuyiiawwcm}, $wkmckkosmqouwqko->{$gcegymooyemmaysk})) { goto wakmayaoqoskekqy; } $umkokecyamcwcqwe = $wkmckkosmqouwqko->{$sysgmomuyiiawwcm}; $wkmckkosmqouwqko->{$sysgmomuyiiawwcm} = $wkmckkosmqouwqko->{$gcegymooyemmaysk}; $wkmckkosmqouwqko->{$gcegymooyemmaysk} = $umkokecyamcwcqwe; wakmayaoqoskekqy: wkeuuycukmuqiaom: } sggawugoykqcmsug: qmuwoecuacmkwgem: return $wkmckkosmqouwqko; owmuceyswmgueasi: return $ayegqaqygsqsmews; } public function ouoyuioaimwgosaa($ayegqaqygsqsmews, $mcaisukqqyosuasi) { $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($mcaisukqqyosuasi); $muowmkwsoauukiag = ManipulateArray::get($ayegqaqygsqsmews, self::gygsikewooaciecc); if (!($migiiksoiymissge && $ayegqaqygsqsmews && $muowmkwsoauukiag)) { goto mwsmsguqqkcwiiuk; } $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $migiiksoiymissge .= "{$muowmkwsoauukiag}\57{$aaokuekaimigoyue}"; mwsmsguqqkcwiiuk: return trailingslashit($migiiksoiymissge); } public static function ocwoggikwceqsiuc($ayegqaqygsqsmews) { $aaokuekaimigoyue = ManipulateArray::get($ayegqaqygsqsmews, self::qgwwgcuuykqagamk); if (!$aaokuekaimigoyue) { goto eeauyscekuckoues; } $aaokuekaimigoyue = DecoratorSanitize::wouqysuosmigaggy($aaokuekaimigoyue); eeauyscekuckoues: return $aaokuekaimigoyue; } public function ugcmciwwskkeimse($ccamueccusigaaio, $gwiwsycaaqgwmewg) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye($ccamueccusigaaio); $ccamueccusigaaio = null; foreach ($oammesyieqmwuwyi as $gsgwomokyuwmqqkg) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { if (!($ayegqaqygsqsmews->metakey == $gwiwsycaaqgwmewg)) { goto iwsuawwqomaowuii; } $ccamueccusigaaio = $ayegqaqygsqsmews; goto wagqgeqymeqoeuyi; iwsuawwqomaowuii: qoqskyuuwueqkquk: } wagqgeqymeqoeuyi: msemumccgceyugmg: } eogwckcymuugikuy: return $ccamueccusigaaio; } public function comscwiqyuuesess($ccamueccusigaaio, $gwiwsycaaqgwmewg = null) { $agkmksicugiqcucq = []; $yygmoeguaqyumuui = [self::ouywiegeiyuaaawo, self::igecewwoemccgwsq, self::qgwwgcuuykqagamk, self::gygsikewooaciecc, self::uyqakoogaigomqmq, self::moegqsqomeumiomk, self::iycuamekoueuemoy]; if ($gwiwsycaaqgwmewg) { goto emmsycooskoqmgeg; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye($ccamueccusigaaio); foreach ($oammesyieqmwuwyi as $gsgwomokyuwmqqkg) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $agkmksicugiqcucq[] = $this->suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui); qgeugwymkkiacwoc: } mqicocmqegwukkwg: ciykoyeioqgyaeqo: } asiqwuoswmigcaki: goto ouamogymawucwswu; emmsycooskoqmgeg: $ayegqaqygsqsmews = self::ugcmciwwskkeimse($ccamueccusigaaio, $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto wcugqegqsuuuwqao; } $agkmksicugiqcucq = $this->suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui); wcugqegqsuuuwqao: ouamogymawucwswu: if (!$agkmksicugiqcucq) { goto mugqyyeayeyggqqk; } $agkmksicugiqcucq = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, $yygmoeguaqyumuui); mugqyyeayeyggqqk: return $agkmksicugiqcucq; } public function suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui = []) { $igqsaukqcqscimok = []; if (ManipulateArray::uuegkqwagymmusiy($ayegqaqygsqsmews, [self::igecewwoemccgwsq, self::moegqsqomeumiomk])) { goto wyuemgggaqogsmsq; } $igqsaukqcqscimok[self::ouywiegeiyuaaawo] = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); foreach ($yygmoeguaqyumuui as $momcykaoccoymeig => $uusmaiomayssaecw) { if (!isset($ayegqaqygsqsmews->{$uusmaiomayssaecw})) { goto samwkqgwouggsguc; } $igqsaukqcqscimok[$uusmaiomayssaecw] = $ayegqaqygsqsmews->{$uusmaiomayssaecw}; samwkqgwouggsguc: oomguqikqokqwgku: } acsqgiuageaasiyy: wyuemgggaqogsmsq: return $igqsaukqcqscimok; } public function gyykaeouuskoqiye($ccamueccusigaaio, $mcaisukqqyosuasi = null, $aqykuigiuwmmcieu = OBJECT) { $oammesyieqmwuwyi = $this->iucouyoswwsakqyc($ccamueccusigaaio); $agkmksicugiqcucq = []; if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) { goto iwekmyyccgiyuecc; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!(!ManipulateArray::uuegkqwagymmusiy($igqsaukqcqscimok, [self::ascagqcquwgmygkm, self::NAME, self::iccwcygaeqmomooo, self::igecewwoemccgwsq, self::gygsikewooaciecc]) && $igqsaukqcqscimok[self::iccwcygaeqmomooo])) { goto ogsaaqsaogcqiouy; } $iakkeikwceeomgyq = $igqsaukqcqscimok[self::igecewwoemccgwsq]; $eswwueuissckicww = $igqsaukqcqscimok[self::ascagqcquwgmygkm]; $qkkiukyyasyoeywi = ManipulateArray::get($igqsaukqcqscimok, self::iycuamekoueuemoy); $muowmkwsoauukiag = $igqsaukqcqscimok[self::gygsikewooaciecc]; if (!(is_null($mcaisukqqyosuasi) || $iakkeikwceeomgyq === $mcaisukqqyosuasi || $qkkiukyyasyoeywi && $muowmkwsoauukiag === $mcaisukqqyosuasi)) { goto ousiuuwgwkiyikyq; } $gwiwsycaaqgwmewg = "{$iakkeikwceeomgyq}\137{$eswwueuissckicww}\137{$muowmkwsoauukiag}"; if ($aqykuigiuwmmcieu === OBJECT) { goto miweggwqeiaeweia; } $agkmksicugiqcucq[$gwiwsycaaqgwmewg] = ManipulateArray::get($igqsaukqcqscimok, self::NAME, ''); goto kqqiegkuqagcqsya; miweggwqeiaeweia: $uusmaiomayssaecw = $qkkiukyyasyoeywi && $muowmkwsoauukiag == $mcaisukqqyosuasi ? $iakkeikwceeomgyq : $muowmkwsoauukiag; $igqsaukqcqscimok[self::moegqsqomeumiomk] = $gwiwsycaaqgwmewg; $agkmksicugiqcucq[$uusmaiomayssaecw][$eswwueuissckicww] = ConvertArray::kamisyecckmwywwo($igqsaukqcqscimok); kqqiegkuqagcqsya: ousiuuwgwkiyikyq: ogsaaqsaogcqiouy: kkumywowcoycymeo: } guykyqecgswcsmws: iwekmyyccgiyuecc: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\162\x65\x6c\141\x74\x69\157\x6e\137\x76\x61\154\151\x64\x5f\151\164\145\x6d\163"), $agkmksicugiqcucq, $ccamueccusigaaio, $mcaisukqqyosuasi, $aqykuigiuwmmcieu); } public function woqgasgkqemiiseo($wkaqekwwgqsqwcoi, $qoiwmokisgikggia = "\x70\x72\x69\x6d\141\162\x79") { return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\141\163\163" => "\151\x63\157\156\55\163\155\40\x66\x75\x6c\154\55\157\x70\141\x63\151\x74\171\x20\151\x63\x6f\x6e\x2d{$qoiwmokisgikggia}"], true); } public function cmeuowkiswiuocqa() : string { return ManipulateHTML::uuccukgasskgimsq("\x61", ["\150\x72\x65\146" => "\43", "\x63\154\141\x73\x73" => "\150\141\x6e\x64\x6c\x65\40\x72\145\154\141\164\151\x6f\156\x2d\x68\x61\x6e\144\154\x65\x20\146\x6c\157\141\164\x2d\x72\151\x67\150\x74\x20\x70\55\61\x20\x62\x6f\x72\x64\x65\x72\145\x64\40\162\x6f\165\x6e\144\145\144\x20\155\162\55\61"], $this->woqgasgkqemiiseo(IconFontawesomeInterface::wmukkkgkoaweqyqo)); } public function amsaeiymyieqksqy() : string { $meqocwsecsywiiqs = __("\x52\x65\155\x6f\166\145", PR__PKG__ADVANCED_CMS); return ManipulateHTML::icqkogwskuwscskk(["\160\162\x65\x66\x69\x78" => "\162\145\x6d\x6f\x76\x65\x5f\162\145\x6c\x61\x74\151\x6f\x6e", "\x74\171\160\x65" => self::wyaqwomqwwaoiwas, "\164\151\164\x6c\x65" => $meqocwsecsywiiqs, "\x63\x6f\156\164\x65\156\164" => __("\x41\162\x65\x20\171\x6f\165\40\x73\165\162\x65\x20\x79\x6f\165\x20\167\x61\156\164\x20\164\x6f\40\162\145\155\157\x76\145\x20\164\x68\151\163\x20\x69\164\145\155\x3f", PR__PKG__ADVANCED_CMS), "\142\165\164\x74\157\156\163" => ["\x63\x61\156\x63\145\154", ["\143\x6c\141\x73\x73" => "\x72\145\x6c\141\164\x69\x6f\x6e\x2d\x69\164\145\x6d\x2d\x72\145\155\157\166\145\40\142\x74\x6e\x20\142\164\x6e\x2d\160\x72\151\x6d\x61\x72\x79", "\x74\151\x74\x6c\145" => $meqocwsecsywiiqs]]], ["\141\164\164\x72\163" => ["\x63\154\141\x73\163" => "\160\162\55\x63\x6f\156\146\x69\162\155\x61\x62\x6c\145\55\x61\x63\x74\x69\x6f\156\x20\146\154\157\141\164\55\x72\151\147\150\164\40\160\x2d\61\40\142\x6f\x72\144\145\x72\145\x64\40\x72\157\165\156\x64\145\x64"], "\145\154\x65\x6d\x65\x6e\164" => "\141", "\x63\x6f\x6e\x74\x65\156\164" => $this->woqgasgkqemiiseo(IconFontawesomeInterface::cugwqwigakiwyiuk, "\144\x61\x6e\147\145\x72")]); } }
