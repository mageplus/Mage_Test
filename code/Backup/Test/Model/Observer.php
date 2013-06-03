<?php
/**
 * @category    Mage_Test
 * @package     Mage_Test
 * @subpackage  Backup 
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://www.mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Backup_Test_Model_Observer extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Backup_Model_Observer
     */
    protected $_model;

    protected function setUp()
    {
        $this->_model = new Mage_Backup_Model_Observer();
    }

    public function testScheduleBackup()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}

