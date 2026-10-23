<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentPrepayChargeGenerateRemittanceCodeV2ContractInfoDeliveryType
{
    public const BIDDING_AgentPrepayChargeGenerateRemittanceCodeV2ContractInfoDeliveryType = 'BIDDING';
    public const BRAND_AgentPrepayChargeGenerateRemittanceCodeV2ContractInfoDeliveryType = 'BRAND';
    public const GENERAL_AgentPrepayChargeGenerateRemittanceCodeV2ContractInfoDeliveryType = 'GENERAL';

    public const ALLOWED_VALUES = [
        self::BIDDING_AgentPrepayChargeGenerateRemittanceCodeV2ContractInfoDeliveryType,
        self::BRAND_AgentPrepayChargeGenerateRemittanceCodeV2ContractInfoDeliveryType,
        self::GENERAL_AgentPrepayChargeGenerateRemittanceCodeV2ContractInfoDeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentPrepayChargeGenerateRemittanceCodeV2ContractInfoDeliveryType', $value));
        }
        return (string) $value;
    }
}
