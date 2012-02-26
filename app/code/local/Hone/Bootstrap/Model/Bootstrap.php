<?php

class Hone_Bootstrap_Model_Bootstrap extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('bootstrap/bootstrap');
    }
}