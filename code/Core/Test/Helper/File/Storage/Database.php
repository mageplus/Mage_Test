<?php
 /*
 * @category    Magento
 * @package     Mage_Core
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Core_Test_Helper_File_Storage_Database extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Core_Helper_File_Storage_Database
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_HELPER;
    const CLASS_ID = 'core/helper_file_storage_database';

    protected function setUp()
    {
        $this->_model = new Mage_Core_Helper_File_Storage_Database();
    }

    public function testCheckDbUsage()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }	

    public function testGetStorageDatabaseModel()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetStorageFileModel()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetResourceStorageModel()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testSaveFile()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testRenameFile()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testCopyFile()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testFileExists()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetUniqueFilename()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testSaveFileToFilesystem()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetMediaRelativePath()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testDeleteFolder()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testDeleteFile()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testSaveUploadedFile()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   

    public function testGetMediaBaseDir()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }   
}
