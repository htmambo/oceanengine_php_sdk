<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalActionKeywordV30ActionDays
{
    public const ACTIONDAYS_DAY15_LocalActionKeywordV30ActionDays = 'ACTIONDAYS_DAY15';
    public const ACTIONDAYS_DAY180_LocalActionKeywordV30ActionDays = 'ACTIONDAYS_DAY180';
    public const ACTIONDAYS_DAY30_LocalActionKeywordV30ActionDays = 'ACTIONDAYS_DAY30';
    public const ACTIONDAYS_DAY365_LocalActionKeywordV30ActionDays = 'ACTIONDAYS_DAY365';
    public const ACTIONDAYS_DAY60_LocalActionKeywordV30ActionDays = 'ACTIONDAYS_DAY60';
    public const ACTIONDAYS_DAY7_LocalActionKeywordV30ActionDays = 'ACTIONDAYS_DAY7';
    public const ACTIONDAYS_DAY90_LocalActionKeywordV30ActionDays = 'ACTIONDAYS_DAY90';

    public const ALLOWED_VALUES = [
        self::ACTIONDAYS_DAY15_LocalActionKeywordV30ActionDays,
        self::ACTIONDAYS_DAY180_LocalActionKeywordV30ActionDays,
        self::ACTIONDAYS_DAY30_LocalActionKeywordV30ActionDays,
        self::ACTIONDAYS_DAY365_LocalActionKeywordV30ActionDays,
        self::ACTIONDAYS_DAY60_LocalActionKeywordV30ActionDays,
        self::ACTIONDAYS_DAY7_LocalActionKeywordV30ActionDays,
        self::ACTIONDAYS_DAY90_LocalActionKeywordV30ActionDays,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalActionKeywordV30ActionDays', $value));
        }
        return (string) $value;
    }
}
