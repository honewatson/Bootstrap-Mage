<?php
class Hone_Bootstrap_Block_Adminhtml_Bootstrap extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_bootstrap';
    $this->_blockGroup = 'bootstrap';
    $this->_headerText = Mage::helper('bootstrap')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('bootstrap')->__('Add Item');
    parent::__construct();
  }
}