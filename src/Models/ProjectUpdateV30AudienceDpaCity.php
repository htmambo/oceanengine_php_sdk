<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceDpaCity
{
    public const OFF_ProjectUpdateV30AudienceDpaCity = 'OFF';
    public const ON_ProjectUpdateV30AudienceDpaCity = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectUpdateV30AudienceDpaCity,
        self::ON_ProjectUpdateV30AudienceDpaCity,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceDpaCity', $value));
        }
        return (string) $value;
    }
}
