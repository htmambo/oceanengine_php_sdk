<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListLaunchType
{
    public const DIRECT_OPEN_ProjectListV30DataListLaunchType = 'DIRECT_OPEN';
    public const EXTERNAL_OPEN_ProjectListV30DataListLaunchType = 'EXTERNAL_OPEN';

    public const ALLOWED_VALUES = [
        self::DIRECT_OPEN_ProjectListV30DataListLaunchType,
        self::EXTERNAL_OPEN_ProjectListV30DataListLaunchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListLaunchType', $value));
        }
        return (string) $value;
    }
}
