<?php
 /*
 * @category    Magento
 * @package     Mage_Core
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Core_Test_Model_Resource_File_Storage_File extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Core_Model_Resource_File_Storage_File
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_MODEL;
    const CLASS_ID = 'core/resource_file_storage_file';

    protected function setUp()
    {
        $this->_model = new Mage_Core_Model_Resource_File_Storage_File();
    }

    public function testGetMediaBaseDirectory()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testGetStorageData()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testClear()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testSaveDir()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  

    public function testSaveFile()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }  
}
