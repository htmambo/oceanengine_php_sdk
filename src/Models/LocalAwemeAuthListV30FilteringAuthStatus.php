<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAwemeAuthListV30FilteringAuthStatus
{
    public const AUTHRIZED_LocalAwemeAuthListV30FilteringAuthStatus = 'AUTHRIZED';
    public const AUTHRIZING_LocalAwemeAuthListV30FilteringAuthStatus = 'AUTHRIZING';
    public const INVALID_LocalAwemeAuthListV30FilteringAuthStatus = 'INVALID';

    public const ALLOWED_VALUES = [
        self::AUTHRIZED_LocalAwemeAuthListV30FilteringAuthStatus,
        self::AUTHRIZING_LocalAwemeAuthListV30FilteringAuthStatus,
        self::INVALID_LocalAwemeAuthListV30FilteringAuthStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAwemeAuthListV30FilteringAuthStatus', $value));
        }
        return (string) $value;
    }
}
