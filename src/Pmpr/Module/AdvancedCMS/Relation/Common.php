<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6327538adab60             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\AdvancedCMS\Container; use stdClass; class Common extends Container { const ggsoiqkcasskkeae = "\x70\157\x73\164\137\137\x69\156\x5f\162\x65\154\x61\164\x69\157\156"; public function iucouyoswwsakqyc($ccamueccusigaaio) : array { $oammesyieqmwuwyi = []; $cmaccwokqweqweqi = $this->weysguygiseoukqw($ccamueccusigaaio, []); foreach ($cmaccwokqweqweqi as $igqsaukqcqscimok) { $uusmaiomayssaecw = ManipulateArray::get($igqsaukqcqscimok, self::ascagqcquwgmygkm); if (!$uusmaiomayssaecw) { goto qwisiamkmkkwucyo; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = $igqsaukqcqscimok; qwisiamkmkkwucyo: sgocecweikecwwgq: } yiceawuuiusakwiq: return $oammesyieqmwuwyi; } public function ggiqwoiwqoieoeqe($ayegqaqygsqsmews) { if (!$ayegqaqygsqsmews) { goto yoqsigmoyaaceqky; } $wkmckkosmqouwqko = clone $ayegqaqygsqsmews; if (!$wkmckkosmqouwqko instanceof stdClass) { goto yksywwikmeksikqc; } $gmawcgiwcmsukeiu = [self::igecewwoemccgwsq => self::gygsikewooaciecc, self::qgwwgcuuykqagamk => self::uyqakoogaigomqmq]; foreach ($gmawcgiwcmsukeiu as $sysgmomuyiiawwcm => $gcegymooyemmaysk) { if (!isset($wkmckkosmqouwqko->{$sysgmomuyiiawwcm}, $wkmckkosmqouwqko->{$gcegymooyemmaysk})) { goto masakmomqmeocqqg; } $umkokecyamcwcqwe = $wkmckkosmqouwqko->{$sysgmomuyiiawwcm}; $wkmckkosmqouwqko->{$sysgmomuyiiawwcm} = $wkmckkosmqouwqko->{$gcegymooyemmaysk}; $wkmckkosmqouwqko->{$gcegymooyemmaysk} = $umkokecyamcwcqwe; masakmomqmeocqqg: iwkckkeimmeoquyq: } yqcusaeysomccaok: yksywwikmeksikqc: $ayegqaqygsqsmews = $wkmckkosmqouwqko; yoqsigmoyaaceqky: return $ayegqaqygsqsmews; } public function weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi) : string { $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($mcaisukqqyosuasi); $muowmkwsoauukiag = ManipulateArray::get($ayegqaqygsqsmews, self::gygsikewooaciecc); if (!($migiiksoiymissge && $ayegqaqygsqsmews && $muowmkwsoauukiag)) { goto suqckoccuyeeymww; } $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $migiiksoiymissge .= "{$muowmkwsoauukiag}\x2f{$aaokuekaimigoyue}"; suqckoccuyeeymww: return trailingslashit($migiiksoiymissge); } public static function ocwoggikwceqsiuc($ayegqaqygsqsmews) : ?string { $aaokuekaimigoyue = ManipulateArray::get($ayegqaqygsqsmews, self::qgwwgcuuykqagamk); if (!$aaokuekaimigoyue) { goto giugwaeuwaomossq; } $aaokuekaimigoyue = DecoratorSanitize::wouqysuosmigaggy($aaokuekaimigoyue); giugwaeuwaomossq: return $aaokuekaimigoyue; } public function ugcmciwwskkeimse($ccamueccusigaaio, $gwiwsycaaqgwmewg) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye($ccamueccusigaaio); $ccamueccusigaaio = null; foreach ($oammesyieqmwuwyi as $gsgwomokyuwmqqkg) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { if (!($ayegqaqygsqsmews->metakey == $gwiwsycaaqgwmewg)) { goto ekoqieigyoeyauqa; } $ccamueccusigaaio = $ayegqaqygsqsmews; goto ssagcgqaucssyego; ekoqieigyoeyauqa: mqgeseysuwcaqwiy: } ssagcgqaucssyego: sycougcyeqmeiagk: } acgqaeakoyasgkku: return $ccamueccusigaaio; } public function comscwiqyuuesess($ccamueccusigaaio, $gwiwsycaaqgwmewg = null) { $agkmksicugiqcucq = []; $yygmoeguaqyumuui = [self::ouywiegeiyuaaawo, self::igecewwoemccgwsq, self::qgwwgcuuykqagamk, self::gygsikewooaciecc, self::uyqakoogaigomqmq, self::moegqsqomeumiomk, self::iycuamekoueuemoy]; if ($gwiwsycaaqgwmewg) { goto awaqksikyomsuaeo; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye($ccamueccusigaaio); foreach ($oammesyieqmwuwyi as $gsgwomokyuwmqqkg) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $agkmksicugiqcucq[] = $this->suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui); iqsgossweywksoia: } igwkcikeyoowosoi: ksckqkmwiqggykke: } mimacwyuueomgwwy: goto cuommomwmsackoqc; awaqksikyomsuaeo: $ayegqaqygsqsmews = self::ugcmciwwskkeimse($ccamueccusigaaio, $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto cuwcsamuuqyuyqsu; } $agkmksicugiqcucq = $this->suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui); cuwcsamuuqyuyqsu: cuommomwmsackoqc: if (!$agkmksicugiqcucq) { goto ggeoqeowscwkeumy; } $agkmksicugiqcucq = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, $yygmoeguaqyumuui); ggeoqeowscwkeumy: return $agkmksicugiqcucq; } public function suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui = []) : array { $igqsaukqcqscimok = []; if (ManipulateArray::uuegkqwagymmusiy($ayegqaqygsqsmews, [self::igecewwoemccgwsq, self::moegqsqomeumiomk])) { goto yggmaskeguaqkusc; } $igqsaukqcqscimok[self::ouywiegeiyuaaawo] = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!isset($ayegqaqygsqsmews->{$uusmaiomayssaecw})) { goto uqcsksaywyqeumig; } $igqsaukqcqscimok[$uusmaiomayssaecw] = ManipulateArray::get($ayegqaqygsqsmews, $uusmaiomayssaecw); uqcsksaywyqeumig: uwaimsisescsgyqk: } qyeswawykmasuqye: yggmaskeguaqkusc: return $igqsaukqcqscimok; } public function gyykaeouuskoqiye($ccamueccusigaaio, $mcaisukqqyosuasi = null, $aqykuigiuwmmcieu = OBJECT) : array { $oammesyieqmwuwyi = $this->iucouyoswwsakqyc($ccamueccusigaaio); $agkmksicugiqcucq = []; if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) { goto kceuusiekagyeoys; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!(!ManipulateArray::uuegkqwagymmusiy($igqsaukqcqscimok, [self::ascagqcquwgmygkm, self::NAME, self::iccwcygaeqmomooo, self::igecewwoemccgwsq, self::gygsikewooaciecc]) && $igqsaukqcqscimok[self::iccwcygaeqmomooo])) { goto eekaiaeqewiqkkgm; } $iakkeikwceeomgyq = $igqsaukqcqscimok[self::igecewwoemccgwsq]; $eswwueuissckicww = $igqsaukqcqscimok[self::ascagqcquwgmygkm]; $qkkiukyyasyoeywi = ManipulateArray::get($igqsaukqcqscimok, self::iycuamekoueuemoy); $muowmkwsoauukiag = $igqsaukqcqscimok[self::gygsikewooaciecc]; if (!(is_null($mcaisukqqyosuasi) || $iakkeikwceeomgyq === $mcaisukqqyosuasi || $qkkiukyyasyoeywi && $muowmkwsoauukiag === $mcaisukqqyosuasi)) { goto gkoaeuekqockuoiq; } $gwiwsycaaqgwmewg = "{$iakkeikwceeomgyq}\137{$eswwueuissckicww}\x5f{$muowmkwsoauukiag}"; if ($aqykuigiuwmmcieu === OBJECT) { goto kwmiwaecqcgiaqye; } $agkmksicugiqcucq[$gwiwsycaaqgwmewg] = ManipulateArray::get($igqsaukqcqscimok, self::NAME, ''); goto yqicwmekwuoywyus; kwmiwaecqcgiaqye: $uusmaiomayssaecw = $qkkiukyyasyoeywi && $muowmkwsoauukiag == $mcaisukqqyosuasi ? $iakkeikwceeomgyq : $muowmkwsoauukiag; $igqsaukqcqscimok[self::moegqsqomeumiomk] = $gwiwsycaaqgwmewg; $agkmksicugiqcucq[$uusmaiomayssaecw][$eswwueuissckicww] = ConvertArray::kamisyecckmwywwo($igqsaukqcqscimok); yqicwmekwuoywyus: gkoaeuekqockuoiq: eekaiaeqewiqkkgm: jsmisuccwyukksgc: } ukwoswyyogmsygqg: kceuusiekagyeoys: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\162\x65\154\141\x74\x69\x6f\x6e\x5f\x76\x61\154\x69\x64\x5f\151\x74\x65\155\x73"), $agkmksicugiqcucq, $ccamueccusigaaio, $mcaisukqqyosuasi, $aqykuigiuwmmcieu); } public function woqgasgkqemiiseo($wkaqekwwgqsqwcoi, $qoiwmokisgikggia = "\x70\162\x69\x6d\141\x72\171") { return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\x6c\141\x73\x73" => "\x69\x63\x6f\156\55\x73\x6d\x20\146\165\154\154\55\x6f\x70\141\x63\x69\164\x79\40\151\x63\x6f\x6e\x2d{$qoiwmokisgikggia}"], ["\155\141\162\x6b\165\x70" => true]); } public function cmeuowkiswiuocqa() : string { return ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\162\x65\x66" => "\43", "\x63\x6c\141\163\x73" => "\150\141\x6e\144\x6c\x65\x20\x72\x65\154\x61\x74\151\157\x6e\55\x68\x61\156\x64\x6c\x65\40\146\154\x6f\x61\x74\x2d\162\x69\147\150\x74\40\x70\x2d\61\40\142\157\x72\144\145\162\145\144\x20\162\157\165\x6e\x64\x65\144\x20\155\x72\55\61"], $this->woqgasgkqemiiseo(IconFontawesomeInterface::wmukkkgkoaweqyqo)); } public function amsaeiymyieqksqy() : string { $meqocwsecsywiiqs = __("\122\145\x6d\x6f\x76\x65", PR__MDL__ADVANCED_CMS); return ManipulateHTML::icqkogwskuwscskk(["\x70\x72\x65\x66\x69\x78" => "\162\x65\155\x6f\166\145\137\162\x65\154\141\164\x69\157\156", "\164\x79\160\x65" => self::wyaqwomqwwaoiwas, "\x74\x69\164\x6c\x65" => $meqocwsecsywiiqs, "\x63\157\156\x74\145\156\164" => __("\x41\x72\x65\x20\171\157\x75\40\163\165\162\145\x20\x79\157\x75\40\x77\141\156\x74\x20\164\157\40\162\145\x6d\157\x76\x65\40\x74\150\151\x73\40\151\x74\x65\x6d\77", PR__MDL__ADVANCED_CMS), "\x62\165\x74\164\157\x6e\x73" => ["\143\141\x6e\x63\x65\154", ["\143\154\141\163\x73" => "\162\145\x6c\x61\x74\151\157\156\55\151\x74\145\155\x2d\x72\145\155\157\x76\x65\40\142\164\x6e\x20\142\164\x6e\55\160\162\x69\155\x61\162\171", "\x74\x69\x74\x6c\x65" => $meqocwsecsywiiqs]]], ["\x61\x74\164\162\x73" => ["\x63\154\141\x73\x73" => "\160\x72\x2d\x63\157\x6e\146\x69\162\x6d\x61\142\x6c\145\x2d\x61\x63\164\151\157\156\40\146\x6c\157\141\164\x2d\162\151\147\150\164\40\160\x2d\x31\40\x62\157\162\144\145\x72\145\x64\x20\162\157\165\x6e\x64\x65\x64"], "\x65\x6c\x65\x6d\145\156\164" => "\x61", "\143\157\156\x74\145\x6e\164" => $this->woqgasgkqemiiseo(IconFontawesomeInterface::cugwqwigakiwyiuk, "\x64\141\x6e\x67\x65\x72")]); } }
