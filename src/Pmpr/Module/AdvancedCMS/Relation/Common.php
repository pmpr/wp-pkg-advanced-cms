<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62421b822e5c2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\AdvancedCMS\Container; use stdClass; class Common extends Container { const ggsoiqkcasskkeae = "\x70\157\x73\x74\137\137\x69\156\x5f\x72\x65\x6c\141\164\151\x6f\156"; public function iucouyoswwsakqyc($ccamueccusigaaio) : array { $oammesyieqmwuwyi = []; $cmaccwokqweqweqi = $this->weysguygiseoukqw($ccamueccusigaaio, []); foreach ($cmaccwokqweqweqi as $igqsaukqcqscimok) { $uusmaiomayssaecw = ManipulateArray::get($igqsaukqcqscimok, self::ascagqcquwgmygkm); if (!$uusmaiomayssaecw) { goto ieqesiiageaauiuw; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = $igqsaukqcqscimok; ieqesiiageaauiuw: yiowgigkkwsoqcci: } sioekkmekwygemyc: return $oammesyieqmwuwyi; } public function ggiqwoiwqoieoeqe($ayegqaqygsqsmews) { if (!$ayegqaqygsqsmews) { goto wsesqmcqoiyyqkqi; } $wkmckkosmqouwqko = clone $ayegqaqygsqsmews; if (!$wkmckkosmqouwqko instanceof stdClass) { goto iesekaeqeomeuaui; } $gmawcgiwcmsukeiu = [self::igecewwoemccgwsq => self::gygsikewooaciecc, self::qgwwgcuuykqagamk => self::uyqakoogaigomqmq]; foreach ($gmawcgiwcmsukeiu as $sysgmomuyiiawwcm => $gcegymooyemmaysk) { if (!isset($wkmckkosmqouwqko->{$sysgmomuyiiawwcm}, $wkmckkosmqouwqko->{$gcegymooyemmaysk})) { goto oyeyomcgkmgymogq; } $umkokecyamcwcqwe = $wkmckkosmqouwqko->{$sysgmomuyiiawwcm}; $wkmckkosmqouwqko->{$sysgmomuyiiawwcm} = $wkmckkosmqouwqko->{$gcegymooyemmaysk}; $wkmckkosmqouwqko->{$gcegymooyemmaysk} = $umkokecyamcwcqwe; oyeyomcgkmgymogq: mscyggqcesgqqksu: } gamqcwuwkikwqoay: iesekaeqeomeuaui: $ayegqaqygsqsmews = $wkmckkosmqouwqko; wsesqmcqoiyyqkqi: return $ayegqaqygsqsmews; } public function weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi) : string { $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($mcaisukqqyosuasi); $muowmkwsoauukiag = ManipulateArray::get($ayegqaqygsqsmews, self::gygsikewooaciecc); if (!($migiiksoiymissge && $ayegqaqygsqsmews && $muowmkwsoauukiag)) { goto mogkoocsoeuyoqqa; } $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $migiiksoiymissge .= "{$muowmkwsoauukiag}\57{$aaokuekaimigoyue}"; mogkoocsoeuyoqqa: return trailingslashit($migiiksoiymissge); } public static function ocwoggikwceqsiuc($ayegqaqygsqsmews) : ?string { $aaokuekaimigoyue = ManipulateArray::get($ayegqaqygsqsmews, self::qgwwgcuuykqagamk); if (!$aaokuekaimigoyue) { goto wkwamkgkwykeqkec; } $aaokuekaimigoyue = DecoratorSanitize::wouqysuosmigaggy($aaokuekaimigoyue); wkwamkgkwykeqkec: return $aaokuekaimigoyue; } public function ugcmciwwskkeimse($ccamueccusigaaio, $gwiwsycaaqgwmewg) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye($ccamueccusigaaio); $ccamueccusigaaio = null; foreach ($oammesyieqmwuwyi as $gsgwomokyuwmqqkg) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { if (!($ayegqaqygsqsmews->metakey == $gwiwsycaaqgwmewg)) { goto kwiggogcgciwuwqk; } $ccamueccusigaaio = $ayegqaqygsqsmews; goto suqceasgacskcmkc; kwiggogcgciwuwqk: yykqaowwsqgqysmq: } suqceasgacskcmkc: oeocukauoyosicso: } oimkeqocuguqqsqk: return $ccamueccusigaaio; } public function comscwiqyuuesess($ccamueccusigaaio, $gwiwsycaaqgwmewg = null) { $agkmksicugiqcucq = []; $yygmoeguaqyumuui = [self::ouywiegeiyuaaawo, self::igecewwoemccgwsq, self::qgwwgcuuykqagamk, self::gygsikewooaciecc, self::uyqakoogaigomqmq, self::moegqsqomeumiomk, self::iycuamekoueuemoy]; if ($gwiwsycaaqgwmewg) { goto ocywegekakimmwcq; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye($ccamueccusigaaio); foreach ($oammesyieqmwuwyi as $gsgwomokyuwmqqkg) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $agkmksicugiqcucq[] = $this->suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui); yuimwyoywaiiqacs: } gswcoeiisamakwii: yoqakewookqoqacm: } ikuuiauwouuqawuw: goto emqswoaawgeyosmi; ocywegekakimmwcq: $ayegqaqygsqsmews = self::ugcmciwwskkeimse($ccamueccusigaaio, $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto uckewycoogsogwiy; } $agkmksicugiqcucq = $this->suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui); uckewycoogsogwiy: emqswoaawgeyosmi: if (!$agkmksicugiqcucq) { goto iwsmmkqaoksmocok; } $agkmksicugiqcucq = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, $yygmoeguaqyumuui); iwsmmkqaoksmocok: return $agkmksicugiqcucq; } public function suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui = []) : array { $igqsaukqcqscimok = []; if (ManipulateArray::uuegkqwagymmusiy($ayegqaqygsqsmews, [self::igecewwoemccgwsq, self::moegqsqomeumiomk])) { goto esaqcqqwuussiiwo; } $igqsaukqcqscimok[self::ouywiegeiyuaaawo] = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!isset($ayegqaqygsqsmews->{$uusmaiomayssaecw})) { goto qiiigwkqeoewsuwm; } $igqsaukqcqscimok[$uusmaiomayssaecw] = ManipulateArray::get($ayegqaqygsqsmews, $uusmaiomayssaecw); qiiigwkqeoewsuwm: okkmcocqokkskasy: } esikeyqyuikmaiek: esaqcqqwuussiiwo: return $igqsaukqcqscimok; } public function gyykaeouuskoqiye($ccamueccusigaaio, $mcaisukqqyosuasi = null, $aqykuigiuwmmcieu = OBJECT) : array { $oammesyieqmwuwyi = $this->iucouyoswwsakqyc($ccamueccusigaaio); $agkmksicugiqcucq = []; if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) { goto yqagomygmeoecwey; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!(!ManipulateArray::uuegkqwagymmusiy($igqsaukqcqscimok, [self::ascagqcquwgmygkm, self::NAME, self::iccwcygaeqmomooo, self::igecewwoemccgwsq, self::gygsikewooaciecc]) && $igqsaukqcqscimok[self::iccwcygaeqmomooo])) { goto qsgqwyqaqiowkmco; } $iakkeikwceeomgyq = $igqsaukqcqscimok[self::igecewwoemccgwsq]; $eswwueuissckicww = $igqsaukqcqscimok[self::ascagqcquwgmygkm]; $qkkiukyyasyoeywi = ManipulateArray::get($igqsaukqcqscimok, self::iycuamekoueuemoy); $muowmkwsoauukiag = $igqsaukqcqscimok[self::gygsikewooaciecc]; if (!(is_null($mcaisukqqyosuasi) || $iakkeikwceeomgyq === $mcaisukqqyosuasi || $qkkiukyyasyoeywi && $muowmkwsoauukiag === $mcaisukqqyosuasi)) { goto gsygwgsiawgmqiyi; } $gwiwsycaaqgwmewg = "{$iakkeikwceeomgyq}\x5f{$eswwueuissckicww}\x5f{$muowmkwsoauukiag}"; if ($aqykuigiuwmmcieu === OBJECT) { goto suqcsgaosywaauuu; } $agkmksicugiqcucq[$gwiwsycaaqgwmewg] = ManipulateArray::get($igqsaukqcqscimok, self::NAME, ''); goto wwukgaquuyoissgy; suqcsgaosywaauuu: $uusmaiomayssaecw = $qkkiukyyasyoeywi && $muowmkwsoauukiag == $mcaisukqqyosuasi ? $iakkeikwceeomgyq : $muowmkwsoauukiag; $igqsaukqcqscimok[self::moegqsqomeumiomk] = $gwiwsycaaqgwmewg; $agkmksicugiqcucq[$uusmaiomayssaecw][$eswwueuissckicww] = ConvertArray::kamisyecckmwywwo($igqsaukqcqscimok); wwukgaquuyoissgy: gsygwgsiawgmqiyi: qsgqwyqaqiowkmco: mscgewkcqcoowweg: } ikqeeaysmqgcgawq: yqagomygmeoecwey: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\x65\x6c\x61\x74\151\x6f\x6e\137\x76\x61\154\x69\x64\137\x69\164\145\155\x73"), $agkmksicugiqcucq, $ccamueccusigaaio, $mcaisukqqyosuasi, $aqykuigiuwmmcieu); } public function woqgasgkqemiiseo($wkaqekwwgqsqwcoi, $qoiwmokisgikggia = "\x70\x72\151\155\141\x72\171") { return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\141\x73\x73" => "\x69\143\x6f\156\x2d\163\155\40\146\x75\154\154\x2d\157\x70\141\143\151\164\171\x20\151\143\157\156\55{$qoiwmokisgikggia}"], ["\x6d\x61\x72\x6b\x75\160" => true]); } public function cmeuowkiswiuocqa() : string { return ManipulateHTML::uuccukgasskgimsq("\141", ["\150\162\145\x66" => "\x23", "\143\154\141\163\163" => "\x68\x61\156\144\154\145\x20\x72\x65\x6c\x61\x74\x69\x6f\x6e\x2d\150\141\156\x64\154\x65\40\146\154\157\141\164\x2d\162\151\x67\x68\164\x20\x70\x2d\61\40\x62\157\x72\x64\x65\162\x65\x64\40\162\x6f\165\x6e\x64\145\144\x20\155\162\x2d\x31"], $this->woqgasgkqemiiseo(IconFontawesomeInterface::wmukkkgkoaweqyqo)); } public function amsaeiymyieqksqy() : string { $meqocwsecsywiiqs = __("\x52\x65\155\x6f\x76\x65", PR__MDL__ADVANCED_CMS); return ManipulateHTML::icqkogwskuwscskk(["\160\162\145\x66\x69\170" => "\162\x65\x6d\157\x76\145\x5f\x72\145\154\141\x74\x69\x6f\x6e", "\164\x79\x70\145" => self::wyaqwomqwwaoiwas, "\164\x69\164\154\145" => $meqocwsecsywiiqs, "\x63\x6f\156\164\145\156\164" => __("\101\x72\x65\40\171\x6f\165\x20\x73\165\162\x65\x20\171\x6f\165\x20\167\141\x6e\x74\x20\x74\157\40\162\145\155\157\x76\145\40\x74\150\151\x73\40\x69\x74\145\155\x3f", PR__MDL__ADVANCED_CMS), "\142\x75\164\164\x6f\x6e\x73" => ["\143\x61\x6e\143\145\154", ["\143\154\141\x73\163" => "\x72\145\x6c\141\164\x69\x6f\156\x2d\151\164\145\155\x2d\x72\145\x6d\x6f\166\145\x20\x62\x74\x6e\40\142\164\156\55\160\x72\x69\x6d\141\162\x79", "\164\x69\x74\154\145" => $meqocwsecsywiiqs]]], ["\x61\x74\164\162\163" => ["\143\x6c\x61\163\163" => "\x70\162\x2d\143\x6f\156\x66\x69\x72\x6d\141\142\x6c\x65\55\141\143\x74\151\x6f\x6e\x20\x66\x6c\x6f\141\164\x2d\162\151\x67\150\164\40\x70\55\x31\40\142\157\x72\144\145\162\145\144\40\162\x6f\x75\x6e\144\145\144"], "\x65\x6c\145\155\145\156\x74" => "\141", "\143\x6f\x6e\164\x65\156\x74" => $this->woqgasgkqemiiseo(IconFontawesomeInterface::cugwqwigakiwyiuk, "\x64\x61\156\x67\x65\x72")]); } }
