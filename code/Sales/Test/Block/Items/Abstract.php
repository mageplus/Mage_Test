<?php
 /*
 * @category    Magento
 * @package     Mage_Sales
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Sales_Test_Block_Items_Abstract extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Sales_Block_Items_Abstract
     */
    protected $_model;

    protected function setUp()
    {
        $this->_model = new Mage_Sales_Block_Items_Abstract();
    }

    public function testAddItemRenderer()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testGetItemRenderer()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testGetItemHtml()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}
