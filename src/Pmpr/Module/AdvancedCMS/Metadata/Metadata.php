<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6320d863ebe26             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Metadata; use Pmpr\Common\Foundation\Data\Metadata as Data; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use WP_Taxonomy; class Metadata extends Common { const iwascisiiokuackw = "\141\x75\164\150\157\x72"; const UPDATE = "\165\160\x64\141\164\x65"; const goumieeyyqigueiw = "\143\157\155\x6d\x65\x6e\x74\x73"; const uceokykiyceaouke = "\x73\164\x75\x64\171\x5f\x74\x69\155\145"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6d\x65\164\x61\144\x61\164\x61\137\162\x65\x6e\x64\145\x72"), [$this, "\x72\x65\156\144\145\162"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6d\x65\x74\141\144\x61\x74\x61\137\147\x65\164\x5f\151\164\x65\155\163"), [$this, "\x77\141\163\x67\x77\163\157\147\155\x75\x71\165\161\145\x61\x61"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\x65\164\x61\144\141\x74\141\137\x67\x65\x74\137\151\164\145\x6d\x73\137\x63\x6f\x75\156\164"), [$this, "\x79\147\x6d\x63\163\155\145\x67\143\x79\x73\x79\145\x6f\x73\163"], 10, 2); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { Stat::symcgieuakksimmu(); Widget::symcgieuakksimmu(); } public function render($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ackcaikowcokggsc => [], self::uwceyikaaaqgkkee => "\151\x74\145\x6d\163"]); if (isset($ywmkwiwkosakssii[self::qwumqqyuasyskkkc])) { goto kuicqywysciceggs; } $ywmkwiwkosakssii[self::qwumqqyuasyskkkc] = $this->wasgwsogmuquqeaa([], $ywmkwiwkosakssii); kuicqywysciceggs: echo $this->iuygowkemiiwqmiw($ywmkwiwkosakssii[self::uwceyikaaaqgkkee], $ywmkwiwkosakssii); } public function sksykqasgyyyqkie() : array { $oammesyieqmwuwyi = [self::UPDATE => __("\125\x70\144\x61\x74\145\144\x20\101\x74", PR__MDL__ADVANCED_CMS), self::iwascisiiokuackw => __("\101\165\164\x68\157\x72", PR__MDL__ADVANCED_CMS), self::wmmucsiyiyusmssm => __("\x43\162\x65\141\x74\x65\x64\40\101\164", PR__MDL__ADVANCED_CMS), self::goumieeyyqigueiw => __("\x43\157\x6d\x6d\x65\156\164\163", PR__MDL__ADVANCED_CMS), self::uceokykiyceaouke => __("\123\164\x75\144\171\40\164\151\x6d\145", PR__MDL__ADVANCED_CMS)]; $oammesyieqmwuwyi = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\145\164\141\x64\141\x74\x61\137\147\145\164\x5f\x61\154\154\137\151\164\145\x6d\163"), $oammesyieqmwuwyi); $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto eqkauqciwewmgeoi; } $oammesyieqmwuwyi[$kesssewsiegssiya->name] = $kesssewsiegssiya->labels->singular_name; eqkauqciwewmgeoi: sciwggaeogcoesiu: } mkwskuycuyguqqok: return $oammesyieqmwuwyi; } public function ygmcsmegcysyeoss($gaeqamemwmwsyukm = 0, $ywmkwiwkosakssii = []) { return $gaeqamemwmwsyukm; } public function wasgwsogmuquqeaa($oammesyieqmwuwyi = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x66\x6f\x72\155\141\x74" => ManipulateSetting::uyomwmskouyyqyyq(), self::mswoacegomcucaik => '', self::cgiswgcumueqgcmw => 0, self::ackcaikowcokggsc => []]); $post = ManipulatePost::get(ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik)); $uuyoeicyoayimaoa = ManipulateArray::get($ywmkwiwkosakssii, self::cgiswgcumueqgcmw, 0); $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::ackcaikowcokggsc, []); if (!($uuyoeicyoayimaoa > 0 && $uuyoeicyoayimaoa < count($ooiewiwkegguusum))) { goto kwagwqyusyiyoaqs; } $ooiewiwkegguusum = array_slice($ooiewiwkegguusum, 0, $uuyoeicyoayimaoa); kwagwqyusyiyoaqs: $saqmwwmqiwmkiwaa = ManipulateArray::get($ywmkwiwkosakssii, "\x66\157\162\x6d\141\x74"); if (!($post && is_array($ooiewiwkegguusum) && $ooiewiwkegguusum)) { goto eiawsoasmscmqswa; } $wsqgggkqsaokoegu = ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $post, false); $eqomywkesmwsiaik = $this->sksykqasgyyyqkie(); foreach ($ooiewiwkegguusum as $momcykaoccoymeig => $igqsaukqcqscimok) { $eqgoocgaqwqcimie = ''; $ugugimquukqwogge = new Data(); $ugugimquukqwogge->usuqmwksoeaayaig($igqsaukqcqscimok)->jyumyyugiwwiqomk(($momcykaoccoymeig + 1) * 5)->gswweykyogmsyawy(ManipulateArray::get($eqomywkesmwsiaik, $igqsaukqcqscimok)); $iakkeikwceeomgyq = null; switch ($igqsaukqcqscimok) { case self::UPDATE: $suckquwcuiuyiogc = ManipulatePost::oukqamgqowciwoum($saqmwwmqiwmkiwaa, $post, false); if (!$suckquwcuiuyiogc) { goto cggowoquuiwqkyew; } if ($suckquwcuiuyiogc < $wsqgggkqsaokoegu) { goto eequksumcoogyoem; } $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($this->eciukqcoqmyacwow($suckquwcuiuyiogc), $suckquwcuiuyiogc); goto uukumskkeggaowck; eequksumcoogyoem: $eqgoocgaqwqcimie = ManipulateHTML::gmqyuaqwgiayskei("\55"); uukumskkeggaowck: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::yqqwkcykyeagkakg); cggowoquuiwqkyew: goto iomcaiwewsawiamu; case self::iwascisiiokuackw: $iakkeikwceeomgyq = ManipulatePost::mguqscccckuywsya($post); $eqgoocgaqwqcimie = ManipulatePost::ekauksssqmmykouq($post); $ugugimquukqwogge->qoowicksguscqyks(ManipulatePost::qkweigiqsaaigqau($post))->saemoowcasogykak(IconFontawesomeInterface::ueqwmuwomeukquwy); goto iomcaiwewsawiamu; case self::wmmucsiyiyusmssm: if (!$wsqgggkqsaokoegu) { goto ocokwuuquaokmasc; } $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($this->eciukqcoqmyacwow($wsqgggkqsaokoegu), $wsqgggkqsaokoegu); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::wcswouquyoywwagi); ocokwuuquaokmasc: goto iomcaiwewsawiamu; case self::goumieeyyqigueiw: $eqgoocgaqwqcimie = sprintf(__("\x25\163\40\143\x6f\155\155\145\x6e\x74\163", PR__MDL__ADVANCED_CMS), DecoratorPost::qmegicmsiwuuwysa($post)); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::kumgmciqwoukimgc)->qoowicksguscqyks(ManipulatePost::ycqquoiyyuesegsy($post) . "\43\143\157\155\x6d\145\156\x74\x73\137\143\157\156\164\141\151\x6e\145\162"); goto iomcaiwewsawiamu; case self::uceokykiyceaouke: $moowucgmewesiwsu = ManipulatePost::cuoieqacocyyookg($post); if (!$moowucgmewesiwsu) { goto yiwiqaqmwiogawym; } $eqgoocgaqwqcimie = sprintf(__("\45\x73\40\x6d\151\x6e\x75\x74\145\40\x72\145\x61\144\151\156\x67", PR__MDL__ADVANCED_CMS), $this->msywmyaoqmaegsuy($moowucgmewesiwsu)); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::amsucmiagiecieac); yiwiqaqmwiogawym: goto iomcaiwewsawiamu; default: if (!DecoratorTaxonomy::myagqecycsaiyqsk($igqsaukqcqscimok)) { goto qmiwsequckckoaei; } $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($igqsaukqcqscimok); if (!$kesssewsiegssiya) { goto qgegkeomwscwwiuw; } $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; $qyucoagsiyeieyiu = ManipulateArray::get($kesssewsiegssiya, "\163\x69\x6e\147\x6c\x65\137\166\141\154\x75\145"); if ($qyucoagsiyeieyiu) { goto egasokooagakisiy; } $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $igqsaukqcqscimok); if (!$uyuaosigqymaqsaa) { goto mswsoaimesegiiic; } if (count($uyuaosigqymaqsaa) == 1) { goto wcesymwqykqoyuqk; } foreach ($uyuaosigqymaqsaa as $ciyackuwsqkoqese => $iwewcwusemqaiggk) { $uyuaosigqymaqsaa[$ciyackuwsqkoqese] = [self::qescuiwgsyuikume => ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), self::ogigqueukwysusii => $cekoogweeooasayu ? ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk) : false]; meawswgwagoqgkye: } goacqqsgaaigyuaw: $eqgoocgaqwqcimie = $this->iuygowkemiiwqmiw("\x74\141\x78\157\156\157\x6d\x69\x65\x73", [self::qwumqqyuasyskkkc => $uyuaosigqymaqsaa]); goto usqgaogkqgemuima; wcesymwqykqoyuqk: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); usqgaogkqgemuima: mswsoaimesegiiic: goto kecwuwwcwokuksyq; egasokooagakisiy: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); kecwuwwcwokuksyq: qgegkeomwscwwiuw: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::usaocmsseuquaqsu); qmiwsequckckoaei: goto iomcaiwewsawiamu; } sqiciiuwmykocycc: iomcaiwewsawiamu: $ugugimquukqwogge->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kmaeqisgkicagake($iakkeikwceeomgyq); $ugugimquukqwogge = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\145\164\x61\x64\141\164\141\137\165\160\x64\x61\x74\145\137{$igqsaukqcqscimok}"), $ugugimquukqwogge, $post, $igqsaukqcqscimok); if (!$ugugimquukqwogge->qooeaookuemoqecm()) { goto goeoymmqqqeeoime; } $oammesyieqmwuwyi[$igqsaukqcqscimok] = $ugugimquukqwogge; goeoymmqqqeeoime: kiqogmwcgcamwiig: } yowsmsiyimmimemc: eiawsoasmscmqswa: return $oammesyieqmwuwyi; } public function uayquiakegwyiocs(&$eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu) { $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa($post, ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya)); if (!$iwewcwusemqaiggk) { goto qmeoaqmsuseueqiy; } $eqgoocgaqwqcimie = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk); if (!$cekoogweeooasayu) { goto ickcmqoiosquugwe; } $ugugimquukqwogge->qoowicksguscqyks(ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya)); ickcmqoiosquugwe: qmeoaqmsuseueqiy: return $ugugimquukqwogge; } }
