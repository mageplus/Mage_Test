<?php
/**
 * @category    Mage_Test
 * @package     Mage_Test
 * @subpackage  Api2 
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://www.mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Api2_Test_Model_Auth extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Api2_Model_Auth
     */
    protected $_model;

    protected function setUp()
    {
        $this->_model = new Mage_Api2_Model_Auth();
    }

    public function testAuthenticate()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}

