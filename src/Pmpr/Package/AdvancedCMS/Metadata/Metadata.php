<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b74f31bc925             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Metadata; use Pmpr\Common\Foundation\Data\Metadata as Data; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use WP_Taxonomy; class Metadata extends Common { const AUTHOR = "\x61\x75\x74\150\x6f\x72"; const UPDATE = "\165\x70\x64\x61\x74\145"; const PUBLISH = "\160\x75\142\x6c\x69\x73\150"; const COMMENTS = "\143\157\155\155\x65\x6e\x74\163"; const STUDY_TIME = "\163\164\x75\x64\171\x5f\164\x69\155\145"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6d\145\164\141\x64\x61\164\141\137\162\145\156\144\x65\162"), [$this, "\x72\x65\156\x64\145\x72"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6d\x65\x74\141\144\141\164\141\x5f\x67\145\164\137\x69\x74\x65\155\x73"), [$this, "\x77\141\x73\x67\x77\x73\x6f\x67\x6d\x75\x71\x75\161\x65\x61\141"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\145\164\x61\x64\x61\x74\x61\x5f\x67\x65\x74\x5f\151\x74\x65\155\x73\137\143\x6f\165\x6e\x74"), [$this, "\171\x67\155\x63\163\155\x65\x67\x63\171\163\x79\145\157\x73\x73"], 10, 2); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { Widget::symcgieuakksimmu(); } public function render($ywmkwiwkosakssii = []) { goto ksseoiqcgiqsamwy; ecyauwageoukkaaq: ciwcwcqkgkmoguok: goto cceesacikyckyiim; qgeiemoywoccmwgw: if (isset($ywmkwiwkosakssii[self::ITEMS])) { goto ciwcwcqkgkmoguok; } goto wameiecycmkcuimk; wameiecycmkcuimk: $ywmkwiwkosakssii[self::ITEMS] = $this->wasgwsogmuquqeaa([], $ywmkwiwkosakssii); goto ecyauwageoukkaaq; cceesacikyckyiim: echo $this->iuygowkemiiwqmiw($ywmkwiwkosakssii[self::TEMPLATE], $ywmkwiwkosakssii); goto uqqawaaiywcggesu; ksseoiqcgiqsamwy: $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::INCLUDE => [], self::TEMPLATE => "\x69\x74\x65\155\163"]); goto qgeiemoywoccmwgw; uqqawaaiywcggesu: } public function sksykqasgyyyqkie() : array { goto cuqeayuiccuwcyua; comiusqosmykagiq: $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(); goto vwyusaemeqkswgee; wmasiggggymwkeqs: return $oammesyieqmwuwyi; goto csqwmisikmgeaaky; uiuekqekiguikuce: $oammesyieqmwuwyi = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\x65\164\141\x64\x61\164\x61\x5f\x67\145\164\x5f\141\x6c\x6c\x5f\151\164\145\155\x73"), $oammesyieqmwuwyi); goto comiusqosmykagiq; qewmkgeeuomgomia: oamaoeaeoyckwmgk: goto wmasiggggymwkeqs; cuqeayuiccuwcyua: $oammesyieqmwuwyi = [self::UPDATE => __("\x55\160\144\141\164\x65\x64\x20\101\164", PR__PKG__ADVANCED_CMS), self::AUTHOR => __("\x41\x75\x74\x68\x6f\x72", PR__PKG__ADVANCED_CMS), self::PUBLISH => __("\103\162\x65\141\164\x65\x64\40\101\x74", PR__PKG__ADVANCED_CMS), self::COMMENTS => __("\x43\157\x6d\155\145\x6e\164\x73", PR__PKG__ADVANCED_CMS), self::STUDY_TIME => __("\x53\164\x75\144\x79\x20\x74\151\155\145", PR__PKG__ADVANCED_CMS)]; goto uiuekqekiguikuce; vwyusaemeqkswgee: foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { goto aoyqwwsacwqumucg; uyueemusgoakawmc: oukqakowgcgeugam: goto ayggscyaoccukyso; ayggscyaoccukyso: cesywumicwqkaeaq: goto iiakoqmowuggmkqw; ceegwysaccigqqck: $oammesyieqmwuwyi[$kesssewsiegssiya->name] = $kesssewsiegssiya->labels->singular_name; goto uyueemusgoakawmc; aoyqwwsacwqumucg: if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto oukqakowgcgeugam; } goto ceegwysaccigqqck; iiakoqmowuggmkqw: } goto qewmkgeeuomgomia; csqwmisikmgeaaky: } public function ygmcsmegcysyeoss($gaeqamemwmwsyukm = 0, $ywmkwiwkosakssii = []) { return $gaeqamemwmwsyukm; } public function wasgwsogmuquqeaa($oammesyieqmwuwyi = [], $ywmkwiwkosakssii = []) : array { goto cusmikqmacqsyoma; aacaaeuuscacmgws: $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::INCLUDE, []); goto imccgasockkumogm; wiisumwwuyqmqggs: skokkuuieagmuwgm: goto ciiggekwccqceewc; yawiksokukeuwumm: $ooiewiwkegguusum = array_slice($ooiewiwkegguusum, 0, $uuyoeicyoayimaoa); goto wiisumwwuyqmqggs; imccgasockkumogm: if (!($uuyoeicyoayimaoa > 0 && $uuyoeicyoayimaoa < count($ooiewiwkegguusum))) { goto skokkuuieagmuwgm; } goto yawiksokukeuwumm; ciiggekwccqceewc: $saqmwwmqiwmkiwaa = ManipulateArray::get($ywmkwiwkosakssii, "\x66\x6f\162\155\x61\x74"); goto kgseuyacuyamciku; ouiaceqmgmusysiq: return $oammesyieqmwuwyi; goto egcykicymsycioaq; cuiswoyuykyksukc: $eqomywkesmwsiaik = $this->sksykqasgyyyqkie(); goto oqwssckcieuowiwc; cusmikqmacqsyoma: $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\146\x6f\x72\155\x61\x74" => ManipulateSetting::uyomwmskouyyqyyq(), self::POST => '', self::LIMIT => 0, self::INCLUDE => []]); goto qcqecwaeywouwwyw; oqwssckcieuowiwc: foreach ($ooiewiwkegguusum as $momcykaoccoymeig => $igqsaukqcqscimok) { goto amcyugmyywgmwyys; amcyugmyywgmwyys: $eqgoocgaqwqcimie = ''; goto eqqgiqaceosmskyq; uooyycimwyiscwik: $ugugimquukqwogge->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kmaeqisgkicagake($iakkeikwceeomgyq); goto wgyckicucikswwgc; ykomkgsekoimwoga: switch ($igqsaukqcqscimok) { case self::UPDATE: goto sgiescgmgsowcakk; imyoiukqcmewqkkw: goto qyoscouawykeimiu; goto ugoqkakikayagkmm; ummgomwmsqygiqcy: if ($suckquwcuiuyiogc < $wsqgggkqsaokoegu) { goto scigcaogysowccsk; } goto skuykkqcgakewusu; guyskocigecaisas: $eqgoocgaqwqcimie = ManipulateHTML::gmqyuaqwgiayskei("\x2d"); goto wugmawaqkksguaoa; ugoqkakikayagkmm: scigcaogysowccsk: goto guyskocigecaisas; sgiescgmgsowcakk: $suckquwcuiuyiogc = ManipulatePost::oukqamgqowciwoum($saqmwwmqiwmkiwaa, $post, false); goto cgeuosayqssasuou; gyeqsyqiosmysiio: wskwmocqgakykmgw: goto skwuueyuqkueasuu; ggwkueqyesouyaya: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::ICON_ROTATE); goto gyeqsyqiosmysiio; skuykkqcgakewusu: $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($this->eciukqcoqmyacwow($suckquwcuiuyiogc), $suckquwcuiuyiogc); goto imyoiukqcmewqkkw; cgeuosayqssasuou: if (!$suckquwcuiuyiogc) { goto wskwmocqgakykmgw; } goto ummgomwmsqygiqcy; skwuueyuqkueasuu: goto muuiwammayaceuue; goto oeoeeqeaokougsec; wugmawaqkksguaoa: qyoscouawykeimiu: goto ggwkueqyesouyaya; oeoeeqeaokougsec: case self::AUTHOR: goto ikgusckaomuoiggs; gwyguuaqscsukaqg: goto muuiwammayaceuue; goto sesqsywwesiycmmq; icausgkyooymuwqq: $ugugimquukqwogge->qoowicksguscqyks(ManipulatePost::qkweigiqsaaigqau($post))->saemoowcasogykak(IconFontawesomeInterface::ICON_TYPEWRITER); goto gwyguuaqscsukaqg; ikgusckaomuoiggs: $iakkeikwceeomgyq = ManipulatePost::mguqscccckuywsya($post); goto oykuimwkwcmuekci; oykuimwkwcmuekci: $eqgoocgaqwqcimie = ManipulatePost::ekauksssqmmykouq($post); goto icausgkyooymuwqq; sesqsywwesiycmmq: case self::PUBLISH: goto qmeskaiqawomuqmk; myasecwmmmiemgik: goto muuiwammayaceuue; goto kwmkusgsuoqoyses; qmeskaiqawomuqmk: if (!$wsqgggkqsaokoegu) { goto wwyukkoeeeiiuewk; } goto ycekisssayygosaw; ycekisssayygosaw: $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($this->eciukqcoqmyacwow($wsqgggkqsaokoegu), $wsqgggkqsaokoegu); goto qawqosgwykeguasw; oscukosgcqaqwcmi: wwyukkoeeeiiuewk: goto myasecwmmmiemgik; qawqosgwykeguasw: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::ICON_CALENDAR); goto oscukosgcqaqwcmi; kwmkusgsuoqoyses: case self::COMMENTS: goto eacqgkqmwkcsscec; kwagmsukmimymmmg: goto muuiwammayaceuue; goto ieumcesgiqicqima; eacqgkqmwkcsscec: $eqgoocgaqwqcimie = sprintf(__("\45\x73\x20\143\157\x6d\155\145\x6e\164\x73", PR__PKG__ADVANCED_CMS), DecoratorPost::qmegicmsiwuuwysa($post)); goto eucysoaqoumycmso; eucysoaqoumycmso: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::ICON_COMMENTS)->qoowicksguscqyks(ManipulatePost::ycqquoiyyuesegsy($post) . "\43\143\x6f\155\155\145\156\164\x73\137\143\x6f\156\x74\141\151\156\145\162"); goto kwagmsukmimymmmg; ieumcesgiqicqima: case self::STUDY_TIME: goto uksgyweoymomgqos; wgiuiaqoekymkwwo: ysswaukcymggikui: goto csiokukquwmccgqc; ugsomcmgekqayoqc: if (!$moowucgmewesiwsu) { goto ysswaukcymggikui; } goto kecgiacuyaumcewe; giqssgogumimqkeo: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::ICON_CLOCK); goto wgiuiaqoekymkwwo; kecgiacuyaumcewe: $eqgoocgaqwqcimie = sprintf(__("\x25\x73\x20\x6d\151\x6e\165\164\145\x20\x72\145\141\x64\151\156\x67", PR__PKG__ADVANCED_CMS), $this->msywmyaoqmaegsuy($moowucgmewesiwsu)); goto giqssgogumimqkeo; csiokukquwmccgqc: goto muuiwammayaceuue; goto sgaiaqoewagooqoo; uksgyweoymomgqos: $moowucgmewesiwsu = ManipulatePost::cuoieqacocyyookg($post); goto ugsomcmgekqayoqc; sgaiaqoewagooqoo: default: goto wuugmygqgsmkgsmc; ekgcsqsycamakgak: kmemegqksaeuqcow: goto iwyomomasqykuwcw; laqgkacikykmcsos: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::ICON_TAG); goto egeeugucoaimuyai; wcuuwegqcysecoom: $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($igqsaukqcqscimok); goto wyioauuuyckygcaq; geusysuemiqgegcw: if ($qyucoagsiyeieyiu) { goto kmemegqksaeuqcow; } goto siowcuqygwiqumii; wuugmygqgsmkgsmc: if (!DecoratorTaxonomy::myagqecycsaiyqsk($igqsaukqcqscimok)) { goto quccsmwoagiquqya; } goto wcuuwegqcysecoom; kkiwuqcmoqmiquqq: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); goto ygmkqoaymoicisso; mwsuqsikwoimcgiq: yseysoymiwmicuoi: goto moiwoyyuauwqywom; iwyomomasqykuwcw: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); goto jwicyuowwocymagu; ygmkqoaymoicisso: wkqumiwieauokkcy: goto mwsuqsikwoimcgiq; egeeugucoaimuyai: quccsmwoagiquqya: goto iweqeyugoiogqcsw; suweomwcwyiiscee: $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; goto iyaaokkcuycqywco; iweqeyugoiogqcsw: goto muuiwammayaceuue; goto yiswuyuuwakywmiy; qqucyqsowaqsmagw: $eqgoocgaqwqcimie = $this->iuygowkemiiwqmiw("\x74\141\x78\x6f\x6e\157\x6d\x69\145\163", [self::ITEMS => $uyuaosigqymaqsaa]); goto myswmcskaagkuaiq; amwqgwykwqyqsygy: wawwaqicwyyeamqu: goto laqgkacikykmcsos; moiwoyyuauwqywom: goto miqekiwaouwgqgui; goto ekgcsqsycamakgak; yuiwacwscsiukyqe: if (!$uyuaosigqymaqsaa) { goto yseysoymiwmicuoi; } goto oooiaawaqeogogky; jwicyuowwocymagu: miqekiwaouwgqgui: goto amwqgwykwqyqsygy; omgecsuaqiqymwms: iugooscuiysaeqgs: goto qqucyqsowaqsmagw; cmugciymsqakcssq: foreach ($uyuaosigqymaqsaa as $ciyackuwsqkoqese => $iwewcwusemqaiggk) { $uyuaosigqymaqsaa[$ciyackuwsqkoqese] = [self::TITLE => ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), self::LINK => $cekoogweeooasayu ? ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk) : false]; icegsqiumouewcqo: } goto omgecsuaqiqymwms; wksaesosugiyoqoe: mgeiyeygqcoismqq: goto kkiwuqcmoqmiquqq; oooiaawaqeogogky: if (count($uyuaosigqymaqsaa) == 1) { goto mgeiyeygqcoismqq; } goto cmugciymsqakcssq; myswmcskaagkuaiq: goto wkqumiwieauokkcy; goto wksaesosugiyoqoe; wyioauuuyckygcaq: if (!$kesssewsiegssiya) { goto wawwaqicwyyeamqu; } goto suweomwcwyiiscee; siowcuqygwiqumii: $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $igqsaukqcqscimok); goto yuiwacwscsiukyqe; iyaaokkcuycqywco: $qyucoagsiyeieyiu = ManipulateArray::get($kesssewsiegssiya, "\x73\x69\x6e\x67\x6c\145\x5f\166\x61\154\x75\145"); goto geusysuemiqgegcw; yiswuyuuwakywmiy: } goto uwacyygkmmwmqumm; toacieymkgsmouum: muuiwammayaceuue: goto uooyycimwyiscwik; wgyckicucikswwgc: $ugugimquukqwogge = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\155\145\x74\141\144\141\x74\141\137\165\160\x64\x61\x74\145\x5f{$igqsaukqcqscimok}"), $ugugimquukqwogge, $post, $igqsaukqcqscimok); goto kuewoymyameyusgi; uwacyygkmmwmqumm: aqmauesokgqoyugm: goto toacieymkgsmouum; aygymyyeaiouckwm: isqemmgcymcqgmyu: goto cqggosuciisguwka; ocqocwcocigwogao: coswqmcmeyyaemcs: goto aygymyyeaiouckwm; kuewoymyameyusgi: if (!$ugugimquukqwogge->qooeaookuemoqecm()) { goto coswqmcmeyyaemcs; } goto saqssgocioekcyik; kgaiygkqciegamkk: $iakkeikwceeomgyq = null; goto ykomkgsekoimwoga; gcikiyucocqiqkic: $ugugimquukqwogge->usuqmwksoeaayaig($igqsaukqcqscimok)->jyumyyugiwwiqomk(($momcykaoccoymeig + 1) * 5)->gswweykyogmsyawy(ManipulateArray::get($eqomywkesmwsiaik, $igqsaukqcqscimok)); goto kgaiygkqciegamkk; eqqgiqaceosmskyq: $ugugimquukqwogge = new Data(); goto gcikiyucocqiqkic; saqssgocioekcyik: $oammesyieqmwuwyi[$igqsaukqcqscimok] = $ugugimquukqwogge; goto ocqocwcocigwogao; cqggosuciisguwka: } goto auyuqgiwqummogko; wewskayogyikqqwe: $wsqgggkqsaokoegu = ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $post, false); goto cuiswoyuykyksukc; qgowycwwyqeusmqk: iaemoucqgyeioome: goto ouiaceqmgmusysiq; kgseuyacuyamciku: if (!($post && is_array($ooiewiwkegguusum) && $ooiewiwkegguusum)) { goto iaemoucqgyeioome; } goto wewskayogyikqqwe; uyiyiugiugqiqgce: $uuyoeicyoayimaoa = ManipulateArray::get($ywmkwiwkosakssii, self::LIMIT, 0); goto aacaaeuuscacmgws; auyuqgiwqummogko: ayekogimgycgmgau: goto qgowycwwyqeusmqk; qcqecwaeywouwwyw: $post = ManipulatePost::get(ManipulateArray::get($ywmkwiwkosakssii, self::POST)); goto uyiyiugiugqiqgce; egcykicymsycioaq: } public function uayquiakegwyiocs(&$eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu) { goto aockoackcyuqgoky; scuysmagomwasugy: if (!$iwewcwusemqaiggk) { goto kiwygqkmigumiiuk; } goto yamuiaoquqoesiye; aockoackcyuqgoky: $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa($post, ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya)); goto scuysmagomwasugy; mgomeacemugqgswa: return $ugugimquukqwogge; goto muewmqsoeqoosicu; iescmuyqmwkeagcg: $ugugimquukqwogge->qoowicksguscqyks(ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya)); goto eyacawwuwcgegekw; yamuiaoquqoesiye: $eqgoocgaqwqcimie = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk); goto keeayqkcscoegmmc; eyecoeksswsicqkq: kiwygqkmigumiiuk: goto mgomeacemugqgswa; keeayqkcscoegmmc: if (!$cekoogweeooasayu) { goto scgkuqsgoooesoak; } goto iescmuyqmwkeagcg; eyacawwuwcgegekw: scgkuqsgoooesoak: goto eyecoeksswsicqkq; muewmqsoeqoosicu: } }
