<?php
 /*
 * @category    Magento
 * @package     Mage_Sales
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Sales_Test_Model_Entity_Sale_Collection extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Sales_Model_Entity_Sale_Collection
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_MODEL;
    const CLASS_ID = 'sales/entity_sale_collection';

    protected function setUp()
    {
        $this->_model = new Mage_Sales_Model_Entity_Sale_Collection();
    }

    public function testSetCustomerFilter()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testLoad()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testPrintLogQuery()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetSelect()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetAttribute()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetEntity()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetIterator()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetItems()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetTotals()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   
}
