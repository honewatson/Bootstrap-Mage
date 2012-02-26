<?php

class Hone_Bootstrap_Model_Mysql4_Bootstrap_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('bootstrap/bootstrap');
    }
}