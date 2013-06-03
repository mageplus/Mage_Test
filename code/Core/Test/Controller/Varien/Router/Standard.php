<?php
 /*
 * @category    Magento
 * @package     Mage_Core
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Core_Test_Controller_Varien_Router_Standard extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Core_Controller_Varien_Router_Standard
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_CONTROLLER;
    const CLASS_ID = 'core/controller_varien_router_standard';

    protected function setUp()
    {
        $this->_model = new Mage_Core_Controller_Varien_Router_Standard();
    }

    public function testCollectRoutes()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testFetchDefault()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testMatch()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testAddModule()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetModuleByFrontName()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetModuleByName()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetFrontNameByRoute()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetRouteByFrontName()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetControllerFileName()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testValidateControllerFileName()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetControllerClassName()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testRewrite()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   
}
