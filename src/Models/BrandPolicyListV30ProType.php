<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandPolicyListV30ProType
{
    public const FEED_BrandPolicyListV30ProType = 'FEED';
    public const PLANT_GRASS_BrandPolicyListV30ProType = 'PLANT_GRASS';

    public const ALLOWED_VALUES = [
        self::FEED_BrandPolicyListV30ProType,
        self::PLANT_GRASS_BrandPolicyListV30ProType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandPolicyListV30ProType', $value));
        }
        return (string) $value;
    }
}
