<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryProjectV2FilteringProjectStatusList
{
    public const APPROVED_QueryProjectV2FilteringProjectStatusList = 'APPROVED';

    public const ALLOWED_VALUES = [
        self::APPROVED_QueryProjectV2FilteringProjectStatusList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryProjectV2FilteringProjectStatusList', $value));
        }
        return (string) $value;
    }
}
