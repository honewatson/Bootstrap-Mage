<?php
class Hone_Bootstrap_Block_Bootstrap extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getBootstrap()     
     { 
        if (!$this->hasData('bootstrap')) {
            $this->setData('bootstrap', Mage::registry('bootstrap'));
        }
        return $this->getData('bootstrap');
        
    }
}