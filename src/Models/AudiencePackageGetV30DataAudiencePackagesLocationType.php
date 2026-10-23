<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesLocationType
{
    public const ALL_AudiencePackageGetV30DataAudiencePackagesLocationType = 'ALL';
    public const CURRENT_AudiencePackageGetV30DataAudiencePackagesLocationType = 'CURRENT';
    public const HOME_AudiencePackageGetV30DataAudiencePackagesLocationType = 'HOME';
    public const TRAVEL_AudiencePackageGetV30DataAudiencePackagesLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_AudiencePackageGetV30DataAudiencePackagesLocationType,
        self::CURRENT_AudiencePackageGetV30DataAudiencePackagesLocationType,
        self::HOME_AudiencePackageGetV30DataAudiencePackagesLocationType,
        self::TRAVEL_AudiencePackageGetV30DataAudiencePackagesLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesLocationType', $value));
        }
        return (string) $value;
    }
}
