<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b88490d3b29             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Breadcrumb; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use WP_Taxonomy; use WP_Term; class Generator extends Common { const geyisyamuoomusqo = "\144\x69\x76\151\144\145\162"; const iiogewmmwckmegcq = "\150\x6f\x6d\x65\137\x75\x72\x6c"; const yaooyaaieecskqsq = "\167\162\x61\x70\x5f\141\x74\x74\x72\x73"; const reigcooiouysaaok = "\154\151\x6e\153\137\141\164\164\x72\163"; const ceeoggmayqcuoqwi = "\x69\164\145\155\137\x61\164\x74\162\163"; const quewuqgwgceoamee = "\151\164\x65\155\137\x65\x6c\x65\x6d\145\156\164"; const socgekwcqwaoyyug = "\x77\x72\141\160\137\145\154\145\x6d\145\x6e\x74"; const gawcyaqskcsegwey = "\x64\151\x76\151\x64\145\162\x5f\141\x74\164\162\x73"; const koiywqsgmgmgscgy = "\x6c\151\156\153\x5f\x63\157\156\x74\x61\x69\x6e\x65\162"; const mukyymeygmeoawck = "\141\x63\x74\x69\166\145\x5f\151\x74\x65\x6d\x5f\x61\164\164\162\163"; const qywgicgikawmwoay = "\154\x69\156\x6b\137\143\157\x6e\x74\141\x69\156\145\162\x5f\141\x74\x74\162\163"; protected array $items = []; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x67\x65\164\x5f\x62\x72\x65\x61\144\143\x72\165\x6d\x62"), [$this, "\145\143\x77\x6f\141\x6d\x63\x6b\171\163\x79\x71\x69\153\x71\151"]); parent::kgquecmsgcouyaya(); } public function wasgwsogmuquqeaa() : array { return $this->items; } public function ecwoamckysyqikqi() : array { return $this->wasgwsogmuquqeaa(); } public function kooiucqkggeagccu() : array { $ggauoeuaesiymgee = [self::eoaiagsgqsmskugs => ["\x74\141\147" => __("\x50\157\x73\x74\x73\40\x54\141\x67\147\145\144\x3a\x20\x25\x73", PR__MDL__ADVANCED_CMS), "\x34\60\x34" => __("\105\162\162\x6f\162\x20\x34\x30\64", PR__MDL__ADVANCED_CMS), "\164\141\x78" => "\45\x73", "\160\141\147\145" => __("\x50\x61\147\x65\x20\45\x73", PR__MDL__ADVANCED_CMS), "\150\x6f\x6d\145" => get_bloginfo("\156\x61\x6d\x65"), "\x63\160\x61\147\x65" => __("\x43\157\155\155\145\x6e\164\40\120\x61\x67\x65\40\x25\x73", PR__MDL__ADVANCED_CMS), "\163\145\141\162\x63\150" => __("\x53\x65\x61\162\143\150\x20\122\x65\163\x75\x6c\164\x73\40\146\x6f\162\x3a\40\x25\163", PR__MDL__ADVANCED_CMS), "\x61\x75\164\150\x6f\x72" => __("\x41\162\164\151\x63\154\x65\x73\40\x50\x6f\x73\164\x65\144\40\142\x79\40\x25\x73", PR__MDL__ADVANCED_CMS), "\143\x61\164\145\147\157\x72\171" => "\45\163"], self::geyisyamuoomusqo => "\151", self::iiogewmmwckmegcq => esc_url(ManipulateServer::gmigwwwmwemyaayy("\57")), self::quewuqgwgceoamee => "\154\x69", self::socgekwcqwaoyyug => "\x6f\154", self::koiywqsgmgmgscgy => "\x73\160\141\156", self::yaooyaaieecskqsq => ["\x63\x6c\141\163\x73" => "\142\x72\x65\x61\x64\x63\x72\x75\x6d\x62"], self::reigcooiouysaaok => ["\143\154\x61\163\x73" => "\142\162\145\x61\x64\143\x72\165\x6d\142\x2d\154\151\x6e\153"], self::ceeoggmayqcuoqwi => ["\x63\x6c\141\x73\x73" => "\142\162\145\x61\144\x63\162\165\155\x62\55\x69\x74\x65\x6d"], self::gawcyaqskcsegwey => ["\143\154\141\163\x73" => "\142\x72\145\x61\144\x63\x72\x75\x6d\142\55\x64\x69\166\151\x64\x65\162"], self::mukyymeygmeoawck => ["\x63\154\x61\x73\x73" => "\142\162\145\x61\x64\x63\x72\165\155\142\55\x69\164\x65\x6d\x20\141\143\x74\151\166\x65"], self::qywgicgikawmwoay => []]; $ywmkwiwkosakssii = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x62\x72\145\x61\144\x63\x72\x75\155\142\x5f\x67\145\x6e\145\x72\x61\x74\151\x6f\x6e\x5f\141\162\147\163"), []); return ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public function sywokgmoskcocqgy($ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $this->kooiucqkggeagccu()); $gqiaqmycqyywiqsw = $ywmkwiwkosakssii[self::reigcooiouysaaok]; $gqiaqmycqyywiqsw["\150\162\x65\146"] = "\45\x31\44\x73"; $iwywmkygwewiamwm = ManipulateHTML::uuccukgasskgimsq($ywmkwiwkosakssii[self::koiywqsgmgmgscgy], $ywmkwiwkosakssii[self::qywgicgikawmwoay], ManipulateHTML::uuccukgasskgimsq("\141", $gqiaqmycqyywiqsw, "\x25\62\44\x73")); $ysmqgacyqwayokog = ManipulateHTML::uuccukgasskgimsq($ywmkwiwkosakssii[self::geyisyamuoomusqo], $ywmkwiwkosakssii[self::gawcyaqskcsegwey]); $caacssaumiqeaoaw = ManipulateHTML::qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::ceeoggmayqcuoqwi]); $aqykuigiuwmmcieu = ''; $momcykaoccoymeig = 0; $this->create($ywmkwiwkosakssii); $oammesyieqmwuwyi = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\142\162\x65\x61\x64\x63\x72\x75\x6d\x62\x5f\x69\164\145\155\163"), $this->wasgwsogmuquqeaa(), $ywmkwiwkosakssii); $oammesyieqmwuwyi = ManipulateArray::yaeiiwwyckwugsem($oammesyieqmwuwyi, "\x67\x65\164\x50\x72\x69\157\162\151\x74\x79"); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof PageInfo) { goto owuuuiekkaeoeacq; } if (!($igqsaukqcqscimok === end($oammesyieqmwuwyi))) { goto mykiyqcqiegkiqys; } $igqsaukqcqscimok->qmueseocuuekommo(''); $caacssaumiqeaoaw = ManipulateHTML::qgsekwygcgawekeq($ywmkwiwkosakssii[self::quewuqgwgceoamee], $ywmkwiwkosakssii[self::mukyymeygmeoawck]); mykiyqcqiegkiqys: $aqykuigiuwmmcieu .= $caacssaumiqeaoaw; if (!($momcykaoccoymeig !== 0)) { goto agemwookwseyycqo; } $aqykuigiuwmmcieu .= $ysmqgacyqwayokog; agemwookwseyycqo: if ($igqsaukqcqscimok->ycqquoiyyuesegsy()) { goto cquecqekuucwoumw; } $aqykuigiuwmmcieu .= $igqsaukqcqscimok->qcgakseyaikigqco(); goto koiscokkkaimiecq; cquecqekuucwoumw: $aqykuigiuwmmcieu .= sprintf($iwywmkygwewiamwm, $igqsaukqcqscimok->ycqquoiyyuesegsy(), $igqsaukqcqscimok->qcgakseyaikigqco()); koiscokkkaimiecq: $aqykuigiuwmmcieu .= "\74\x2f{$ywmkwiwkosakssii[self::quewuqgwgceoamee]}\76"; $momcykaoccoymeig++; owuuuiekkaeoeacq: aquqkiggamaoegoo: } csieaismmmocyacu: return ManipulateHTML::uuccukgasskgimsq($ywmkwiwkosakssii[self::socgekwcqwaoyyug], $ywmkwiwkosakssii[self::yaooyaaieecskqsq], $aqykuigiuwmmcieu); } private function create($ywmkwiwkosakssii = []) { if ($ywmkwiwkosakssii) { goto saauykgakaeiyoua; } $ywmkwiwkosakssii = $this->kooiucqkggeagccu(); saauykgakaeiyoua: if (!(!is_array($this->wasgwsogmuquqeaa()) || !$this->wasgwsogmuquqeaa())) { goto ksckqkmwiqggykke; } $post = ManipulatePost::get(); $oikyogsosqcyueay = ManipulatePage::cykwscocqwykiocm(); $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($post); $qawuqcsueakkgiio = DecoratorQuery::qaumqeeagueuqkcg(self::kkcqmwgccaygggcu); $iwkyyocymeukcceu = ManipulateArray::get($ywmkwiwkosakssii, self::eoaiagsgqsmskugs); $uogwqioiiwqsyksu = ManipulateArray::get($ywmkwiwkosakssii, self::iiogewmmwckmegcq); $eiyqsiwggkuuqqee = ManipulatePost::ygqycmmkoiuocoia($post); $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($post); if (DecoratorQuery::takycgcamoacksqw()) { goto cuwcsamuuqyuyqsu; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x68\x6f\155\145"), $uogwqioiiwqsyksu, false)->ugaqcouwcuiaemgo("\x66\x72\x6f\x6e\164\137\160\141\x67\145")); if (DecoratorQuery::seokosgecygsmqau()) { goto mqgeseysuwcaqwiy; } if (DecoratorQuery::sgayqmgoigoseaoo()) { goto sycougcyeqmeiagk; } if (DecoratorQuery::qmssqeyayicowkgy()) { goto giugwaeuwaomossq; } if (DecoratorQuery::gouusicsisumuiei()) { goto yoqsigmoyaaceqky; } if (DecoratorQuery::qwakseskocsyiyks()) { goto masakmomqmeocqqg; } if (DecoratorQuery::mgkmukikygowogsm()) { goto yqcusaeysomccaok; } if (DecoratorQuery::wqscegcksyocaias()) { goto sgocecweikecwwgq; } if (DecoratorQuery::kccakwkaqugygwmq() && !DecoratorQuery::aauyuieeeaakygki()) { goto qeuyekusasqmcqms; } if (ManipulatePost::sqyyemqmmgmyiaam()) { goto auumaoycmsmsgigs; } if (DecoratorQuery::aauyuieeeaakygki()) { goto ygcgoaokauigwuus; } if (DecoratorQuery::sgeaogakoscmysgc() && !$eiyqsiwggkuuqqee) { goto qyyyycwaookqaoke; } if (DecoratorQuery::sgeaogakoscmysgc() && $eiyqsiwggkuuqqee) { goto iymaiwqimisgacmk; } if (DecoratorQuery::ocwoeosukggumggw()) { goto quamuugoocyyceec; } if (DecoratorQuery::mykygowqgwcuecua()) { goto omuauimgkygcecsc; } if (DecoratorQuery::kmmyuiwaogukwqqi()) { goto aumowowgewgqmwci; } if (!(has_post_format() && !DecoratorQuery::cukiusasccucgwqc())) { goto kyiuewcikkqagwwg; } $this->wuqmciamumosasqa(get_post_format_string(get_post_format())); kyiuewcikkqagwwg: goto oasggeyceiyieuuo; aumowowgewgqmwci: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x34\60\64")); oasggeyceiyieuuo: goto wwcqoeuwskquakwy; omuauimgkygcecsc: $qscaoekmoooeuyqg = ManipulateUser::get(DecoratorQuery::qaumqeeagueuqkcg("\x61\x75\x74\x68\x6f\162"), true); if ($qawuqcsueakkgiio) { goto eqiiaokcgakicaye; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x61\x75\x74\x68\x6f\162"), ManipulateUser::ygwimyogyaqgumam($qscaoekmoooeuyqg))); goto gcucsowqoeiwmyyq; eqiiaokcgakicaye: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x61\165\164\x68\x6f\x72"), ManipulateUser::ygwimyogyaqgumam($qscaoekmoooeuyqg)), DecoratorAuthor::mkaiaewoyaimieqg($qscaoekmoooeuyqg), false)->ugaqcouwcuiaemgo("\141\165\x74\150\x6f\x72")); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x70\x61\147\x65"), $qawuqcsueakkgiio)); gcucsowqoeiwmyyq: wwcqoeuwskquakwy: goto qcssigmcayuyweiy; quamuugoocyyceec: if ($qawuqcsueakkgiio) { goto cyosacayacumuaks; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x74\141\x67"), single_tag_title('', false))); goto ikcwmsgocyuqiumc; cyosacayacumuaks: $scwiymciagumsuiw = DecoratorQuery::qaumqeeagueuqkcg("\x74\x61\147\x5f\x69\x64"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(single_tag_title('', false), ManipulateTerm::qmgcisuuikgmqcsu($scwiymciagumsuiw), false)->ugaqcouwcuiaemgo("\164\141\170\157\x6e\x6f\155\171")->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($scwiymciagumsuiw))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\160\141\147\145"), $qawuqcsueakkgiio)); ikcwmsgocyuqiumc: qcssigmcayuyweiy: goto mugscgugcogcasue; iymaiwqimisgacmk: $eyagosskwwmgwmog = get_post_ancestors(ManipulatePost::mwikyscisascoeea($post)); foreach (array_reverse($eyagosskwwmgwmog) as $qkcoyiyeuoyyoocy) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($qkcoyiyeuoyyoocy), ManipulatePost::ycqquoiyyuesegsy($qkcoyiyeuoyyoocy), false)->ugaqcouwcuiaemgo("\160\x61\x67\x65")); sicgyiyiocyygkoc: } giuccakymqymawgk: $this->wuqmciamumosasqa($meqocwsecsywiiqs); mugscgugcogcasue: goto ssywsaaqqaucesau; qyyyycwaookqaoke: $oammesyieqmwuwyi = $this->sscegwueamckwmcy(self::ggcmgaccygaquiwu . "\160\x61\x67\x65\x5f\151\x74\145\x6d", ["\150\x61\163\137\x70\141\x67\x65\x5f\x6e\141\x6d\x65" => true], $post); if (!($oammesyieqmwuwyi && isset($oammesyieqmwuwyi["\150\x61\x73\137\x70\x61\x67\x65\x5f\156\141\155\x65"]) && $oammesyieqmwuwyi["\150\141\x73\x5f\x70\141\147\x65\x5f\156\141\x6d\x65"])) { goto kwuckkyqaygwgcuy; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); kwuckkyqaygwgcuy: ssywsaaqqaucesau: goto ysiqakyaiooyscwy; ygcgoaokauigwuus: $omwmuycmeqcqokom = ManipulatePost::get($eiyqsiwggkuuqqee); $awiycosuekoeeqou = get_the_category(ManipulatePost::mwikyscisascoeea($omwmuycmeqcqokom)); $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($awiycosuekoeeqou), ManipulateTerm::qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo("\164\141\x78\157\156\157\155\x79")->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($awiycosuekoeeqou))); oeusomaaeekakake: } yyqygaokeccgugos: $this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($omwmuycmeqcqokom), ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo("\x73\x69\x6e\x67\x6c\x65")->aseocggwwegcmqes(ManipulatePost::gueasuouwqysmomu($omwmuycmeqcqokom)); $this->wuqmciamumosasqa($meqocwsecsywiiqs); ysiqakyaiooyscwy: goto ousmyagwsiooumos; auumaoycmsmsgigs: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post, true); if (!$useksmwkuswkwcqg) { goto aeiemwacaiygemmg; } if ($qawuqcsueakkgiio) { goto iuwkiyimqmgguose; } $this->wuqmciamumosasqa($useksmwkuswkwcqg->label); goto yggseoaommssscwo; iuwkiyimqmgguose: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($useksmwkuswkwcqg->label, ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg->name), false)->ugaqcouwcuiaemgo("\x70\157\163\x74\137\x74\171\x70\x65")->aseocggwwegcmqes($useksmwkuswkwcqg->name)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x70\141\147\145"), $qawuqcsueakkgiio)); yggseoaommssscwo: aeiemwacaiygemmg: ousmyagwsiooumos: goto yiceawuuiusakwiq; qeuyekusasqmcqms: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if ("\x70\157\163\x74" != $useksmwkuswkwcqg) { goto sksgcusuyqcwqswe; } if (!("\x70\x6f\163\164" == $useksmwkuswkwcqg)) { goto qkyciyiwkmgkmquk; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($oikyogsosqcyueay), ManipulatePost::ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo("\x68\157\155\x65")); $awiycosuekoeeqou = get_the_category(); if (!isset($awiycosuekoeeqou[0])) { goto aoaqwygkaagiuuws; } $eyagosskwwmgwmog = $this->yceuwwmgwwqqcweu($awiycosuekoeeqou); foreach ($eyagosskwwmgwmog as $awiycosuekoeeqou) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($awiycosuekoeeqou), ManipulateTerm::qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo("\x74\141\170\x6f\x6e\157\x6d\x79")->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($awiycosuekoeeqou))); gqimwsyemoewagcy: } awgmegueeqeyqamu: aoaqwygkaagiuuws: if (DecoratorQuery::qaumqeeagueuqkcg("\x63\x70\x61\x67\145")) { goto esagiiawomyacuiw; } $this->wuqmciamumosasqa($meqocwsecsywiiqs); goto maaisuqwkymeguys; esagiiawomyacuiw: $this->oeewiaacscgyamai($this->wuqmciamumosasqa($meqocwsecsywiiqs, $migiiksoiymissge, false)->ugaqcouwcuiaemgo("\x73\x69\x6e\x67\x6c\145")->aseocggwwegcmqes(ManipulatePost::gueasuouwqysmomu($useksmwkuswkwcqg, true)->name)); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\143\x70\x61\x67\145"), DecoratorQuery::qaumqeeagueuqkcg("\143\160\x61\x67\145"))); maaisuqwkymeguys: qkyciyiwkmgkmquk: goto ayceeyuocgowqwsa; sksgcusuyqcwqswe: if (!($useksmwkuswkwcqg = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg))) { goto kyiwsiakwgiwouyi; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($useksmwkuswkwcqg->labels->name, ManipulatePost::mqgeysameoesmuqw($useksmwkuswkwcqg), false)->ugaqcouwcuiaemgo("\160\x6f\163\x74\x5f\164\171\x70\145")->aseocggwwegcmqes($useksmwkuswkwcqg->name)); $kesssewsiegssiya = ManipulateArray::get($useksmwkuswkwcqg, "\x6d\x61\151\156\x5f\164\x61\170\x6f\x6e\x6f\155\x79"); if (!$kesssewsiegssiya) { goto oeamoqweiueaueay; } $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya); if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto icumkkykaoqycqqu; } if (!(!$kesssewsiegssiya->_builtin && property_exists($kesssewsiegssiya, "\163\x69\156\x67\x6c\145\137\x76\141\154\x75\145") && $kesssewsiegssiya->single_value)) { goto eweaaismksecwagy; } $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya)); if (!(is_array($uyuaosigqymaqsaa) && isset($uyuaosigqymaqsaa[0]))) { goto mcqucouuiuoagqwc; } $iwewcwusemqaiggk = $uyuaosigqymaqsaa[0]; $qyiciauwscqywwgq = $kesssewsiegssiya; $eyagosskwwmgwmog = get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), ManipulateTaxonomy::aakmagwggmkoiiyu($qyiciauwscqywwgq), "\164\x61\x78\x6f\156\x6f\x6d\171"); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = ManipulateTerm::get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($sikiyacogecgmyai), ManipulateTerm::qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo("\x74\x61\x78\157\156\x6f\x6d\x79")->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($sikiyacogecgmyai))); syusgosewwkoagoq: } egesuwkqkmaigaoe: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo("\x74\141\x78\157\156\x6f\155\171")->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk))); mcqucouuiuoagqwc: eweaaismksecwagy: icumkkykaoqycqqu: oeamoqweiueaueay: if (!($omwmuycmeqcqokom = ManipulatePost::ygqycmmkoiuocoia($post))) { goto owgsameoayaogsma; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($omwmuycmeqcqokom), ManipulatePost::ycqquoiyyuesegsy($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo("\x73\151\x6e\x67\x6c\x65")->aseocggwwegcmqes(ManipulatePost::gueasuouwqysmomu($omwmuycmeqcqokom))); owgsameoayaogsma: $this->wuqmciamumosasqa($meqocwsecsywiiqs); kyiwsiakwgiwouyi: ayceeyuocgowqwsa: yiceawuuiusakwiq: goto qwisiamkmkkwucyo; sgocecweikecwwgq: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\x59")), false)->ugaqcouwcuiaemgo("\171\x65\x61\x72")); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x46"), get_month_link(get_the_time("\131"), get_the_time("\106")), false)->ugaqcouwcuiaemgo("\155\157\156\x74\x68")); $this->wuqmciamumosasqa(get_the_time("\144")); qwisiamkmkkwucyo: goto iwkckkeimmeoquyq; yqcusaeysomccaok: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(get_the_time("\x59"), get_year_link(get_the_time("\131")), false)->ugaqcouwcuiaemgo("\x79\145\141\162")); $this->wuqmciamumosasqa(get_the_time("\x46")); iwkckkeimmeoquyq: goto yksywwikmeksikqc; masakmomqmeocqqg: $this->wuqmciamumosasqa(get_the_time("\x59")); yksywwikmeksikqc: goto suqckoccuyeeymww; yoqsigmoyaaceqky: $qmqecyyaiimkyaae = get_search_query(); if ($qawuqcsueakkgiio) { goto ykqsuiyyosyeyscc; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x73\x65\x61\x72\x63\x68"), $qmqecyyaiimkyaae)); goto ugogoekeckgcmuaw; ykqsuiyyosyeyscc: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x73\x65\x61\x72\x63\x68"), get_search_query(self::kkcqmwgccaygggcu)), DecoratorQuery::yqymaqmqiqmmmsoo("\x73", $qmqecyyaiimkyaae, $uogwqioiiwqsyksu), false)->ugaqcouwcuiaemgo("\163\x65\x61\x72\x63\150")); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x70\141\147\145"), $qawuqcsueakkgiio)); ugogoekeckgcmuaw: suqckoccuyeeymww: goto acgqaeakoyasgkku; giugwaeuwaomossq: $iwewcwusemqaiggk = DecoratorQuery::imgymusqgccqsqqq(); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto uscokkmquayiukag; } $kesssewsiegssiya = ManipulateArray::get(DecoratorQuery::imgymusqgccqsqqq(), "\164\141\170\x6f\x6e\157\155\171"); if (!$kesssewsiegssiya) { goto isewysikysqewkis; } $qyiciauwscqywwgq = ManipulateTaxonomy::imgymusqgccqsqqq($kesssewsiegssiya); if (!$qyiciauwscqywwgq instanceof WP_Taxonomy) { goto ugykmcouiwiscoqu; } foreach ($qyiciauwscqywwgq->object_type as $useksmwkuswkwcqg) { $wkqsmssuaiaqmeee = ManipulatePost::waaisqccqacqeium($useksmwkuswkwcqg); if (!($wkqsmssuaiaqmeee && $wkqsmssuaiaqmeee->public)) { goto gsymkkskwsgggoic; } $this->oeewiaacscgyamai($this->wuqmciamumosasqa($wkqsmssuaiaqmeee->label, ManipulatePost::mqgeysameoesmuqw($wkqsmssuaiaqmeee), false)->ugaqcouwcuiaemgo("\x70\157\163\x74\x5f\x74\x79\160\x65")->aseocggwwegcmqes($useksmwkuswkwcqg)); goto mceucsaeouuwyumm; gsymkkskwsgggoic: ceiuqsiqgiuiekem: } mceucsaeouuwyumm: ugykmcouiwiscoqu: isewysikysqewkis: $eyagosskwwmgwmog = get_ancestors(ManipulateTerm::mwikyscisascoeea($iwewcwusemqaiggk), ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk), "\x74\x61\x78\x6f\156\157\155\x79"); foreach (array_reverse($eyagosskwwmgwmog) as $eiyqsiwggkuuqqee) { $sikiyacogecgmyai = ManipulateTerm::get($eiyqsiwggkuuqqee); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($sikiyacogecgmyai), ManipulateTerm::qmgcisuuikgmqcsu($sikiyacogecgmyai), false)->ugaqcouwcuiaemgo("\x74\141\x78\x6f\x6e\x6f\x6d\171")->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($sikiyacogecgmyai))); igmmqwyawcuuckkq: } wiwoiyoakywqyaiy: if ($qawuqcsueakkgiio) { goto eouwacqiommmeaqc; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\164\x61\x78"), ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk))); goto sqwuqegeiisoiiuq; eouwacqiommmeaqc: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk), false)->ugaqcouwcuiaemgo("\x74\141\170\x6f\x6e\157\155\171")->aseocggwwegcmqes(ManipulateTerm::yyoeeseewqmmyaee($iwewcwusemqaiggk))); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\160\141\x67\x65"), $qawuqcsueakkgiio)); sqwuqegeiisoiiuq: uscokkmquayiukag: acgqaeakoyasgkku: goto ssagcgqaucssyego; sycougcyeqmeiagk: $awiycosuekoeeqou = DecoratorQuery::qaumqeeagueuqkcg("\143\141\164"); $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($oikyogsosqcyueay), ManipulatePost::ycqquoiyyuesegsy($oikyogsosqcyueay), false)->ugaqcouwcuiaemgo("\x68\x6f\155\x65")); $eyagosskwwmgwmog = get_ancestors($awiycosuekoeeqou, "\143\141\x74\x65\147\157\x72\171"); foreach (array_reverse($eyagosskwwmgwmog) as $omwmuycmeqcqokom) { $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($omwmuycmeqcqokom), ManipulateTerm::qmgcisuuikgmqcsu($omwmuycmeqcqokom), false)->ugaqcouwcuiaemgo("\x74\x61\170\x6f\x6e\x6f\155\x79")->aseocggwwegcmqes("\143\141\164\x65\147\157\x72\171")); mqimkwickkgqqeoi: } qwemkcoaseywkuuc: if ($qawuqcsueakkgiio) { goto kwyimqumkuuyaiku; } $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\143\141\x74\145\147\157\x72\x79"), single_cat_title('', false))); goto gkqiqaqecmoogmaa; kwyimqumkuuyaiku: $this->oeewiaacscgyamai($this->wuqmciamumosasqa(ManipulateTerm::qcgakseyaikigqco($awiycosuekoeeqou), ManipulateTerm::qmgcisuuikgmqcsu($awiycosuekoeeqou), false)->ugaqcouwcuiaemgo("\x74\141\x78\x6f\x6e\x6f\155\x79")->aseocggwwegcmqes("\x63\x61\x74\x65\x67\x6f\162\x79")); $this->wuqmciamumosasqa(sprintf($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\x70\x61\147\145"), $qawuqcsueakkgiio)); gkqiqaqecmoogmaa: ssagcgqaucssyego: goto ekoqieigyoeyauqa; mqgeseysuwcaqwiy: $this->wuqmciamumosasqa(ManipulatePost::qcgakseyaikigqco($oikyogsosqcyueay)); ekoqieigyoeyauqa: goto mimacwyuueomgwwy; cuwcsamuuqyuyqsu: $this->wuqmciamumosasqa($this->uikgwcuascgeissw($iwkyyocymeukcceu, "\150\x6f\155\145"), $uogwqioiiwqsyksu); mimacwyuueomgwwy: ksckqkmwiqggykke: } protected function oeewiaacscgyamai(PageInfo $igqsaukqcqscimok) : self { $this->items[] = $igqsaukqcqscimok; return $this; } public function uikgwcuascgeissw($iwkyyocymeukcceu, $uusmaiomayssaecw) : ?string { return ManipulateArray::get($iwkyyocymeukcceu, $uusmaiomayssaecw, ''); } protected function yceuwwmgwwqqcweu($guwumyyyakswawas) : array { $aokagokqyuysuksm = $guwumyyyakswawas[0]->cat_ID; $eyagosskwwmgwmog = get_ancestors($aokagokqyuysuksm, "\143\x61\x74\x65\x67\x6f\x72\171"); $eyagosskwwmgwmog = array_reverse($eyagosskwwmgwmog); $eyagosskwwmgwmog[] = $aokagokqyuysuksm; return $eyagosskwwmgwmog; } protected function wuqmciamumosasqa(?string $meqocwsecsywiiqs, ?string $migiiksoiymissge = '', $goiqeyeaqmicqiky = true) : PageInfo { static $ikwcsswcseyywgeo; if ($ikwcsswcseyywgeo) { goto igwkcikeyoowosoi; } $ikwcsswcseyywgeo = 1; igwkcikeyoowosoi: $igqsaukqcqscimok = new PageInfo(); if (!$goiqeyeaqmicqiky) { goto iqsgossweywksoia; } $yyimiwcuegayoskq = ManipulatePage::iqoacwuiemooiysg(); $this->oeewiaacscgyamai($igqsaukqcqscimok->ugaqcouwcuiaemgo($yyimiwcuegayoskq->asuigsqoowmekwok())->aseocggwwegcmqes($yyimiwcuegayoskq->gueasuouwqysmomu())); iqsgossweywksoia: $ikwcsswcseyywgeo += 10; $igqsaukqcqscimok->gswweykyogmsyawy($meqocwsecsywiiqs)->jyumyyugiwwiqomk($ikwcsswcseyywgeo)->uaomeggmwqmmeoki($goiqeyeaqmicqiky)->qmueseocuuekommo($this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x62\162\145\141\x64\143\x72\x75\x6d\x62\137\x70\141\147\145\137\151\156\146\157\137\160\145\162\x6d\141\154\151\156\153"), $migiiksoiymissge)); return $igqsaukqcqscimok; } }
