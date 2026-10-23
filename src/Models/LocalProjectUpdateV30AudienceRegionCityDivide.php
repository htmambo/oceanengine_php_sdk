<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectUpdateV30AudienceRegionCityDivide
{
    public const BY_LEVEL_LocalProjectUpdateV30AudienceRegionCityDivide = 'BY_LEVEL';
    public const BY_LOCATION_LocalProjectUpdateV30AudienceRegionCityDivide = 'BY_LOCATION';

    public const ALLOWED_VALUES = [
        self::BY_LEVEL_LocalProjectUpdateV30AudienceRegionCityDivide,
        self::BY_LOCATION_LocalProjectUpdateV30AudienceRegionCityDivide,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectUpdateV30AudienceRegionCityDivide', $value));
        }
        return (string) $value;
    }
}
