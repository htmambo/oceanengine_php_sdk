<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBpAssetManagementShareGetV30DataSharedAccountsAllAccountsByBp
{
    public const AD_ToolsBpAssetManagementShareGetV30DataSharedAccountsAllAccountsByBp = 'AD';

    public const ALLOWED_VALUES = [
        self::AD_ToolsBpAssetManagementShareGetV30DataSharedAccountsAllAccountsByBp,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBpAssetManagementShareGetV30DataSharedAccountsAllAccountsByBp', $value));
        }
        return (string) $value;
    }
}
