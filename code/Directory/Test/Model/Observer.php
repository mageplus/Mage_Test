<?php
/**
 * @category    Mage_Test
 * @package     Mage_Test
 * @subpackage  Directory
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://www.mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Directory_Test_Model_Observer extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Directory_Model_Observer
     */
    protected $_model;

    protected function setUp()
    {
        $this->_model= new Mage_Directory_Model_Observer();
    }

    public function testScheduledUpdateCurrencyRates()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}

