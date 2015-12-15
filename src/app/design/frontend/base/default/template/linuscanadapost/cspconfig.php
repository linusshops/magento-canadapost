<?php
/**
 * Injects config data into the page
 *
 * @author Sam Schmidt <samuel@dersam.net>
 * @since 2015-12-15
 * @company Linus Shops
 */

$CommonCsp = Mage::helper('linus_common/csp');
$CommonCsp->setCspData(array(
    'gmaps_api_key' => Mage::getStoreConfig('linus_canadapost/maps/key'),
    'cpost_logo' => Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN).'frontend/base/default/images/linuscanadapost/cpost.png'
));
echo $CommonCsp->generateHiddenCspMarkup();
?>
