<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandQueryStockV30LandingType
{
    public const BRAND_CONTENT_BrandQueryStockV30LandingType = 'BRAND_CONTENT';

    public const ALLOWED_VALUES = [
        self::BRAND_CONTENT_BrandQueryStockV30LandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandQueryStockV30LandingType', $value));
        }
        return (string) $value;
    }
}
