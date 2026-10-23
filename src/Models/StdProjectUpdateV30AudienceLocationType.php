<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceLocationType
{
    public const ALL_StdProjectUpdateV30AudienceLocationType = 'ALL';
    public const CURRENT_StdProjectUpdateV30AudienceLocationType = 'CURRENT';
    public const HOME_StdProjectUpdateV30AudienceLocationType = 'HOME';
    public const TRAVEL_StdProjectUpdateV30AudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_StdProjectUpdateV30AudienceLocationType,
        self::CURRENT_StdProjectUpdateV30AudienceLocationType,
        self::HOME_StdProjectUpdateV30AudienceLocationType,
        self::TRAVEL_StdProjectUpdateV30AudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceLocationType', $value));
        }
        return (string) $value;
    }
}
