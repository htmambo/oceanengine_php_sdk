<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameListV30DataListAuditStatus
{
    public const AUDIT_ACCEPTED_ToolsWechatGameListV30DataListAuditStatus = 'AUDIT_ACCEPTED';
    public const AUDITING_ToolsWechatGameListV30DataListAuditStatus = 'AUDITING';
    public const AUDIT_REJECTED_ToolsWechatGameListV30DataListAuditStatus = 'AUDIT_REJECTED';

    public const ALLOWED_VALUES = [
        self::AUDIT_ACCEPTED_ToolsWechatGameListV30DataListAuditStatus,
        self::AUDITING_ToolsWechatGameListV30DataListAuditStatus,
        self::AUDIT_REJECTED_ToolsWechatGameListV30DataListAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameListV30DataListAuditStatus', $value));
        }
        return (string) $value;
    }
}
