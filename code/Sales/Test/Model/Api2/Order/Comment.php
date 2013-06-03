<?php
 /*
 * @category    Magento
 * @package     Mage_Sales
 * @subpackage  
 * @copyright   Copyright (c) 2013 Mage+ Ltd. (http://mageplus.org)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mage_Sales_Test_Model_Api2_Order_Comment extends Mage_Test_Unit_Case
{
    /**
     * @var Mage_Sales_Model_Api2_Order_Comment 
     */
    protected $_model;

    protected function setUp()
    {
        $this->_model = new Mage_Sales_Model_Api2_Order_Comment();
    }
}
