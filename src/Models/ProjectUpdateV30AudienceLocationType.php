<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceLocationType
{
    public const ALL_ProjectUpdateV30AudienceLocationType = 'ALL';
    public const CURRENT_ProjectUpdateV30AudienceLocationType = 'CURRENT';
    public const HOME_ProjectUpdateV30AudienceLocationType = 'HOME';
    public const TRAVEL_ProjectUpdateV30AudienceLocationType = 'TRAVEL';

    public const ALLOWED_VALUES = [
        self::ALL_ProjectUpdateV30AudienceLocationType,
        self::CURRENT_ProjectUpdateV30AudienceLocationType,
        self::HOME_ProjectUpdateV30AudienceLocationType,
        self::TRAVEL_ProjectUpdateV30AudienceLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceLocationType', $value));
        }
        return (string) $value;
    }
}
