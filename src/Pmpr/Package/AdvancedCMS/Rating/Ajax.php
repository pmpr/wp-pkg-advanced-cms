<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             615d8e8e8d637             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Rating; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Rating\Model\Feedback; use Pmpr\Package\AdvancedCMS\Rating\Model\Rate; class Ajax extends Common { const RATING_GET_HTML = "\162\x61\164\x69\156\x67\x5f\x67\145\x74\137\150\x74\155\x6c"; const RARING_FEEDBACK_ACTION = "\x72\141\x74\x69\156\147\137\x66\x65\145\144\x62\141\x63\x6b\137\141\143\x74\151\x6f\156"; const RATING_SUBMISSION_ACTION = "\162\141\x74\151\156\147\137\163\x75\142\155\x69\x73\163\x69\x6f\x6e\137\141\143\164\x69\157\x6e"; const ACTIONS = ["\147\x65\x74\x5f\150\164\155\x6c" => self::RATING_GET_HTML, "\163\165\x62\x6d\x69\x74\x5f\x72\x61\164\145" => self::RATING_SUBMISSION_ACTION, "\x73\x75\x62\x6d\151\164\x5f\x66\145\145\x64\x62\x61\143\153" => self::RARING_FEEDBACK_ACTION]; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::RATING_GET_HTML, [$this, "\x73\x71\153\143\x75\x77\145\x77\x77\x65\143\x6f\x73\151\x73\145"])->iqkqummseggmikgo(self::RATING_SUBMISSION_ACTION, [$this, "\157\x63\x6d\x69\x63\163\157\x75\157\x63\153\x6f\171\x61\x77\x77"])->iqkqummseggmikgo(self::RARING_FEEDBACK_ACTION, [$this, "\147\x61\x79\157\147\x6d\x73\x77\161\147\157\x69\x73\x63\x73\x61"]); parent::wigskegsqequoeks(); } public function sqkcuwewwecosise() { goto cqkyumayoemqsueu; ksqmcugkcmsooeaw: if (!$post) { goto eomqeimoequmagum; } goto sukcyismwageqgok; ukmgwuiqwgyiouec: $this->uaggqsoeugksgooc(true, $nsmgceoqaqogqmuw); goto qykcggwgkweasuii; sukcyismwageqgok: $nsmgceoqaqogqmuw = Theme::symcgieuakksimmu()->sqkcuwewwecosise($post, true); goto ukmgwuiqwgyiouec; qykcggwgkweasuii: eomqeimoequmagum: goto geoiegikocwmwosi; cqkyumayoemqsueu: $post = ManipulateServer::ayueggmoqeeukqmq("\x70\157\x73\x74", 0); goto ksqmcugkcmsooeaw; geoiegikocwmwosi: } public function gayogmswqgoiscsa() { $this->aeaqgysgaeowagug(self::RARING_FEEDBACK_ACTION); } public function ocmicsouockoyaww() { $this->aeaqgysgaeowagug(self::RATING_SUBMISSION_ACTION); } public function aeaqgysgaeowagug($ccamueccusigaaio = self::RATING_SUBMISSION_ACTION) { goto smmagoyuqoigoesc; kuaiscyqkgcouiye: if ($occymigcemkqucuw) { goto gmsyoscesymiwwue; } goto ooooceiweeackgie; wsqeiwkgoiekwasy: $occymigcemkqucuw = false; goto swesqeqmagkicuws; swuggqyiaiqywgge: ayucsuwsiocgycww: goto ocwouquuwsaqakae; cwyaysecsakaqgew: $keccaugmemegoimu = __("\x52\145\x71\x75\x69\x72\145\x64\x20\144\x61\x74\x61\x20\x6e\x6f\x74\x20\160\x72\x6f\166\x69\x64\x65\x64\x20\157\x72\40\156\157\x74\x20\166\141\x6c\151\x64\x2e", PR__PKG__ADVANCED_CMS); goto kgqgcggccmiwayua; qysmyemoucigsmua: if (!$keccaugmemegoimu) { goto ayucsuwsiocgycww; } goto kuaiscyqkgcouiye; kygccamgawookukq: aqksouwmeckaqyaq: goto qysmyemoucigsmua; swesqeqmagkicuws: if ($this->miueaekaaugaccmg($keccaugmemegoimu)) { goto ykogqmmywykgouqy; } goto cwyaysecsakaqgew; rgaagksgsewuwgmo: $kucumcusyyckayas = ManipulateUser::meymqemgekqiawec(); goto mcmcocyuugueaeww; ooooceiweeackgie: $keccaugmemegoimu = ManipulateBootstrap::oockkqiqsssakuug($keccaugmemegoimu, "\x77\x61\x72\156\x69\x6e\x67"); goto gkeymcqqsewayscs; kgqgcggccmiwayua: goto aqksouwmeckaqyaq; goto kwayumouacgkgyas; iwsaaiggkciigsmc: $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, "\166\x61\x6c\165\x65"); goto agsuaimomgsoyiem; mcmcocyuugueaeww: $post = ManipulateArray::get($icwicymcioeyeyek, "\160\157\x73\164"); goto eucakkcoiiwkwsme; smmagoyuqoigoesc: $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); goto wsqeiwkgoiekwasy; qoacckkkwsqkokye: eiicmcasqikiyasw: goto swuggqyiaiqywgge; agsuaimomgsoyiem: try { goto equwcsciiggsuiam; awkqcyusycccekwq: eqsuaywswuesuika: goto yugmwomumkosucsc; equwcsciiggsuiam: $icwicymcioeyeyek = ["\x69\x70" => esc_sql($kucumcusyyckayas), "\x70\157\x73\164" => esc_sql($post), "\157\167\156\145\x72" => esc_sql($miowmmgaiagcuyoo)]; goto qsaoyggkqwcgskwk; myooisakyuggoggc: switch ($ccamueccusigaaio) { case self::RARING_FEEDBACK_ACTION: goto meiqywmwuoogckss; meiqywmwuoogckss: $icwicymcioeyeyek["\164\x65\170\164"] = $eqgoocgaqwqcimie; goto oyeygeykqwcqoeic; oyeygeykqwcqoeic: $sogksuscggsicmac = Feedback::symcgieuakksimmu()->gscuuyuyauokoyuo($icwicymcioeyeyek); goto eomcuogskessyicy; quiguyyimiqeqcwa: goto ogciikaecauiwgyk; goto iicaisyekagswmey; eiegguecasykwmyq: ogciikaecauiwgyk: goto qiiqceousoicgeee; qiiqceousoicgeee: goto wasuquysysmqyegg; goto iaywwgssaoecwmeg; sosqgaswegsomgkw: $keccaugmemegoimu = $this->weysguygiseoukqw(Setting::FEEDBACK_MESSAGE); goto eiegguecasykwmyq; ogwwasqkaageiwwi: $occymigcemkqucuw = true; goto sosqgaswegsomgkw; eomcuogskessyicy: if ($sogksuscggsicmac["\163\165\x63\143\x65\163\163"]) { goto okawiaowosqickgq; } goto isaacywgkascmcsw; isaacywgkascmcsw: $keccaugmemegoimu = __("\x53\157\155\145\164\x68\x69\x6e\147\x20\x77\x72\x6f\x6e\x67\x20\x6f\x6e\40\163\x61\166\x65\40\171\x6f\165\x72\40\x6d\145\x73\163\x61\x67\145\56", PR__PKG__ADVANCED_CMS); goto quiguyyimiqeqcwa; iicaisyekagswmey: okawiaowosqickgq: goto ogwwasqkaageiwwi; iaywwgssaoecwmeg: case self::RATING_SUBMISSION_ACTION: default: goto vokekoceocuskqsm; omyquyiguuaociwq: $keccaugmemegoimu = __("\x53\x6f\x6d\x65\x74\x68\x69\156\x67\40\167\x72\157\156\147\40\157\x6e\x20\x73\141\166\x65\x20\171\157\x75\162\40\x72\141\164\145\56", PR__PKG__ADVANCED_CMS); goto aqwoykqaquewcaki; ikuwigsmisimaqoc: $ceiwsaacewygcsqg = $mcieuoqmagekmouk->kumuygiiqswoyasy(); goto sigukociqouigous; vokekoceocuskqsm: if (is_numeric($eqgoocgaqwqcimie) && ($eqgoocgaqwqcimie > 0 && $eqgoocgaqwqcimie < 6) && is_numeric($post) && is_numeric($miowmmgaiagcuyoo)) { goto oeogyayooiwqcmia; } goto ooykyoowougqkaso; iumgcesksuawyuyo: maeueeueqoywkiom: goto qwosyqcomiosguoa; kusuakkwcuqkcqaw: oeogyayooiwqcmia: goto sikckcmeiwmyakeu; sckyiekoceuisqyq: goto uowiiyqmiaaaaoas; goto kusuakkwcuqkcqaw; sikckcmeiwmyakeu: $icwicymcioeyeyek["\x76\141\154\165\x65"] = $eqgoocgaqwqcimie; goto qaycycmeqkqcumog; iuwccksomkkouogy: $occymigcemkqucuw = true; goto cceggewquoaemcwq; ioiwoukauoeamuca: qoiyiuoyamwimusy: goto oqckuigyqswmqcqg; ooykyoowougqkaso: $keccaugmemegoimu = __("\x52\145\x71\x75\145\163\x74\40\151\x73\40\x6e\157\164\x20\166\x61\x6c\x69\144\x2c\40\x70\154\145\x61\x73\x65\x20\x74\162\x79\40\x61\147\141\151\x6e\56", PR__PKG__ADVANCED_CMS); goto sckyiekoceuisqyq; qaycycmeqkqcumog: $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); goto ikuwigsmisimaqoc; aqwoykqaquewcaki: goto qoiyiuoyamwimusy; goto mesesokuoomcioom; owismwmeqcmukagu: goto wasuquysysmqyegg; goto oiywguooqeasueqq; sigukociqouigous: $wiwomgcsgmawegaw = $mcieuoqmagekmouk->jwskisguugiiqwsq($post, $miowmmgaiagcuyoo, $kucumcusyyckayas); goto yagscaikmmuagqcu; iyawqekeeawqkymm: $icwicymcioeyeyek[$ceiwsaacewygcsqg] = $wiwomgcsgmawegaw->{$ceiwsaacewygcsqg}; goto iumgcesksuawyuyo; yagscaikmmuagqcu: if (!$wiwomgcsgmawegaw) { goto maeueeueqoywkiom; } goto iyawqekeeawqkymm; mesesokuoomcioom: jyekikocgagcgywq: goto iuwccksomkkouogy; oqckuigyqswmqcqg: uowiiyqmiaaaaoas: goto owismwmeqcmukagu; qwosyqcomiosguoa: $sogksuscggsicmac = Rate::symcgieuakksimmu()->gscuuyuyauokoyuo($icwicymcioeyeyek); goto qaqooueskgciuqgc; qaqooueskgciuqgc: if ($sogksuscggsicmac["\163\x75\143\143\x65\x73\163"]) { goto jyekikocgagcgywq; } goto omyquyiguuaociwq; cceggewquoaemcwq: $keccaugmemegoimu = $this->weysguygiseoukqw(Setting::THANKS_MESSAGE); goto ioiwoukauoeamuca; oiywguooqeasueqq: } goto awkqcyusycccekwq; yugmwomumkosucsc: wasuquysysmqyegg: goto kqwyogqqwumumiwg; qsaoyggkqwcgskwk: $occymigcemkqucuw = true; goto myooisakyuggoggc; kqwyogqqwumumiwg: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = __("\x43\x61\156\x20\x6e\x6f\164\40\x73\x61\166\x65\x20\x79\157\165\x72\x20\160\157\163\164\145\x64\40\x64\x61\x74\x61\x2e\40\x74\162\x79\x20\154\x61\x74\164\145\162\40\x70\x6c\x65\141\x73\x65\x2e", PR__PKG__ADVANCED_CMS); } goto kygccamgawookukq; ocwouquuwsaqakae: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); goto gcaykgmmmqomsyis; gkeymcqqsewayscs: goto eiicmcasqikiyasw; goto qwiyicoywcekgyce; eucakkcoiiwkwsme: $miowmmgaiagcuyoo = ManipulateUser::kuswmimkgmyuymiu(ManipulateArray::get($icwicymcioeyeyek, "\x6f\x77\156\x65\x72")); goto iwsaaiggkciigsmc; kwayumouacgkgyas: ykogqmmywykgouqy: goto rgaagksgsewuwgmo; tagquiiokseckkqs: $keccaugmemegoimu = ManipulateBootstrap::oockkqiqsssakuug($keccaugmemegoimu, "\x73\165\143\143\x65\163\163"); goto qoacckkkwsqkokye; qwiyicoywcekgyce: gmsyoscesymiwwue: goto tagquiiokseckkqs; gcaykgmmmqomsyis: } public function seyyiqmgwymyumoq() { $post = ManipulateServer::ayueggmoqeeukqmq(); return ManipulateFormat::omaawkkwwyesqwcc($post, ["\x70\x6f\163\x74" => '', "\157\x77\156\x65\162" => '', "\x76\x61\x6c\x75\x65" => '', "\x61\143\164\x69\x6f\x6e" => '']); } }
