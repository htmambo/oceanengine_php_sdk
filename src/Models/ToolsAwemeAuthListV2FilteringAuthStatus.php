<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeAuthListV2FilteringAuthStatus
{
    public const AUTHRIZED_ToolsAwemeAuthListV2FilteringAuthStatus = 'AUTHRIZED';
    public const AUTHRIZING_ToolsAwemeAuthListV2FilteringAuthStatus = 'AUTHRIZING';
    public const INVALID_ToolsAwemeAuthListV2FilteringAuthStatus = 'INVALID';

    public const ALLOWED_VALUES = [
        self::AUTHRIZED_ToolsAwemeAuthListV2FilteringAuthStatus,
        self::AUTHRIZING_ToolsAwemeAuthListV2FilteringAuthStatus,
        self::INVALID_ToolsAwemeAuthListV2FilteringAuthStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeAuthListV2FilteringAuthStatus', $value));
        }
        return (string) $value;
    }
}
