<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621d26886b72d             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Relation; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Relation\Manager\PostManager; use Pmpr\Package\AdvancedCMS\Relation\Manager\TaxonomyManager; use WP_Post; use WP_Term; class Ajax extends Common { const smgiwwgsiyweasmc = "\141\x64\x64\137\156\145\167\x5f\155\x65\x74\x61\x5f\164\157\137\x72\145\x6c\141\x74\151\x6f\156"; const amccaiqeuogmuceu = "\163\x65\x61\162\x63\x68\x5f\146\157\162\x5f\162\145\x6c\x61\164\151\x6f\x6e"; const iyasaywiokaugmoo = "\165\x70\144\141\164\x65\x5f\155\x65\x74\141\x5f\151\156\137\162\x65\154\141\164\151\157\156"; const mqguesggycecgcqe = "\162\145\x6d\157\x76\145\137\155\145\164\141\x5f\x66\x72\x6f\x6d\137\x72\145\x6c\141\164\151\157\156"; const myikkigscysoykgy = ["\x61\x64\x64" => self::smgiwwgsiyweasmc, "\163\x65\141\162\x63\x68" => self::amccaiqeuogmuceu, "\165\x70\x64\141\164\x65" => self::iyasaywiokaugmoo, "\x72\145\155\x6f\x76\145" => self::mqguesggycecgcqe]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::smgiwwgsiyweasmc, [$this, "\141\144\144"])->koaegcswmcqsiykq(self::amccaiqeuogmuceu, [$this, "\x71\x77\143\x6d\x75\x65\141\x75\163\161\x67\151\x77\151\147\171"])->koaegcswmcqsiykq(self::iyasaywiokaugmoo, [$this, "\165\160\144\141\x74\145"])->koaegcswmcqsiykq(self::mqguesggycecgcqe, [$this, "\162\x65\x6d\157\x76\145"]); } public function add() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if (!$this->woaqsosmiukqsuoy($icwicymcioeyeyek, self::smgiwwgsiyweasmc)) { goto oyiuyywyeoskckuw; } $oikmcqwkmsyiicqs = $icwicymcioeyeyek["\145\x6e\x74\x69\x74\171"]; $icwicymcioeyeyek = $this->ksicesygeskkewug("\x70\145\162\163\x69\163\164", $oikmcqwkmsyiicqs, $icwicymcioeyeyek["\x6f\x77\156\145\162"], $icwicymcioeyeyek["\155\x65\164\x61\x4b\145\171"], $icwicymcioeyeyek["\166\141\154\165\x65"]); $this->kycqsyyakyocmeso($icwicymcioeyeyek, $this->sgmeusiqkacigqqq($oikmcqwkmsyiicqs, $icwicymcioeyeyek), __("\101\154\162\x65\x61\x64\x79\x20\x61\144\x64\145\x64", PR__PKG__ADVANCED_CMS)); oyiuyywyeoskckuw: } public function qwcmueausqgiwigy() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if (!ManipulateArray::uuegkqwagymmusiy($icwicymcioeyeyek, ["\141\x63\164\x69\157\156", "\x76\141\x6c\x75\x65", "\157\167\x6e\x65\x72", "\164\x61\162\x67\145\x74", "\145\x6e\x74\x69\x74\x79"]) && $icwicymcioeyeyek["\x61\x63\x74\151\x6f\156"] == self::amccaiqeuogmuceu) { goto qkuiwoqksgayqqmg; } $this->uaggqsoeugksgooc(true, ManipulateHTML::oockkqiqsssakuug(__("\x54\x72\x79\40\x6d\157\162\x65\40\167\x6f\162\144", PR__PKG__ADVANCED_CMS), "\163\x75\x63\x63\145\x73\163")); goto easqmyamcmeesgya; qkuiwoqksgayqqmg: $eqgoocgaqwqcimie = $icwicymcioeyeyek["\x76\141\x6c\165\x65"]; $miowmmgaiagcuyoo = $icwicymcioeyeyek["\x6f\167\156\x65\162"]; $ccamueccusigaaio = $icwicymcioeyeyek["\164\141\x72\147\145\x74"]; $oikmcqwkmsyiicqs = $icwicymcioeyeyek["\145\x6e\164\151\164\171"]; $yemgmmgogcwccuky = ManipulateArray::get($icwicymcioeyeyek, self::ccyeycyyykwuymsy, []); $yemgmmgogcwccuky[] = $miowmmgaiagcuyoo; if ($oikmcqwkmsyiicqs == self::mswoacegomcucaik) { goto goqmywuiicciasyk; } $oammesyieqmwuwyi = ManipulateTerm::igkcwemyysqkwuuy($eqgoocgaqwqcimie, $ccamueccusigaaio, $yemgmmgogcwccuky); goto siecswkggyikqkga; goqmywuiicciasyk: $oammesyieqmwuwyi = ManipulatePost::igkcwemyysqkwuuy($eqgoocgaqwqcimie, $ccamueccusigaaio, [self::kcaoouwiygwwmiok => $yemgmmgogcwccuky, "\x70\x6f\x73\x74\x5f\x73\x74\141\x74\x75\163" => ["\x70\165\142\x6c\151\163\150"]]); siecswkggyikqkga: $this->uaggqsoeugksgooc(true, $this->wgciqaauaiemimqq($oammesyieqmwuwyi)); easqmyamcmeesgya: } public function update() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if (!$this->woaqsosmiukqsuoy($icwicymcioeyeyek, self::iyasaywiokaugmoo)) { goto yuqgwwmqwqiuwmaw; } $icwicymcioeyeyek = $this->ksicesygeskkewug("\x75\160\144\x61\164\x65", $icwicymcioeyeyek["\145\x6e\x74\151\164\171"], $icwicymcioeyeyek["\x6f\167\x6e\x65\162"], $icwicymcioeyeyek["\155\x65\164\x61\x4b\145\171"], $icwicymcioeyeyek["\x76\141\154\x75\145"]); $this->kycqsyyakyocmeso($icwicymcioeyeyek, ManipulateHTML::oockkqiqsssakuug(__("\123\165\x63\143\x65\x73\163\146\x75\154\154\171\40\x75\x70\144\x61\x74\145\56", PR__PKG__ADVANCED_CMS), "\163\165\x63\143\145\x73\x73"), ManipulateHTML::oockkqiqsssakuug(__("\x53\x6f\155\x65\164\150\151\156\147\40\x69\163\40\x77\x72\157\x6e\147\x20\x69\x6e\40\x75\160\144\x61\x74\x65\x20\x70\162\157\x63\145\163\163\x2c\40\160\x6c\145\x61\x73\x65\x20\x74\162\171\40\154\141\x74\145\162\56", PR__PKG__ADVANCED_CMS), "\167\141\162\156\x69\156\x67")); yuqgwwmqwqiuwmaw: } public function remove() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if (!$this->woaqsosmiukqsuoy($icwicymcioeyeyek, self::mqguesggycecgcqe)) { goto quaqmuusokiyqgqe; } $icwicymcioeyeyek = $this->ksicesygeskkewug("\x72\145\x6d\157\x76\145", $icwicymcioeyeyek["\145\156\164\151\164\x79"], $icwicymcioeyeyek["\x6f\167\x6e\x65\x72"], $icwicymcioeyeyek["\x6d\145\164\141\x4b\x65\171"], $icwicymcioeyeyek["\x76\x61\154\165\x65"]); $this->kycqsyyakyocmeso($icwicymcioeyeyek, ManipulateHTML::oockkqiqsssakuug(__("\x53\165\x63\143\x65\163\163\x66\165\x6c\154\x79\x20\x64\145\154\x65\x74\145\x64\x2e", PR__PKG__ADVANCED_CMS), "\x73\x75\x63\x63\145\163\x73"), ManipulateHTML::oockkqiqsssakuug(__("\123\x6f\155\x65\x74\x68\x69\x6e\x67\x20\x69\x73\x20\x77\x72\157\156\147\x20\x69\156\40\144\x65\154\145\x74\145\40\160\x72\x6f\x63\145\163\x73\x2c\x20\x70\154\x65\x61\163\x65\40\x74\x72\x79\x20\x6c\x61\164\x65\162\x2e", PR__PKG__ADVANCED_CMS), "\167\141\x72\x6e\x69\x6e\147")); quaqmuusokiyqgqe: } public function seyyiqmgwymyumoq() { return ManipulateServer::ayueggmoqeeukqmq(); } public function woaqsosmiukqsuoy($icwicymcioeyeyek, $aiamqeawckcsuaou) : bool { return isset($icwicymcioeyeyek["\141\x63\164\x69\157\x6e"], $icwicymcioeyeyek["\x6f\167\x6e\x65\x72"], $icwicymcioeyeyek["\155\145\x74\141\x4b\145\171"], $icwicymcioeyeyek["\x76\141\154\165\x65"], $icwicymcioeyeyek["\x65\156\x74\x69\x74\171"]) && $icwicymcioeyeyek["\x61\x63\164\x69\157\x6e"] == $aiamqeawckcsuaou; } public function wgciqaauaiemimqq($oammesyieqmwuwyi) : array { $aqykuigiuwmmcieu = []; if (!$oammesyieqmwuwyi) { goto ecouwqosmoyyqmkw; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($igqsaukqcqscimok instanceof WP_Post) { goto yoagcooekomeokwg; } if (!$igqsaukqcqscimok instanceof WP_Term) { goto yamyagayiooyeekg; } $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($oammesyieqmwuwyi); $aqykuigiuwmmcieu[$igqsaukqcqscimok->term_id] = ["\x6c\141\142\x65\154" => ManipulateTerm::qcgakseyaikigqco($aokagokqyuysuksm), "\166\141\x6c\x75\145" => $aokagokqyuysuksm]; yamyagayiooyeekg: goto eckcqesiokgwkkiw; yoagcooekomeokwg: $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($igqsaukqcqscimok); $aqykuigiuwmmcieu[$aokagokqyuysuksm] = ["\154\141\142\145\154" => ManipulatePost::qcgakseyaikigqco($igqsaukqcqscimok), "\166\x61\x6c\165\x65" => $aokagokqyuysuksm]; eckcqesiokgwkkiw: iksewmsaugayqaqq: } smiemmcqqukyguuu: ecouwqosmoyyqmkw: return $aqykuigiuwmmcieu; } public function sgmeusiqkacigqqq($oikmcqwkmsyiicqs, $icwicymcioeyeyek) : ?string { $aokagokqyuysuksm = $icwicymcioeyeyek["\151\x64"]; if ($oikmcqwkmsyiicqs == "\x70\x6f\163\164") { goto mqiiqkuaoekeuswo; } $igqsaukqcqscimok = ManipulateTerm::get($aokagokqyuysuksm); goto qmoocweoekqueuyy; mqiiqkuaoekeuswo: $igqsaukqcqscimok = ManipulatePost::get($aokagokqyuysuksm); qmoocweoekqueuyy: return $this->iuygowkemiiwqmiw("\x65\x6e\164\151\x74\x79\57\x6d\x65\x74\141\137\x62\x6f\x78\x5f\151\x74\x65\155", ["\x64\x61\x74\141" => $igqsaukqcqscimok, "\160\x72\x69\x6f\x72\151\164\x79" => $icwicymcioeyeyek["\x70\162\151\x6f\162\151\x74\171"], "\x6d\157\x76\145\137\150\x61\x6e\x64\154\x65" => $this->cmeuowkiswiuocqa(), "\162\x65\x6d\157\166\x65\x5f\x6d\x6f\144\141\x6c" => $this->amsaeiymyieqksqy()]); } public function kycqsyyakyocmeso($icwicymcioeyeyek, $iwgcmyqkkmukqoyg, $ykwokmkkyoykccgk) { if ($icwicymcioeyeyek) { goto sgiwoiscywusgmmm; } $this->uaggqsoeugksgooc(false, $ykwokmkkyoykccgk); goto skuqigsokaguscas; sgiwoiscywusgmmm: $this->uaggqsoeugksgooc(true, $iwgcmyqkkmukqoyg); skuqigsokaguscas: } private function ksicesygeskkewug($aiamqeawckcsuaou, $oikmcqwkmsyiicqs, $miowmmgaiagcuyoo, $gwiwsycaaqgwmewg, $eqgoocgaqwqcimie) { $icwicymcioeyeyek = null; try { $egkyssmuqcwaciya = PostManager::class; if (!($oikmcqwkmsyiicqs == self::gmmygyiecgmggaam)) { goto quyogmwugsyoaaiu; } $egkyssmuqcwaciya = TaxonomyManager::class; quyogmwugsyoaaiu: $icwicymcioeyeyek = call_user_func_array([$egkyssmuqcwaciya, $aiamqeawckcsuaou], [$miowmmgaiagcuyoo, $gwiwsycaaqgwmewg, $eqgoocgaqwqcimie]); } catch (Exception $wgaoewqkwgomoaai) { $this->uaggqsoeugksgooc(false, ManipulateHTML::oockkqiqsssakuug($wgaoewqkwgomoaai->sagusgigmkeysock(), "\145\162\162\157\162")); } return $icwicymcioeyeyek; } }
