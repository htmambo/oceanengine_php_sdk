<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30AudienceActionConfigActionDays
{
    public const ACTIONDAYS_DAY15_LocalProjectCreateV30AudienceActionConfigActionDays = 'ACTIONDAYS_DAY15';
    public const ACTIONDAYS_DAY180_LocalProjectCreateV30AudienceActionConfigActionDays = 'ACTIONDAYS_DAY180';
    public const ACTIONDAYS_DAY30_LocalProjectCreateV30AudienceActionConfigActionDays = 'ACTIONDAYS_DAY30';
    public const ACTIONDAYS_DAY365_LocalProjectCreateV30AudienceActionConfigActionDays = 'ACTIONDAYS_DAY365';
    public const ACTIONDAYS_DAY60_LocalProjectCreateV30AudienceActionConfigActionDays = 'ACTIONDAYS_DAY60';
    public const ACTIONDAYS_DAY7_LocalProjectCreateV30AudienceActionConfigActionDays = 'ACTIONDAYS_DAY7';
    public const ACTIONDAYS_DAY90_LocalProjectCreateV30AudienceActionConfigActionDays = 'ACTIONDAYS_DAY90';

    public const ALLOWED_VALUES = [
        self::ACTIONDAYS_DAY15_LocalProjectCreateV30AudienceActionConfigActionDays,
        self::ACTIONDAYS_DAY180_LocalProjectCreateV30AudienceActionConfigActionDays,
        self::ACTIONDAYS_DAY30_LocalProjectCreateV30AudienceActionConfigActionDays,
        self::ACTIONDAYS_DAY365_LocalProjectCreateV30AudienceActionConfigActionDays,
        self::ACTIONDAYS_DAY60_LocalProjectCreateV30AudienceActionConfigActionDays,
        self::ACTIONDAYS_DAY7_LocalProjectCreateV30AudienceActionConfigActionDays,
        self::ACTIONDAYS_DAY90_LocalProjectCreateV30AudienceActionConfigActionDays,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30AudienceActionConfigActionDays', $value));
        }
        return (string) $value;
    }
}
