<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryPublishPriceV30ProType
{
    public const FEED_BrandToolQueryPublishPriceV30ProType = 'FEED';
    public const PLANT_GRASS_BrandToolQueryPublishPriceV30ProType = 'PLANT_GRASS';

    public const ALLOWED_VALUES = [
        self::FEED_BrandToolQueryPublishPriceV30ProType,
        self::PLANT_GRASS_BrandToolQueryPublishPriceV30ProType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryPublishPriceV30ProType', $value));
        }
        return (string) $value;
    }
}
