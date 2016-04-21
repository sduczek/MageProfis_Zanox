<?php
$installer = $this;
$installer->startSetup();
$adminVersion = Mage::getConfig()->getModuleConfig('Mage_Admin')->version;
if (version_compare($adminVersion, '1.6.1.2', '>=')) {
$variableNames = array(
        'zanox/general/master_cat',
        'zanox/general/master_home',
        'zanox/general/master_product',
        'zanox/general/master_search',
        'zanox/general/sales_success',
        'zanox/general/master_checkout',
        'zanox/general/master_cart',
    );

    foreach ($variableNames as $variableName) {
        $whitelistVar = Mage::getModel('admin/variable')->load($variableName, 'variable_name');
        $whitelistVar->setData('variable_name', $variableName);
        $whitelistVar->setData('is_allowed', 1);
        $whitelistVar->save();
    }
}
$installer->endSetup();
