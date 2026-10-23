<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataAudienceRegionLocationType
{
    public const ALL_LocalProjectDetailV30DataAudienceRegionLocationType = 'ALL';
    public const CURRENT_LocalProjectDetailV30DataAudienceRegionLocationType = 'CURRENT';
    public const HOME_LocalProjectDetailV30DataAudienceRegionLocationType = 'HOME';
    public const TRAVEL_LocalProjectDetailV30DataAudienceRegionLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_LocalProjectDetailV30DataAudienceRegionLocationType,
        self::CURRENT_LocalProjectDetailV30DataAudienceRegionLocationType,
        self::HOME_LocalProjectDetailV30DataAudienceRegionLocationType,
        self::TRAVEL_LocalProjectDetailV30DataAudienceRegionLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataAudienceRegionLocationType', $value));
        }
        return (string) $value;
    }
}
