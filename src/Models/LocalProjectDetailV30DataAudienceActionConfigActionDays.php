<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataAudienceActionConfigActionDays
{
    public const ACTIONDAYS_DAY15_LocalProjectDetailV30DataAudienceActionConfigActionDays = 'ACTIONDAYS_DAY15';
    public const ACTIONDAYS_DAY180_LocalProjectDetailV30DataAudienceActionConfigActionDays = 'ACTIONDAYS_DAY180';
    public const ACTIONDAYS_DAY30_LocalProjectDetailV30DataAudienceActionConfigActionDays = 'ACTIONDAYS_DAY30';
    public const ACTIONDAYS_DAY365_LocalProjectDetailV30DataAudienceActionConfigActionDays = 'ACTIONDAYS_DAY365';
    public const ACTIONDAYS_DAY60_LocalProjectDetailV30DataAudienceActionConfigActionDays = 'ACTIONDAYS_DAY60';
    public const ACTIONDAYS_DAY7_LocalProjectDetailV30DataAudienceActionConfigActionDays = 'ACTIONDAYS_DAY7';
    public const ACTIONDAYS_DAY90_LocalProjectDetailV30DataAudienceActionConfigActionDays = 'ACTIONDAYS_DAY90';

    public const ALLOWED_VALUES = [
        self::ACTIONDAYS_DAY15_LocalProjectDetailV30DataAudienceActionConfigActionDays,
        self::ACTIONDAYS_DAY180_LocalProjectDetailV30DataAudienceActionConfigActionDays,
        self::ACTIONDAYS_DAY30_LocalProjectDetailV30DataAudienceActionConfigActionDays,
        self::ACTIONDAYS_DAY365_LocalProjectDetailV30DataAudienceActionConfigActionDays,
        self::ACTIONDAYS_DAY60_LocalProjectDetailV30DataAudienceActionConfigActionDays,
        self::ACTIONDAYS_DAY7_LocalProjectDetailV30DataAudienceActionConfigActionDays,
        self::ACTIONDAYS_DAY90_LocalProjectDetailV30DataAudienceActionConfigActionDays,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataAudienceActionConfigActionDays', $value));
        }
        return (string) $value;
    }
}
