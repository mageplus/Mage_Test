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
 * @package     Mage_Adminhtml
 * @subpackage  integration_tests
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Test for Mage_Adminhtml_Block_Urlrewrite_Cms_Page_Grid
 */
class Mage_Adminhtml_Test_Block_Urlrewrite_Cms_Page_Grid extends Mage_Test_Unit_Case
{
    /**
     * Test prepare grid
     */
    public function testPrepareGrid()
    {
        /** @var Mage_Adminhtml_Block_Urlrewrite_Cms_Page_Grid $gridBlock */
        $gridBlock = Mage::app()->getLayout()->createBlock('Mage_Adminhtml_Block_Urlrewrite_Cms_Page_Grid');
        $gridBlock->toHtml();

        foreach (array('title', 'identifier', 'is_active') as $key) {
            $this->assertInstanceOf('Mage_Backend_Block_Widget_Grid_Column', $gridBlock->getColumn($key),
                'Column with key "' . $key . '" is invalid');
        }

        $this->assertStringStartsWith('http://localhost/index.php', $gridBlock->getGridUrl(),
            'Grid URL is invalid');

        $row = new Varien_Object(array('id' => 1));
        $this->assertStringStartsWith('http://localhost/index.php/cms_page/1', $gridBlock->getRowUrl($row),
            'Grid row URL is invalid');

        $this->assertEmpty(0, $gridBlock->getMassactionBlock()->getItems(), 'Grid should not have mass action items');
        $this->assertTrue($gridBlock->getUseAjax(), '"use_ajax" value of grid is incorrect');
    }

    /**
     * Test prepare grid when there is more than one store
     *
     * @magentoDataFixture Mage/Core/_files/store.php
     */
    public function testPrepareGridForMultipleStores()
    {
        /** @var Mage_Adminhtml_Block_Urlrewrite_Cms_Page_Grid $gridBlock */
        $gridBlock = Mage::app()->getLayout()->createBlock('Mage_Adminhtml_Block_Urlrewrite_Cms_Page_Grid');
        $gridBlock->toHtml();
        $this->assertInstanceOf('Mage_Backend_Block_Widget_Grid_Column', $gridBlock->getColumn('store_id'),
            'When there is more than one store column with key "store_id" should be present');
    }
}
