<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceDpaCity
{
    public const OFF_ProjectListV30DataListAudienceDpaCity = 'OFF';
    public const ON_ProjectListV30DataListAudienceDpaCity = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectListV30DataListAudienceDpaCity,
        self::ON_ProjectListV30DataListAudienceDpaCity,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceDpaCity', $value));
        }
        return (string) $value;
    }
}
