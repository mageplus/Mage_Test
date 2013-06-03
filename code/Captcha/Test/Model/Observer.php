<?php
/**
 * @category    Mage_Test
 * @package     Mage_Test
 * @subpackage  Captcha 
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://www.mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Captcha_Test_Model_Observer extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Captcha_Model_Observer
     */
    protected $_model;

    protected function setUp()
    {
        $this->_model = new Mage_Captcha_Model_Observer();
    }

    public function testCheckForgotPassword()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testCheckUserLogin()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testCheckUserCreate()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testCheckGuestCheckout()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testCheckRegisterCheckout()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testCheckUserLoginBackend()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function checkUserForgotPasswordBackend()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testResetAttemptForFrontend()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testResetAttemptForBackend()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testDeleteOldAttempts()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testDeleteExpiredImages()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}

