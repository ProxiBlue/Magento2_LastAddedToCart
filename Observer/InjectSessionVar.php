<?php

/**
 * LastItemAddedToCart.php
 *
 * @package  ProxiBlue\LastAddedToCart\Plugin
 * @license MIT
 * @copyright Copyright (c) Lucas van Staden
 */


declare(strict_types=1);

namespace ProxiBlue\LastAddedToCart\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class InjectSessionVar implements ObserverInterface
{

    public function __construct(
        protected \Magento\Checkout\Model\Session $checkoutSession
    ) {
    }

    /**
     * Inject wanted product data of last added item to checkoutSession
     *
     * @param Observer $observer
     */
    public function execute(Observer $observer): void
    {
        $product = $observer->getProduct();

        $this->checkoutSession->setLastAddedItem(
            [
                'product_id' => $product->getId(),
                'product_name' => $product->getName(),
                'product_sku' => $product->getSku(),
                'product_url' => $product->getProductUrl(),
                'product_image' => $product->getImage(),
            ]
        );

    }
}
