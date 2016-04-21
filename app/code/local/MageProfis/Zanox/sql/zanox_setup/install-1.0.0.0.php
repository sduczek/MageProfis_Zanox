<?php
$installer = $this;
$installer->startSetup();
Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);

$staticBlock = array(
    'title' => 'Zanox Category',
    'identifier' => 'zanox_category',
    'content' => '<!-- Start of Category Page Mastertag Code: -->
                    <div class="zx_{{config path="zanox/general/master_cat"}}">
                    <script type="text/javascript">// <![CDATA[
                    var bodyclass = document.body.className;
                    var zx_category = bodyclass.split("category-")[2];
		                    window._zx = window._zx || [];
							window._zx.push({"id":"{{config path="zanox/general/master_cat"}}"});
							(function(d) {
								var s = d.createElement("script"); s.async = true;
								s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//static.zanox.com/scripts/zanox.js";
								var a = d.getElementsByTagName("script")[0]; a.parentNode.insertBefore(s, a);
							}(document));
// ]]></script>
</div>
<!-- End of Category Page Mastertag Code -->',
    'is_active' => 1,
    'stores' => array(0),
);

Mage::getModel('cms/block')->setData($staticBlock)->save();
Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);

$staticBlock = array(
    'title' => 'Zanox Homepage',
    'identifier' => 'zanox_home',
    'content' => '<!-- Start of Home Page Mastertag Code: -->
					<div class="zx_{{config path='"zanox/general/master_home"'}} zx_mediaslot">
						<script type="text/javascript">
							window._zx = window._zx || [];
							window._zx.push({"id":"{{config path="zanox/general/master_home"}}"});
							(function(d) {
								var s = d.createElement("script"); s.async = true;
								s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//static.zanox.com/scripts/zanox.js";
								var a = d.getElementsByTagName("script")[0]; a.parentNode.insertBefore(s, a);
							}(document));
						</script>
					</div>
		<!-- End of Home Page Mastertag Code -->',
    'is_active' => 1,
    'stores' => array(0),
);

Mage::getModel('cms/block')->setData($staticBlock)->save();
Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);

$staticBlock = array(
    'title' => 'Zanox Product',
    'identifier' => 'zanox_product',
    'content' => '<div class="zanox">
		{{block type="core/template" block_id="zanox_product_temp" template="zanox/zanox_product.phtml"}}
		</div>',
    'is_active' => 1,
    'stores' => array(0),
);


$installer->endSetup();
