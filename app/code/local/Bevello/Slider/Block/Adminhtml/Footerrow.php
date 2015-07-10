<?php
/**
 * Created by PhpStorm.
 * User: mcoffey
 * Date: 5/28/15
 * Time: 12:20 PM
 */
class Bevello_Slider_Block_Adminhtml_Footerrow extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
{
    $this->_controller = 'adminhtml_footerrow';
    $this->_blockGroup = 'footerrow';
    $this->_headerText = Mage::helper('slider')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('slider')->__('Add Item');
    parent::__construct();
}
}