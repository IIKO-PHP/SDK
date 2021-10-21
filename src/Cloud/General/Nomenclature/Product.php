<?php

namespace IikoPhp\SDK\Cloud\General\Nomenclature;

use IikoPhp\SDK\Cloud\Concerns\PlainObject;
use IikoPhp\SDK\Cloud\General\Nomenclature\Product\GroupModifier;
use IikoPhp\SDK\Cloud\General\Nomenclature\Product\Modifier;
use IikoPhp\SDK\Cloud\General\Nomenclature\Product\SizePrice;

/**
 * Class Product
 * @package IikoPhp\SDK\Cloud\General\Nomenclature
 * @property null|double fatAmount Fat per 100g.
 * @property null|double proteinsAmount Protein per 100g.
 * @property null|double carbohydratesAmount Carbohydrate per 100g.
 * @property null|double energyAmount Calories per 100g.
 * @property null|double fatFullAmount Fat per item.
 * @property null|double proteinsFullAmount Protein per item.
 * @property null|double carbohydratesFullAmount Carbohydrate per item.
 * @property null|double energyFullAmount Calories per item.
 * @property null|double weight Item weight.
 * @property null|string groupId Stock list group in RMS.
 * @property null|string productCategoryId Product category in RMS.
 * @property null|string type dish | good | modifier.
 * @property string orderItemType Product or compound. Depends on modifiers scheme existence.
 * @property null|string modifierSchemaId Modifier schema's ID.
 * @property null|string modifierSchemaName Modifier schema's name.
 * @property string measureUnit Item's unit of measurement.
 * @property array<SizePrice> sizePrices Prices.
 * @property array<Modifier> modifiers Modifiers.
 * @property array<GroupModifier> groupModifiers Modifier groups.
 * @property array<string> imageLinks Links to images.
 * @property bool doNotPrintInCheque Do not print on bill.
 * @property null|string parentGroup External menu group.
 * @property int order Product's order (priority) in menu.
 * @property null|string fullNameEnglish Full name in a foreign language.
 * @property bool useBalanceForSell Weighed product.
 * @property bool canSetOpenPrice Open price.
 * @property string id ID.
 * @property null|string code SKU.
 * @property string name Name.
 * @property null|string description Description.
 * @property null|string additionalInfo Additional information.
 * @property null|array<string> tags Tags.
 * @property bool isDeleted Is-Deleted attribute.
 * @property null|string seoDescription SEO description for client.
 * @property null|string seoText SEO text for robots.
 * @property null|string seoKeywords SEO key words.
 * @property null|string seoTitle SEO header.
 */
class Product extends PlainObject
{
    protected static function endpoint(): string
    {
        return '/nomenclature';
    }

    protected static function objectSource(): string
    {
        return 'products';
    }

    protected function internalMappings(): array
    {
        return [
            'sizePrices' => SizePrice::class,
            'modifiers' => Modifier::class,
            'groupModifiers' => GroupModifier::class,
        ];
    }
}