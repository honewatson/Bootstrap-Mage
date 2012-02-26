<?php

class Hone_Bootstrap_Block_Adminhtml_Bootstrap_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'bootstrap';
        $this->_controller = 'adminhtml_bootstrap';
        
        $this->_updateButton('save', 'label', Mage::helper('bootstrap')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('bootstrap')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('bootstrap_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'bootstrap_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'bootstrap_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('bootstrap_data') && Mage::registry('bootstrap_data')->getId() ) {
            return Mage::helper('bootstrap')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('bootstrap_data')->getTitle()));
        } else {
            return Mage::helper('bootstrap')->__('Add Item');
        }
    }
}