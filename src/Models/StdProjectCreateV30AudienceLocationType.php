<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceLocationType
{
    public const ALL_StdProjectCreateV30AudienceLocationType = 'ALL';
    public const CURRENT_StdProjectCreateV30AudienceLocationType = 'CURRENT';
    public const HOME_StdProjectCreateV30AudienceLocationType = 'HOME';
    public const TRAVEL_StdProjectCreateV30AudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_StdProjectCreateV30AudienceLocationType,
        self::CURRENT_StdProjectCreateV30AudienceLocationType,
        self::HOME_StdProjectCreateV30AudienceLocationType,
        self::TRAVEL_StdProjectCreateV30AudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceLocationType', $value));
        }
        return (string) $value;
    }
}
