<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareV2AccountInfosAccountType
{
    public const BP_ToolsAppManagementBpShareV2AccountInfosAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareV2AccountInfosAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareV2AccountInfosAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareV2AccountInfosAccountType,
        self::STAR_ToolsAppManagementBpShareV2AccountInfosAccountType,
        self::AD_ToolsAppManagementBpShareV2AccountInfosAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareV2AccountInfosAccountType', $value));
        }
        return (string) $value;
    }
}
