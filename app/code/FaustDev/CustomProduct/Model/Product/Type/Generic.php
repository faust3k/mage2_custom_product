<?php

namespace FaustDev\CustomProduct\Model\Product\Type;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product\Type\AbstractType;

class Generic extends AbstractType
{
    const TYPE_CODE = 'generic';

    public function deleteTypeSpecificData(Product $product)
    {
    }
}
