<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectUpdateV30AudienceLocationType
{
    public const ALL_UniProjectUpdateV30AudienceLocationType = 'ALL';
    public const CURRENT_UniProjectUpdateV30AudienceLocationType = 'CURRENT';
    public const HOME_UniProjectUpdateV30AudienceLocationType = 'HOME';
    public const TRAVEL_UniProjectUpdateV30AudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_UniProjectUpdateV30AudienceLocationType,
        self::CURRENT_UniProjectUpdateV30AudienceLocationType,
        self::HOME_UniProjectUpdateV30AudienceLocationType,
        self::TRAVEL_UniProjectUpdateV30AudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectUpdateV30AudienceLocationType', $value));
        }
        return (string) $value;
    }
}
