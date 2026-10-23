<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2LocationType
{
    public const CURRENT_AudiencePackageUpdateV2LocationType = 'CURRENT';
    public const TRAVEL_AudiencePackageUpdateV2LocationType = 'TRAVEL';
    public const ALL_AudiencePackageUpdateV2LocationType = 'ALL';
    public const HOME_AudiencePackageUpdateV2LocationType = 'HOME';

    public const ALLOWED_VALUES = [
        self::CURRENT_AudiencePackageUpdateV2LocationType,
        self::TRAVEL_AudiencePackageUpdateV2LocationType,
        self::ALL_AudiencePackageUpdateV2LocationType,
        self::HOME_AudiencePackageUpdateV2LocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2LocationType', $value));
        }
        return (string) $value;
    }
}
