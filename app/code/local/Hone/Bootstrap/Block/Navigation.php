<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Hone_Bootstrap_Block_Navigation extends Mage_Core_Block_Template
{
    public $_block;
    public $_raw_menu_items;
    public $_menu_items;
    public function __construct() {

        $this->_block = Mage::getModel('cms/block')->load('bootstrap-mega-menu');
        $this->_raw_menu_items = parse_ini_string(strip_tags($this->_block->getContent()));
        $layout = Mage::getSingleton('core/layout');
        foreach($this->_raw_menu_items as $title => $block_key)
            $this->_menu_items[$title] = $layout->createBlock('cms/block')->setBlockId($block_key)->toHtml();
    }
}
?>
