<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             622ee2abb3faf             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Metadata; use Pmpr\Common\Foundation\Data\Metadata as Data; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use WP_Taxonomy; class Metadata extends Common { const iwascisiiokuackw = "\x61\165\x74\x68\157\x72"; const UPDATE = "\x75\160\144\141\x74\145"; const wmmucsiyiyusmssm = "\x70\165\x62\154\151\163\x68"; const goumieeyyqigueiw = "\x63\157\x6d\155\145\156\x74\163"; const uceokykiyceaouke = "\x73\x74\x75\x64\171\x5f\164\x69\155\145"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\155\145\x74\141\x64\x61\x74\x61\x5f\162\145\156\x64\145\162"), [$this, "\x72\145\x6e\x64\x65\162"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6d\x65\164\x61\144\x61\164\141\137\147\x65\x74\x5f\151\x74\145\155\x73"), [$this, "\x77\x61\x73\147\167\x73\x6f\x67\155\165\161\x75\x71\x65\x61\141"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\x65\164\x61\x64\141\164\141\x5f\147\145\x74\x5f\x69\164\145\x6d\x73\x5f\143\157\165\156\x74"), [$this, "\171\147\x6d\143\163\x6d\145\147\143\x79\163\x79\145\157\x73\163"], 10, 2); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { Widget::symcgieuakksimmu(); } public function render($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ackcaikowcokggsc => [], self::uwceyikaaaqgkkee => "\151\164\x65\x6d\x73"]); if (isset($ywmkwiwkosakssii[self::qwumqqyuasyskkkc])) { goto owgsameoayaogsma; } $ywmkwiwkosakssii[self::qwumqqyuasyskkkc] = $this->wasgwsogmuquqeaa([], $ywmkwiwkosakssii); owgsameoayaogsma: echo $this->iuygowkemiiwqmiw($ywmkwiwkosakssii[self::uwceyikaaaqgkkee], $ywmkwiwkosakssii); } public function sksykqasgyyyqkie() : array { $oammesyieqmwuwyi = [self::UPDATE => __("\125\x70\x64\x61\164\145\144\x20\101\x74", PR__PKG__ADVANCED_CMS), self::iwascisiiokuackw => __("\x41\x75\x74\x68\157\x72", PR__PKG__ADVANCED_CMS), self::wmmucsiyiyusmssm => __("\103\x72\x65\x61\164\x65\x64\x20\101\164", PR__PKG__ADVANCED_CMS), self::goumieeyyqigueiw => __("\x43\157\155\155\x65\156\x74\163", PR__PKG__ADVANCED_CMS), self::uceokykiyceaouke => __("\123\x74\x75\x64\x79\x20\164\x69\155\x65", PR__PKG__ADVANCED_CMS)]; $oammesyieqmwuwyi = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\145\164\141\x64\141\164\141\137\x67\x65\x74\137\141\154\x6c\137\151\164\x65\x6d\x73"), $oammesyieqmwuwyi); $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto gqimwsyemoewagcy; } $oammesyieqmwuwyi[$kesssewsiegssiya->name] = $kesssewsiegssiya->labels->singular_name; gqimwsyemoewagcy: awgmegueeqeyqamu: } kyiwsiakwgiwouyi: return $oammesyieqmwuwyi; } public function ygmcsmegcysyeoss($gaeqamemwmwsyukm = 0, $ywmkwiwkosakssii = []) { return $gaeqamemwmwsyukm; } public function wasgwsogmuquqeaa($oammesyieqmwuwyi = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\146\x6f\x72\155\x61\x74" => ManipulateSetting::uyomwmskouyyqyyq(), self::mswoacegomcucaik => '', self::cgiswgcumueqgcmw => 0, self::ackcaikowcokggsc => []]); $post = ManipulatePost::get(ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik)); $uuyoeicyoayimaoa = ManipulateArray::get($ywmkwiwkosakssii, self::cgiswgcumueqgcmw, 0); $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::ackcaikowcokggsc, []); if (!($uuyoeicyoayimaoa > 0 && $uuyoeicyoayimaoa < count($ooiewiwkegguusum))) { goto aoaqwygkaagiuuws; } $ooiewiwkegguusum = array_slice($ooiewiwkegguusum, 0, $uuyoeicyoayimaoa); aoaqwygkaagiuuws: $saqmwwmqiwmkiwaa = ManipulateArray::get($ywmkwiwkosakssii, "\146\x6f\x72\155\141\164"); if (!($post && is_array($ooiewiwkegguusum) && $ooiewiwkegguusum)) { goto oasggeyceiyieuuo; } $wsqgggkqsaokoegu = ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $post, false); $eqomywkesmwsiaik = $this->sksykqasgyyyqkie(); foreach ($ooiewiwkegguusum as $momcykaoccoymeig => $igqsaukqcqscimok) { $eqgoocgaqwqcimie = ''; $ugugimquukqwogge = new Data(); $ugugimquukqwogge->usuqmwksoeaayaig($igqsaukqcqscimok)->jyumyyugiwwiqomk(($momcykaoccoymeig + 1) * 5)->gswweykyogmsyawy(ManipulateArray::get($eqomywkesmwsiaik, $igqsaukqcqscimok)); $iakkeikwceeomgyq = null; switch ($igqsaukqcqscimok) { case self::UPDATE: $suckquwcuiuyiogc = ManipulatePost::oukqamgqowciwoum($saqmwwmqiwmkiwaa, $post, false); if (!$suckquwcuiuyiogc) { goto yggseoaommssscwo; } if ($suckquwcuiuyiogc < $wsqgggkqsaokoegu) { goto ayceeyuocgowqwsa; } $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($this->eciukqcoqmyacwow($suckquwcuiuyiogc), $suckquwcuiuyiogc); goto iuwkiyimqmgguose; ayceeyuocgowqwsa: $eqgoocgaqwqcimie = ManipulateHTML::gmqyuaqwgiayskei("\55"); iuwkiyimqmgguose: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::yqqwkcykyeagkakg); yggseoaommssscwo: goto qkyciyiwkmgkmquk; case self::iwascisiiokuackw: $iakkeikwceeomgyq = ManipulatePost::mguqscccckuywsya($post); $eqgoocgaqwqcimie = ManipulatePost::ekauksssqmmykouq($post); $ugugimquukqwogge->qoowicksguscqyks(ManipulatePost::qkweigiqsaaigqau($post))->saemoowcasogykak(IconFontawesomeInterface::ueqwmuwomeukquwy); goto qkyciyiwkmgkmquk; case self::wmmucsiyiyusmssm: if (!$wsqgggkqsaokoegu) { goto aeiemwacaiygemmg; } $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($this->eciukqcoqmyacwow($wsqgggkqsaokoegu), $wsqgggkqsaokoegu); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::wcswouquyoywwagi); aeiemwacaiygemmg: goto qkyciyiwkmgkmquk; case self::goumieeyyqigueiw: $eqgoocgaqwqcimie = sprintf(__("\x25\163\x20\x63\157\x6d\x6d\145\156\164\x73", PR__PKG__ADVANCED_CMS), DecoratorPost::qmegicmsiwuuwysa($post)); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::kumgmciqwoukimgc)->qoowicksguscqyks(ManipulatePost::ycqquoiyyuesegsy($post) . "\43\143\x6f\x6d\x6d\145\x6e\x74\x73\137\143\157\156\x74\x61\151\156\145\x72"); goto qkyciyiwkmgkmquk; case self::uceokykiyceaouke: $moowucgmewesiwsu = ManipulatePost::cuoieqacocyyookg($post); if (!$moowucgmewesiwsu) { goto yyqygaokeccgugos; } $eqgoocgaqwqcimie = sprintf(__("\45\x73\x20\x6d\151\x6e\165\x74\x65\x20\162\145\141\x64\151\156\147", PR__PKG__ADVANCED_CMS), $this->msywmyaoqmaegsuy($moowucgmewesiwsu)); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::amsucmiagiecieac); yyqygaokeccgugos: goto qkyciyiwkmgkmquk; default: if (!DecoratorTaxonomy::myagqecycsaiyqsk($igqsaukqcqscimok)) { goto kyiuewcikkqagwwg; } $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($igqsaukqcqscimok); if (!$kesssewsiegssiya) { goto gcucsowqoeiwmyyq; } $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; $qyucoagsiyeieyiu = ManipulateArray::get($kesssewsiegssiya, "\163\151\x6e\x67\x6c\x65\137\166\x61\154\x75\x65"); if ($qyucoagsiyeieyiu) { goto ikcwmsgocyuqiumc; } $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $igqsaukqcqscimok); if (!$uyuaosigqymaqsaa) { goto cyosacayacumuaks; } if (count($uyuaosigqymaqsaa) == 1) { goto giuccakymqymawgk; } foreach ($uyuaosigqymaqsaa as $ciyackuwsqkoqese => $iwewcwusemqaiggk) { $uyuaosigqymaqsaa[$ciyackuwsqkoqese] = [self::qescuiwgsyuikume => ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), self::ogigqueukwysusii => $cekoogweeooasayu ? ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk) : false]; kwuckkyqaygwgcuy: } oeusomaaeekakake: $eqgoocgaqwqcimie = $this->iuygowkemiiwqmiw("\164\x61\x78\157\x6e\x6f\x6d\151\x65\x73", [self::qwumqqyuasyskkkc => $uyuaosigqymaqsaa]); goto sicgyiyiocyygkoc; giuccakymqymawgk: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); sicgyiyiocyygkoc: cyosacayacumuaks: goto eqiiaokcgakicaye; ikcwmsgocyuqiumc: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); eqiiaokcgakicaye: gcucsowqoeiwmyyq: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::usaocmsseuquaqsu); kyiuewcikkqagwwg: goto qkyciyiwkmgkmquk; } sksgcusuyqcwqswe: qkyciyiwkmgkmquk: $ugugimquukqwogge->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kmaeqisgkicagake($iakkeikwceeomgyq); $ugugimquukqwogge = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\155\145\164\x61\144\x61\x74\x61\137\165\x70\x64\141\x74\145\137{$igqsaukqcqscimok}"), $ugugimquukqwogge, $post, $igqsaukqcqscimok); if (!$ugugimquukqwogge->qooeaookuemoqecm()) { goto aumowowgewgqmwci; } $oammesyieqmwuwyi[$igqsaukqcqscimok] = $ugugimquukqwogge; aumowowgewgqmwci: maaisuqwkymeguys: } esagiiawomyacuiw: oasggeyceiyieuuo: return $oammesyieqmwuwyi; } public function uayquiakegwyiocs(&$eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu) { $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa($post, ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya)); if (!$iwewcwusemqaiggk) { goto wwcqoeuwskquakwy; } $eqgoocgaqwqcimie = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk); if (!$cekoogweeooasayu) { goto omuauimgkygcecsc; } $ugugimquukqwogge->qoowicksguscqyks(ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya)); omuauimgkygcecsc: wwcqoeuwskquakwy: return $ugugimquukqwogge; } }
