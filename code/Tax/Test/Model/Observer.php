<?php
/**
 * @copyright   Copyright (c) 2013 Mage+ Ltd (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Tax_Test_Model_Observer extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Tax_Model_Observer
     */
    protected $_model = null;

    protected function setUp()
    {
        $this->_model = new Mage_Tax_Model_Observer;
    }

    protected function tearDown()
    {
        $this->_model = null;
    }

    /**
     * @todo
     */
    public function testSalesEventConvertQuoteAddressToOrder()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @todo
     */
    public function testSalesEventOrderAfterSave()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @todo
     */
    public function testPrepareCatalogIndexPriceSelect()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @todo
     */
    public function testAddTaxPercentToProductCollection()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @todo
     */
    public function testAggregateSalesReportTaxData()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @todo
     */
    public function testQuoteCollectTotalsBefore()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}
