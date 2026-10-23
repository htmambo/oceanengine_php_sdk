<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceLocationType
{
    public const ALL_ProjectCreateV30AudienceLocationType = 'ALL';
    public const CURRENT_ProjectCreateV30AudienceLocationType = 'CURRENT';
    public const HOME_ProjectCreateV30AudienceLocationType = 'HOME';
    public const TRAVEL_ProjectCreateV30AudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_ProjectCreateV30AudienceLocationType,
        self::CURRENT_ProjectCreateV30AudienceLocationType,
        self::HOME_ProjectCreateV30AudienceLocationType,
        self::TRAVEL_ProjectCreateV30AudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceLocationType', $value));
        }
        return (string) $value;
    }
}
