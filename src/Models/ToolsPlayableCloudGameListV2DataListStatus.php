<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPlayableCloudGameListV2DataListStatus
{
    public const ON_SHELF_ToolsPlayableCloudGameListV2DataListStatus = 'ON_SHELF';
    public const AUDIT_SUCCESS_ToolsPlayableCloudGameListV2DataListStatus = 'AUDIT_SUCCESS';
    public const OFF_SHELF_ToolsPlayableCloudGameListV2DataListStatus = 'OFF_SHELF';
    public const AUDIT_FAIL_ToolsPlayableCloudGameListV2DataListStatus = 'AUDIT_FAIL';
    public const UPLOAD_STATUS_ToolsPlayableCloudGameListV2DataListStatus = 'UPLOAD_STATUS';

    public const ALLOWED_VALUES = [
        self::ON_SHELF_ToolsPlayableCloudGameListV2DataListStatus,
        self::AUDIT_SUCCESS_ToolsPlayableCloudGameListV2DataListStatus,
        self::OFF_SHELF_ToolsPlayableCloudGameListV2DataListStatus,
        self::AUDIT_FAIL_ToolsPlayableCloudGameListV2DataListStatus,
        self::UPLOAD_STATUS_ToolsPlayableCloudGameListV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPlayableCloudGameListV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
