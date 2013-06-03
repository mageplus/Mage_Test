<?php
 /*
 * @category    Magento
 * @package     Mage_Core
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Core_Test_Model_Email_Template_Mailer extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Core_Model_Email_Template_Mailer
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_MODEL;
    const CLASS_ID = 'core/email_template_mailer';

    protected function setUp()
    {
        $this->_model = new Mage_Core_Model_Email_Template_Mailer();
    }

    public function testAddEmailInfo()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testSend()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testSetSender()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetSender()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testSetStoreId()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetStoreId()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testSetTemplateId()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetTemplateId()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testSetTemplateParams()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetTemplateParams()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   
}
