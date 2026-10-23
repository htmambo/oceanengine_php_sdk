<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsPlayableCloudGameListV2FilteringStatus
{
    public const ON_SHELF_ToolsPlayableCloudGameListV2FilteringStatus = 'ON_SHELF';
    public const AUDIT_SUCCESS_ToolsPlayableCloudGameListV2FilteringStatus = 'AUDIT_SUCCESS';
    public const OFF_SHELF_ToolsPlayableCloudGameListV2FilteringStatus = 'OFF_SHELF';
    public const AUDIT_FAIL_ToolsPlayableCloudGameListV2FilteringStatus = 'AUDIT_FAIL';
    public const UPLOAD_STATUS_ToolsPlayableCloudGameListV2FilteringStatus = 'UPLOAD_STATUS';

    public const ALLOWED_VALUES = [
        self::ON_SHELF_ToolsPlayableCloudGameListV2FilteringStatus,
        self::AUDIT_SUCCESS_ToolsPlayableCloudGameListV2FilteringStatus,
        self::OFF_SHELF_ToolsPlayableCloudGameListV2FilteringStatus,
        self::AUDIT_FAIL_ToolsPlayableCloudGameListV2FilteringStatus,
        self::UPLOAD_STATUS_ToolsPlayableCloudGameListV2FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsPlayableCloudGameListV2FilteringStatus', $value));
        }
        return (string) $value;
    }
}
