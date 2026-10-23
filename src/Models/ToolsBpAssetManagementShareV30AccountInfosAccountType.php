<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBpAssetManagementShareV30AccountInfosAccountType
{
    public const AD_ToolsBpAssetManagementShareV30AccountInfosAccountType = 'AD';
    public const BP_ToolsBpAssetManagementShareV30AccountInfosAccountType = 'BP';

    public const ALLOWED_VALUES = [
        self::AD_ToolsBpAssetManagementShareV30AccountInfosAccountType,
        self::BP_ToolsBpAssetManagementShareV30AccountInfosAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBpAssetManagementShareV30AccountInfosAccountType', $value));
        }
        return (string) $value;
    }
}
