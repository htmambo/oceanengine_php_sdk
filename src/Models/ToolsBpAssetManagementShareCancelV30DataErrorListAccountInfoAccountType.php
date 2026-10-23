<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBpAssetManagementShareCancelV30DataErrorListAccountInfoAccountType
{
    public const AD_ToolsBpAssetManagementShareCancelV30DataErrorListAccountInfoAccountType = 'AD';
    public const BP_ToolsBpAssetManagementShareCancelV30DataErrorListAccountInfoAccountType = 'BP';

    public const ALLOWED_VALUES = [
        self::AD_ToolsBpAssetManagementShareCancelV30DataErrorListAccountInfoAccountType,
        self::BP_ToolsBpAssetManagementShareCancelV30DataErrorListAccountInfoAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBpAssetManagementShareCancelV30DataErrorListAccountInfoAccountType', $value));
        }
        return (string) $value;
    }
}
