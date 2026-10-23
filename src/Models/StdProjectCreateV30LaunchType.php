<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30LaunchType
{
    public const DIRECT_OPEN_StdProjectCreateV30LaunchType = 'DIRECT_OPEN';
    public const EXTERNAL_OPEN_StdProjectCreateV30LaunchType = 'EXTERNAL_OPEN';

    public const ALLOWED_VALUES = [
        self::DIRECT_OPEN_StdProjectCreateV30LaunchType,
        self::EXTERNAL_OPEN_StdProjectCreateV30LaunchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30LaunchType', $value));
        }
        return (string) $value;
    }
}
