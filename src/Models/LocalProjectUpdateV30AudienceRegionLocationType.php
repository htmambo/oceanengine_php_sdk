<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectUpdateV30AudienceRegionLocationType
{
    public const ALL_LocalProjectUpdateV30AudienceRegionLocationType = 'ALL';
    public const CURRENT_LocalProjectUpdateV30AudienceRegionLocationType = 'CURRENT';
    public const HOME_LocalProjectUpdateV30AudienceRegionLocationType = 'HOME';
    public const TRAVEL_LocalProjectUpdateV30AudienceRegionLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_LocalProjectUpdateV30AudienceRegionLocationType,
        self::CURRENT_LocalProjectUpdateV30AudienceRegionLocationType,
        self::HOME_LocalProjectUpdateV30AudienceRegionLocationType,
        self::TRAVEL_LocalProjectUpdateV30AudienceRegionLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectUpdateV30AudienceRegionLocationType', $value));
        }
        return (string) $value;
    }
}
