<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentCreditChargeSubmitV2ContractInfoDeliveryType
{
    public const BIDDING_AgentCreditChargeSubmitV2ContractInfoDeliveryType = 'BIDDING';
    public const BRAND_AgentCreditChargeSubmitV2ContractInfoDeliveryType = 'BRAND';
    public const GENERAL_AgentCreditChargeSubmitV2ContractInfoDeliveryType = 'GENERAL';

    public const ALLOWED_VALUES = [
        self::BIDDING_AgentCreditChargeSubmitV2ContractInfoDeliveryType,
        self::BRAND_AgentCreditChargeSubmitV2ContractInfoDeliveryType,
        self::GENERAL_AgentCreditChargeSubmitV2ContractInfoDeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentCreditChargeSubmitV2ContractInfoDeliveryType', $value));
        }
        return (string) $value;
    }
}
