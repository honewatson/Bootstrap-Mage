<?php

class Hone_Bootstrap_Model_Mysql4_Bootstrap extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the bootstrap_id refers to the key field in your database table.
        $this->_init('bootstrap/bootstrap', 'bootstrap_id');
    }
}