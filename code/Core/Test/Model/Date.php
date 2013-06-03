<?php
 /*
 * @category    Magento
 * @package     Mage_Core
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Core_Test_Model_Date extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Core_Model_Date
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_MODEL;
    const CLASS_ID = 'core/date';

    protected function setUp()
    {
        $this->_model = new Mage_Core_Model_Date();
    }

    public function testCalculateOffset()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testGmtDate()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testDate()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testGmtTimestamp()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testTimestamp()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testGetGmtOffset()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testCheckDateTime()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testParseDateTime()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  
}
