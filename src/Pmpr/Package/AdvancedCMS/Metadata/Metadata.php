<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621d1dfd9bb60             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Metadata; use Pmpr\Common\Foundation\Data\Metadata as Data; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use WP_Taxonomy; class Metadata extends Common { const iwascisiiokuackw = "\141\165\164\150\x6f\x72"; const UPDATE = "\165\x70\x64\x61\x74\145"; const wmmucsiyiyusmssm = "\160\165\142\x6c\x69\163\150"; const goumieeyyqigueiw = "\x63\157\x6d\155\145\156\x74\x73"; const uceokykiyceaouke = "\163\164\x75\x64\x79\x5f\x74\x69\155\145"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\155\x65\x74\x61\144\141\x74\x61\x5f\x72\145\156\144\145\x72"), [$this, "\x72\145\156\144\x65\162"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\145\x74\x61\x64\x61\164\141\x5f\x67\145\164\x5f\151\164\x65\x6d\x73"), [$this, "\167\x61\163\147\x77\x73\x6f\x67\155\x75\x71\x75\161\145\141\x61"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\x65\x74\141\144\x61\x74\141\x5f\x67\145\164\137\151\164\145\x6d\163\x5f\x63\x6f\165\x6e\x74"), [$this, "\x79\x67\155\143\x73\155\x65\147\143\171\x73\x79\x65\x6f\163\x73"], 10, 2); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { Widget::symcgieuakksimmu(); } public function render($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ackcaikowcokggsc => [], self::uwceyikaaaqgkkee => "\x69\164\x65\x6d\163"]); if (isset($ywmkwiwkosakssii[self::qwumqqyuasyskkkc])) { goto gqimwsyemoewagcy; } $ywmkwiwkosakssii[self::qwumqqyuasyskkkc] = $this->wasgwsogmuquqeaa([], $ywmkwiwkosakssii); gqimwsyemoewagcy: echo $this->iuygowkemiiwqmiw($ywmkwiwkosakssii[self::uwceyikaaaqgkkee], $ywmkwiwkosakssii); } public function sksykqasgyyyqkie() : array { $oammesyieqmwuwyi = [self::UPDATE => __("\x55\x70\x64\141\x74\x65\x64\x20\101\164", PR__PKG__ADVANCED_CMS), self::iwascisiiokuackw => __("\101\165\x74\150\157\x72", PR__PKG__ADVANCED_CMS), self::wmmucsiyiyusmssm => __("\103\162\x65\141\164\x65\x64\40\101\164", PR__PKG__ADVANCED_CMS), self::goumieeyyqigueiw => __("\103\157\x6d\155\x65\156\164\163", PR__PKG__ADVANCED_CMS), self::uceokykiyceaouke => __("\123\x74\x75\144\x79\x20\x74\x69\x6d\x65", PR__PKG__ADVANCED_CMS)]; $oammesyieqmwuwyi = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\155\x65\x74\x61\144\x61\x74\141\x5f\x67\145\164\x5f\x61\x6c\154\137\x69\164\x65\x6d\163"), $oammesyieqmwuwyi); $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto maaisuqwkymeguys; } $oammesyieqmwuwyi[$kesssewsiegssiya->name] = $kesssewsiegssiya->labels->singular_name; maaisuqwkymeguys: esagiiawomyacuiw: } aoaqwygkaagiuuws: return $oammesyieqmwuwyi; } public function ygmcsmegcysyeoss($gaeqamemwmwsyukm = 0, $ywmkwiwkosakssii = []) { return $gaeqamemwmwsyukm; } public function wasgwsogmuquqeaa($oammesyieqmwuwyi = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x66\x6f\162\155\141\164" => ManipulateSetting::uyomwmskouyyqyyq(), self::mswoacegomcucaik => '', self::cgiswgcumueqgcmw => 0, self::ackcaikowcokggsc => []]); $post = ManipulatePost::get(ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik)); $uuyoeicyoayimaoa = ManipulateArray::get($ywmkwiwkosakssii, self::cgiswgcumueqgcmw, 0); $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::ackcaikowcokggsc, []); if (!($uuyoeicyoayimaoa > 0 && $uuyoeicyoayimaoa < count($ooiewiwkegguusum))) { goto qkyciyiwkmgkmquk; } $ooiewiwkegguusum = array_slice($ooiewiwkegguusum, 0, $uuyoeicyoayimaoa); qkyciyiwkmgkmquk: $saqmwwmqiwmkiwaa = ManipulateArray::get($ywmkwiwkosakssii, "\146\x6f\162\x6d\141\164"); if (!($post && is_array($ooiewiwkegguusum) && $ooiewiwkegguusum)) { goto quamuugoocyyceec; } $wsqgggkqsaokoegu = ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $post, false); $eqomywkesmwsiaik = $this->sksykqasgyyyqkie(); foreach ($ooiewiwkegguusum as $momcykaoccoymeig => $igqsaukqcqscimok) { $eqgoocgaqwqcimie = ''; $ugugimquukqwogge = new Data(); $ugugimquukqwogge->usuqmwksoeaayaig($igqsaukqcqscimok)->jyumyyugiwwiqomk(($momcykaoccoymeig + 1) * 5)->gswweykyogmsyawy(ManipulateArray::get($eqomywkesmwsiaik, $igqsaukqcqscimok)); $iakkeikwceeomgyq = null; switch ($igqsaukqcqscimok) { case self::UPDATE: $suckquwcuiuyiogc = ManipulatePost::oukqamgqowciwoum($saqmwwmqiwmkiwaa, $post, false); if (!$suckquwcuiuyiogc) { goto oeusomaaeekakake; } if ($suckquwcuiuyiogc < $wsqgggkqsaokoegu) { goto aeiemwacaiygemmg; } $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($this->eciukqcoqmyacwow($suckquwcuiuyiogc), $suckquwcuiuyiogc); goto yyqygaokeccgugos; aeiemwacaiygemmg: $eqgoocgaqwqcimie = ManipulateHTML::gmqyuaqwgiayskei("\x2d"); yyqygaokeccgugos: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::yqqwkcykyeagkakg); oeusomaaeekakake: goto iuwkiyimqmgguose; case self::iwascisiiokuackw: $iakkeikwceeomgyq = ManipulatePost::mguqscccckuywsya($post); $eqgoocgaqwqcimie = ManipulatePost::ekauksssqmmykouq($post); $ugugimquukqwogge->qoowicksguscqyks(ManipulatePost::qkweigiqsaaigqau($post))->saemoowcasogykak(IconFontawesomeInterface::ueqwmuwomeukquwy); goto iuwkiyimqmgguose; case self::wmmucsiyiyusmssm: if (!$wsqgggkqsaokoegu) { goto kwuckkyqaygwgcuy; } $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($this->eciukqcoqmyacwow($wsqgggkqsaokoegu), $wsqgggkqsaokoegu); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::wcswouquyoywwagi); kwuckkyqaygwgcuy: goto iuwkiyimqmgguose; case self::goumieeyyqigueiw: $eqgoocgaqwqcimie = sprintf(__("\45\x73\x20\143\x6f\x6d\155\x65\156\x74\163", PR__PKG__ADVANCED_CMS), DecoratorPost::qmegicmsiwuuwysa($post)); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::kumgmciqwoukimgc)->qoowicksguscqyks(ManipulatePost::ycqquoiyyuesegsy($post) . "\x23\x63\157\x6d\155\145\156\x74\163\137\x63\x6f\x6e\164\141\151\x6e\x65\x72"); goto iuwkiyimqmgguose; case self::uceokykiyceaouke: $moowucgmewesiwsu = ManipulatePost::cuoieqacocyyookg($post); if (!$moowucgmewesiwsu) { goto giuccakymqymawgk; } $eqgoocgaqwqcimie = sprintf(__("\45\x73\40\155\x69\156\165\164\145\40\162\145\141\144\151\156\x67", PR__PKG__ADVANCED_CMS), $this->msywmyaoqmaegsuy($moowucgmewesiwsu)); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::amsucmiagiecieac); giuccakymqymawgk: goto iuwkiyimqmgguose; default: if (!DecoratorTaxonomy::myagqecycsaiyqsk($igqsaukqcqscimok)) { goto omuauimgkygcecsc; } $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($igqsaukqcqscimok); if (!$kesssewsiegssiya) { goto oasggeyceiyieuuo; } $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; $qyucoagsiyeieyiu = ManipulateArray::get($kesssewsiegssiya, "\x73\151\x6e\x67\x6c\145\137\166\x61\154\165\x65"); if ($qyucoagsiyeieyiu) { goto kyiuewcikkqagwwg; } $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $igqsaukqcqscimok); if (!$uyuaosigqymaqsaa) { goto gcucsowqoeiwmyyq; } if (count($uyuaosigqymaqsaa) == 1) { goto ikcwmsgocyuqiumc; } foreach ($uyuaosigqymaqsaa as $ciyackuwsqkoqese => $iwewcwusemqaiggk) { $uyuaosigqymaqsaa[$ciyackuwsqkoqese] = [self::qescuiwgsyuikume => ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), self::ogigqueukwysusii => $cekoogweeooasayu ? ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk) : false]; cyosacayacumuaks: } sicgyiyiocyygkoc: $eqgoocgaqwqcimie = $this->iuygowkemiiwqmiw("\164\141\x78\x6f\x6e\x6f\155\151\x65\x73", [self::qwumqqyuasyskkkc => $uyuaosigqymaqsaa]); goto eqiiaokcgakicaye; ikcwmsgocyuqiumc: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); eqiiaokcgakicaye: gcucsowqoeiwmyyq: goto aumowowgewgqmwci; kyiuewcikkqagwwg: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); aumowowgewgqmwci: oasggeyceiyieuuo: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::usaocmsseuquaqsu); omuauimgkygcecsc: goto iuwkiyimqmgguose; } yggseoaommssscwo: iuwkiyimqmgguose: $ugugimquukqwogge->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kmaeqisgkicagake($iakkeikwceeomgyq); $ugugimquukqwogge = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\x65\164\x61\144\141\164\x61\137\165\160\x64\141\x74\x65\x5f{$igqsaukqcqscimok}"), $ugugimquukqwogge, $post, $igqsaukqcqscimok); if (!$ugugimquukqwogge->qooeaookuemoqecm()) { goto wwcqoeuwskquakwy; } $oammesyieqmwuwyi[$igqsaukqcqscimok] = $ugugimquukqwogge; wwcqoeuwskquakwy: ayceeyuocgowqwsa: } sksgcusuyqcwqswe: quamuugoocyyceec: return $oammesyieqmwuwyi; } public function uayquiakegwyiocs(&$eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu) { $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa($post, ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya)); if (!$iwewcwusemqaiggk) { goto iymaiwqimisgacmk; } $eqgoocgaqwqcimie = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk); if (!$cekoogweeooasayu) { goto qcssigmcayuyweiy; } $ugugimquukqwogge->qoowicksguscqyks(ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya)); qcssigmcayuyweiy: iymaiwqimisgacmk: return $ugugimquukqwogge; } }
