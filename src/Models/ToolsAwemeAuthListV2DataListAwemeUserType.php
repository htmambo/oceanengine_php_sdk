<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeAuthListV2DataListAwemeUserType
{
    public const ENTERPRISE_ToolsAwemeAuthListV2DataListAwemeUserType = 'ENTERPRISE';
    public const SINGLE_ToolsAwemeAuthListV2DataListAwemeUserType = 'SINGLE';

    public const ALLOWED_VALUES = [
        self::ENTERPRISE_ToolsAwemeAuthListV2DataListAwemeUserType,
        self::SINGLE_ToolsAwemeAuthListV2DataListAwemeUserType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeAuthListV2DataListAwemeUserType', $value));
        }
        return (string) $value;
    }
}
