<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce116c94039             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\AttributeTrait; use CMB2_Boxes; class MetaTab extends Common { use AttributeTrait; protected ?string $id = null; protected bool $hide = false; protected bool $once = false; protected bool $regKey = true; protected ?string $hook = null; protected ?string $topMenu = null; protected ?string $postsSlug = null; protected ?string $key = "\x6d\x79\x5f\x6f\160\x74\151\157\x6e"; protected array $menuArgs = ["\x76\x69\x65\167\x5f\143\141\160\x61\x62\x69\x6c\151\x74\x79" => '', "\160\141\162\x65\156\164\x5f\163\154\165\147" => '', "\160\x61\x67\145\x5f\x74\151\164\x6c\145" => '', "\155\x65\x6e\165\137\x74\151\164\x6c\145" => '', "\143\x61\160\x61\142\x69\x6c\151\164\x79" => "\155\141\156\x61\x67\x65\x5f\x6f\160\164\151\157\x6e\163", "\155\145\156\165\137\163\x6c\165\147" => '', "\x69\x63\x6f\156\x5f\165\x72\154" => '', "\160\x6f\x73\x69\164\151\x6f\x6e" => null, "\x6e\x65\x74\167\157\x72\153" => false]; protected array $tabs = []; protected int $column = 1; protected $saveText = false; protected $resetText = false; protected array $load = []; protected ?string $title = ''; protected ?string $page = null; protected ?array $metaBoxes = []; public function __construct($uusmaiomayssaecw = null) { if (!(is_admin() && class_exists("\x43\x4d\x42\x32"))) { goto yqykqysmiquwoasu; } $this->id = $this->iaqckqwoiseyqaku(); $this->key = $uusmaiomayssaecw; parent::__construct(); yqykqysmiquwoasu: } public function qsqiqgmeoowykuue() : ?array { return $this->metaBoxes; } public function sikqggwmmykuiymy(MetaBox $qkweikswegyciaie) : self { $this->metaBoxes[$qkweikswegyciaie->mwikyscisascoeea()] = $qkweikswegyciaie; return $this; } public function swqsasqieqqgusew(?string $suaemuyiacqyugsm) : self { $this->page = $suaemuyiacqyugsm; return $this; } public function kyqakacqeumicgag() : ?string { return $this->page; } public function ecogksqmogoywequ(bool $caeimyuwaykuuaay) : self { $this->hide = $caeimyuwaykuuaay; return $this; } public function ekwgmoqoeywwwccw() : bool { return $this->hide; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function licekmysugkqeoay() : array { return $this->menuArgs; } public function qaygoqgeieeugsey($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->menuArgs[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function mmsykuomogaqoaye() : ?string { return $this->hook; } public function oggwewqswcggccae(?string $iaakskwmyqceoscy) : self { $this->hook = $iaakskwmyqceoscy; return $this; } public function ceiqwucmgawwmawo($ioeaaqcyogamwwqc) : self { $this->saveText = $ioeaaqcyogamwwqc; return $this; } public function kusoyyuwiukiokww() { return $this->saveText; } public function kkigeuaeguyueaem($kqkwemukaemqoyas) : self { $this->resetText = $kqkwemukaemqoyas; return $this; } public function occsuagsiuuimcoy() { return $this->resetText; } public function eigooueumicckoge() : array { return $this->load; } public function agcaegggmmeuammg($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->licekmysugkqeoay(), $uusmaiomayssaecw); } public function ecmssiawmckmucas(bool $msykisgooaaamcio) : self { $this->regKey = $msykisgooaaamcio; return $this; } public function agciemoaikwmiugi() : bool { return $this->regKey; } public function iaqckqwoiseyqaku() : string { return "\x63\x6d\x6f" . rand(1000, 99999); } public function ycwgegqesceyoocw(int $qgoqiacsiccwoawi) : self { if (!($qgoqiacsiccwoawi > 2 || $qgoqiacsiccwoawi < 1)) { goto ayyweymyuuiauamo; } $qgoqiacsiccwoawi = 1; ayyweymyuuiauamo: $this->column = $qgoqiacsiccwoawi; return $this; } public function myywwqkyiwawwquy() : int { return $this->column; } public function cisyiemkeykgkomc() : ?string { return $this->key; } public function gcgmwakaoecqcuwo(?string $uusmaiomayssaecw) : self { $this->key = $uusmaiomayssaecw; return $this; } public function wigskegsqequoeks() { $kiiwewqkgqgqwwue = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsaomcwyacqcumaa() && $this->agcaegggmmeuammg("\x6e\145\164\x77\157\x72\153") ? "\x6e\145\164\x77\157\162\x6b\137" : ''; $this->qcsmikeggeemccuu("\x61\144\x6d\x69\156\137\150\x65\x61\x64", [$this, "\x75\165\x71\x71\x6b\147\x79\161\x65\x6b\x6d\147\x79\x63\x67\161"])->qcsmikeggeemccuu("\x61\x64\x6d\151\156\x5f\151\156\151\164", [$this, "\x79\145\171\x69\147\165\x79\x65\147\x6d\155\171\165\163\145\x61"])->qcsmikeggeemccuu("\141\144\x6d\x69\x6e\137\145\156\x71\165\x65\x75\145\x5f\163\x63\162\151\x70\164\x73", [$this, "\x77\x71\161\143\153\x6b\x6d\x71\141\x6b\151\161\x75\x79\x63\x73"])->qcsmikeggeemccuu("{$kiiwewqkgqgqwwue}\141\x64\x6d\151\x6e\x5f\x6d\x65\x6e\165", [$this, "\x73\x6f\x63\143\x6f\x6d\x61\x6b\167\145\x71\x67\163\153\151\x63"], 20)->qcsmikeggeemccuu("\143\155\142\62\x5f\x72\x65\156\x64\x65\x72\x5f\x6f\160\x74\151\x6f\x6e\x73\137\x73\141\166\145\137\142\165\x74\x74\x6f\x6e", [$this, "\145\x63\171\x79\161\163\147\167\167\165\x75\x6b\x67\x73\x73\x67"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (!$this->agciemoaikwmiugi()) { goto mosqsmqimqgqoase; } register_setting($this->cisyiemkeykgkomc(), $this->cisyiemkeykgkomc()); mosqsmqimqgqoase: $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\160\x61\x72\x65\156\164\x5f\163\154\x75\x67"); $ewuukoycimkekouc = $this->agcaegggmmeuammg("\155\145\156\x75\x5f\x73\154\x75\147"); $this->ecogksqmogoywequ($omwmuycmeqcqokom && $omwmuycmeqcqokom === $ewuukoycimkekouc); $this->swqsasqieqqgusew($ewuukoycimkekouc ?: $this->cisyiemkeykgkomc()); $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\x76\151\145\x77\137\143\141\160\x61\142\x69\x6c\x69\x74\x79"); if ($eiiwoqgkgmosakem) { goto omugkkesagcyagmk; } $this->qaygoqgeieeugsey("\x76\x69\145\x77\137\143\x61\x70\x61\142\x69\154\x69\x74\171", $eiiwoqgkgmosakem === '' ? $this->agcaegggmmeuammg("\143\x61\x70\x61\x62\151\154\151\x74\x79") : false); omugkkesagcyagmk: } public function ccauywsgwsesgmua() : bool { return $this->once; } public function ikqkaioeswqeaqkw(?string $uwkoaemcqekeqqkw) : self { $this->topMenu = $uwkoaemcqekeqqkw; return $this; } public function eyqwmckgumyaoams() : ?string { return $this->topMenu; } public function aeecsqoyykuekais(?string $sgeeumkioegwiymu) : self { $this->postsSlug = $sgeeumkioegwiymu; return $this; } public function kecacgyqmgeeqmme() : ?string { return $this->postsSlug; } public function equiyaoamqmaeckc() : array { return $this->tabs; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce, $egkeamycaysqsoma = true) : self { if (!$egkeamycaysqsoma) { goto ygcsmkuycoagwyou; } $cciauwuwuqaywgce = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\137{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\164\x61\142", $cciauwuwuqaywgce, $this); ygcsmkuycoagwyou: if (!$cciauwuwuqaywgce instanceof Tab) { goto kqksuugcgsyeoayy; } $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; kqksuugcgsyeoayy: return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $this->aucimgwswmgaocae($cciauwuwuqaywgce); qqewoyookaskiuek: } iggyqogweyosuikc: return $this; } public function myomgmiksogoikuc() : bool { return !empty($this->equiyaoamqmaeckc()); } public function qessyiueeiwwgyag() { $eiiwoqgkgmosakem = $this->sscegwueamckwmcy("\x66\157\162\155\137\x67\145\156\145\x72\x61\164\x6f\x72\137\x62\x61\x63\153\x65\156\144\137\160\x61\x67\145\x5f\143\141\160\x61\142\x69\x6c\x69\x74\x79", $this->agcaegggmmeuammg($this->agcaegggmmeuammg("\x76\151\x65\167\137\143\x61\x70\x61\x62\151\154\x69\164\x79"))); if (!(!$this->ekwgmoqoeywwwccw() && (!$eiiwoqgkgmosakem || $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eiiwoqgkgmosakem)))) { goto eeqesooyqagwawae; } $iogqeouiuqyewuqe = ''; $kqweykcqkgkmoqay = ''; $this->qigsyyqgewgskemg("\167\162\x61\x70\x20\143\155\142\x32\x2d\x6f\160\164\151\157\x6e\x73\55\160\x61\x67\x65\x20\143\x6d\x6f\x2d\x6f\160\x74\x69\x6f\156\163\55\x70\x61\147\145")->qigsyyqgewgskemg($this->cisyiemkeykgkomc()); $ywoucyskcquysiwc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($this->equiyaoamqmaeckc()); foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto suswcqoyyqkkquuo; } if (!$cciauwuwuqaywgce->wkkcmkuiigsukyik()) { goto acaqummmoyiemqss; } $aokagokqyuysuksm = $cciauwuwuqaywgce->mwikyscisascoeea(); $qgoqiacsiccwoawi = 1; $scwwkgcyecqgioqs = (array) $this->sscegwueamckwmcy("{$aokagokqyuysuksm}\x5f\164\141\142\137\x73\151\144\145\x5f\155\x65\x74\x61\142\x6f\x78\145\x73", $cciauwuwuqaywgce->weookicuaacigemm()); if (empty($scwwkgcyecqgioqs)) { goto soqqemyioggmoakg; } $scwwkgcyecqgioqs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($scwwkgcyecqgioqs, "\x67\145\164\x50\x72\x69\x6f\162\151\x74\171"); foreach ($scwwkgcyecqgioqs as $qkweikswegyciaie) { if (!$qkweikswegyciaie instanceof MetaBox) { goto wmmggowmigekyoso; } $qkweikswegyciaie = $this->sscegwueamckwmcy("{$qkweikswegyciaie->mwikyscisascoeea()}\x5f\163\x69\x64\145\137\155\x65\164\141\x62\x6f\x78\145", $qkweikswegyciaie); if (!$qkweikswegyciaie->mukiwuqwmywsckco()) { goto ywqgcegomwaiuquc; } $qkweikswegyciaie->register($this->cisyiemkeykgkomc()); $this->omameoyeausyugmw($qkweikswegyciaie, "\x66\x6f\162\x6d\137\155\x61\153\x65\x72\137\x74\141\142\137\163\151\x64\145\x5f\x63\x6f\156\164\x61\151\x6e\x65\162\137{$aokagokqyuysuksm}", "\x73\x69\x64\145"); $qgoqiacsiccwoawi = 2; ywqgcegomwaiuquc: wmmggowmigekyoso: eegqyykygiccaoeo: } miyqyeiwquwsacsm: soqqemyioggmoakg: $iogqeouiuqyewuqe .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia([$cciauwuwuqaywgce->emgauskcekyqqseg(), $cciauwuwuqaywgce->qcgakseyaikigqco()], "\43", [Constants::gouqcwikiiygyasc => "\157\160\x74\55\x74\x61\x62\x2d{$aokagokqyuysuksm}", "\x63\154\141\x73\x73" => "\156\141\166\x2d\x74\x61\142\x20\157\160\x74\55\x74\x61\x62\40\160\x72\55\x74\141\142", "\144\x61\164\x61\55\157\160\164\143\x6f\x6e\x74\x65\x6e\164" => "\x23\157\x70\164\x2d\x63\157\x6e\164\145\156\164\55{$aokagokqyuysuksm}"]); $kqweykcqkgkmoqay .= $this->iuygowkemiiwqmiw("\x63\157\x6e\164\145\156\x74", [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi, "\x64\145\x73\143\x72\x69\160\164\151\157\x6e" => $cciauwuwuqaywgce->meqceykmywmqgoym(), "\143\x6f\156\x74\x61\151\x6e\x65\162\x5f\141\x74\164\x72\163" => ["\x69\x64" => "\x6f\160\164\55\143\157\x6e\x74\145\x6e\164\x2d{$aokagokqyuysuksm}", "\143\x6c\x61\163\x73" => "\157\x70\164\x2d\143\157\x6e\164\x65\x6e\x74", "\x64\141\164\141\55\x62\157\170\x65\163" => implode("\54", array_keys($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($cciauwuwuqaywgce->qsqiqgmeoowykuue())))]]); acaqummmoyiemqss: suswcqoyyqkkquuo: qkcyqocqqwmqgqww: } ssoucoucsgccekwe: $qyukicweqoisimwg = array_filter([$this->omeeeegkauuouaka(), $this->uaasoaieuoymsgsi()]); echo $this->iuygowkemiiwqmiw("\x6d\145\x74\141\164\x61\142", ["\153\x65\x79" => $this->cisyiemkeykgkomc(), "\x68\x6f\x6f\x6b" => $this->mmsykuomogaqoaye(), "\x74\x61\x62\163" => $iogqeouiuqyewuqe, "\160\141\147\x65" => $this->kyqakacqeumicgag(), "\143\x6f\x6c\x75\x6d\156" => $this->myywwqkyiwawwquy(), "\156\x6f\156\143\x65\x73" => [wp_nonce_field("\x6d\145\164\141\x2d\142\x6f\170\x2d\157\162\x64\145\162", "\155\145\x74\141\x2d\142\157\170\55\157\162\144\145\162\x2d\x6e\x6f\x6e\143\145", false, false), wp_nonce_field("\x63\154\157\x73\145\x64\160\157\163\x74\x62\157\170\145\x73", "\143\x6c\x6f\x73\x65\x64\x70\157\x73\164\142\x6f\170\x65\163\x6e\x6f\156\143\145", false, false)], "\142\165\x74\x74\157\x6e\x73" => $qyukicweqoisimwg, "\x63\x6f\156\164\x65\x6e\164\x73" => $kqweykcqkgkmoqay, "\160\x61\x67\x65\x5f\164\151\164\154\145" => esc_html(get_admin_page_title()), "\x63\x6f\156\164\x61\x69\x6e\145\x72\137\141\164\164\x72\x73" => $this->ccekeuwwqqoiwuwy()]); $this->once = false; eeqesooyqagwawae: } public function makgumuaykymweaq() : array { $ywmkwiwkosakssii = []; $omwmuycmeqcqokom = $this->eyqwmckgumyaoams(); $omwmuycmeqcqokom = $this->agcaegggmmeuammg(Constants::qoquaeuooeycomks) ?: $omwmuycmeqcqokom; $cmyoswawcimsecyy = $this->agcaegggmmeuammg(Constants::ysgwugcqguggmigq) ?: $this->qcgakseyaikigqco(); if (!$omwmuycmeqcqokom) { goto oqugqwcyomiaaoqu; } $uescmseksquycukc = $this->kecacgyqmgeeqmme() ? "\77\160\x6f\x73\x74\137\x74\171\x70\145\75{$this->kecacgyqmgeeqmme()}" : ''; $ywmkwiwkosakssii[] = $omwmuycmeqcqokom . $uescmseksquycukc; oqugqwcyomiaaoqu: $ywmkwiwkosakssii[] = $cmyoswawcimsecyy; $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg(Constants::qsegwakiwaiyimyy) ?: $cmyoswawcimsecyy; $ywmkwiwkosakssii[] = $this->sscegwueamckwmcy("\146\157\162\155\137\x67\x65\x6e\x65\162\141\164\x6f\x72\x5f\142\141\x63\153\145\156\144\x5f\160\x61\x67\145\137\x63\x61\x70\x61\142\151\154\151\x74\x79", $this->agcaegggmmeuammg(Constants::ucmueuwwcmocgmig)); $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg(Constants::wuowaiyouwecckaw) ?: $this->cisyiemkeykgkomc(); $ywmkwiwkosakssii[] = [$this, "\x71\145\163\x73\171\151\165\145\x65\151\x77\x77\x67\x79\141\x67"]; if (!$omwmuycmeqcqokom) { goto foeeqckqsyockkak; } $ywmkwiwkosakssii[] = null; goto iekumemscwieugqw; foeeqckqsyockkak: $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\151\143\x6f\156\137\165\162\x6c") ?: ''; iekumemscwieugqw: $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg(Constants::kekcgssiyagioocg) === null ? null : (int) $this->agcaegggmmeuammg(Constants::kekcgssiyagioocg); $ywmkwiwkosakssii["\x63\x62"] = $omwmuycmeqcqokom ? "\141\x64\x64\137\x73\165\142\x6d\145\x6e\x75\137\x70\141\147\x65" : "\x61\x64\144\137\x6d\x65\156\165\137\x70\141\147\145"; return $ywmkwiwkosakssii; } public function soccomakweqgskic() { $ywmkwiwkosakssii = $this->makgumuaykymweaq(); $iaakskwmyqceoscy = $ywmkwiwkosakssii["\143\142"]($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[1], $ywmkwiwkosakssii[2], $ywmkwiwkosakssii[3], $ywmkwiwkosakssii[4], $ywmkwiwkosakssii[5], $ywmkwiwkosakssii[6], $ywmkwiwkosakssii[7]); $this->oggwewqswcggccae($iaakskwmyqceoscy); $this->qcsmikeggeemccuu("\x61\x64\x6d\151\156\x5f\160\x72\x69\x6e\x74\137\x73\164\171\154\x65\163\x2d{$this->mmsykuomogaqoaye()}", ["\103\115\102\62\x5f\x68\157\x6f\x6b\165\160", "\145\x6e\161\x75\145\x75\145\137\x63\x6d\x62\137\x63\x73\163"])->qcsmikeggeemccuu("\x61\x64\x64\x5f\x6d\145\x74\141\137\142\x6f\x78\145\163\x5f{$this->mmsykuomogaqoaye()}", [$this, "\167\x61\x63\x65\x6d\x6b\x71\155\x69\x77\165\161\x6f\165\147\141"])->qcsmikeggeemccuu("\x6c\x6f\x61\144\55{$this->mmsykuomogaqoaye()}", [$this, "\x6f\x67\x6b\151\151\x65\167\x73\x63\x65\x6d\141\161\153\167\x67"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\146\x74\145\x72\x5f\151\156\x69\164\x5f\150\157\157\153", false), $iaakskwmyqceoscy, $this); $this->siqqwyaiwgagokug(); } private function siqqwyaiwgagokug() { $symcuwcoqkwoscsg = $this->eigooueumicckoge(); $iaakskwmyqceoscy = $this->mmsykuomogaqoaye(); if (!$symcuwcoqkwoscsg) { goto qicwaskssogcokgm; } foreach ($symcuwcoqkwoscsg as $sqaougiyimwumoqi) { $ywmkwiwkosakssii = (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sqaougiyimwumoqi, Constants::okeuagwgwkmiokac, 1); $aiamqeawckcsuaou = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sqaougiyimwumoqi, Constants::uqgcmmosieyimiku); $ekiuyucoiagmscgy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sqaougiyimwumoqi, Constants::wwgusigoaksqmwsm); $sqqewmoeaekuyyas = (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sqaougiyimwumoqi, Constants::iuqumwggccmcuyem, 10); if (!($ekiuyucoiagmscgy && $aiamqeawckcsuaou && false !== strpos($sqaougiyimwumoqi[Constants::uqgcmmosieyimiku], "\x2d\133\x68\x6f\x6f\153\x5d"))) { goto usquiuuyiyqaeyiu; } $aiamqeawckcsuaou = str_replace("\133\x68\157\157\x6b\x5d", $iaakskwmyqceoscy, $aiamqeawckcsuaou); $sqqewmoeaekuyyas = $sqqewmoeaekuyyas > 0 ? $sqqewmoeaekuyyas : 10; $ywmkwiwkosakssii = $ywmkwiwkosakssii > 0 ? $ywmkwiwkosakssii : 1; $this->qcsmikeggeemccuu($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $ywmkwiwkosakssii, $sqqewmoeaekuyyas); usquiuuyiyqaeyiu: kymkucucyeoeikim: } hoeeyiowekaeemko: qicwaskssogcokgm: } public function wacemkqmiwuqouga() { $ywoucyskcquysiwc = $this->equiyaoamqmaeckc(); if (!$ywoucyskcquysiwc) { goto soaccwqimeksgwiw; } foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $saouceauqqiwcwas = $cciauwuwuqaywgce->wacemkqmiwuqouga($this->cisyiemkeykgkomc()); if (!$cciauwuwuqaywgce->sekaaukqmiysugws()) { goto suqkuqygkkgwyaie; } $uaqusiikkokccqou = (array) $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f\x74\141\142\137{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\155\145\x74\141\x62\157\170\145\x73", $cciauwuwuqaywgce->qsqiqgmeoowykuue(), $cciauwuwuqaywgce, $this); $uaqusiikkokccqou = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($uaqusiikkokccqou, "\147\145\x74\x50\x72\151\x6f\162\151\164\171"); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { $qkweikswegyciaie = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f\164\x61\x62\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\x6d\145\x74\x61\142\x6f\170\137{$qkweikswegyciaie->cisyiemkeykgkomc()}", $qkweikswegyciaie, $cciauwuwuqaywgce, $this); if (!$qkweikswegyciaie instanceof MetaBox) { goto aegysmeecgcgayyw; } $mgkceomocowocqyo = $qkweikswegyciaie->yqsycyoeiusqqqgm(); $this->sceiskoouaiqocqo($qkweikswegyciaie, $saouceauqqiwcwas, $mgkceomocowocqyo === "\163\x69\x64\x65" ? "\x6e\x6f\162\x6d\141\154" : $mgkceomocowocqyo); aegysmeecgcgayyw: gaomwagkcciesyqy: } esuiysskoweawsue: suqkuqygkkgwyaie: uqqaiagaeqgqgaiy: } uguigkcmukuouway: soaccwqimeksgwiw: foreach ($this->qsqiqgmeoowykuue() as $qkweikswegyciaie) { if (!$qkweikswegyciaie instanceof MetaBox) { goto cgiscsqwwgqqaeqi; } $this->sceiskoouaiqocqo($qkweikswegyciaie, $qkweikswegyciaie->register($this->cisyiemkeykgkomc()), "\163\x69\144\x65"); cgiscsqwwgqqaeqi: skkamseieeusycye: } wiysogeqqwgioyka: } public function sceiskoouaiqocqo(MetaBox $qkweikswegyciaie, $uoeiskamgscgeccq = [], string $mgkceomocowocqyo = "\x6e\157\x72\155\x61\154") { if (!is_array($uoeiskamgscgeccq)) { goto syiqkaasoueowwui; } $uoeiskamgscgeccq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uoeiskamgscgeccq, $qkweikswegyciaie->mwikyscisascoeea()); syiqkaasoueowwui: if (!$this->uaicqoagkoeacawy($uoeiskamgscgeccq)) { goto cmegwsegsosyqcai; } $aokagokqyuysuksm = $qkweikswegyciaie->mwikyscisascoeea(); $this->qcsmikeggeemccuu("\x63\x6d\142\62\137\x73\x61\x76\x65\137\157\x70\x74\151\x6f\x6e\x73\55\x70\x61\147\145\x5f\146\x69\145\x6c\144\x73\x5f{$aokagokqyuysuksm}", [$this, "\147\157\171\x65\x6d\151\x6b\x6f\x67\145\165\x73\x6b\x67\141\163"], 10, 2); $wyicesskmckwqeec = "\x70\x6f\163\x74\x62\157\x78\x5f\x63\154\x61\x73\x73\x65\163\137{$this->mmsykuomogaqoaye()}\137{$aokagokqyuysuksm}"; if (!("\163\151\144\145" !== $mgkceomocowocqyo && $this->myomgmiksogoikuc())) { goto giaacoqqqsekcayy; } $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\145\x77\x73\153\x6b\x77\165\x77\x6b\x6b\x6b\141\161\x77\147\153"]); giaacoqqqsekcayy: if (!$uoeiskamgscgeccq->meta_box["\143\154\x6f\x73\145\144"]) { goto ewymsmkkiksgwysk; } $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\x79\x69\145\155\165\x73\x67\x71\155\x6f\171\x6d\x73\147\x65\x67"]); ewymsmkkiksgwysk: $this->omameoyeausyugmw($qkweikswegyciaie, $this->mmsykuomogaqoaye(), $mgkceomocowocqyo); cmegwsegsosyqcai: } public function omameoyeausyugmw(MetaBox $qkweikswegyciaie, $iaakskwmyqceoscy, $mgkceomocowocqyo) { $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $qkweikswegyciaie->mwikyscisascoeea(), Constants::qescuiwgsyuikume => $qkweikswegyciaie->iwqugwigmoiagwec(), Constants::cacismqswgaewkuu => $iaakskwmyqceoscy, Constants::osiogououyayqyck => $mgkceomocowocqyo, Constants::wwgusigoaksqmwsm => [$this, "\141\165\x73\171\155\155\x67\163\x6b\163\x6f\x71\x77\165\x71\x6b"]]); } public function wqqckkmqakiquycs() { if (!($this->csaueuycewaiuaay() && $this->myomgmiksogoikuc())) { goto wmywuusgukmmaams; } $eueuqacmukymcyya = "{$this->kyqakacqeumicgag()}\55\141\144\x6d\151\156"; $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->imsomwwswyoquoqk($eueuqacmukymcyya, $this->miocmcoykayoyyau()->get("\155\x75\154\164\151\x6f\x70\x74\x73\56\x6a\163")); $ywoucyskcquysiwc = $this->equiyaoamqmaeckc(); $cciauwuwuqaywgce = reset($ywoucyskcquysiwc); $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->fowiaymccsmewemu($eueuqacmukymcyya, "\x50\115\x50\x52\x4f\x70\x74\124\141\x62\163", [Constants::ascagqcquwgmygkm => $this->kyqakacqeumicgag(), "\x70\157\163\164\x74\171\x70\145" => $this->kecacgyqmgeeqmme(), "\x64\145\x66\x61\x75\x6c\164\164\x61\142" => $cciauwuwuqaywgce instanceof Tab ? $cciauwuwuqaywgce->mwikyscisascoeea() : '']); wmywuusgukmmaams: } public function uuqqkgyqekmgycgq() { if (!$this->myomgmiksogoikuc()) { goto gkyawqqcmigqgaiq; } $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw("\x6d\145\x74\x61\x74\141\x62\56\143\163\x73", [Constants::imywcsggckkcywgk => $this->kyqakacqeumicgag()]); $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x73\164\171\154\x65", [Constants::gouqcwikiiygyasc => "\160\x72\x2d\164\x61\x62\55\143\x6c\x65\x61\156\x75\x70\x2d\143\x73\163"], true, $icyaoosaykeskiuu); gkyawqqcmigqgaiq: } public function iaggsikquucsoiko() { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x73\143\x72\151\x70\x74", [], true, "\152\121\165\x65\x72\171\x28\x64\157\x63\165\x6d\145\156\x74\x29\56\162\145\141\x64\171\50\x66\165\156\143\164\151\157\156\x28\51\x7b\160\157\163\x74\x62\x6f\170\x65\163\x2e\x61\x64\x64\137\x70\157\x73\164\x62\x6f\170\137\x74\x6f\x67\x67\x6c\x65\x73\50\x22\160\157\163\x74\x62\x6f\x78\x2d\143\157\156\x74\x61\151\x6e\x65\x72\x22\x29\73\175\51\73"); } public function ecyyqsgwwuukgssg() { if (!($this->csaueuycewaiuaay() && $this->ekwgmoqoeywwwccw())) { goto ooeausyowguqicuo; } echo $this->uaasoaieuoymsgsi(); ooeausyowguqicuo: } private function uaicqoagkoeacawy($uoeiskamgscgeccq) : bool { return isset($uoeiskamgscgeccq->meta_box["\163\x68\157\167\x5f\157\x6e"][Constants::ascagqcquwgmygkm]) && $uoeiskamgscgeccq->meta_box["\163\x68\x6f\167\137\157\156"][Constants::ascagqcquwgmygkm] === "\157\x70\x74\151\x6f\156\x73\55\160\141\147\145" && in_array($this->kyqakacqeumicgag(), $uoeiskamgscgeccq->meta_box["\163\x68\157\167\137\x6f\x6e"][Constants::ciyoccqkiamemcmm], true); } public function goyemikogeuskgas($kqokimuosyuyyucg, $sogsqsawoyqmqsqu) { if (!($sogsqsawoyqmqsqu && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && !$this->ccauywsgwsesgmua())) { goto egyyiccaeeiooaua; } add_settings_error("{$this->cisyiemkeykgkomc()}\55\x6e\x6f\x74\x69\143\145\163", '', __("\x53\145\164\164\x69\156\147\163\40\125\160\144\141\164\x65\144", PR__CMN__FOUNDATION), "\165\x70\144\x61\164\x65\144"); settings_errors("{$this->cisyiemkeykgkomc()}\55\x6e\x6f\164\151\x63\145\x73"); $this->once = true; egyyiccaeeiooaua: } public function uaasoaieuoymsgsi() : ?string { return $this->cyeuiyggkcqmoecc($this->kusoyyuwiukiokww(), ["\143\154\x61\163\x73" => "\142\x75\164\x74\x6f\156\x2d\160\x72\x69\x6d\141\162\x79", Constants::NAME => "\x73\165\142\x6d\x69\164\x2d\x63\x6d\142", Constants::squoamkioomemiyi => "\163\165\142\155\151\x74"], true); } public function omeeeegkauuouaka() : string { return $this->cyeuiyggkcqmoecc($this->occsuagsiuuimcoy(), ["\143\154\141\x73\x73" => "\x62\165\x74\164\x6f\156\55\163\145\143\x6f\156\x64\x61\x72\171", Constants::NAME => "\162\145\x73\145\x74\x2d\143\155\142", Constants::squoamkioomemiyi => "\142\165\164\x74\157\156"]); } public function cyeuiyggkcqmoecc(?string $pkyyagewkiyckmwy = null, array $wwgucssaecqekuek = [], $omiygkiiauwgkegg = false) : string { $wwgucssaecqekuek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($wwgucssaecqekuek, ["\x63\x6c\141\x73\x73" => "\142\165\164\x74\x6f\156", Constants::ciyoccqkiamemcmm => $pkyyagewkiyckmwy]); $nsmgceoqaqogqmuw = ''; if (!$pkyyagewkiyckmwy) { goto cewmoqyysgsmuiya; } if (!$omiygkiiauwgkegg) { goto scisgsyemmsekgos; } $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\141\163\x73", "\160\157\x73\x69\x74\x69\157\x6e\55\x72\145\x6c\x61\164\151\166\x65"); $pkyyagewkiyckmwy .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->kqmkicmuscsgqeoi([Constants::waguuiqqgsysuukq => "\x31\170"]); scisgsyemmsekgos: $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\142\x75\164\x74\x6f\156", $wwgucssaecqekuek, $pkyyagewkiyckmwy); cewmoqyysgsmuiya: return $nsmgceoqaqogqmuw; } public function ewskkwuwkkkaqwgk($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[] = "\157\x70\164\55\150\151\x64\x64\145\156"; return $cmkqisoeyioisqaw; } public function yiemusgqmoymsgeg($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[] = "\143\154\157\163\145\144"; return $cmkqisoeyioisqaw; } public function ogkiiewscemaqkwg() { $this->cqscqicucmeamkyq("\141\144\144\x5f\155\x65\164\141\x5f\x62\157\170\145\x73\x5f{$this->mmsykuomogaqoaye()}", null)->cqscqicucmeamkyq("\141\144\x64\x5f\155\x65\x74\x61\137\142\157\170\145\x73", $this->mmsykuomogaqoaye(), null); } public function ausymmgsksoqwuqk($post, $qkweikswegyciaie) { $scegeeyqweaksmki = cmb2_get_metabox($qkweikswegyciaie[Constants::gouqcwikiiygyasc], $this->cisyiemkeykgkomc()); if (!$scegeeyqweaksmki) { goto wgewmqieuamsoayy; } $icwicymcioeyeyek = $_POST; if ($this->negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)) { goto omqiayeucoioqoao; } if (!$this->ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)) { goto igooksugieceoege; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->cisyiemkeykgkomc()); igooksugieceoege: goto ugqaaewwmkocwwgy; omqiayeucoioqoao: $scegeeyqweaksmki->save_fields($this->cisyiemkeykgkomc(), $scegeeyqweaksmki->mb_object_type(), $icwicymcioeyeyek); ugqaaewwmkocwwgy: $scegeeyqweaksmki->show_form(); wgewmqieuamsoayy: } private function ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki) : bool { $gaqymcswicmikcuu = $this->qiswuqmeyaysqcis($scegeeyqweaksmki); $gwgqcsmomamyqsmy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $gaqymcswicmikcuu); $ooewkimkcskcwsso = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\162\x65\163\x65\x74\x2d\x63\x6d\142"); $kqokimuosyuyyucg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\x6f\142\x6a\145\143\164\137\x69\x64"); return $ooewkimkcskcwsso && $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && $kqokimuosyuyyucg === $this->cisyiemkeykgkomc() && wp_verify_nonce($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq($gaqymcswicmikcuu), $gaqymcswicmikcuu); } private function negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki) : bool { $gaqymcswicmikcuu = $this->qiswuqmeyaysqcis($scegeeyqweaksmki); $gwgqcsmomamyqsmy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $gaqymcswicmikcuu); $kqokimuosyuyyucg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\157\142\152\145\143\x74\137\x69\x64"); return $this->oqmggeywwyoaocca($scegeeyqweaksmki, "\163\141\166\x65\137\x66\x69\145\x6c\x64\163") && $this->imyagkswqcsocsoi($icwicymcioeyeyek) && $kqokimuosyuyyucg && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && wp_verify_nonce($gwgqcsmomamyqsmy, $gaqymcswicmikcuu); } public function imyagkswqcsocsoi($icwicymcioeyeyek = []) : bool { if ($icwicymcioeyeyek) { goto kqgcyoscsusgoaqi; } $icwicymcioeyeyek = $_POST; kqgcyoscsusgoaqi: return (bool) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\x73\x75\x62\x6d\x69\164\x2d\143\x6d\x62", false); } public function oaqemuumyowmigwo(array $yygmoeguaqyumuui = []) : array { $saouceauqqiwcwas = []; if (!($yygmoeguaqyumuui && is_array($yygmoeguaqyumuui))) { goto wakmayaoqoskekqy; } foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $qkweikswegyciaie) { if (is_object($qkweikswegyciaie)) { goto wkeuuycukmuqiaom; } $saouceauqqiwcwas[$uusmaiomayssaecw] = CMB2_Boxes::get($qkweikswegyciaie); wkeuuycukmuqiaom: sggawugoykqcmsug: } ueigkucgaucgeimc: wakmayaoqoskekqy: return empty($saouceauqqiwcwas) ? CMB2_Boxes::get_all() : $saouceauqqiwcwas; } public function csaueuycewaiuaay() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ggcoyemwouwsqouy($this->cisyiemkeykgkomc()); } public function __toString() { return self::uqggkiomyiceyooa(); } }