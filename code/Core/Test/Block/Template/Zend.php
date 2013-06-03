<?php
 /*
 * @category    Magento
 * @package     Mage_Core
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Core_Block_Template_Zend extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Core_Block_Template_Zend
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_BLOCK;
    const CLASS_ID = 'core/block_template_zend';

    protected function setUp()
    {
        $this->_model = new Mage_Core_Block_Template_Zend();
    }

    public function testAssign()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testSetScriptPath()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testFetchView()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   
}
