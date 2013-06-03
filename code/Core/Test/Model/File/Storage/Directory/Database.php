<?php
 /*
 * @category    Magento
 * @package     Mage_Core
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Core_Test_Model_File_Storage_Directory_Database extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Core_Model_File_Storage_Directory_Databasen
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_MODEL;
    const CLASS_ID = 'core/file_storage_directory_database';

    protected function setUp()
    {
        $this->_model = new Mage_Core_Model_File_Storage_Directory_Database();
    }

    public function testLoadByPath()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testHasErrors()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetParentId()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testCreateRecursive()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testExportDirectories()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testImportDirectories()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testClearDirectories()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetSubdirectories()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testDeleteDirectory()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   
}
