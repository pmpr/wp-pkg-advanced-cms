<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45eee7c0b2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Relation\Entity; use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateTemplate; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Foundation\Notice; use Pmpr\Package\AdvancedCMS\Relation\Manager\PostManager; use Pmpr\Package\AdvancedCMS\Relation\Setting; use WP_Post; use WP_Post_Type; class Post extends Entity { public function __construct() { $this->name = self::mswoacegomcucaik; $this->title = __("\103\165\163\x74\157\155\40\x50\157\163\164\x20\x54\x79\x70\145\40\x52\145\154\x61\164\151\x6f\x6e\x73", PR__PKG__ADVANCED_CMS); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x64\137\155\x65\x74\141\137\142\157\170\145\163", [$this, "\x73\x69\153\x71\x67\x67\167\155\x6d\x79\153\165\x69\x79\x6d\x79"]); parent::wigskegsqequoeks(); } public function eyamqkqiykagecsw() : ?string { return IconFontawesomeInterface::gscaisseeekokyea; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "\136{$iakkeikwceeomgyq}\57\x28\133\136\57\135\53\51\57{$muowmkwsoauukiag}\57{$aaokuekaimigoyue}\x2f"; $gqgemcmoicmgaqie = "\151\x6e\x64\x65\170\x2e\160\150\160\x3f\160\x6f\x73\x74\x5f\x74\x79\160\x65\75{$muowmkwsoauukiag}\x26{$yygmoeguaqyumuui->target}\x3d{$iakkeikwceeomgyq}\x26{$yygmoeguaqyumuui->metakey}\75{$gwiwsycaaqgwmewg}\x26{$yygmoeguaqyumuui->side}\75\x24\155\x61\x74\x63\x68\145\163\133\x31\x5d"; if (!$kiyaqqoyagguscog) { goto cuumeogeomowqisc; } ManipulateRewrite::wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2); cuumeogeomowqisc: $ucccueqywigcukcc .= "\77\x24"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\157\160"]; } public function sikqggwmmykuiymy($useksmwkuswkwcqg) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $useksmwkuswkwcqg); $mgkceomocowocqyo = $this->weysguygiseoukqw(self::osiogououyayqyck, "\156\157\x72\155\141\154"); if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi && ManipulatePost::uqwgsuysegkweago([$useksmwkuswkwcqg], "\145\x64\x69\164"))) { goto ocaguquugeamqckq; } $this->enqueue(); foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $mksyucucyswaukig = $this->mauewaeoemuusikw($kooyscwkscsogysg); if (!$mksyucucyswaukig) { goto csammceowmqwaamq; } ManipulateTemplate::sikqggwmmykuiymy([self::gouqcwikiiygyasc => "{$kooyscwkscsogysg}\x5f\x6d\x65\x74\x61\137\142\157\x78", "\143\x61\x6c\x6c\x62\141\x63\153" => [$this, "\171\163\171\x65\x69\151\171\161\x73\x65\x63\x6d\147\157\171\x75"], self::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), self::qescuiwgsyuikume => sprintf(__("\x52\x65\x6c\x61\164\151\157\x6e\40\x77\x69\x74\150\x20\x25\163", PR__PKG__ADVANCED_CMS), $mksyucucyswaukig->label), "\163\143\162\145\x65\156" => $useksmwkuswkwcqg, "\143\x6f\156\x74\x65\x78\164" => $mgkceomocowocqyo, "\141\x72\147\163" => [$gsgwomokyuwmqqkg, $kooyscwkscsogysg]]); csammceowmqwaamq: qmkaeeomgkwggoyo: } gcckqucukawcasgk: ocaguquugeamqckq: } public function ysyeiiyqsecmgoyu($post, $qookweymeqawmcwo, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { [$gsgwomokyuwmqqkg, $kooyscwkscsogysg] = self::gagauoqcuosakeiq($qookweymeqawmcwo); return parent::ysyeiiyqsecmgoyu($post, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, $koaqeegoeiaiccse); } public static function gagauoqcuosakeiq($qookweymeqawmcwo) { if (!(isset($qookweymeqawmcwo["\x61\x72\147\x73"]) && $qookweymeqawmcwo["\x61\x72\x67\x73"])) { goto eekcoeikaeaaeyii; } return $qookweymeqawmcwo["\141\x72\x67\x73"]; eekcoeikaeaaeyii: Notice::iswcokucwmiosiaq(__("\123\157\x6d\x65\164\150\151\156\x67\40\151\x73\x20\167\162\x6f\x6e\147\x20\x69\156\40\162\x65\154\x61\164\x69\x6f\156\40\x66\x69\145\x6c\144\x20\162\145\x6e\144\145\x72\151\156\147", PR__PKG__ADVANCED_CMS), "\x72\145\x6c\141\164\151\x6f\x6e"); return null; } public function mauewaeoemuusikw($muowmkwsoauukiag) : ?WP_Post_Type { return ManipulatePost::waaisqccqacqeium($muowmkwsoauukiag); } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if (!$mcaisukqqyosuasi instanceof WP_Post) { goto cogywoqcqummsyus; } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); cogywoqcqummsyus: return $oammesyieqmwuwyi; } public function goqmcwikekcgyokg() : array { $post = ManipulatePost::get(); $oammesyieqmwuwyi = []; if (!$post instanceof WP_Post) { goto gmwykkouysyaqwqm; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $post->post_type); gmwykkouysyaqwqm: return $oammesyieqmwuwyi; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { if ($ymqmyyeuycgmigyo instanceof WP_Post || is_numeric($ymqmyyeuycgmigyo)) { goto ugqwuugsweqgmywk; } $mcaisukqqyosuasi = ManipulatePage::ssacaeeassumyuws($ymqmyyeuycgmigyo, self::ckmqoekmugkggeym, $sqeykgyoooqysmca); goto uaukmuiwskcemcsw; ugqwuugsweqgmywk: $mcaisukqqyosuasi = ManipulatePost::get($ymqmyyeuycgmigyo); uaukmuiwskcemcsw: return $mcaisukqqyosuasi; } public function muekkssosomcakme($mcaisukqqyosuasi, $ayegqaqygsqsmews) : array { $mguygkocuoaoqqkg = []; $gwiwsycaaqgwmewg = ManipulateArray::get($ayegqaqygsqsmews, self::moegqsqomeumiomk); if (!$gwiwsycaaqgwmewg) { goto sockeswygwcskeuq; } $mguygkocuoaoqqkg = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ayegqaqygsqsmews->{self::gygsikewooaciecc}, $gwiwsycaaqgwmewg); sockeswygwcskeuq: return $mguygkocuoaoqqkg; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { $gqgemcmoicmgaqie->set(self::eqomgewoayseioos, $oammesyieqmwuwyi); $gqgemcmoicmgaqie->set(self::gqiasegggowomgie, self::eqomgewoayseioos); return $gqgemcmoicmgaqie; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy() : array { $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => self::eoaiagsgqsmskugs]); return [self::wcwmusaouiqaqeww($this->aakmagwggmkoiiyu() . self::kouiwaoasqgwksas, __("\x45\156\x61\x62\x6c\x65", PR__PKG__ADVANCED_CMS)), self::yyuwuqsiucweeoue(self::osiogououyayqyck, __("\115\145\164\141\102\x6f\x78\x20\120\157\x73\151\164\x69\x6f\x6e", PR__PKG__ADVANCED_CMS), ["\163\151\144\x65" => __("\x53\151\144\145\142\141\x72", PR__PKG__ADVANCED_CMS), "\141\x64\x76\141\x6e\x63\145\x64" => __("\102\x6f\164\164\157\155", PR__PKG__ADVANCED_CMS)], __("\x50\x6f\x73\151\164\x69\157\x6e\40\x6f\146\40\155\x65\x74\x61\x62\x6f\x78\x20\x69\156\x20\x65\144\x69\164\x20\x73\x63\x72\145\145\x6e\40\x6f\146\40\143\x75\x73\164\157\x6d\40\x70\157\x73\164\x20\164\171\x70\x65\x73\56", PR__PKG__ADVANCED_CMS))->awagieqcmmwkgwgs(true), self::iseogkiymousogom(self::uwoqgmuqskqcqsag(), __("\x49\164\145\x6d\x73", PR__PKG__ADVANCED_CMS), [self::wcwmusaouiqaqeww(self::iccwcygaeqmomooo, __("\x45\x6e\141\142\x6c\145", PR__PKG__ADVANCED_CMS))->iyouqgqicyqkiswi(6)->mkmssscwmeekwgqo(), self::wcwmusaouiqaqeww(self::iycuamekoueuemoy, __("\x49\156\166\x65\x72\163\145\40\123\151\144\x65", PR__PKG__ADVANCED_CMS))->iyouqgqicyqkiswi(6), self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\111\x6d\x61\x67\x65", PR__PKG__ADVANCED_CMS))->wyqeckayigciacse("\x73\x6d\x61\154\x6c"), self::ymuegqgyuagyucws(self::NAME, __("\101\144\155\x69\x6e\x20\120\x61\x6e\145\154\x20\x4e\x61\155\x65", PR__PKG__ADVANCED_CMS)), self::ckuwucygcwsiawms(self::igecewwoemccgwsq, __("\x4f\162\151\x67\151\156", PR__PKG__ADVANCED_CMS), $sciomagaqmgggsiu)->eumecwmqmukqgyea(), self::ckuwucygcwsiawms(self::gygsikewooaciecc, __("\104\145\x73\164\151\x6e\x61\164\151\x6f\156", PR__PKG__ADVANCED_CMS), $sciomagaqmgggsiu)->eumecwmqmukqgyea(), self::ymuegqgyuagyucws(self::qgwwgcuuykqagamk, __("\x4f\x72\x69\x67\x69\156\x20\124\151\164\154\x65", PR__PKG__ADVANCED_CMS), sprintf("\74\163\164\x72\157\156\x67\76\x25\163\x3a\x3c\x2f\163\x74\x72\x6f\x6e\x67\x3e\x20\45\x73", __("\x4e\157\x74\x69\x63\x65", PR__PKG__ADVANCED_CMS), __("\x57\151\x6c\154\40\x62\145\40\x75\163\x65\144\x20\141\x73\40\x73\154\x75\147\40\164\x6f\x6f\x2e", PR__PKG__ADVANCED_CMS))), self::ymuegqgyuagyucws(self::uyqakoogaigomqmq, __("\x44\145\163\164\x69\156\x61\x74\x69\x6f\156\40\x54\x69\x74\x6c\145", PR__PKG__ADVANCED_CMS)), self::cwiuiiakukcsaakw(self::ascagqcquwgmygkm)])->usosgsaaimqcysyk()]; } }
