<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624029fab98f6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Rating\Model; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\AdvancedCMS\Model as BaseClass; abstract class Model extends BaseClass { public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::mswoacegomcucaik: $post = ManipulatePost::get($eqgoocgaqwqcimie); if (!$post) { goto yowsmsiyimmimemc; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(DecoratorPost::yyykkcyiksewsoqy($post), ManipulatePost::qcgakseyaikigqco($post)); yowsmsiyimmimemc: goto eqkauqciwewmgeoi; case self::iockmgiyoygcswog: $mkucggyaiaukqoce = ManipulateUser::get($eqgoocgaqwqcimie); if (!$mkucggyaiaukqoce) { goto kiqogmwcgcamwiig; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce), ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce)); kiqogmwcgcamwiig: } kwagwqyusyiyoaqs: eqkauqciwewmgeoi: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function mcaggmuyamgsomaa($ccowyogiqwikkkie = [], $aokagokqyuysuksm = null, $tsuauommsquiesmk = null, $igqsaukqcqscimok = null) : array { $post = ManipulatePost::get(ManipulateArray::get($igqsaukqcqscimok, self::mswoacegomcucaik), self::ckmqoekmugkggeym, true); if (!$post) { goto iomcaiwewsawiamu; } $ccowyogiqwikkkie["\x73\x68\157\167\x5f\x70\157\x73\164"] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\162\145\x66" => ManipulatePost::ycqquoiyyuesegsy($post)], __("\x53\150\x6f\167\40\120\x6f\163\164", PR__MDL__ADVANCED_CMS)); iomcaiwewsawiamu: return parent::mcaggmuyamgsomaa($ccowyogiqwikkkie, $aokagokqyuysuksm, $tsuauommsquiesmk, $igqsaukqcqscimok); } }
