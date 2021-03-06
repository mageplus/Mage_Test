<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     Mage_Core
 * @subpackage  integration_tests
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Test theme observer
 */
class Mage_Core_Test_Model_Observer extends Mage_Test_Unit_Case
{
    /**
     * Get theme model
     *
     * @return Mage_Core_Model_Abstract
     */
    protected function _getThemeModel()
    {
        return Mage::getModel('Mage_Core_Model_Theme');
    }

    /**
     * Create event observer for theme registration
     *
     * @return Varien_Event_Observer
     */
    protected function _createEventObserverForThemeRegistration()
    {
        $response = new Varien_Object(array('additional_options' => array()));
        $event = new Varien_Event(array('response_object' => $response));
        return new Varien_Event_Observer(array('event' => $event));
    }

    public function testAddSynchronizeNotification()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testCleanCache()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}
