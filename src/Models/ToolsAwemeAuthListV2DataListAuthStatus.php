<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeAuthListV2DataListAuthStatus
{
    public const AUTHRIZED_ToolsAwemeAuthListV2DataListAuthStatus = 'AUTHRIZED';
    public const AUTHRIZING_ToolsAwemeAuthListV2DataListAuthStatus = 'AUTHRIZING';
    public const INVALID_ToolsAwemeAuthListV2DataListAuthStatus = 'INVALID';

    public const ALLOWED_VALUES = [
        self::AUTHRIZED_ToolsAwemeAuthListV2DataListAuthStatus,
        self::AUTHRIZING_ToolsAwemeAuthListV2DataListAuthStatus,
        self::INVALID_ToolsAwemeAuthListV2DataListAuthStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeAuthListV2DataListAuthStatus', $value));
        }
        return (string) $value;
    }
}
