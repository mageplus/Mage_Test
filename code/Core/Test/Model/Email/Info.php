<?php
 /*
 * @category    Magento
 * @package     Mage_Core
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Core_Test_Model_Email_Info extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Core_Model_Email_Info
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_MODEL;
    const CLASS_ID = 'core/email_info';

    protected function setUp()
    {
        $this->_model = new Mage_Core_Model_Email_Info();
    }

    public function testAddBcc()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testAddTo()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetBccNames()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetBccEmails()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetToNames()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetToEmails()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   
}
