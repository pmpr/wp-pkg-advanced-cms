<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621d1dfd9bb60             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Relation\Entity; use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateTemplate; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Foundation\Notice; use Pmpr\Package\AdvancedCMS\Relation\Manager\PostManager; use Pmpr\Package\AdvancedCMS\Relation\Setting; use WP_Post; use WP_Post_Type; class Post extends Entity { public function __construct() { $this->name = self::mswoacegomcucaik; $this->title = __("\x43\x75\163\164\x6f\x6d\x20\120\x6f\x73\164\x20\x54\171\x70\x65\40\122\145\154\x61\164\151\x6f\x6e\x73", PR__PKG__ADVANCED_CMS); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\x64\x5f\x6d\145\x74\141\137\x62\157\170\x65\x73", [$this, "\163\x69\153\161\147\147\167\x6d\x6d\x79\x6b\x75\151\x79\155\x79"]); parent::wigskegsqequoeks(); } public function eyamqkqiykagecsw() : ?string { return IconFontawesomeInterface::gscaisseeekokyea; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "\136{$iakkeikwceeomgyq}\x2f\50\x5b\136\x2f\135\x2b\51\x2f{$muowmkwsoauukiag}\x2f{$aaokuekaimigoyue}\57"; $gqgemcmoicmgaqie = "\151\x6e\x64\145\170\56\x70\x68\160\77\160\157\x73\x74\x5f\164\171\160\145\x3d{$muowmkwsoauukiag}\46{$yygmoeguaqyumuui->target}\75{$iakkeikwceeomgyq}\46{$yygmoeguaqyumuui->metakey}\x3d{$gwiwsycaaqgwmewg}\x26{$yygmoeguaqyumuui->side}\75\44\155\141\x74\143\x68\145\163\x5b\x31\x5d"; if (!$kiyaqqoyagguscog) { goto mqimkwickkgqqeoi; } ManipulateRewrite::wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2); mqimkwickkgqqeoi: $ucccueqywigcukcc .= "\77\x24"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\157\160"]; } public function sikqggwmmykuiymy($useksmwkuswkwcqg) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $useksmwkuswkwcqg); $mgkceomocowocqyo = $this->weysguygiseoukqw(self::osiogououyayqyck, "\156\x6f\x72\x6d\x61\154"); if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi && ManipulatePost::uqwgsuysegkweago([$useksmwkuswkwcqg], "\145\x64\151\164"))) { goto ceiuqsiqgiuiekem; } $this->enqueue(); foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $mksyucucyswaukig = $this->mauewaeoemuusikw($kooyscwkscsogysg); if (!$mksyucucyswaukig) { goto mceucsaeouuwyumm; } ManipulateTemplate::sikqggwmmykuiymy([self::gouqcwikiiygyasc => "{$kooyscwkscsogysg}\137\155\145\x74\x61\x5f\x62\x6f\x78", "\143\141\x6c\154\142\141\143\153" => [$this, "\171\163\x79\145\151\x69\171\x71\163\145\x63\x6d\x67\x6f\x79\x75"], self::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), self::qescuiwgsyuikume => sprintf(__("\122\x65\154\141\x74\x69\157\x6e\x20\x77\151\164\150\x20\45\x73", PR__PKG__ADVANCED_CMS), $mksyucucyswaukig->label), "\163\x63\x72\145\145\156" => $useksmwkuswkwcqg, "\143\x6f\x6e\164\145\170\x74" => $mgkceomocowocqyo, "\141\162\x67\163" => [$gsgwomokyuwmqqkg, $kooyscwkscsogysg]]); mceucsaeouuwyumm: gkqiqaqecmoogmaa: } kwyimqumkuuyaiku: ceiuqsiqgiuiekem: } public function ysyeiiyqsecmgoyu($post, $qookweymeqawmcwo, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { [$gsgwomokyuwmqqkg, $kooyscwkscsogysg] = self::gagauoqcuosakeiq($qookweymeqawmcwo); return parent::ysyeiiyqsecmgoyu($post, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, $koaqeegoeiaiccse); } public static function gagauoqcuosakeiq($qookweymeqawmcwo) { if (!(isset($qookweymeqawmcwo["\141\x72\x67\163"]) && $qookweymeqawmcwo["\141\162\x67\x73"])) { goto gsymkkskwsgggoic; } return $qookweymeqawmcwo["\x61\x72\x67\x73"]; gsymkkskwsgggoic: Notice::iswcokucwmiosiaq(__("\123\157\x6d\145\164\x68\x69\156\x67\x20\151\163\40\167\162\x6f\x6e\147\x20\x69\x6e\40\x72\145\154\x61\164\151\157\156\x20\146\x69\145\154\144\x20\162\145\156\x64\x65\162\x69\156\x67", PR__PKG__ADVANCED_CMS), "\x72\x65\154\x61\164\151\157\x6e"); return null; } public function mauewaeoemuusikw($muowmkwsoauukiag) : ?WP_Post_Type { return ManipulatePost::waaisqccqacqeium($muowmkwsoauukiag); } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if (!$mcaisukqqyosuasi instanceof WP_Post) { goto ugykmcouiwiscoqu; } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); ugykmcouiwiscoqu: return $oammesyieqmwuwyi; } public function goqmcwikekcgyokg() : array { $post = ManipulatePost::get(); $oammesyieqmwuwyi = []; if (!$post instanceof WP_Post) { goto isewysikysqewkis; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $post->post_type); isewysikysqewkis: return $oammesyieqmwuwyi; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { if ($ymqmyyeuycgmigyo instanceof WP_Post || is_numeric($ymqmyyeuycgmigyo)) { goto wiwoiyoakywqyaiy; } $mcaisukqqyosuasi = ManipulatePage::ssacaeeassumyuws($ymqmyyeuycgmigyo, self::ckmqoekmugkggeym, $sqeykgyoooqysmca); goto igmmqwyawcuuckkq; wiwoiyoakywqyaiy: $mcaisukqqyosuasi = ManipulatePost::get($ymqmyyeuycgmigyo); igmmqwyawcuuckkq: return $mcaisukqqyosuasi; } public function muekkssosomcakme($mcaisukqqyosuasi, $ayegqaqygsqsmews) : array { $mguygkocuoaoqqkg = []; $gwiwsycaaqgwmewg = ManipulateArray::get($ayegqaqygsqsmews, self::moegqsqomeumiomk); if (!$gwiwsycaaqgwmewg) { goto eouwacqiommmeaqc; } $mguygkocuoaoqqkg = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ayegqaqygsqsmews->{self::gygsikewooaciecc}, $gwiwsycaaqgwmewg); eouwacqiommmeaqc: return $mguygkocuoaoqqkg; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { $gqgemcmoicmgaqie->set(self::eqomgewoayseioos, $oammesyieqmwuwyi); $gqgemcmoicmgaqie->set(self::gqiasegggowomgie, self::eqomgewoayseioos); return $gqgemcmoicmgaqie; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy() : array { $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => self::eoaiagsgqsmskugs]); return [self::wcwmusaouiqaqeww($this->aakmagwggmkoiiyu() . self::kouiwaoasqgwksas, __("\x45\156\x61\x62\x6c\x65", PR__PKG__ADVANCED_CMS)), self::yyuwuqsiucweeoue(self::osiogououyayqyck, __("\x4d\145\164\141\x42\x6f\170\40\120\x6f\x73\151\x74\x69\x6f\x6e", PR__PKG__ADVANCED_CMS), ["\x73\x69\x64\145" => __("\123\x69\x64\145\x62\x61\162", PR__PKG__ADVANCED_CMS), "\141\144\166\141\x6e\143\145\x64" => __("\x42\x6f\164\164\x6f\x6d", PR__PKG__ADVANCED_CMS)], __("\120\x6f\x73\x69\164\151\157\x6e\x20\x6f\x66\x20\x6d\145\x74\141\x62\157\170\40\x69\156\40\145\x64\x69\x74\x20\163\x63\x72\x65\x65\156\x20\x6f\x66\40\143\x75\x73\x74\x6f\155\40\x70\x6f\163\x74\40\x74\x79\160\145\163\x2e", PR__PKG__ADVANCED_CMS))->awagieqcmmwkgwgs(true), self::iseogkiymousogom(self::uwoqgmuqskqcqsag(), __("\111\164\x65\x6d\x73", PR__PKG__ADVANCED_CMS), [self::wcwmusaouiqaqeww(self::iccwcygaeqmomooo, __("\x45\x6e\x61\142\x6c\x65", PR__PKG__ADVANCED_CMS))->iyouqgqicyqkiswi(6)->mkmssscwmeekwgqo(), self::wcwmusaouiqaqeww(self::iycuamekoueuemoy, __("\111\156\166\145\162\163\x65\x20\x53\151\144\x65", PR__PKG__ADVANCED_CMS))->iyouqgqicyqkiswi(6), self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\111\155\x61\147\145", PR__PKG__ADVANCED_CMS))->wyqeckayigciacse("\163\x6d\141\154\x6c"), self::ymuegqgyuagyucws(self::NAME, __("\101\x64\x6d\151\156\40\120\141\156\x65\x6c\40\116\x61\155\x65", PR__PKG__ADVANCED_CMS)), self::ckuwucygcwsiawms(self::igecewwoemccgwsq, __("\117\x72\151\x67\151\x6e", PR__PKG__ADVANCED_CMS), $sciomagaqmgggsiu)->eumecwmqmukqgyea(), self::ckuwucygcwsiawms(self::gygsikewooaciecc, __("\x44\145\163\164\151\x6e\x61\x74\x69\157\x6e", PR__PKG__ADVANCED_CMS), $sciomagaqmgggsiu)->eumecwmqmukqgyea(), self::ymuegqgyuagyucws(self::qgwwgcuuykqagamk, __("\x4f\x72\151\x67\x69\156\x20\x54\151\164\x6c\145", PR__PKG__ADVANCED_CMS), sprintf("\x3c\x73\x74\162\x6f\x6e\x67\x3e\x25\163\72\x3c\57\163\164\x72\157\x6e\x67\76\x20\x25\163", __("\x4e\157\x74\x69\143\145", PR__PKG__ADVANCED_CMS), __("\x57\x69\154\x6c\40\142\x65\40\x75\x73\145\144\x20\x61\163\x20\x73\x6c\x75\x67\x20\164\x6f\157\x2e", PR__PKG__ADVANCED_CMS))), self::ymuegqgyuagyucws(self::uyqakoogaigomqmq, __("\104\x65\x73\x74\x69\156\141\164\151\x6f\x6e\40\124\151\x74\154\x65", PR__PKG__ADVANCED_CMS)), self::cwiuiiakukcsaakw(self::ascagqcquwgmygkm)])->usosgsaaimqcysyk()]; } }
