<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataAudienceRegionCityDivide
{
    public const BY_LEVEL_LocalProjectDetailV30DataAudienceRegionCityDivide = 'BY_LEVEL';
    public const BY_LOCATION_LocalProjectDetailV30DataAudienceRegionCityDivide = 'BY_LOCATION';

    public const ALLOWED_VALUES = [
        self::BY_LEVEL_LocalProjectDetailV30DataAudienceRegionCityDivide,
        self::BY_LOCATION_LocalProjectDetailV30DataAudienceRegionCityDivide,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataAudienceRegionCityDivide', $value));
        }
        return (string) $value;
    }
}
