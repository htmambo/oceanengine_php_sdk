<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceDpaLbs
{
    public const OFF_ProjectCreateV30AudienceDpaLbs = 'OFF';
    public const ON_ProjectCreateV30AudienceDpaLbs = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectCreateV30AudienceDpaLbs,
        self::ON_ProjectCreateV30AudienceDpaLbs,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceDpaLbs', $value));
        }
        return (string) $value;
    }
}
