<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30LaunchType
{
    public const DIRECT_OPEN_ProjectCreateV30LaunchType = 'DIRECT_OPEN';
    public const EXTERNAL_OPEN_ProjectCreateV30LaunchType = 'EXTERNAL_OPEN';

    public const ALLOWED_VALUES = [
        self::DIRECT_OPEN_ProjectCreateV30LaunchType,
        self::EXTERNAL_OPEN_ProjectCreateV30LaunchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30LaunchType', $value));
        }
        return (string) $value;
    }
}
