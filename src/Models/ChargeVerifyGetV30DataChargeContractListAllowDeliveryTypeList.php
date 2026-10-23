<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList
{
    public const BIDDING_ChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList = 'BIDDING';
    public const BRAND_ChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList = 'BRAND';
    public const GENERAL_ChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList = 'GENERAL';

    public const ALLOWED_VALUES = [
        self::BIDDING_ChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList,
        self::BRAND_ChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList,
        self::GENERAL_ChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList', $value));
        }
        return (string) $value;
    }
}
