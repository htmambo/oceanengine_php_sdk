<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AgentChargeVerifyV2DataChargeContractListAllowDeliveryTypeList
{
    public const BIDDING_AgentChargeVerifyV2DataChargeContractListAllowDeliveryTypeList = 'BIDDING';
    public const BRAND_AgentChargeVerifyV2DataChargeContractListAllowDeliveryTypeList = 'BRAND';
    public const GENERAL_AgentChargeVerifyV2DataChargeContractListAllowDeliveryTypeList = 'GENERAL';

    public const ALLOWED_VALUES = [
        self::BIDDING_AgentChargeVerifyV2DataChargeContractListAllowDeliveryTypeList,
        self::BRAND_AgentChargeVerifyV2DataChargeContractListAllowDeliveryTypeList,
        self::GENERAL_AgentChargeVerifyV2DataChargeContractListAllowDeliveryTypeList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AgentChargeVerifyV2DataChargeContractListAllowDeliveryTypeList', $value));
        }
        return (string) $value;
    }
}
