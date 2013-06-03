<?php
 /*
 * @category    Magento
 * @package     Mage_Core
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Core_Test_Helper_Hint extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Core_Helper_Hint
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_HELPER;
    const CLASS_ID = 'core/helper_hint';

    protected function setUp()
    {
        $this->_model = new Mage_Core_Helper_Hint();
    }

    public function testGetAvailableHints()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testGetHintByCode()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    } 
}
