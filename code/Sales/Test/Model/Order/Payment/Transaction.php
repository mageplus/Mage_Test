<?php
 /*
 * @category    Magento
 * @package     Mage_Sales
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Sales_Test_Model_Order_Payment_Transaction extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Sales_Model_Order_Payment_Transaction
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_MODEL;
    const CLASS_ID = 'sales/order_payment_transaction';

    protected function setUp()
    {
        $this->_model = new Mage_Sales_Model_Order_Payment_Transaction();
    }

    public function testSetOrderPaymentObject()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testSetTxnId()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testSetParentTxnId()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testSetTxnType()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testGetPatentTransaction()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testGetChildTransactions()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testCloseAuthorization()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testCloseCapture()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testCanVoidAuthorizationCompletely()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testHasChildTransaction()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testLoadByTxnId()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testSetAdditionalInformation()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testGetAdditionalInformation()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testUnsAdditionalInformation()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testClose()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testGetOrderPaymentObject()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testGetOrderId()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testGetOrder()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testSetOrder()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testIsFailsafe()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testIsVoided()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testGetTransactionTypes()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testGetOrderWebsiteId()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 
}
