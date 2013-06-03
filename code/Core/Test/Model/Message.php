<?php
 /*
 * @category    Magento
 * @package     Mage_Core
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Core_Test_Model_Message extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Core_Model_Message
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_MODEL;
    const CLASS_ID = 'core/message';

    protected function setUp()
    {
        $this->_model = new Mage_Core_Model_Message();
    }

    public function testError()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testWarning()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testNotice()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 

    public function testSuccess()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 
}
