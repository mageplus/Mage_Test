<?php
/**
 * @category    Mage_Test
 * @package     Mage_Test
 * @subpackage  Api2 
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://www.mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Api2_Test_Model_Acl extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Api2_Model_Acl
     */
    protected $_model;

    protected function setUp()
    {
        $this->_model = new Mage_Api2_Model_Acl();
    }

    /**
     * @magentoAppIsolation enabled
     */
    public function testCRUD()
    {
        Mage::app()->setCurrentStore(Mage::app()->getStore(Mage_Core_Model_App::ADMIN_STORE_ID));
        $this->_model->setName('test');
        $crud = new Magento_Test_Entity($this->_model, array('name' => uniqid()));
        $crud->testCrud();
    }
}

