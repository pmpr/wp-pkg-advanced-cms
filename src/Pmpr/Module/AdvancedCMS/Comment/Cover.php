<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62421b822e5c2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Cover extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\143\157\x6d\x6d\x65\156\164\137\154\x69\x73\164\137\x72\x65\x6e\144\145\x72"), [$this, "\x72\x65\x6e\144\145\162"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\143\x6f\155\x6d\145\x6e\164\x5f\x66\157\162\155\137\x61\x6e\144\x5f\x6c\x69\x73\x74\137\x72\145\156\x64\145\162"), [$this, "\x69\x73\x69\171\x61\163\171\x75\141\153\x75\153\163\x69\141\x6d"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::ayumqueugowuywqs)) { goto kiwqkcaekqqyuegq; } $this->cecaguuoecmccuse("\x67\145\x74\137\141\166\141\164\x61\162", [$this, "\x61\x79\x73\145\151\x75\x6d\157\141\157\165\x61\143\161\x63\x75"], 10, 3)->cecaguuoecmccuse("\147\x65\164\137\143\157\155\155\x65\x6e\x74\137\x61\165\164\x68\x6f\x72", [$this, "\x6d\x65\165\x6f\145\165\x6b\151\x77\153\x65\165\155\x67\x67\153"], 10, 2); kiwqkcaekqqyuegq: } public function isiyasyuakuksiam($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::kqigmeickowqiiyy => ManipulatePost::mwikyscisascoeea()]); $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); $ywmkwiwkosakssii["\x65\143\x68\x6f"] = false; echo $this->iuygowkemiiwqmiw("\146\x6f\162\x6d\x5f\x61\156\144\137\154\151\163\164", [self::mswoacegomcucaik => ManipulatePost::mwikyscisascoeea($gcqseksiskwueksc), "\x63\x6f\x6d\x6d\145\156\164\137\154\x69\163\x74" => $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii), "\x63\157\155\x6d\x65\156\x74\x5f\146\157\162\x6d" => Form::symcgieuakksimmu()->sqkcuwewwecosise($ywmkwiwkosakssii, $gcqseksiskwueksc)]); } public function render($ywmkwiwkosakssii = []) { echo $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii); } public function uuyycaeqcawcaiqe($aqqmosqmsuueyaes) : bool { $cuakwceieagskoaa = false; $uagwmwoawiwkycao = $this->weysguygiseoukqw(Setting::osoyyuwymacswyum, []); $aqqmosqmsuueyaes = ManipulateComment::get($aqqmosqmsuueyaes); if (!($aqqmosqmsuueyaes && $uagwmwoawiwkycao && $aqqmosqmsuueyaes->comment_parent)) { goto quwcqmyokicssyew; } $mkucggyaiaukqoce = ManipulateComment::issssuygyewuaswa($aqqmosqmsuueyaes); $cuakwceieagskoaa = $mkucggyaiaukqoce && ManipulateUser::esmswawesuyogmik($uagwmwoawiwkycao, $mkucggyaiaukqoce); quwcqmyokicssyew: return $cuakwceieagskoaa; } public function meuoeukiwkeumggk($qscaoekmoooeuyqg, $aqqmosqmsuueyaes) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto iqcogmsguwoikame; } $qscaoekmoooeuyqg = get_bloginfo("\x6e\x61\155\x65"); iqcogmsguwoikame: return $qscaoekmoooeuyqg; } public function wkwiceqaycqsygic($nsmgceoqaqogqmuw = '', $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::mswoacegomcucaik => null, self::kkcqmwgccaygggcu => 1, self::qescuiwgsyuikume => __("\103\157\x6d\155\145\x6e\164", PR__MDL__ADVANCED_CMS), self::kqigmeickowqiiyy => 0, "\x69\163\x5f\x61\152\x61\x78" => false, "\151\x73\137\x72\145\x6e\144\x65\162" => true, "\x64\x61\164\x65\x5f\x66\x6f\162\x6d\141\x74" => ManipulateSetting::uyomwmskouyyqyyq(), "\145\155\x70\x74\x79\137\155\x65\x73\163\141\147\145" => __("\x54\x68\x65\x72\145\40\x61\162\145\x20\156\157\x20\143\157\155\x6d\145\156\x74\x73\x20\171\145\164\56", PR__MDL__ADVANCED_CMS), "\x67\x65\164\137\x63\x6f\x6d\x6d\145\x6e\164\163\137\141\x72\x67\x73" => [], "\x63\x6f\x6d\x6d\x65\x6e\x74\x5f\x77\141\151\164\x69\x6e\x67\137\x74\x65\170\x74" => __("\131\157\x75\x72\x20\143\x6f\155\155\145\156\x74\40\151\163\40\141\x77\x61\151\164\x69\x6e\147\x20\x6d\x6f\144\145\x72\x61\x74\x69\157\156\56", PR__MDL__ADVANCED_CMS)]); $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\162\145\x6e\144\x65\x72\137\x63\157\x6d\155\x65\156\164\163\x5f\141\162\147\x73"), $ywmkwiwkosakssii, $nsmgceoqaqogqmuw); $post = ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik); $qawuqcsueakkgiio = ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu); if ($post) { goto gimmuoqwckiseaik; } $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); goto cmqucgoewuyieoyk; gimmuoqwckiseaik: $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post, true); cmqucgoewuyieoyk: $kcagcoeuiasswusq = []; $mcgoysmkqsqooceq = $ywmkwiwkosakssii["\151\x73\137\141\152\141\170"]; $cgkkqqgoqqmmwysq = $ywmkwiwkosakssii["\151\x73\x5f\x72\x65\156\144\x65\162"]; $qookweymeqawmcwo = ["\x65\x6d\x70\164\x79\137\x6d\x65\x73\163\141\147\x65" => $ywmkwiwkosakssii["\x65\x6d\160\164\171\137\x6d\x65\163\163\141\x67\x65"], "\x68\x61\163\x5f\143\x6f\155\155\x65\x6e\x74" => false, "\x69\163\137\141\x6a\141\x78" => $ywmkwiwkosakssii["\151\163\x5f\141\x6a\141\x78"], self::qescuiwgsyuikume => $ywmkwiwkosakssii[self::qescuiwgsyuikume]]; if (!$gcqseksiskwueksc) { goto mosqsmqimqgqoase; } if (!(($cgkkqqgoqqmmwysq || $mcgoysmkqsqooceq) && $this->skiywicuqacekmuw($gcqseksiskwueksc))) { goto ayyweymyuuiauamo; } $weeomyummeocueyk = array_merge($ywmkwiwkosakssii["\147\145\x74\x5f\x63\x6f\x6d\155\x65\156\164\163\x5f\141\162\x67\x73"], ["\x6e\165\155\142\145\162" => ManipulateComment::omkaowmygoqwsywq(), self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::kqigmeickowqiiyy => $gcqseksiskwueksc]); $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ConvertArray::comkeiiwgwaqmcwe($weeomyummeocueyk)); $kcagcoeuiasswusq = wp_list_comments(["\x65\x63\150\x6f" => false, self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::wwgusigoaksqmwsm => [$this, "\171\x6d\151\x63\x73\x79\161\x65\x63\163\x69\x79\161\x6d\x79\x63"]], $kcagcoeuiasswusq); if ($mcgoysmkqsqooceq) { goto yqykqysmiquwoasu; } $qookweymeqawmcwo["\x70\141\147\151\x6e\141\164\x69\157\156"] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\x65\x74\x5f\x63\x6f\155\155\x65\x6e\x74\137\160\141\147\x69\x6e\x61\164\x69\157\156"), '', [self::mswoacegomcucaik => $gcqseksiskwueksc, "\145\143\x68\x6f" => false]); yqykqysmiquwoasu: ayyweymyuuiauamo: $qookweymeqawmcwo["\x68\141\163\x5f\143\x6f\155\x6d\x65\x6e\x74"] = ManipulatePost::gamoemyysmgugccu($gcqseksiskwueksc); $qookweymeqawmcwo["\x63\x6f\165\156\x74"] = DecoratorPost::qmegicmsiwuuwysa($gcqseksiskwueksc); mosqsmqimqgqoase: if (!$mcgoysmkqsqooceq || $cgkkqqgoqqmmwysq) { goto ygcsmkuycoagwyou; } if (!is_string($kcagcoeuiasswusq)) { goto omugkkesagcyagmk; } $nsmgceoqaqogqmuw = $kcagcoeuiasswusq; omugkkesagcyagmk: goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $qookweymeqawmcwo["\x63\x6f\x6d\155\x65\x6e\164\163"] = $kcagcoeuiasswusq; $qookweymeqawmcwo["\x73\160\151\x6e\156\x65\x72"] = ManipulateHTML::kqmkicmuscsgqeoi(["\164\x72\x61\x6e\x73\x70\141\162\x65\x6e\x74" => true, self::waguuiqqgsysuukq => "\62\x78"]); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x6c\151\x73\x74", $qookweymeqawmcwo); kqksuugcgsyeoayy: return $nsmgceoqaqogqmuw; } public function ayseiumoaouacqcu($mowgokyeuymuwiew, $aqqmosqmsuueyaes, $oiegiwogmwmawkeo) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto ssoucoucsgccekwe; } $uouuguwawimuemic = $this->weysguygiseoukqw(Setting::aammuqouwoakgwgq . self::mswocgcucqoaesaa, 0); if (!$uouuguwawimuemic) { goto qqewoyookaskiuek; } $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\157\x6d\155\x65\156\x74\x5f\x61\x76\141\x74\x61\x72\137\x73\151\x7a\145"), $oiegiwogmwmawkeo, false); $wwgucssaecqekuek = ["\143\154\x61\163\x73" => $mowgokyeuymuwiew ? DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\x69\x6d\x67", "\143\154\x61\x73\163") : '', "\x61\154\164" => __("\x41\165\x74\x68\157\162\x20\x4c\x6f\x67\157", PR__MDL__ADVANCED_CMS)]; $uouuguwawimuemic = ManipulateAttachment::qaeeusqkgwagwaqc($uouuguwawimuemic, $oiegiwogmwmawkeo, $wwgucssaecqekuek); if (!$uouuguwawimuemic) { goto iggyqogweyosuikc; } $mowgokyeuymuwiew = $uouuguwawimuemic; iggyqogweyosuikc: qqewoyookaskiuek: ssoucoucsgccekwe: return $mowgokyeuymuwiew; } public function ymicsyqecsiyqmyc($aqqmosqmsuueyaes, $ywmkwiwkosakssii = [], $gquaqgsmiuqsaoum = 0) { $GLOBALS["\143\157\x6d\x6d\145\156\x74"] = $aqqmosqmsuueyaes; $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\155\x6d\x65\156\x74\x5f\x61\x76\141\164\141\x72\137\163\x69\172\x65"), "\163\x6d\x61\x6c\154", false); echo $this->iuygowkemiiwqmiw("\151\x74\145\x6d", ["\141\162\x67\x73" => $ywmkwiwkosakssii, "\144\x65\x70\164\150" => $gquaqgsmiuqsaoum, "\143\157\155\155\145\x6e\164" => $aqqmosqmsuueyaes, "\151\x64" => ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes), "\x74\145\170\x74" => ManipulateComment::souwykwwmyygqyqi($aqqmosqmsuueyaes), "\x70\x6f\163\164" => ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik), "\160\141\x67\x65" => ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu, 1), "\x74\151\x6d\145\x5f\x6d\141\x73\x6b" => __("\x25\x31\x24\x73\x20\141\164\x20\x25\62\x24\x73", PR__MDL__ADVANCED_CMS), "\x6d\x61\x78\137\144\x65\160\164\x68" => ManipulateArray::get($ywmkwiwkosakssii, "\155\x61\x78\x5f\x64\145\x70\x74\150"), "\x72\x65\x70\x6c\x79\137\151\143\x6f\x6e" => IconFontawesomeInterface::isiauyiaoyuwiamg, "\141\166\x61\164\141\162\137\163\151\x7a\x65" => $oiegiwogmwmawkeo]); } }
