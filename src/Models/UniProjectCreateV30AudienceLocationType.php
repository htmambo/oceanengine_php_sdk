<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectCreateV30AudienceLocationType
{
    public const ALL_UniProjectCreateV30AudienceLocationType = 'ALL';
    public const CURRENT_UniProjectCreateV30AudienceLocationType = 'CURRENT';
    public const HOME_UniProjectCreateV30AudienceLocationType = 'HOME';
    public const TRAVEL_UniProjectCreateV30AudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_UniProjectCreateV30AudienceLocationType,
        self::CURRENT_UniProjectCreateV30AudienceLocationType,
        self::HOME_UniProjectCreateV30AudienceLocationType,
        self::TRAVEL_UniProjectCreateV30AudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectCreateV30AudienceLocationType', $value));
        }
        return (string) $value;
    }
}
