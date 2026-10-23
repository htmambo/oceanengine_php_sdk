<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class IosAppListV30SearchType
{
    public const ALL_IosAppListV30SearchType = 'ALL';
    public const CREATE_ONLY_IosAppListV30SearchType = 'CREATE_ONLY';
    public const SHARED_ONLY_IosAppListV30SearchType = 'SHARED_ONLY';

    public const ALLOWED_VALUES = [
        self::ALL_IosAppListV30SearchType,
        self::CREATE_ONLY_IosAppListV30SearchType,
        self::SHARED_ONLY_IosAppListV30SearchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum IosAppListV30SearchType', $value));
        }
        return (string) $value;
    }
}
