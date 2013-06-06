<?php
 /*
 * @category    Magento
 * @package     Mage_Core
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Core_Test_Controller_Front_Router extends Mage_Test_Unit_Case_Controller 
{
    /**
     * @var Mage_Core_Controller_Front_Router
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_CONTROLLER;
    const CLASS_ID = 'core/controller_front_router';

    protected function setUp()
    {
        $this->_model = new Mage_Core_Controller_Front_Router();
    }

    public function testGetConfig()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testAddRoutes()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetUrl()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   
}
