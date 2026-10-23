<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementUploadTaskListV2AccountType
{
    public const AD_ToolsAppManagementUploadTaskListV2AccountType = 'AD';
    public const BP_ToolsAppManagementUploadTaskListV2AccountType = 'BP';
    public const EBP_ToolsAppManagementUploadTaskListV2AccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAppManagementUploadTaskListV2AccountType,
        self::BP_ToolsAppManagementUploadTaskListV2AccountType,
        self::EBP_ToolsAppManagementUploadTaskListV2AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementUploadTaskListV2AccountType', $value));
        }
        return (string) $value;
    }
}
