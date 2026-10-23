<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpPlayableListV30FilteringAuditStatus
{
    public const STATUS_CONFIRMED_ToolsEbpPlayableListV30FilteringAuditStatus = 'STATUS_CONFIRMED';
    public const STATUS_CONFIRMING_ToolsEbpPlayableListV30FilteringAuditStatus = 'STATUS_CONFIRMING';
    public const STATUS_CONFIRM_FAIL_ToolsEbpPlayableListV30FilteringAuditStatus = 'STATUS_CONFIRM_FAIL';

    public const ALLOWED_VALUES = [
        self::STATUS_CONFIRMED_ToolsEbpPlayableListV30FilteringAuditStatus,
        self::STATUS_CONFIRMING_ToolsEbpPlayableListV30FilteringAuditStatus,
        self::STATUS_CONFIRM_FAIL_ToolsEbpPlayableListV30FilteringAuditStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpPlayableListV30FilteringAuditStatus', $value));
        }
        return (string) $value;
    }
}
