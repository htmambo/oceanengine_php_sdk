<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameListV30FilteringAuditStatus
{
    public const AUDIT_ACCEPTED_ToolsWechatGameListV30FilteringAuditStatus = 'AUDIT_ACCEPTED';
    public const AUDITING_ToolsWechatGameListV30FilteringAuditStatus = 'AUDITING';
    public const AUDIT_REJECTED_ToolsWechatGameListV30FilteringAuditStatus = 'AUDIT_REJECTED';
    public const ALL_ToolsWechatGameListV30FilteringAuditStatus = 'ALL';

    public const ALLOWED_VALUES = [
        self::AUDIT_ACCEPTED_ToolsWechatGameListV30FilteringAuditStatus,
        self::AUDITING_ToolsWechatGameListV30FilteringAuditStatus,
        self::AUDIT_REJECTED_ToolsWechatGameListV30FilteringAuditStatus,
        self::ALL_ToolsWechatGameListV30FilteringAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameListV30FilteringAuditStatus', $value));
        }
        return (string) $value;
    }
}
