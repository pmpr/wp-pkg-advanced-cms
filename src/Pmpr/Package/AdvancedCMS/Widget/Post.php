<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             615d8e8e8d637             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Widget; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Metadata\Metadata; use Pmpr\Package\AdvancedCMS\Rating\Rating; class Post extends Common { const RECENT = "\x72\x65\143\x65\x6e\x74"; const MOST_POPULAR = "\155\157\x73\x74\137\x70\157\160\165\x6c\141\162"; const LAST_UPDATED = "\x6c\141\x73\164\137\165\x70\144\141\164\x65\x64"; const RELATED_POSTS = "\162\145\154\141\164\x65\x64\137\x70\157\163\164\163"; const RECOMMENDED_POSTS = "\x72\145\143\157\x6d\x6d\145\x6e\144\145\144\137\160\157\x73\164\x73"; const MOST_CONTROVERSIAL = "\155\157\163\x74\137\x63\x6f\x6e\x74\162\157\166\x65\x72\163\151\141\154"; const METADATA = "\x6d\145\164\x61\144\x61\164\x61"; public function __construct() { parent::__construct(__("\120\157\163\164\163", PR__PKG__ADVANCED_CMS), __("\104\x69\x73\x70\154\141\171\x20\x74\150\x65\x20\x70\157\x73\164\163\x2e", PR__PKG__ADVANCED_CMS)); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\137\151\156\x69\164", [$this, "\171\x65\x79\x69\147\x75\x79\145\147\x6d\x6d\x79\165\x73\145\141"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { goto acaqummmoyiemqss; suswcqoyyqkkquuo: if (DecoratorOption::get($uusmaiomayssaecw)) { goto soqqemyioggmoakg; } goto eeqesooyqagwawae; foeeqckqsyockkak: $igygeewacyusisog = __("\122\145\x63\157\155\x6d\145\156\144\145\x64\x20\x50\x6f\163\164\163", PR__PKG__ADVANCED_CMS); goto iekumemscwieugqw; eeqesooyqagwawae: $useksmwkuswkwcqg = self::POST; goto oqugqwcyomiaaoqu; iekumemscwieugqw: DecoratorOption::update($uusmaiomayssaecw, 1); goto hoeeyiowekaeemko; hoeeyiowekaeemko: $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\162\145\x6c\141\x74\151\x6f\x6e\x5f\x61\x64\x64\x5f\x64\x65\x66\x61\165\154\x74\x5f\x69\x74\x65\x6d\x73"), [self::RELATED_POSTS => [self::NAME => $equeaccueemaemik, self::ORIGIN => $useksmwkuswkwcqg, self::METAKEY => $this->eggikgmuqoguukak(self::RELATED_POSTS, $useksmwkuswkwcqg), self::DESTINATION => $useksmwkuswkwcqg, self::ORIGIN_TITLE => $equeaccueemaemik, self::DESTINATION_TITLE => $equeaccueemaemik], self::RECOMMENDED_POSTS => [self::NAME => $igygeewacyusisog, self::ORIGIN => $useksmwkuswkwcqg, self::METAKEY => $this->eggikgmuqoguukak(self::RECOMMENDED_POSTS, $useksmwkuswkwcqg), self::DESTINATION => $useksmwkuswkwcqg, self::ORIGIN_TITLE => $igygeewacyusisog, self::DESTINATION_TITLE => $igygeewacyusisog]]); goto kymkucucyeoeikim; kymkucucyeoeikim: soqqemyioggmoakg: goto usquiuuyiyqaeyiu; oqugqwcyomiaaoqu: $equeaccueemaemik = __("\122\145\x6c\x61\164\x65\x64\40\120\157\x73\x74\x73", PR__PKG__ADVANCED_CMS); goto foeeqckqsyockkak; acaqummmoyiemqss: $uusmaiomayssaecw = "\x61\x64\144\137\x64\145\146\141\165\x6c\x74\x5f\x70\x6f\163\x74\x73\137\162\x65\x6c\141\x74\151\x6f\156\x32\60"; goto suswcqoyyqkkquuo; usquiuuyiyqaeyiu: } public function ugmceccgwaaaigiy() : array { return [self::TITLE => ["\156\141\x6d\145" => __("\124\151\x74\x6c\x65", PR__PKG__ADVANCED_CMS)], self::COUNT => ["\x6e\141\x6d\145" => __("\x43\x6f\x75\x6e\164", PR__PKG__ADVANCED_CMS), "\144\x65\146\x61\165\x6c\164" => 5, "\141\x73\55\x6e\165\x6d\x62\x65\x72"], self::POST_TYPE => ["\x74\x79\x70\x65" => "\142\163\163\x65\x6c\x65\x63\x74", "\x6e\141\155\x65" => __("\x50\157\x73\x74\40\x54\171\160\x65", PR__PKG__ADVANCED_CMS), "\x6f\160\x74\x69\157\x6e\x73" => ManipulatePost::mwoyqeeigwqoamiw([self::OUTPUT => self::LABELS])], self::TYPE => ["\164\171\x70\145" => "\x62\x73\163\145\x6c\x65\143\164", "\156\x61\x6d\145" => __("\x54\x79\x70\x65", PR__PKG__ADVANCED_CMS), "\157\160\x74\x69\157\x6e\163" => [ self::RECENT => __("\122\145\x63\145\156\x74\40\x50\x6f\x73\164\163", PR__PKG__ADVANCED_CMS), self::LAST_UPDATED => __("\114\141\x73\164\40\x55\x70\144\141\x74\145\x64", PR__PKG__ADVANCED_CMS), self::MOST_POPULAR => __("\115\x6f\163\164\40\x50\x6f\160\165\154\x61\x72", PR__PKG__ADVANCED_CMS), self::RELATED_POSTS => __("\122\145\154\x61\164\x65\144\x20\x50\x6f\163\x74\163", PR__PKG__ADVANCED_CMS), self::MOST_CONTROVERSIAL => __("\115\x6f\x73\164\x20\103\157\156\164\x72\x6f\x76\145\162\x73\x69\141\154", PR__PKG__ADVANCED_CMS), ]], self::METADATA => ["\164\171\160\145" => "\x62\163\x73\x65\x6c\x65\x63\x74", "\x6e\x61\155\145" => __("\115\x65\x74\x61\x64\x61\164\141", PR__PKG__ADVANCED_CMS), "\x6f\x70\x74\x69\x6f\x6e\x73" => Metadata::symcgieuakksimmu()->sksykqasgyyyqkie(), "\x61\x73\x2d\x6d\x75\154\164\151\x70\154\145"], self::SHOW_TEMPLATE => ["\x74\171\160\x65" => "\x62\x73\x73\x65\154\145\x63\164", "\x6e\141\x6d\145" => __("\x53\150\x6f\167\x20\124\145\155\160\x6c\141\x74\x65", PR__PKG__ADVANCED_CMS), "\x6f\160\164\151\157\156\163" => [self::LIST => __("\114\x69\x73\164", PR__PKG__ADVANCED_CMS), self::TABLE => __("\x54\x61\142\154\x65", PR__PKG__ADVANCED_CMS)]]]; } public function yoeqsqkucmywwwmq($post, $uuyoeicyoayimaoa) { goto uguigkcmukuouway; aegysmeecgcgayyw: $ksiyqouuaoymsycg = ManipulatePost::ciugwooasaqcywas(self::POST, ["\164\141\147\x5f\x5f\x69\156" => $oysoyeaucuawyaky, "\160\157\x73\164\137\163\164\x61\164\x75\163" => "\x70\165\142\x6c\x69\x73\150", self::POST__NOT_IN => [ManipulatePost::mwikyscisascoeea($post)], self::POSTS_PER_PAGE => $uuyoeicyoayimaoa]); goto suqkuqygkkgwyaie; uqqaiagaeqgqgaiy: $oysoyeaucuawyaky = wp_list_pluck($kmmywmgcgwceeqii, "\164\x65\162\155\x5f\151\144"); goto esuiysskoweawsue; esuiysskoweawsue: $ksiyqouuaoymsycg = []; goto gaomwagkcciesyqy; uguigkcmukuouway: $kmmywmgcgwceeqii = ManipulatePost::weescwwgqgiyumyw($post, "\x70\157\x73\164\137\x74\141\147"); goto uqqaiagaeqgqgaiy; suqkuqygkkgwyaie: qicwaskssogcokgm: goto soaccwqimeksgwiw; gaomwagkcciesyqy: if (!$oysoyeaucuawyaky) { goto qicwaskssogcokgm; } goto aegysmeecgcgayyw; soaccwqimeksgwiw: return $ksiyqouuaoymsycg; goto wiysogeqqwgioyka; wiysogeqqwgioyka: } public function eggikgmuqoguukak($uusmaiomayssaecw, $useksmwkuswkwcqg) { return "{$useksmwkuswkwcqg}\x5f{$uusmaiomayssaecw}\x5f{$useksmwkuswkwcqg}"; } public function qqiumsqyicskowsq($post, $uuyoeicyoayimaoa) { goto cgiscsqwwgqqaeqi; cmegwsegsosyqcai: $ksiyqouuaoymsycg = ManipulatePost::ciugwooasaqcywas(self::POST, [self::ORDERBY => "\162\x61\156\x64", "\x74\x61\170\137\161\165\145\x72\171" => [["\x74\x61\x78\157\156\157\155\x79" => "\143\x61\x74\x65\x67\x6f\162\x79", "\146\x69\x65\154\144" => self::SLUG, "\x74\145\x72\155\163" => $qcmggaiwyoeyguco]], "\x70\157\x73\164\x5f\163\164\141\164\x75\163" => "\x70\165\x62\154\151\163\150", self::POST__NOT_IN => [ManipulatePost::mwikyscisascoeea($post)], self::POSTS_PER_PAGE => $uuyoeicyoayimaoa]); goto wmywuusgukmmaams; gkyawqqcmigqgaiq: return $ksiyqouuaoymsycg; goto ooeausyowguqicuo; cgiscsqwwgqqaeqi: $ksiyqouuaoymsycg = []; goto syiqkaasoueowwui; syiqkaasoueowwui: $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, "\x63\141\x74\145\x67\x6f\x72\171"); goto giaacoqqqsekcayy; giaacoqqqsekcayy: $qcmggaiwyoeyguco = wp_list_pluck($uyuaosigqymaqsaa, self::SLUG); goto ewymsmkkiksgwysk; wmywuusgukmmaams: skkamseieeusycye: goto gkyawqqcmigqgaiq; ewymsmkkiksgwysk: if (!$qcmggaiwyoeyguco) { goto skkamseieeusycye; } goto cmegwsegsosyqcai; ooeausyowguqicuo: } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { goto cwwmimggaaecmucw; gicyayswqyuoekcq: if (!DecoratorQuery::cukiusasccucgwqc($useksmwkuswkwcqg)) { goto egyyiccaeeiooaua; } goto iikiiioqiyegyaak; ogqmesokykywseys: $uuyoeicyoayimaoa = ManipulateArray::get($owgumcsyqsamiemg, self::COUNT, 5); goto ykomgumacooyomsk; uiosisocuwokwkie: egyyiccaeeiooaua: goto cuumeogeomowqisc; gmwykkouysyaqwqm: return $qookweymeqawmcwo; goto ugqwuugsweqgmywk; qmkaeeomgkwggoyo: scisgsyemmsekgos: goto csammceowmqwaamq; cwwmimggaaecmucw: $wyoiwuqokyeeuguk = []; goto awoaooyoeoyeeqee; cuumeogeomowqisc: switch ($sqeykgyoooqysmca) { case self::RECENT: $wyoiwuqokyeeuguk = ManipulatePost::ymuqsscwmcumcama($useksmwkuswkwcqg, $ywmkwiwkosakssii); goto scisgsyemmsekgos; case self::MOST_POPULAR: $wyoiwuqokyeeuguk = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\x61\x74\151\156\147\137\x67\x65\164\137\160\157\x70\x75\154\141\x72\137\160\157\163\164\x73"), $wyoiwuqokyeeuguk, $ywmkwiwkosakssii); goto scisgsyemmsekgos; case self::LAST_UPDATED: goto igooksugieceoege; ugqaaewwmkocwwgy: goto scisgsyemmsekgos; goto wgewmqieuamsoayy; igooksugieceoege: $ywmkwiwkosakssii[self::ORDERBY] = "\x63\x6f\155\155\145\156\164\x5f\143\x6f\165\156\x74"; goto omqiayeucoioqoao; omqiayeucoioqoao: $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii); goto ugqaaewwmkocwwgy; wgewmqieuamsoayy: case self::RELATED_POSTS: goto qgeugwymkkiacwoc; acsqgiuageaasiyy: if (!($useksmwkuswkwcqg === self::POST && $gaeqamemwmwsyukm < $uuyoeicyoayimaoa)) { goto ciykoyeioqgyaeqo; } goto oomguqikqokqwgku; mugqyyeayeyggqqk: $gaeqamemwmwsyukm = count($wyoiwuqokyeeuguk); goto acsqgiuageaasiyy; oomguqikqokqwgku: $seyqqsmuaiegkeeq = ["\x63\141\164\x65\x67\157\162\171", "\x74\141\147"]; goto samwkqgwouggsguc; kkumywowcoycymeo: mqicocmqegwukkwg: goto miweggwqeiaeweia; guykyqecgswcsmws: ciykoyeioqgyaeqo: goto kkumywowcoycymeo; ouamogymawucwswu: $wyoiwuqokyeeuguk = $this->skeckuqqaeeysowm($post, $uuyoeicyoayimaoa, $useksmwkuswkwcqg); goto mugqyyeayeyggqqk; emmsycooskoqmgeg: $post = ManipulatePost::get(); goto ouamogymawucwswu; qgeugwymkkiacwoc: if (!DecoratorQuery::cukiusasccucgwqc($useksmwkuswkwcqg)) { goto mqicocmqegwukkwg; } goto emmsycooskoqmgeg; miweggwqeiaeweia: goto scisgsyemmsekgos; goto kqqiegkuqagcqsya; samwkqgwouggsguc: foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { goto qmuwoecuacmkwgem; wcugqegqsuuuwqao: ueigkucgaucgeimc: goto asiqwuoswmigcaki; eeauyscekuckoues: wkeuuycukmuqiaom: goto eogwckcymuugikuy; qoqskyuuwueqkquk: $gaeqamemwmwsyukm = count($oissegscgyqycmcy); goto iwsuawwqomaowuii; iwsuawwqomaowuii: wakmayaoqoskekqy: goto wcugqegqsuuuwqao; mwsmsguqqkcwiiuk: switch ($kesssewsiegssiya) { case "\x74\x61\147": $oissegscgyqycmcy = $this->yoeqsqkucmywwwmq($post, $uuyoeicyoayimaoa); goto sggawugoykqcmsug; case "\x63\141\164\145\147\157\162\x79": $oissegscgyqycmcy = $this->qqiumsqyicskowsq($post, $uuyoeicyoayimaoa); goto sggawugoykqcmsug; } goto eeauyscekuckoues; wagqgeqymeqoeuyi: $wyoiwuqokyeeuguk = array_merge($wyoiwuqokyeeuguk, $oissegscgyqycmcy); goto qoqskyuuwueqkquk; msemumccgceyugmg: if (!$oissegscgyqycmcy) { goto wakmayaoqoskekqy; } goto wagqgeqymeqoeuyi; owmuceyswmgueasi: $oissegscgyqycmcy = []; goto mwsmsguqqkcwiiuk; eogwckcymuugikuy: sggawugoykqcmsug: goto msemumccgceyugmg; qmuwoecuacmkwgem: $uuyoeicyoayimaoa -= $gaeqamemwmwsyukm; goto owmuceyswmgueasi; asiqwuoswmigcaki: } goto wyuemgggaqogsmsq; wyuemgggaqogsmsq: kqgcyoscsusgoaqi: goto guykyqecgswcsmws; kqqiegkuqagcqsya: case self::MOST_CONTROVERSIAL: goto ousiuuwgwkiyikyq; iwekmyyccgiyuecc: goto scisgsyemmsekgos; goto ikqqskkqqwmwssoo; ousiuuwgwkiyikyq: $ywmkwiwkosakssii[self::ORDERBY] = "\155\157\x64\151\x66\151\x65\x64"; goto ogsaaqsaogcqiouy; ogsaaqsaogcqiouy: $wyoiwuqokyeeuguk = ManipulatePost::ciugwooasaqcywas($useksmwkuswkwcqg, $ywmkwiwkosakssii); goto iwekmyyccgiyuecc; ikqqskkqqwmwssoo: } goto gcckqucukawcasgk; csammceowmqwaamq: $qookweymeqawmcwo = []; goto ocaguquugeamqckq; ocaguquugeamqckq: if (!$wyoiwuqokyeeuguk) { goto aomysykcgikegiau; } goto eekcoeikaeaaeyii; kosaqwikueyksqmw: $ywmkwiwkosakssii = [self::ORDER => "\144\145\x73\143", self::POSTS_PER_PAGE => $uuyoeicyoayimaoa]; goto gicyayswqyuoekcq; iikiiioqiyegyaak: $ywmkwiwkosakssii[self::POST__NOT_IN] = [ManipulatePost::mwikyscisascoeea()]; goto uiosisocuwokwkie; mqkmcysgoiaouiwm: $qqscaoyqikuyeoaw = ManipulateArray::get($owgumcsyqsamiemg, self::SHOW_TEMPLATE, self::LIST); goto kosaqwikueyksqmw; cogywoqcqummsyus: aomysykcgikegiau: goto gmwykkouysyaqwqm; gcckqucukawcasgk: cewmoqyysgsmuiya: goto qmkaeeomgkwggoyo; eekcoeikaeaaeyii: $qookweymeqawmcwo = [self::ITEMS => $wyoiwuqokyeeuguk, self::TITLE => ManipulateArray::get($owgumcsyqsamiemg, self::TITLE), self::METADATA => ManipulateArray::get($owgumcsyqsamiemg, self::METADATA), self::OUTPUT_TEMPLATE => $qqscaoyqikuyeoaw]; goto cogywoqcqummsyus; awoaooyoeoyeeqee: $sqeykgyoooqysmca = ManipulateArray::get($owgumcsyqsamiemg, self::TYPE, self::RECENT); goto ogqmesokykywseys; ykomgumacooyomsk: $useksmwkuswkwcqg = ManipulateArray::get($owgumcsyqsamiemg, self::POST_TYPE, self::POST); goto mqkmcysgoiaouiwm; ugqwuugsweqgmywk: } public function skeckuqqaeeysowm($post, $uuyoeicyoayimaoa, $useksmwkuswkwcqg, $ayegqaqygsqsmews = self::RELATED_POSTS) : array { return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\x74\x5f\162\145\x6c\x61\x74\x69\157\156\x5f\x70\x6f\x73\164\x73"), [], $post, $useksmwkuswkwcqg, $this->eggikgmuqoguukak($ayegqaqygsqsmews, $useksmwkuswkwcqg), [self::LIMIT => $uuyoeicyoayimaoa]); } }
