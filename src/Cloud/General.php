<?php

namespace IikoPhp\SDK\Cloud;

use IikoPhp\SDK\Cloud\General\Dictionaries\CancelClause;
use IikoPhp\SDK\Cloud\General\Dictionaries\Discount;
use IikoPhp\SDK\Cloud\General\Dictionaries\OrderType;
use IikoPhp\SDK\Cloud\General\Dictionaries\PaymentType;
use IikoPhp\SDK\Cloud\General\Dictionaries\RemovalType;
use IikoPhp\SDK\Cloud\General\Dictionaries\TipsType;
use IikoPhp\SDK\Cloud\General\Nomenclature;
use IikoPhp\SDK\Cloud\General\Nomenclature\StopList;
use IikoPhp\SDK\Cloud\General\Organization;
use IikoPhp\SDK\Cloud\General\TerminalGroups\TerminalGroup;

/**
 * Class General
 * @package IikoPhp\SDK\Cloud
 * @property Nomenclature nomenclature
 * @property array<Organization> organizations
 * @property array<TerminalGroup> terminalGroups
 * @property array<CancelClause> cancelClauses
 * @property array<OrderType> orderTypes
 * @property array<Discount> discounts
 * @property array<PaymentType> paymentTypes
 * @property array<RemovalType> removalTypes
 * @property array<TipsType> tipsTypes
 * @property array<StopList> stopLists
 * @method Organization[] organizations(?array $parameters = null)
 * @method TerminalGroup[] terminalGroups(?array $parameters = null)
 * @method CancelClause[] cancelClauses(?array $parameters = null)
 * @method OrderType[] orderTypes(?array $parameters = null)
 * @method Discount[] discounts(?array $parameters = null)
 * @method PaymentType[] paymentTypes(?array $parameters = null)
 * @method RemovalType[] removalTypes(?array $parameters = null)
 * @method TipsType[] tipsTypes(?array $parameters = null)
 * @method StopList[] stopLists(?array $parameters = null)
 */
class General extends Concerns\CloudSection
{
    private ?Nomenclature $nomenclature;

    protected function listsMap(): array
    {
        return [
            'organizations' => Organization::class,
            'terminalGroups' => TerminalGroup::class,
            'cancelClauses' => CancelClause::class,
            'orderTypes' => OrderType::class,
            'discounts' => Discount::class,
            'paymentTypes' => PaymentType::class,
            'removalTypes' => RemovalType::class,
            'tipsTypes' => TipsType::class,
            'stopLists' => StopList::class,
        ];
    }

    protected function listsDefaultParams(): array
    {
        return [
            'organizationIds' => $this->selectOrganizations()
        ];
    }

    protected function specificDefaultParams(): array
    {
        return [
            'organizations' => []
        ];
    }

    public function nomenclature(): Nomenclature
    {
        $this->nomenclature ??= new Nomenclature($this->cloud, $this->settings, $this->authentication);
        return $this->nomenclature;
    }
}