<?php
 /*
 * @category    Magento
 * @package     Mage_Sales
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Sales_Test_Model_Mysql4_Order_Creditmemo_Grid_Collection extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Sales_Model_Mysql4_Order_Creditmemo_Grid_Collection
     */
    protected $_model;

    // constants required for integration tests
    const CLASS_GROUP_TYPE = parent::CLASS_GROUP_TYPE_MODEL;
    const CLASS_ID = 'sales/mysql4_order_creditmemo_grid_collection';

    protected function setUp()
    {
        $this->_model = new Mage_Sales_Model_Mysql4_Order_Creditmemo_Grid_Collection();
    }
}
