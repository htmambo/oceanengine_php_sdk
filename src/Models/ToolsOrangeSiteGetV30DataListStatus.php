<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsOrangeSiteGetV30DataListStatus
{
    public const AUDIT_ACCEPTED_ToolsOrangeSiteGetV30DataListStatus = 'AUDIT_ACCEPTED';
    public const AUDIT_BANNED_ToolsOrangeSiteGetV30DataListStatus = 'AUDIT_BANNED';
    public const AUDIT_DOING_ToolsOrangeSiteGetV30DataListStatus = 'AUDIT_DOING';
    public const AUDIT_REJECTED_ToolsOrangeSiteGetV30DataListStatus = 'AUDIT_REJECTED';
    public const DELETED_ToolsOrangeSiteGetV30DataListStatus = 'DELETED';
    public const DISABLE_ToolsOrangeSiteGetV30DataListStatus = 'DISABLE';
    public const EDIT_ToolsOrangeSiteGetV30DataListStatus = 'EDIT';
    public const ENABLE_ToolsOrangeSiteGetV30DataListStatus = 'ENABLE';
    public const FORBIDDEN_ToolsOrangeSiteGetV30DataListStatus = 'FORBIDDEN';

    public const ALLOWED_VALUES = [
        self::AUDIT_ACCEPTED_ToolsOrangeSiteGetV30DataListStatus,
        self::AUDIT_BANNED_ToolsOrangeSiteGetV30DataListStatus,
        self::AUDIT_DOING_ToolsOrangeSiteGetV30DataListStatus,
        self::AUDIT_REJECTED_ToolsOrangeSiteGetV30DataListStatus,
        self::DELETED_ToolsOrangeSiteGetV30DataListStatus,
        self::DISABLE_ToolsOrangeSiteGetV30DataListStatus,
        self::EDIT_ToolsOrangeSiteGetV30DataListStatus,
        self::ENABLE_ToolsOrangeSiteGetV30DataListStatus,
        self::FORBIDDEN_ToolsOrangeSiteGetV30DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsOrangeSiteGetV30DataListStatus', $value));
        }
        return (string) $value;
    }
}
