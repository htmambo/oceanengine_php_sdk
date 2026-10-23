<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMicroAppletListV30AssetManagementScope
{
    public const DIRECT_ToolsEbpMicroAppletListV30AssetManagementScope = 'DIRECT';
    public const TRAVERSE_ToolsEbpMicroAppletListV30AssetManagementScope = 'TRAVERSE';

    public const ALLOWED_VALUES = [
        self::DIRECT_ToolsEbpMicroAppletListV30AssetManagementScope,
        self::TRAVERSE_ToolsEbpMicroAppletListV30AssetManagementScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMicroAppletListV30AssetManagementScope', $value));
        }
        return (string) $value;
    }
}
