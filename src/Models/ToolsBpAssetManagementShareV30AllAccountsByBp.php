<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBpAssetManagementShareV30AllAccountsByBp
{
    public const AD_ToolsBpAssetManagementShareV30AllAccountsByBp = 'AD';

    public const ALLOWED_VALUES = [
        self::AD_ToolsBpAssetManagementShareV30AllAccountsByBp,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBpAssetManagementShareV30AllAccountsByBp', $value));
        }
        return (string) $value;
    }
}
