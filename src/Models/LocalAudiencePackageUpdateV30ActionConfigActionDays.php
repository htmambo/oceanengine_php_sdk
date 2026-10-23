<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageUpdateV30ActionConfigActionDays
{
    public const ACTIONDAYS_DAY15_LocalAudiencePackageUpdateV30ActionConfigActionDays = 'ACTIONDAYS_DAY15';
    public const ACTIONDAYS_DAY180_LocalAudiencePackageUpdateV30ActionConfigActionDays = 'ACTIONDAYS_DAY180';
    public const ACTIONDAYS_DAY30_LocalAudiencePackageUpdateV30ActionConfigActionDays = 'ACTIONDAYS_DAY30';
    public const ACTIONDAYS_DAY365_LocalAudiencePackageUpdateV30ActionConfigActionDays = 'ACTIONDAYS_DAY365';
    public const ACTIONDAYS_DAY60_LocalAudiencePackageUpdateV30ActionConfigActionDays = 'ACTIONDAYS_DAY60';
    public const ACTIONDAYS_DAY7_LocalAudiencePackageUpdateV30ActionConfigActionDays = 'ACTIONDAYS_DAY7';
    public const ACTIONDAYS_DAY90_LocalAudiencePackageUpdateV30ActionConfigActionDays = 'ACTIONDAYS_DAY90';

    public const ALLOWED_VALUES = [
        self::ACTIONDAYS_DAY15_LocalAudiencePackageUpdateV30ActionConfigActionDays,
        self::ACTIONDAYS_DAY180_LocalAudiencePackageUpdateV30ActionConfigActionDays,
        self::ACTIONDAYS_DAY30_LocalAudiencePackageUpdateV30ActionConfigActionDays,
        self::ACTIONDAYS_DAY365_LocalAudiencePackageUpdateV30ActionConfigActionDays,
        self::ACTIONDAYS_DAY60_LocalAudiencePackageUpdateV30ActionConfigActionDays,
        self::ACTIONDAYS_DAY7_LocalAudiencePackageUpdateV30ActionConfigActionDays,
        self::ACTIONDAYS_DAY90_LocalAudiencePackageUpdateV30ActionConfigActionDays,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageUpdateV30ActionConfigActionDays', $value));
        }
        return (string) $value;
    }
}
