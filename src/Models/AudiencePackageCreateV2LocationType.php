<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2LocationType
{
    public const CURRENT_AudiencePackageCreateV2LocationType = 'CURRENT';
    public const TRAVEL_AudiencePackageCreateV2LocationType = 'TRAVEL';
    public const ALL_AudiencePackageCreateV2LocationType = 'ALL';
    public const HOME_AudiencePackageCreateV2LocationType = 'HOME';

    public const ALLOWED_VALUES = [
        self::CURRENT_AudiencePackageCreateV2LocationType,
        self::TRAVEL_AudiencePackageCreateV2LocationType,
        self::ALL_AudiencePackageCreateV2LocationType,
        self::HOME_AudiencePackageCreateV2LocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2LocationType', $value));
        }
        return (string) $value;
    }
}
