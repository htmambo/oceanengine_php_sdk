<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class WalletChargeVerifyGetV30DataAllowDeliveryTypeList
{
    public const BIDDING_WalletChargeVerifyGetV30DataAllowDeliveryTypeList = 'BIDDING';
    public const BRAND_WalletChargeVerifyGetV30DataAllowDeliveryTypeList = 'BRAND';
    public const GENERAL_WalletChargeVerifyGetV30DataAllowDeliveryTypeList = 'GENERAL';

    public const ALLOWED_VALUES = [
        self::BIDDING_WalletChargeVerifyGetV30DataAllowDeliveryTypeList,
        self::BRAND_WalletChargeVerifyGetV30DataAllowDeliveryTypeList,
        self::GENERAL_WalletChargeVerifyGetV30DataAllowDeliveryTypeList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum WalletChargeVerifyGetV30DataAllowDeliveryTypeList', $value));
        }
        return (string) $value;
    }
}
