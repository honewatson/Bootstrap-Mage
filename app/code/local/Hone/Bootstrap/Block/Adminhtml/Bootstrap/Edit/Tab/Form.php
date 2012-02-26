<?php

class Hone_Bootstrap_Block_Adminhtml_Bootstrap_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('bootstrap_form', array('legend'=>Mage::helper('bootstrap')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('bootstrap')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('bootstrap')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('bootstrap')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('bootstrap')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('bootstrap')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('bootstrap')->__('Content'),
          'title'     => Mage::helper('bootstrap')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getBootstrapData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getBootstrapData());
          Mage::getSingleton('adminhtml/session')->setBootstrapData(null);
      } elseif ( Mage::registry('bootstrap_data') ) {
          $form->setValues(Mage::registry('bootstrap_data')->getData());
      }
      return parent::_prepareForm();
  }
}
