<?php
class Hone_Bootstrap_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/bootstrap?id=15 
    	 *  or
    	 * http://site.com/bootstrap/id/15 	
    	 */
    	/* 
		$bootstrap_id = $this->getRequest()->getParam('id');

  		if($bootstrap_id != null && $bootstrap_id != '')	{
			$bootstrap = Mage::getModel('bootstrap/bootstrap')->load($bootstrap_id)->getData();
		} else {
			$bootstrap = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($bootstrap == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$bootstrapTable = $resource->getTableName('bootstrap');
			
			$select = $read->select()
			   ->from($bootstrapTable,array('bootstrap_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$bootstrap = $read->fetchRow($select);
		}
		Mage::register('bootstrap', $bootstrap);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}