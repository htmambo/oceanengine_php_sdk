<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementUploadTaskCreateV2AccountType
{
    public const AD_ToolsAppManagementUploadTaskCreateV2AccountType = 'AD';
    public const BP_ToolsAppManagementUploadTaskCreateV2AccountType = 'BP';
    public const EBP_ToolsAppManagementUploadTaskCreateV2AccountType = 'EBP';
    public const STAR_ToolsAppManagementUploadTaskCreateV2AccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAppManagementUploadTaskCreateV2AccountType,
        self::BP_ToolsAppManagementUploadTaskCreateV2AccountType,
        self::EBP_ToolsAppManagementUploadTaskCreateV2AccountType,
        self::STAR_ToolsAppManagementUploadTaskCreateV2AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementUploadTaskCreateV2AccountType', $value));
        }
        return (string) $value;
    }
}
