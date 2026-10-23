<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderCreateV30ProType
{
    public const FEED_BrandOrderCreateV30ProType = 'FEED';
    public const PLANT_GRASS_BrandOrderCreateV30ProType = 'PLANT_GRASS';

    public const ALLOWED_VALUES = [
        self::FEED_BrandOrderCreateV30ProType,
        self::PLANT_GRASS_BrandOrderCreateV30ProType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderCreateV30ProType', $value));
        }
        return (string) $value;
    }
}
