<?php

class Hone_Bootstrap_Block_Adminhtml_Bootstrap_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('bootstrap_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('bootstrap')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('bootstrap')->__('Item Information'),
          'title'     => Mage::helper('bootstrap')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('bootstrap/adminhtml_bootstrap_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}