<?php
/*
 * Copyright © 2023 Studio Raz. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace SR\Base\Plugin\Catalog\Helper\Product;

use Magento\Catalog\Model\Product;
use Magento\Framework\View\Result\Page as ResultPage;

class View
{
    public function beforeInitProductLayout(
        \Magento\Catalog\Helper\Product\View $subject,
        ResultPage $resultPage,
        Product $product,
                                             $params = null
    ) {
        $resultPage->addPageLayoutHandles(
            ['attribute_set_id' => $product->getAttributeSetId()]
        );

        return [$resultPage, $product, $params];
    }
}
