<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30AudienceRegionLocationType
{
    public const ALL_LocalProjectCreateV30AudienceRegionLocationType = 'ALL';
    public const CURRENT_LocalProjectCreateV30AudienceRegionLocationType = 'CURRENT';
    public const HOME_LocalProjectCreateV30AudienceRegionLocationType = 'HOME';
    public const TRAVEL_LocalProjectCreateV30AudienceRegionLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_LocalProjectCreateV30AudienceRegionLocationType,
        self::CURRENT_LocalProjectCreateV30AudienceRegionLocationType,
        self::HOME_LocalProjectCreateV30AudienceRegionLocationType,
        self::TRAVEL_LocalProjectCreateV30AudienceRegionLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30AudienceRegionLocationType', $value));
        }
        return (string) $value;
    }
}
