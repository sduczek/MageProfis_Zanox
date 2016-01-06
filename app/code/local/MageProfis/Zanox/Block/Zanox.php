<?php
class MageProfis_Zanox_Block_Zanox extends Mage_Core_Block_Template
{
    public function getSessionZanox(){
        $zanid = Mage::app()->getFrontController()->getRequest()->getParams;
        if($zanid){
          if(isset($_GET['zanpid'])){
            Mage::getSingleton('checkout/session')->setZanoxId($_GET['zanpid']);
            var_dump(Mage::getSingleton('checkout/session')->getZanoxId());
          }
        }
        return $zanid;
}
