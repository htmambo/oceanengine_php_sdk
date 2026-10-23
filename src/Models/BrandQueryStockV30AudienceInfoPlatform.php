<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandQueryStockV30AudienceInfoPlatform
{
    public const ANDROID_BrandQueryStockV30AudienceInfoPlatform = 'ANDROID';
    public const IOS_BrandQueryStockV30AudienceInfoPlatform = 'IOS';
    public const UNLIMITED_BrandQueryStockV30AudienceInfoPlatform = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::ANDROID_BrandQueryStockV30AudienceInfoPlatform,
        self::IOS_BrandQueryStockV30AudienceInfoPlatform,
        self::UNLIMITED_BrandQueryStockV30AudienceInfoPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandQueryStockV30AudienceInfoPlatform', $value));
        }
        return (string) $value;
    }
}
