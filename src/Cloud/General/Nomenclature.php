<?php

namespace IikoPhp\SDK\Cloud\General;

use IikoPhp\SDK\Cloud\ApiClient;
use IikoPhp\SDK\Cloud\Concerns\CloudSection;
use IikoPhp\SDK\Cloud\General\Nomenclature\Combo;
use IikoPhp\SDK\Cloud\General\Nomenclature\Group;
use IikoPhp\SDK\Cloud\General\Nomenclature\Product;
use IikoPhp\SDK\Cloud\General\Nomenclature\ProductCategory;
use IikoPhp\SDK\Cloud\General\Nomenclature\Size;
use IikoPhp\SDK\Cloud\General\Nomenclature\StopList;

/**
 * Class Nomenclature
 * @package IikoPhp\SDK\Cloud\General
 * @property array<Group> groups
 * @property array<ProductCategory> productCategories
 * @property array<Product> products
 * @property array<Size> sizes
 * @property array<StopList> stopLists
 * @property combo combo
 * @method Group[] groups(?array $parameters = null)
 * @method ProductCategory[] productCategories(?array $parameters = null)
 * @method Product[] products(?array $parameters = null)
 * @method Size[] sizes(?array $parameters = null)
 * @method StopList[] stopLists(?array $parameters = null)
 */
class Nomenclature extends CloudSection
{
    private Combo $combo;

    protected function listsMap(): array
    {
        return [
            'groups' => Group::class,
            'productCategories' => ProductCategory::class,
            'products' => Product::class,
            'sizes' => Size::class,
            'stopLists' => StopList::class
        ];
    }

    protected function listsDefaultParams(): array
    {
        return [
            'organizationId' => $this->cloud->selectOrganizations()[0]
        ];
    }

    protected function specificDefaultParams(): array
    {
        return [
            'stopLists' => [
                'organizationIds' => $this->cloud->selectOrganizations()
            ]
        ];
    }

    public function combo(): ApiClient
    {
        return $this->combo ??= Combo::createMapped($this, []);
    }
}