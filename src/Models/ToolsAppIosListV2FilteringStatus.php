<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppIosListV2FilteringStatus
{
    public const ALL_ToolsAppIosListV2FilteringStatus = 'ALL';
    public const AUDIT_ACCEPTED_ToolsAppIosListV2FilteringStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_DOING_ToolsAppIosListV2FilteringStatus = 'AUDIT_DOING';
    public const AUDIT_REJECTED_ToolsAppIosListV2FilteringStatus = 'AUDIT_REJECTED';
    public const ENABLE_ToolsAppIosListV2FilteringStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsAppIosListV2FilteringStatus,
        self::AUDIT_ACCEPTED_ToolsAppIosListV2FilteringStatus,
        self::AUDIT_DOING_ToolsAppIosListV2FilteringStatus,
        self::AUDIT_REJECTED_ToolsAppIosListV2FilteringStatus,
        self::ENABLE_ToolsAppIosListV2FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppIosListV2FilteringStatus', $value));
        }
        return (string) $value;
    }
}
