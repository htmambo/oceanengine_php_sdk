<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementUploadTaskListV2DataListStatus
{
    public const WAITING_ToolsAppManagementUploadTaskListV2DataListStatus = 'WAITING';
    public const RUNNING_ToolsAppManagementUploadTaskListV2DataListStatus = 'RUNNING';
    public const SUCCESS_ToolsAppManagementUploadTaskListV2DataListStatus = 'SUCCESS';
    public const FAILED_ToolsAppManagementUploadTaskListV2DataListStatus = 'FAILED';

    public const ALLOWED_VALUES = [
        self::WAITING_ToolsAppManagementUploadTaskListV2DataListStatus,
        self::RUNNING_ToolsAppManagementUploadTaskListV2DataListStatus,
        self::SUCCESS_ToolsAppManagementUploadTaskListV2DataListStatus,
        self::FAILED_ToolsAppManagementUploadTaskListV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementUploadTaskListV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
