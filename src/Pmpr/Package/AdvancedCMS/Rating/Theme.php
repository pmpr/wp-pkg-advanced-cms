<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61fec342ce1a4             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Rating; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Rating\Model\Rate; class Theme extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\x6f\155\x6d\145\156\164\x5f\x66\x6f\162\x6d\137\x62\x65\x66\157\162\x65", [$this, "\x72\x65\x6e\144\x65\x72"], 0); parent::wigskegsqequoeks(); } public function render($post) { echo $this->sqkcuwewwecosise($post, false); } public function sqkcuwewwecosise($post, $egcgeqyisgamuamo = false) : string { $nsmgceoqaqogqmuw = ''; if (!$this->gaogimymcgsiqois()) { goto cuoqqgaygogsmmic; } $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!in_array($useksmwkuswkwcqg, ["\160\157\163\164"])) { goto ygkcacsyyckescqs; } $qookweymeqawmcwo = ["\x72\x65\163\165\154\x74\x5f\x6d\141\x73\x6b" => __("\122\x61\x74\x69\156\147\x20\x41\166\x65\x72\x61\147\145\40\45\163\x20\x6f\146\x20\45\163\40\174\x20\122\141\164\151\156\147\40\x43\x6f\x75\156\x74\72\x20\45\163", PR__PKG__ADVANCED_CMS)]; $qqyuqswckkcomeak = Rate::symcgieuakksimmu()->qooeaookuemoqecm([], $post); $gaeqamemwmwsyukm = ManipulateArray::get($qqyuqswckkcomeak, "\x63\x6f\165\156\164"); $wiiqgewkwwkaukyo = ManipulateArray::get($qqyuqswckkcomeak, "\x61\x76\145\162\141\147\x65"); $qookweymeqawmcwo["\162\x61\x74\151\156\147"] = $qqyuqswckkcomeak; if (!$egcgeqyisgamuamo) { goto ickcmqoiosquugwe; } $eoiqickgueqaoioi = Rate::symcgieuakksimmu()->jwskisguugiiqwsq($post); if ($eoiqickgueqaoioi) { goto goeoymmqqqeeoime; } $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, ["\164\x69\164\154\x65" => __("\131\x6f\165\162\x20\157\x70\x69\x6e\151\x6f\156\x20\151\x73\x20\151\155\x70\157\162\164\141\156\x74\40\x74\x6f\x20\x75\x73", PR__PKG__ADVANCED_CMS), "\x67\x75\x69\x64\145\x5f\164\145\x78\164" => sprintf(__("\x52\x61\164\x65\40\x74\150\x69\x73\40\x70\x6f\x73\164\x20\45\163\40\x74\x6f\x20\x25\163", PR__PKG__ADVANCED_CMS), 1, 5)]); goeoymmqqqeeoime: $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\162\141\x74\x69\x6e\147\x5f\x66\x6f\162\x6d\x5f\162\145\x6e\x64\x65\x72\137\x70\x61\x72\141\x6d\145\164\145\x72\163"), $qookweymeqawmcwo, $post); if (!$eoiqickgueqaoioi) { goto eiawsoasmscmqswa; } $qookweymeqawmcwo["\x75\163\145\162\x5f\162\x61\x74\x65"] = sprintf(__("\131\x6f\165\40\x68\141\166\x65\x20\x61\x6c\162\145\x61\x64\171\40\x72\x61\x74\145\x20\45\163\40\x74\157\x20\164\x68\151\x73\40\160\157\x73\164\x2e", PR__PKG__ADVANCED_CMS), $this->msywmyaoqmaegsuy(ManipulateArray::get($eoiqickgueqaoioi, "\x76\x61\154\165\x65", 1))); eiawsoasmscmqswa: ickcmqoiosquugwe: if (!($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo)) { goto qmeoaqmsuseueqiy; } $qookweymeqawmcwo["\x72\x65\x73\x75\x6c\164"] = $this->msywmyaoqmaegsuy(sprintf($qookweymeqawmcwo["\x72\x65\x73\x75\154\164\x5f\155\141\x73\x6b"], round($wiiqgewkwwkaukyo, 2), 5, intval($gaeqamemwmwsyukm))); qmeoaqmsuseueqiy: $qookweymeqawmcwo["\160\157\x73\164"] = ManipulatePost::mwikyscisascoeea($post); $qookweymeqawmcwo["\x72\145\156\144\145\162"] = $egcgeqyisgamuamo; $qookweymeqawmcwo["\x72\x61\164\x69\156\x67\x5f\x66\157\162\155"] = $this->imqoowygmmgysyyu(); $qookweymeqawmcwo["\x66\x65\x65\144\142\141\x63\x6b\137\146\x6f\x72\155"] = $this->ocoacoemoquqgqwm(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\146\x6f\162\x6d", $qookweymeqawmcwo); ygkcacsyyckescqs: cuoqqgaygogsmmic: return $nsmgceoqaqogqmuw; } public function imqoowygmmgysyyu() : ?string { return $this->iuygowkemiiwqmiw("\162\141\x74\151\x6e\147", ["\156\141\x6d\x65" => "\162\x61\x74\x69\156\147"]); } public function ocoacoemoquqgqwm() : ?string { $qookweymeqawmcwo = [self::ymckmcsiymwqucoq => [Form::uouyygwcgsmygaee("\x72\x61\164\151\x6e\147\137\x66\x65\145\144\x62\x61\143\x6b", __("\x52\141\164\x69\x6e\x67\x20\106\x65\145\x64\142\141\143\153", PR__PKG__ADVANCED_CMS))->qigsyyqgewgskemg("\155\x62\55\x32"), Form::uikcsmyiqacmyoau(), Form::ucmasmuimegwqeuk("\162\x61\x74\151\x6e\x67\137\163\x75\142\x6d\151\164", __("\123\x75\x62\155\151\x74", PR__PKG__ADVANCED_CMS))->qigsyyqgewgskemg("\142\x74\156\x2d\142\x6c\157\x63\153\x20\x6a\x75\x73\x74\x69\x66\x79\55\x63\x6f\156\164\145\156\x74\55\143\145\x6e\x74\x65\162")->iswqmkousoeksaae()], "\x71\x75\x65\163\x74\151\x6f\156" => $this->weysguygiseoukqw(Setting::yuauwoaimesgouey)]; $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\x61\x74\x69\156\x67\137\x66\145\x65\144\142\x61\143\153\137\160\141\x72\141\x6d\145\x74\x65\162\163"), $qookweymeqawmcwo); return $this->iuygowkemiiwqmiw("\146\x65\145\144\x62\141\x63\x6b", $qookweymeqawmcwo); } }
