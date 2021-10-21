<?php

namespace IikoPhp\SDK\Cloud\General\Nomenclature;

use IikoPhp\SDK\Cloud\Concerns\CloudSection;
use IikoPhp\SDK\Cloud\General\Nomenclature\Combo\Category;
use IikoPhp\SDK\Cloud\General\Nomenclature\Combo\Specification;

/**
 * Class Combo
 * @package IikoPhp\SDK\Cloud\General\Nomenclature
 * @property array<Specification> comboSpecifications Full combo's specifications.
 * @property array<Category> comboCategories Combo's categories
 */
class Combo extends CloudSection
{
    protected function listsMap(): array
    {
        return [
            'comboSpecifications' => Specification::class,
            'comboCategories' => Category::class,
        ];
    }

    protected function listsDefaultParams(): array
    {
        return [
            'organizationId' => $this->cloud->selectOrganizations()[0],
        ];
    }
}