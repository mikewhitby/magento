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
 * @category   Mage
 * @package    Mage_Catalog
 * @copyright  Copyright (c) 2004-2007 Irubin Consulting Inc. DBA Varien (http://www.varien.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Catalog product website model
 *
 * @category   Mage
 * @package    Mage_Catalog
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_Catalog_Model_Product_Website extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('catalog/product_website');
    }

    /**
     * Removes products from websites
     *
     * @param array $websiteIds
     * @param array $productIds
     * @return Mage_Catalog_Model_Product_Website
     */
    public function removeProducts($websiteIds, $productIds)
    {
        try {
            $this->_getResource()->removeProducts($websiteIds, $productIds);
        }
        catch (Exception $e) {
            Mage::throwException(
                Mage::helper('catalog')->__('There was an error while removing products from websites')
            );
        }
        return $this;
    }

    /**
     * Add products to websites
     *
     * @param array $websiteIds
     * @param array $productIds
     * @return Mage_Catalog_Model_Product_Website
     */
    public function addProducts($websiteIds, $productsIds)
    {
        try {
            $this->_getResource()->addProducts($websiteIds, $productsIds);
        }
        catch (Exception $e) {
            Mage::throwException(
                Mage::helper('catalog')->__('There was an error while adding products to websites')
            );
        }
        return $this;
    }

} // Class Mage_Catalog_Model_Product_Website End