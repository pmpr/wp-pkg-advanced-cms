<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62419c781800a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\AdvancedCMS\Relation\Manager\PostManager; use Pmpr\Module\AdvancedCMS\Relation\Manager\TaxonomyManager; use WP_Post; use WP_Term; class Ajax extends Common { const smgiwwgsiyweasmc = "\x61\144\144\x5f\x6e\x65\167\137\x6d\x65\x74\141\x5f\x74\157\x5f\x72\145\154\141\x74\x69\157\156"; const amccaiqeuogmuceu = "\x73\145\x61\162\143\150\x5f\x66\157\162\137\162\x65\x6c\141\164\x69\157\156"; const iyasaywiokaugmoo = "\165\x70\x64\x61\164\145\x5f\x6d\145\164\x61\x5f\151\x6e\137\162\x65\x6c\x61\x74\x69\157\156"; const mqguesggycecgcqe = "\162\x65\x6d\x6f\166\145\x5f\x6d\145\164\141\x5f\x66\162\157\x6d\x5f\x72\145\154\x61\164\151\x6f\156"; const myikkigscysoykgy = ["\141\144\144" => self::smgiwwgsiyweasmc, "\163\x65\x61\x72\143\x68" => self::amccaiqeuogmuceu, "\x75\x70\x64\141\x74\x65" => self::iyasaywiokaugmoo, "\162\x65\x6d\157\166\145" => self::mqguesggycecgcqe]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::smgiwwgsiyweasmc, [$this, "\141\x64\144"])->koaegcswmcqsiykq(self::amccaiqeuogmuceu, [$this, "\x71\167\x63\x6d\165\145\141\165\x73\161\147\x69\167\151\x67\171"])->koaegcswmcqsiykq(self::iyasaywiokaugmoo, [$this, "\x75\160\144\x61\x74\x65"])->koaegcswmcqsiykq(self::mqguesggycecgcqe, [$this, "\x72\x65\155\x6f\166\x65"]); } public function add() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if (!$this->woaqsosmiukqsuoy($icwicymcioeyeyek, self::smgiwwgsiyweasmc)) { goto qkuiwoqksgayqqmg; } $oikmcqwkmsyiicqs = $icwicymcioeyeyek["\145\x6e\x74\x69\164\171"]; $icwicymcioeyeyek = $this->ksicesygeskkewug("\x70\145\162\x73\151\x73\164", $oikmcqwkmsyiicqs, $icwicymcioeyeyek["\x6f\x77\156\145\162"], $icwicymcioeyeyek["\155\145\164\141\x4b\145\x79"], $icwicymcioeyeyek["\166\x61\x6c\165\145"]); $this->kycqsyyakyocmeso($icwicymcioeyeyek, $this->sgmeusiqkacigqqq($oikmcqwkmsyiicqs, $icwicymcioeyeyek), __("\x41\x6c\162\x65\x61\x64\171\x20\x61\x64\144\x65\144", PR__MDL__ADVANCED_CMS)); qkuiwoqksgayqqmg: } public function qwcmueausqgiwigy() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if (!ManipulateArray::uuegkqwagymmusiy($icwicymcioeyeyek, ["\141\x63\164\151\x6f\x6e", "\166\141\154\x75\145", "\x6f\x77\156\x65\162", "\164\x61\x72\147\x65\x74", "\x65\x6e\164\151\164\x79"]) && $icwicymcioeyeyek["\141\x63\164\x69\x6f\156"] == self::amccaiqeuogmuceu) { goto quaqmuusokiyqgqe; } $this->uaggqsoeugksgooc(true, ManipulateHTML::oockkqiqsssakuug(__("\124\162\x79\x20\x6d\157\162\x65\40\167\157\x72\144", PR__MDL__ADVANCED_CMS), "\163\165\143\x63\x65\163\x73")); goto smiemmcqqukyguuu; quaqmuusokiyqgqe: $eqgoocgaqwqcimie = $icwicymcioeyeyek["\x76\141\154\165\x65"]; $miowmmgaiagcuyoo = $icwicymcioeyeyek["\x6f\167\156\145\162"]; $ccamueccusigaaio = $icwicymcioeyeyek["\164\141\162\147\145\164"]; $oikmcqwkmsyiicqs = $icwicymcioeyeyek["\x65\x6e\164\151\164\171"]; $yemgmmgogcwccuky = ManipulateArray::get($icwicymcioeyeyek, self::ccyeycyyykwuymsy, []); $yemgmmgogcwccuky[] = $miowmmgaiagcuyoo; if ($oikmcqwkmsyiicqs == self::mswoacegomcucaik) { goto easqmyamcmeesgya; } $oammesyieqmwuwyi = ManipulateTerm::igkcwemyysqkwuuy($eqgoocgaqwqcimie, $ccamueccusigaaio, $yemgmmgogcwccuky); goto yuqgwwmqwqiuwmaw; easqmyamcmeesgya: $oammesyieqmwuwyi = ManipulatePost::igkcwemyysqkwuuy($eqgoocgaqwqcimie, $ccamueccusigaaio, [self::kcaoouwiygwwmiok => $yemgmmgogcwccuky, "\160\x6f\163\164\137\163\164\141\164\165\x73" => ["\x70\x75\x62\154\x69\163\x68"]]); yuqgwwmqwqiuwmaw: $this->uaggqsoeugksgooc(true, $this->wgciqaauaiemimqq($oammesyieqmwuwyi)); smiemmcqqukyguuu: } public function update() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if (!$this->woaqsosmiukqsuoy($icwicymcioeyeyek, self::iyasaywiokaugmoo)) { goto iksewmsaugayqaqq; } $icwicymcioeyeyek = $this->ksicesygeskkewug("\165\x70\144\141\164\x65", $icwicymcioeyeyek["\x65\x6e\x74\151\x74\x79"], $icwicymcioeyeyek["\x6f\x77\156\145\x72"], $icwicymcioeyeyek["\x6d\x65\164\141\113\x65\x79"], $icwicymcioeyeyek["\x76\141\154\165\145"]); $this->kycqsyyakyocmeso($icwicymcioeyeyek, ManipulateHTML::oockkqiqsssakuug(__("\123\165\143\143\145\163\163\146\165\154\154\171\x20\x75\160\144\x61\164\x65\x2e", PR__MDL__ADVANCED_CMS), "\x73\165\143\x63\145\163\163"), ManipulateHTML::oockkqiqsssakuug(__("\123\x6f\155\x65\164\x68\x69\156\x67\x20\x69\163\x20\167\x72\x6f\156\147\x20\151\x6e\x20\x75\160\x64\x61\x74\x65\40\x70\162\157\143\145\x73\x73\54\x20\x70\154\145\x61\163\145\x20\x74\x72\171\x20\154\141\x74\145\162\56", PR__MDL__ADVANCED_CMS), "\167\141\x72\156\x69\x6e\147")); iksewmsaugayqaqq: } public function remove() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if (!$this->woaqsosmiukqsuoy($icwicymcioeyeyek, self::mqguesggycecgcqe)) { goto yamyagayiooyeekg; } $icwicymcioeyeyek = $this->ksicesygeskkewug("\162\x65\155\x6f\x76\145", $icwicymcioeyeyek["\145\x6e\164\151\x74\171"], $icwicymcioeyeyek["\157\167\x6e\145\162"], $icwicymcioeyeyek["\155\145\x74\x61\113\145\171"], $icwicymcioeyeyek["\x76\141\154\165\x65"]); $this->kycqsyyakyocmeso($icwicymcioeyeyek, ManipulateHTML::oockkqiqsssakuug(__("\123\x75\143\x63\x65\x73\x73\x66\x75\154\154\171\40\144\x65\x6c\x65\164\145\144\x2e", PR__MDL__ADVANCED_CMS), "\163\165\x63\x63\x65\163\x73"), ManipulateHTML::oockkqiqsssakuug(__("\x53\x6f\155\x65\164\x68\151\x6e\x67\40\151\x73\40\x77\x72\x6f\x6e\x67\40\151\x6e\40\144\145\154\x65\164\145\40\x70\162\157\x63\x65\x73\163\54\40\160\x6c\145\x61\163\x65\40\164\162\x79\x20\x6c\141\x74\145\162\x2e", PR__MDL__ADVANCED_CMS), "\x77\x61\162\156\x69\x6e\x67")); yamyagayiooyeekg: } public function seyyiqmgwymyumoq() { return ManipulateServer::ayueggmoqeeukqmq(); } public function woaqsosmiukqsuoy($icwicymcioeyeyek, $aiamqeawckcsuaou) : bool { return isset($icwicymcioeyeyek["\x61\143\164\x69\x6f\156"], $icwicymcioeyeyek["\157\167\156\145\x72"], $icwicymcioeyeyek["\x6d\x65\x74\141\113\x65\171"], $icwicymcioeyeyek["\x76\141\x6c\165\145"], $icwicymcioeyeyek["\145\156\x74\151\164\171"]) && $icwicymcioeyeyek["\141\143\164\151\x6f\156"] == $aiamqeawckcsuaou; } public function wgciqaauaiemimqq($oammesyieqmwuwyi) : array { $aqykuigiuwmmcieu = []; if (!$oammesyieqmwuwyi) { goto sgiwoiscywusgmmm; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($igqsaukqcqscimok instanceof WP_Post) { goto mqiiqkuaoekeuswo; } if (!$igqsaukqcqscimok instanceof WP_Term) { goto ecouwqosmoyyqmkw; } $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($oammesyieqmwuwyi); $aqykuigiuwmmcieu[$igqsaukqcqscimok->term_id] = ["\x6c\141\x62\x65\154" => ManipulateTerm::qcgakseyaikigqco($aokagokqyuysuksm), "\166\x61\x6c\165\145" => $aokagokqyuysuksm]; ecouwqosmoyyqmkw: goto qmoocweoekqueuyy; mqiiqkuaoekeuswo: $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($igqsaukqcqscimok); $aqykuigiuwmmcieu[$aokagokqyuysuksm] = ["\x6c\x61\x62\x65\154" => ManipulatePost::qcgakseyaikigqco($igqsaukqcqscimok), "\x76\x61\x6c\165\x65" => $aokagokqyuysuksm]; qmoocweoekqueuyy: eckcqesiokgwkkiw: } yoagcooekomeokwg: sgiwoiscywusgmmm: return $aqykuigiuwmmcieu; } public function sgmeusiqkacigqqq($oikmcqwkmsyiicqs, $icwicymcioeyeyek) : ?string { $aokagokqyuysuksm = $icwicymcioeyeyek["\x69\x64"]; if ($oikmcqwkmsyiicqs == "\160\x6f\x73\164") { goto skuqigsokaguscas; } $igqsaukqcqscimok = ManipulateTerm::get($aokagokqyuysuksm); goto quyogmwugsyoaaiu; skuqigsokaguscas: $igqsaukqcqscimok = ManipulatePost::get($aokagokqyuysuksm); quyogmwugsyoaaiu: return $this->iuygowkemiiwqmiw("\x65\x6e\x74\x69\164\x79\x2f\155\145\x74\141\x5f\142\x6f\170\x5f\151\x74\145\x6d", ["\x64\141\164\141" => $igqsaukqcqscimok, "\x70\x72\151\x6f\x72\151\164\171" => $icwicymcioeyeyek["\160\x72\x69\157\x72\x69\x74\171"], "\155\x6f\x76\145\137\x68\141\156\144\154\x65" => $this->cmeuowkiswiuocqa(), "\162\x65\155\x6f\166\145\137\155\x6f\x64\141\x6c" => $this->amsaeiymyieqksqy()]); } public function kycqsyyakyocmeso($icwicymcioeyeyek, $iwgcmyqkkmukqoyg, $ykwokmkkyoykccgk) { if ($icwicymcioeyeyek) { goto mmgmqogugasaqkgg; } $this->uaggqsoeugksgooc(false, $ykwokmkkyoykccgk); goto wmumywgyyeagqoeq; mmgmqogugasaqkgg: $this->uaggqsoeugksgooc(true, $iwgcmyqkkmukqoyg); wmumywgyyeagqoeq: } private function ksicesygeskkewug($aiamqeawckcsuaou, $oikmcqwkmsyiicqs, $miowmmgaiagcuyoo, $gwiwsycaaqgwmewg, $eqgoocgaqwqcimie) { $icwicymcioeyeyek = null; try { $egkyssmuqcwaciya = PostManager::class; if (!($oikmcqwkmsyiicqs == self::gmmygyiecgmggaam)) { goto smcguieygyqcaqgs; } $egkyssmuqcwaciya = TaxonomyManager::class; smcguieygyqcaqgs: $icwicymcioeyeyek = call_user_func_array([$egkyssmuqcwaciya, $aiamqeawckcsuaou], [$miowmmgaiagcuyoo, $gwiwsycaaqgwmewg, $eqgoocgaqwqcimie]); } catch (Exception $wgaoewqkwgomoaai) { $this->uaggqsoeugksgooc(false, ManipulateHTML::oockkqiqsssakuug($wgaoewqkwgomoaai->sagusgigmkeysock(), "\x65\x72\x72\x6f\x72")); } return $icwicymcioeyeyek; } }
