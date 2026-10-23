<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponDetailV2DataCouponResourceListCodeType
{
    public const MERCHANT_ClueCouponDetailV2DataCouponResourceListCodeType = 'MERCHANT';
    public const COMMON_ClueCouponDetailV2DataCouponResourceListCodeType = 'COMMON';
    public const API_ClueCouponDetailV2DataCouponResourceListCodeType = 'API';
    public const PLATFORM_ClueCouponDetailV2DataCouponResourceListCodeType = 'PLATFORM';

    public const ALLOWED_VALUES = [
        self::MERCHANT_ClueCouponDetailV2DataCouponResourceListCodeType,
        self::COMMON_ClueCouponDetailV2DataCouponResourceListCodeType,
        self::API_ClueCouponDetailV2DataCouponResourceListCodeType,
        self::PLATFORM_ClueCouponDetailV2DataCouponResourceListCodeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponDetailV2DataCouponResourceListCodeType', $value));
        }
        return (string) $value;
    }
}
