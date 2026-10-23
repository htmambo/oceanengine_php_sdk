<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponCreateV2CouponResourceListCodeType
{
    public const MERCHANT_ClueCouponCreateV2CouponResourceListCodeType = 'MERCHANT';
    public const COMMON_ClueCouponCreateV2CouponResourceListCodeType = 'COMMON';
    public const API_ClueCouponCreateV2CouponResourceListCodeType = 'API';
    public const PLATFORM_ClueCouponCreateV2CouponResourceListCodeType = 'PLATFORM';

    public const ALLOWED_VALUES = [
        self::MERCHANT_ClueCouponCreateV2CouponResourceListCodeType,
        self::COMMON_ClueCouponCreateV2CouponResourceListCodeType,
        self::API_ClueCouponCreateV2CouponResourceListCodeType,
        self::PLATFORM_ClueCouponCreateV2CouponResourceListCodeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponCreateV2CouponResourceListCodeType', $value));
        }
        return (string) $value;
    }
}
