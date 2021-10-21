<?php

namespace IikoPhp\SDK\Cloud\General\Nomenclature;

use IikoPhp\SDK\Cloud\Concerns\PlainObject;

/**
 * Class Group
 * @package IikoPhp\SDK\Cloud\General\Nomenclature
 * @property array<string> imageLinks Links to images.
 * @property null|string parentGroup Parent group.
 * @property int order Group's order (priority) in menu.
 * @property bool isIncludedInMenu On-the-menu attribute.
 * @property bool isGroupModifier Is group modifier attribute. true - group modifier. false - external menu group.
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
class Group extends PlainObject
{
    protected static function endpoint(): string
    {
        return '/nomenclature';
    }

    protected static function objectSource(): string
    {
        return 'groups';
    }
}