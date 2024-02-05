<?php
/**
 * LastItemAddedToCart.php
 *
 * @package  ProxiBlue\LastAddedToCart\Plugin
 * @license MIT
 * @copyright Copyright (c) Lucas van Staden
 */

declare(strict_types=1);

namespace ProxiBlue\LastAddedToCart\Plugin;

/**
 * Inject extra data into hyva customerSectionData sectionData
 */
class LastItemAddedToCart
{

    public function __construct(
        protected \Magento\Checkout\Model\Session $checkoutSession
    ) {
    }

    /**
     * Inject last added item to cart into customer section data
     *
     * @param \Magento\Checkout\CustomerData\Cart $subject
     * @param array $result
     *
     * @return array
     */
    public function afterGetSectionData(
        \Magento\Checkout\CustomerData\Cart $subject,
        array $result,
    ): array {
        $lastItem = $this->checkoutSession->getLastAddedItem();
        $result['last_added_to_cart_item'] = $lastItem;
        $this->checkoutSession->unsLastAddedItem();
        return $result;
    }
}
