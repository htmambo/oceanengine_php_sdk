<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppIosListV2DataListStatus
{
    public const ALL_ToolsAppIosListV2DataListStatus = 'ALL';
    public const AUDIT_ACCEPTED_ToolsAppIosListV2DataListStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_DOING_ToolsAppIosListV2DataListStatus = 'AUDIT_DOING';
    public const AUDIT_REJECTED_ToolsAppIosListV2DataListStatus = 'AUDIT_REJECTED';
    public const ENABLE_ToolsAppIosListV2DataListStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsAppIosListV2DataListStatus,
        self::AUDIT_ACCEPTED_ToolsAppIosListV2DataListStatus,
        self::AUDIT_DOING_ToolsAppIosListV2DataListStatus,
        self::AUDIT_REJECTED_ToolsAppIosListV2DataListStatus,
        self::ENABLE_ToolsAppIosListV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppIosListV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
