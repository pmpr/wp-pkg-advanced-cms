<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6327538adab60             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Rating; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\AdvancedCMS\Rating\Model\Rate; class Cover extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\x6f\155\155\x65\156\164\x5f\146\x6f\x72\x6d\x5f\x62\145\x66\x6f\x72\145", [$this, "\x72\x65\156\x64\x65\162"], 0); parent::wigskegsqequoeks(); } public function render($post) { echo $this->sqkcuwewwecosise($post); } public function sqkcuwewwecosise($post, $egcgeqyisgamuamo = false) : string { $nsmgceoqaqogqmuw = ''; if (!$this->gaogimymcgsiqois()) { goto mykiyqcqiegkiqys; } if ($post) { goto cwswueuqoamqasya; } $post = ManipulatePost::mwikyscisascoeea(); cwswueuqoamqasya: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!in_array($useksmwkuswkwcqg, ["\x70\157\x73\x74"])) { goto aquqkiggamaoegoo; } $qookweymeqawmcwo = ["\x72\145\163\165\x6c\164\x5f\x6d\141\x73\153" => __("\x52\141\164\151\x6e\147\x20\x41\x76\145\x72\141\147\145\40\x25\x73\40\157\x66\40\x25\163\40\x7c\x20\122\x61\x74\x69\156\x67\40\x43\x6f\x75\x6e\164\72\40\x25\x73", PR__MDL__ADVANCED_CMS)]; $qqyuqswckkcomeak = Rate::symcgieuakksimmu()->qooeaookuemoqecm([], $post); $gaeqamemwmwsyukm = ManipulateArray::get($qqyuqswckkcomeak, "\x63\157\165\x6e\x74"); $wiiqgewkwwkaukyo = ManipulateArray::get($qqyuqswckkcomeak, "\141\x76\145\x72\141\x67\x65"); $qookweymeqawmcwo["\162\141\x74\151\x6e\x67"] = $qqyuqswckkcomeak; if (!$egcgeqyisgamuamo) { goto omykokikgocoikec; } $eoiqickgueqaoioi = Rate::symcgieuakksimmu()->jwskisguugiiqwsq($post); if ($eoiqickgueqaoioi) { goto kgmeiwiakwicgkkk; } $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, ["\164\x69\x74\154\145" => __("\131\x6f\165\162\40\x6f\160\x69\x6e\151\x6f\156\x20\x69\163\x20\x69\x6d\160\157\162\164\141\156\x74\x20\164\157\40\x75\163", PR__MDL__ADVANCED_CMS), "\147\165\x69\144\x65\137\164\145\x78\164" => sprintf(__("\122\x61\164\145\40\164\150\x69\163\x20\160\157\x73\164\40\x25\163\40\164\x6f\40\45\x73", PR__MDL__ADVANCED_CMS), 1, 5)]); kgmeiwiakwicgkkk: $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\141\164\x69\156\147\137\146\x6f\x72\x6d\x5f\x72\x65\156\144\145\x72\x5f\160\141\x72\x61\155\x65\164\145\162\163"), $qookweymeqawmcwo, $post); if (!$eoiqickgueqaoioi) { goto suuskagowwgsouqw; } $qookweymeqawmcwo["\165\x73\x65\162\x5f\162\141\164\x65"] = sprintf(__("\x59\157\x75\x20\x68\x61\166\145\40\x61\154\162\145\x61\x64\x79\x20\162\x61\x74\x65\40\45\163\40\x74\157\x20\164\x68\151\x73\x20\160\157\x73\x74\56", PR__MDL__ADVANCED_CMS), $this->msywmyaoqmaegsuy(ManipulateArray::get($eoiqickgueqaoioi, "\x76\141\154\x75\x65", 1))); suuskagowwgsouqw: omykokikgocoikec: if (!($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo)) { goto csieaismmmocyacu; } $qookweymeqawmcwo["\x72\145\x73\165\154\164"] = $this->msywmyaoqmaegsuy(sprintf($qookweymeqawmcwo["\x72\145\163\x75\x6c\x74\x5f\x6d\x61\163\x6b"], round($wiiqgewkwwkaukyo, 2), 5, intval($gaeqamemwmwsyukm))); csieaismmmocyacu: $qookweymeqawmcwo["\160\x6f\163\164"] = ManipulatePost::mwikyscisascoeea($post); $qookweymeqawmcwo["\x72\145\156\144\145\x72"] = $egcgeqyisgamuamo; $qookweymeqawmcwo["\162\x61\164\151\156\x67\137\146\157\162\155"] = $this->imqoowygmmgysyyu(); $qookweymeqawmcwo["\146\145\145\144\142\x61\143\x6b\x5f\x66\157\162\x6d"] = $this->ocoacoemoquqgqwm(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x66\x6f\x72\155", $qookweymeqawmcwo); aquqkiggamaoegoo: mykiyqcqiegkiqys: return $nsmgceoqaqogqmuw; } public function imqoowygmmgysyyu() : ?string { return $this->iuygowkemiiwqmiw("\x72\x61\164\151\156\x67", ["\x6e\141\155\x65" => "\x72\x61\x74\x69\x6e\147"]); } public function ocoacoemoquqgqwm() : ?string { $qookweymeqawmcwo = [self::ymckmcsiymwqucoq => [Form::uouyygwcgsmygaee("\x72\141\164\151\156\147\137\146\x65\x65\x64\142\x61\143\153", __("\122\141\x74\x69\x6e\147\x20\106\x65\145\x64\x62\141\143\x6b", PR__MDL__ADVANCED_CMS))->qigsyyqgewgskemg("\155\x62\x2d\62"), Form::uikcsmyiqacmyoau(), Form::ucmasmuimegwqeuk("\162\141\x74\151\x6e\x67\x5f\163\165\142\155\151\164", __("\x53\x75\142\155\151\164", PR__MDL__ADVANCED_CMS))->qigsyyqgewgskemg("\x62\164\156\55\x62\x6c\157\x63\153\x20\x6a\165\163\164\x69\146\x79\x2d\x63\157\156\x74\145\156\164\55\x63\x65\x6e\x74\145\x72")->iswqmkousoeksaae()], "\161\x75\x65\163\164\x69\x6f\x6e" => $this->weysguygiseoukqw(Setting::yuauwoaimesgouey)]; $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\162\141\164\x69\x6e\x67\x5f\146\145\x65\x64\142\x61\x63\153\137\x70\x61\162\141\x6d\x65\x74\x65\x72\163"), $qookweymeqawmcwo); return $this->iuygowkemiiwqmiw("\x66\145\145\x64\x62\141\x63\153", $qookweymeqawmcwo); } }
