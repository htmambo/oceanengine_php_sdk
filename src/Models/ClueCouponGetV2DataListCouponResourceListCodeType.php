<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueCouponGetV2DataListCouponResourceListCodeType
{
    public const MERCHANT_ClueCouponGetV2DataListCouponResourceListCodeType = 'MERCHANT';
    public const COMMON_ClueCouponGetV2DataListCouponResourceListCodeType = 'COMMON';
    public const API_ClueCouponGetV2DataListCouponResourceListCodeType = 'API';
    public const PLATFORM_ClueCouponGetV2DataListCouponResourceListCodeType = 'PLATFORM';

    public const ALLOWED_VALUES = [
        self::MERCHANT_ClueCouponGetV2DataListCouponResourceListCodeType,
        self::COMMON_ClueCouponGetV2DataListCouponResourceListCodeType,
        self::API_ClueCouponGetV2DataListCouponResourceListCodeType,
        self::PLATFORM_ClueCouponGetV2DataListCouponResourceListCodeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueCouponGetV2DataListCouponResourceListCodeType', $value));
        }
        return (string) $value;
    }
}
