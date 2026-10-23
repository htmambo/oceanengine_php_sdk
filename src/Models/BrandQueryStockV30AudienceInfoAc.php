<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandQueryStockV30AudienceInfoAc
{
    public const UNLIMITED_BrandQueryStockV30AudienceInfoAc = 'UNLIMITED';
    public const WIFI_BrandQueryStockV30AudienceInfoAc = 'WIFI';

    public const ALLOWED_VALUES = [
        self::UNLIMITED_BrandQueryStockV30AudienceInfoAc,
        self::WIFI_BrandQueryStockV30AudienceInfoAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandQueryStockV30AudienceInfoAc', $value));
        }
        return (string) $value;
    }
}
