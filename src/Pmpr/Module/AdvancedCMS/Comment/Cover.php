<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624029fab98f6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Cover extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\143\157\155\x6d\145\x6e\x74\x5f\154\151\163\x74\x5f\x72\145\x6e\x64\145\x72"), [$this, "\162\145\x6e\144\145\162"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\143\x6f\155\x6d\145\156\x74\x5f\146\x6f\x72\155\x5f\x61\x6e\144\137\x6c\151\x73\x74\x5f\162\x65\156\x64\x65\x72"), [$this, "\x69\x73\x69\x79\x61\163\171\x75\x61\153\165\153\163\x69\141\155"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::ayumqueugowuywqs)) { goto kiwqkcaekqqyuegq; } $this->cecaguuoecmccuse("\147\145\x74\137\x61\x76\x61\164\141\x72", [$this, "\x61\x79\163\145\151\165\x6d\157\141\x6f\165\x61\x63\161\x63\165"], 10, 3)->cecaguuoecmccuse("\147\x65\164\137\143\157\155\x6d\145\156\164\137\x61\165\164\x68\157\162", [$this, "\155\x65\x75\x6f\x65\x75\x6b\151\167\153\x65\165\x6d\x67\147\153"], 10, 2); kiwqkcaekqqyuegq: } public function isiyasyuakuksiam($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::kqigmeickowqiiyy => ManipulatePost::mwikyscisascoeea()]); $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); $ywmkwiwkosakssii["\145\143\x68\x6f"] = false; echo $this->iuygowkemiiwqmiw("\x66\157\x72\x6d\x5f\x61\x6e\x64\137\154\151\163\164", [self::mswoacegomcucaik => ManipulatePost::mwikyscisascoeea($gcqseksiskwueksc), "\143\x6f\155\x6d\145\x6e\x74\x5f\154\x69\163\164" => $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii), "\143\x6f\x6d\x6d\145\156\x74\137\x66\157\162\155" => Form::symcgieuakksimmu()->sqkcuwewwecosise($ywmkwiwkosakssii, $gcqseksiskwueksc)]); } public function render($ywmkwiwkosakssii = []) { echo $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii); } public function uuyycaeqcawcaiqe($aqqmosqmsuueyaes) : bool { $cuakwceieagskoaa = false; $uagwmwoawiwkycao = $this->weysguygiseoukqw(Setting::osoyyuwymacswyum, []); $aqqmosqmsuueyaes = ManipulateComment::get($aqqmosqmsuueyaes); if (!($aqqmosqmsuueyaes && $uagwmwoawiwkycao && $aqqmosqmsuueyaes->comment_parent)) { goto quwcqmyokicssyew; } $mkucggyaiaukqoce = ManipulateComment::issssuygyewuaswa($aqqmosqmsuueyaes); $cuakwceieagskoaa = $mkucggyaiaukqoce && ManipulateUser::esmswawesuyogmik($uagwmwoawiwkycao, $mkucggyaiaukqoce); quwcqmyokicssyew: return $cuakwceieagskoaa; } public function meuoeukiwkeumggk($qscaoekmoooeuyqg, $aqqmosqmsuueyaes) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto iqcogmsguwoikame; } $qscaoekmoooeuyqg = get_bloginfo("\x6e\141\155\145"); iqcogmsguwoikame: return $qscaoekmoooeuyqg; } public function wkwiceqaycqsygic($nsmgceoqaqogqmuw = '', $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::mswoacegomcucaik => null, self::kkcqmwgccaygggcu => 1, self::qescuiwgsyuikume => __("\103\157\155\155\x65\x6e\x74", PR__MDL__ADVANCED_CMS), self::kqigmeickowqiiyy => 0, "\x69\163\x5f\141\x6a\x61\x78" => false, "\x69\x73\137\162\145\x6e\144\x65\162" => true, "\x64\141\x74\145\137\x66\157\162\155\x61\x74" => ManipulateSetting::uyomwmskouyyqyyq(), "\x65\155\160\x74\171\137\155\145\163\x73\141\x67\x65" => __("\124\150\x65\162\x65\40\141\162\x65\x20\156\x6f\40\143\x6f\155\155\x65\x6e\x74\x73\40\x79\x65\164\x2e", PR__MDL__ADVANCED_CMS), "\147\x65\164\137\x63\x6f\x6d\155\145\x6e\164\163\x5f\141\x72\147\x73" => [], "\x63\x6f\155\x6d\x65\156\164\137\167\141\x69\x74\x69\x6e\x67\137\164\145\170\164" => __("\131\x6f\165\x72\x20\143\x6f\155\155\145\x6e\164\40\151\163\40\x61\x77\x61\x69\x74\x69\x6e\147\x20\x6d\157\x64\x65\x72\x61\x74\151\157\x6e\56", PR__MDL__ADVANCED_CMS)]); $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\162\x65\x6e\144\x65\162\137\143\x6f\155\155\145\156\x74\x73\137\141\162\x67\163"), $ywmkwiwkosakssii, $nsmgceoqaqogqmuw); $post = ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik); $qawuqcsueakkgiio = ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu); if ($post) { goto gimmuoqwckiseaik; } $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); goto cmqucgoewuyieoyk; gimmuoqwckiseaik: $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post, true); cmqucgoewuyieoyk: $kcagcoeuiasswusq = []; $mcgoysmkqsqooceq = $ywmkwiwkosakssii["\151\x73\137\141\x6a\x61\170"]; $cgkkqqgoqqmmwysq = $ywmkwiwkosakssii["\x69\163\x5f\x72\x65\x6e\144\145\x72"]; $qookweymeqawmcwo = ["\145\x6d\160\x74\171\137\155\145\x73\163\141\147\x65" => $ywmkwiwkosakssii["\145\155\160\x74\171\137\x6d\x65\163\x73\x61\x67\145"], "\150\141\163\137\x63\x6f\x6d\155\x65\156\x74" => false, "\x69\163\x5f\141\152\x61\170" => $ywmkwiwkosakssii["\x69\x73\137\x61\x6a\x61\x78"], self::qescuiwgsyuikume => $ywmkwiwkosakssii[self::qescuiwgsyuikume]]; if (!$gcqseksiskwueksc) { goto mosqsmqimqgqoase; } if (!(($cgkkqqgoqqmmwysq || $mcgoysmkqsqooceq) && $this->skiywicuqacekmuw($gcqseksiskwueksc))) { goto ayyweymyuuiauamo; } $weeomyummeocueyk = array_merge($ywmkwiwkosakssii["\147\x65\x74\137\143\157\155\x6d\x65\x6e\x74\x73\137\x61\x72\x67\x73"], ["\156\165\155\x62\145\x72" => ManipulateComment::omkaowmygoqwsywq(), self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::kqigmeickowqiiyy => $gcqseksiskwueksc]); $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ConvertArray::comkeiiwgwaqmcwe($weeomyummeocueyk)); $kcagcoeuiasswusq = wp_list_comments(["\145\143\x68\157" => false, self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::wwgusigoaksqmwsm => [$this, "\x79\x6d\151\143\x73\x79\x71\x65\143\163\151\x79\x71\155\171\x63"]], $kcagcoeuiasswusq); if ($mcgoysmkqsqooceq) { goto yqykqysmiquwoasu; } $qookweymeqawmcwo["\x70\x61\x67\151\x6e\141\x74\151\x6f\x6e"] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\x65\164\x5f\x63\157\155\155\145\156\x74\x5f\160\141\x67\151\156\141\x74\x69\157\156"), '', [self::mswoacegomcucaik => $gcqseksiskwueksc, "\x65\143\x68\157" => false]); yqykqysmiquwoasu: ayyweymyuuiauamo: $qookweymeqawmcwo["\150\141\x73\137\x63\157\x6d\155\x65\x6e\x74"] = ManipulatePost::gamoemyysmgugccu($gcqseksiskwueksc); $qookweymeqawmcwo["\143\157\165\x6e\x74"] = DecoratorPost::qmegicmsiwuuwysa($gcqseksiskwueksc); mosqsmqimqgqoase: if (!$mcgoysmkqsqooceq || $cgkkqqgoqqmmwysq) { goto ygcsmkuycoagwyou; } if (!is_string($kcagcoeuiasswusq)) { goto omugkkesagcyagmk; } $nsmgceoqaqogqmuw = $kcagcoeuiasswusq; omugkkesagcyagmk: goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $qookweymeqawmcwo["\143\x6f\x6d\155\145\156\164\163"] = $kcagcoeuiasswusq; $qookweymeqawmcwo["\163\160\151\x6e\x6e\145\162"] = ManipulateHTML::kqmkicmuscsgqeoi(["\164\162\141\x6e\x73\x70\141\162\145\x6e\164" => true, self::waguuiqqgsysuukq => "\x32\170"]); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x6c\x69\x73\x74", $qookweymeqawmcwo); kqksuugcgsyeoayy: return $nsmgceoqaqogqmuw; } public function ayseiumoaouacqcu($mowgokyeuymuwiew, $aqqmosqmsuueyaes, $oiegiwogmwmawkeo) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto ssoucoucsgccekwe; } $uouuguwawimuemic = $this->weysguygiseoukqw(Setting::aammuqouwoakgwgq . self::mswocgcucqoaesaa, 0); if (!$uouuguwawimuemic) { goto qqewoyookaskiuek; } $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\155\x6d\145\156\x74\x5f\x61\166\x61\164\x61\x72\137\163\x69\172\x65"), $oiegiwogmwmawkeo, false); $wwgucssaecqekuek = ["\x63\154\x61\163\163" => $mowgokyeuymuwiew ? DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\x69\x6d\x67", "\143\154\141\x73\163") : '', "\x61\x6c\164" => __("\x41\x75\164\x68\x6f\x72\x20\114\157\147\157", PR__MDL__ADVANCED_CMS)]; $uouuguwawimuemic = ManipulateAttachment::qaeeusqkgwagwaqc($uouuguwawimuemic, $oiegiwogmwmawkeo, $wwgucssaecqekuek); if (!$uouuguwawimuemic) { goto iggyqogweyosuikc; } $mowgokyeuymuwiew = $uouuguwawimuemic; iggyqogweyosuikc: qqewoyookaskiuek: ssoucoucsgccekwe: return $mowgokyeuymuwiew; } public function ymicsyqecsiyqmyc($aqqmosqmsuueyaes, $ywmkwiwkosakssii = [], $gquaqgsmiuqsaoum = 0) { $GLOBALS["\x63\157\x6d\x6d\x65\x6e\164"] = $aqqmosqmsuueyaes; $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\x6d\155\x65\156\164\x5f\141\166\141\164\x61\x72\x5f\x73\151\172\145"), "\x73\x6d\x61\x6c\154", false); echo $this->iuygowkemiiwqmiw("\151\x74\x65\x6d", ["\141\x72\147\x73" => $ywmkwiwkosakssii, "\x64\x65\160\x74\150" => $gquaqgsmiuqsaoum, "\143\x6f\x6d\x6d\145\156\164" => $aqqmosqmsuueyaes, "\151\x64" => ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes), "\x74\x65\x78\164" => ManipulateComment::souwykwwmyygqyqi($aqqmosqmsuueyaes), "\x70\157\163\x74" => ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik), "\x70\x61\x67\145" => ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu, 1), "\164\x69\155\145\x5f\155\x61\163\153" => __("\x25\x31\44\x73\40\141\x74\40\x25\x32\x24\163", PR__MDL__ADVANCED_CMS), "\155\141\x78\137\x64\x65\160\164\150" => ManipulateArray::get($ywmkwiwkosakssii, "\x6d\x61\x78\x5f\x64\145\160\x74\150"), "\162\145\x70\154\x79\137\x69\143\157\x6e" => IconFontawesomeInterface::isiauyiaoyuwiamg, "\141\x76\x61\164\x61\162\137\163\151\172\145" => $oiegiwogmwmawkeo]); } }
