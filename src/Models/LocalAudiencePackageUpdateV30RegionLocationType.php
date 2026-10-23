<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageUpdateV30RegionLocationType
{
    public const ALL_LocalAudiencePackageUpdateV30RegionLocationType = 'ALL';
    public const CURRENT_LocalAudiencePackageUpdateV30RegionLocationType = 'CURRENT';
    public const HOME_LocalAudiencePackageUpdateV30RegionLocationType = 'HOME';
    public const TRAVEL_LocalAudiencePackageUpdateV30RegionLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_LocalAudiencePackageUpdateV30RegionLocationType,
        self::CURRENT_LocalAudiencePackageUpdateV30RegionLocationType,
        self::HOME_LocalAudiencePackageUpdateV30RegionLocationType,
        self::TRAVEL_LocalAudiencePackageUpdateV30RegionLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageUpdateV30RegionLocationType', $value));
        }
        return (string) $value;
    }
}
