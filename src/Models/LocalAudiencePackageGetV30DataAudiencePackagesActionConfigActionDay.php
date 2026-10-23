<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay
{
    public const ACTIONDAYS_DAY15_LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay = 'ACTIONDAYS_DAY15';
    public const ACTIONDAYS_DAY180_LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay = 'ACTIONDAYS_DAY180';
    public const ACTIONDAYS_DAY30_LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay = 'ACTIONDAYS_DAY30';
    public const ACTIONDAYS_DAY365_LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay = 'ACTIONDAYS_DAY365';
    public const ACTIONDAYS_DAY60_LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay = 'ACTIONDAYS_DAY60';
    public const ACTIONDAYS_DAY7_LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay = 'ACTIONDAYS_DAY7';
    public const ACTIONDAYS_DAY90_LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay = 'ACTIONDAYS_DAY90';

    public const ALLOWED_VALUES = [
        self::ACTIONDAYS_DAY15_LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay,
        self::ACTIONDAYS_DAY180_LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay,
        self::ACTIONDAYS_DAY30_LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay,
        self::ACTIONDAYS_DAY365_LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay,
        self::ACTIONDAYS_DAY60_LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay,
        self::ACTIONDAYS_DAY7_LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay,
        self::ACTIONDAYS_DAY90_LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageGetV30DataAudiencePackagesActionConfigActionDay', $value));
        }
        return (string) $value;
    }
}
