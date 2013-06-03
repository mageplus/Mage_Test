<?php
 /*
 * @category    Magento
 * @package     Mage_Sales
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Sales_Test_Model_Order_Shipment extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Sales_Model_Order_Shipment
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_MODEL;
    const CLASS_ID = 'sales/order_shipment';

    protected function setUp()
    {
        $this->_model = new Mage_Sales_Model_Order_Shipment();
    }

    public function testLoadByIncrementId()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testSetOrder()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetProtectCode()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetOrder()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetBillingAddress()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetShippingAddress()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testRegister()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetItemsCollection()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetAllItems()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetItemById()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testAddItem()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetTracksCollection()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetAllTracks()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetTrackById()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testAddTrack()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testAddComment()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetCommentsCollection()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testSendEmail()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testSendUpdateEmail()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetStore()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testSetShippingLabel()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetShippingLabel()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   
}
