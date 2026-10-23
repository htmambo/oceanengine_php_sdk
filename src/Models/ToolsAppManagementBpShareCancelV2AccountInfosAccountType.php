<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBpShareCancelV2AccountInfosAccountType
{
    public const BP_ToolsAppManagementBpShareCancelV2AccountInfosAccountType = 'BP';
    public const STAR_ToolsAppManagementBpShareCancelV2AccountInfosAccountType = 'STAR';
    public const AD_ToolsAppManagementBpShareCancelV2AccountInfosAccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::BP_ToolsAppManagementBpShareCancelV2AccountInfosAccountType,
        self::STAR_ToolsAppManagementBpShareCancelV2AccountInfosAccountType,
        self::AD_ToolsAppManagementBpShareCancelV2AccountInfosAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBpShareCancelV2AccountInfosAccountType', $value));
        }
        return (string) $value;
    }
}
