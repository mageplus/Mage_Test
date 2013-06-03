<?php
 /*
 * @category    Magento
 * @package     Mage_Sales
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Sales_Test_Controller_Abstract extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Sales_Controller_Abstract 
     */
    protected $_model;

    protected function setUp()
    {
        $this->_model = new Mage_Sales_Controller_Abstract();
    }

    public function testViewAction()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testInvoiceAction()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testShipmentAction()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testCreditmemoAction()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testReorderAction()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testPrintAction()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testPrintInvoiceAction()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testPrintShipmentAction()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testPrintCreditmemoAction()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}
