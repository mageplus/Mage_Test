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
 * @package     Mage_ImportExport
 * @subpackage  integration_tests
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Test for customer export model
 *
 * @group module:Mage_ImportExport
 */
class Mage_ImportExport_Test_Model_Export_Entity_Customer extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_ImportExport_Model_Export_Entity_Customer
     */
    protected $_model;

    protected function setUp()
    {
        $this->_model = Mage::getModel('Mage_ImportExport_Model_Export_Entity_Customer');
    }

    protected function tearDown()
    {
        unset($this->_model);
    }

    /**
     * Test export method
     *
     * @magentoDataFixture Mage/ImportExport/_files/customers.php
     */
    public function testExport()
    {
        $expectedAttributes = array();
        /** @var $collection Mage_Customer_Model_Resource_Attribute_Collection */
        $collection = Mage::getResourceModel('Mage_Customer_Model_Resource_Attribute_Collection');
        /** @var $attribute Mage_Customer_Model_Attribute */
        foreach ($collection as $attribute) {
            $expectedAttributes[] = $attribute->getAttributeCode();
        }

        $this->_model->setWriter(Mage::getModel('Mage_ImportExport_Model_Export_Adapter_Csv'));
        $data = $this->_model->export();
        $this->assertNotEmpty($data);

        $lines = $this->_csvToArray($data, 'email');

        $this->assertEquals(
            count($expectedAttributes),
            count(array_intersect($expectedAttributes, $lines['header'])),
            'Expected attribute codes were not exported'
        );

        $this->assertNotEmpty($data['data'], 'No data was exported');

        /** @var $customers Mage_Customer_Model_Customer[] */
        $customers = Mage::registry('_fixture/Mage_ImportExport_Customer_Collection');
        foreach ($customers as $key => $customer) {
            foreach ($expectedAttributes as $code) {
                if (!in_array($code, $this->_model->getDisabledAttributes()) && isset($lines[$key][$code])) {
                    $this->assertEquals(
                        $customer->getData($code),
                        $lines[$key][$code],
                        'Attribute "' . $code . '" is not equal'
                    );
                }
            }
        }
    }

    /**
     * Test entity type code value
     */
    public function testGetEntityTypeCode()
    {
        $this->assertEquals('customer', $this->_model->getEntityTypeCode());
    }

    /**
     * Test type of attribute collection
     */
    public function testGetAttributeCollection()
    {
        $this->assertInstanceOf('Mage_Customer_Model_Resource_Attribute_Collection',
            $this->_model->getAttributeCollection()
        );
    }

    /**
     * Test for method filterAttributeCollection()
     */
    public function testFilterAttributeCollection()
    {
        /** @var $collection Mage_Customer_Model_Resource_Attribute_Collection */
        $collection = $this->_model->getAttributeCollection();
        $collection = $this->_model->filterAttributeCollection($collection);
        /**
         * Check that disabled attributes is not existed in attribute collection
         */
        $existedAttributes = array();
        /** @var $attribute Mage_Customer_Model_Attribute */
        foreach ($collection as $attribute) {
            $existedAttributes[] = $attribute->getAttributeCode();
        }
    }

    /**
     * Export CSV string to array
     *
     * @param string $content
     * @param mixed $entityId
     * @return array
     */
    protected function _csvToArray($content, $entityId = null)
    {
        $data = array(
            'header' => array(),
            'data'   => array()
        );

        $lines = str_getcsv($content, "\n");
        foreach ($lines as $index => $line) {
            if ($index == 0) {
                $data['header'] = str_getcsv($line);
            } else {
                $row = array_combine($data['header'], str_getcsv($line));
                if (!is_null($entityId) && !empty($row[$entityId])) {
                    $data['data'][$row[$entityId]] = $row;
                } else {
                    $data['data'][] = $row;
                }
            }
        }
        return $data;
    }
}
