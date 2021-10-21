<?php

namespace IikoPhp\SDK\Cloud\General\Nomenclature\Product;

use IikoPhp\SDK\Cloud\ApiClient;
use IikoPhp\SDK\Cloud\Concerns\MapperObject;

/**
 * Class SizePrice
 * @package IikoPhp\SDK\Cloud\General\Nomenclature\Product
 * @property null|string sizeId Item size ID.
 * @property Price price Price per this item size.
 */
class SizePrice extends MapperObject
{
    protected function price(): ApiClient
    {
        return Price::createMapped($this, $this->getMappedProp('price'));
    }
}