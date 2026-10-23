<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppGameBookListV30AssetManagementScope
{
    public const DIRECT_ToolsEbpAppGameBookListV30AssetManagementScope = 'DIRECT';
    public const TRAVERSE_ToolsEbpAppGameBookListV30AssetManagementScope = 'TRAVERSE';

    public const ALLOWED_VALUES = [
        self::DIRECT_ToolsEbpAppGameBookListV30AssetManagementScope,
        self::TRAVERSE_ToolsEbpAppGameBookListV30AssetManagementScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppGameBookListV30AssetManagementScope', $value));
        }
        return (string) $value;
    }
}
