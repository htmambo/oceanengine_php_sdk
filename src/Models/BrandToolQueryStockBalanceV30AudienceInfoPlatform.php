<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryStockBalanceV30AudienceInfoPlatform
{
    public const ANDROID_BrandToolQueryStockBalanceV30AudienceInfoPlatform = 'ANDROID';
    public const IOS_BrandToolQueryStockBalanceV30AudienceInfoPlatform = 'IOS';
    public const UNLIMITED_BrandToolQueryStockBalanceV30AudienceInfoPlatform = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::ANDROID_BrandToolQueryStockBalanceV30AudienceInfoPlatform,
        self::IOS_BrandToolQueryStockBalanceV30AudienceInfoPlatform,
        self::UNLIMITED_BrandToolQueryStockBalanceV30AudienceInfoPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryStockBalanceV30AudienceInfoPlatform', $value));
        }
        return (string) $value;
    }
}
