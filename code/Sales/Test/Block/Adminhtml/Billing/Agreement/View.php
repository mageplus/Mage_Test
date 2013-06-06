<?php
 /*
 * @category    Magento
 * @package     Mage_Sales
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Sales_Test_Block_Adminhtml_Billing_Agreement_View extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Sales_Block_Adminhtml_Billing_Agreement_View
     */
    protected $_model;

    protected function setUp()
    {
	// constructor for this class isn't robust -> will fatal error if billing agreement not in registry
        //$this->_model = new Mage_Sales_Block_Adminhtml_Billing_Agreement_View();
    }

    public function testGetHeaderText()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	
}
