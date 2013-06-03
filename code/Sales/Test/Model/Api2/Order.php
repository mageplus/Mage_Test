<?php
 /*
 * @category    Magento
 * @package     Mage_Sales
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Sales_Test_Model_Api2_Order extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Sales_Model_Api2_Order
     */
    protected $_model;

    protected function setUp()
    {
        $this->_model = new Mage_Sales_Model_Api2_Order();
    }

    public function testIsGiftMessageAllowed()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testIsOrderCommentsAllowed()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testIsPaymentMethodAllowed()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testIsTaxNameAllowed()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testIsTaxRateAllowed()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}
