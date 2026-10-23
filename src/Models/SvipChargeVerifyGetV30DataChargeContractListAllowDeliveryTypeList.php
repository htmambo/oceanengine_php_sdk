<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SvipChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList
{
    public const BIDDING_SvipChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList = 'BIDDING';
    public const BRAND_SvipChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList = 'BRAND';
    public const GENERAL_SvipChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList = 'GENERAL';

    public const ALLOWED_VALUES = [
        self::BIDDING_SvipChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList,
        self::BRAND_SvipChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList,
        self::GENERAL_SvipChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SvipChargeVerifyGetV30DataChargeContractListAllowDeliveryTypeList', $value));
        }
        return (string) $value;
    }
}
