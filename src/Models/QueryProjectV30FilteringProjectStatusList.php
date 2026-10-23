<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryProjectV30FilteringProjectStatusList
{
    public const ACTIVE_QueryProjectV30FilteringProjectStatusList = 'ACTIVE';

    public const ALLOWED_VALUES = [
        self::ACTIVE_QueryProjectV30FilteringProjectStatusList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryProjectV30FilteringProjectStatusList', $value));
        }
        return (string) $value;
    }
}
