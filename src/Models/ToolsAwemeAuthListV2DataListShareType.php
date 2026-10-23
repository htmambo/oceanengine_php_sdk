<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeAuthListV2DataListShareType
{
    public const SHARE_BY_ACCOUNT_ToolsAwemeAuthListV2DataListShareType = 'SHARE_BY_ACCOUNT';
    public const SHARE_BY_COMPANY_ToolsAwemeAuthListV2DataListShareType = 'SHARE_BY_COMPANY';
    public const SHARE_BY_EBP_CASCADE_ACCOUNT_ToolsAwemeAuthListV2DataListShareType = 'SHARE_BY_EBP_CASCADE_ACCOUNT';
    public const SHARE_BY_EBP_DIRECT_ACCOUNT_ToolsAwemeAuthListV2DataListShareType = 'SHARE_BY_EBP_DIRECT_ACCOUNT';
    public const SHARE_BY_GROUP_ToolsAwemeAuthListV2DataListShareType = 'SHARE_BY_GROUP';
    public const SHARE_BY_ONESELF_ToolsAwemeAuthListV2DataListShareType = 'SHARE_BY_ONESELF';

    public const ALLOWED_VALUES = [
        self::SHARE_BY_ACCOUNT_ToolsAwemeAuthListV2DataListShareType,
        self::SHARE_BY_COMPANY_ToolsAwemeAuthListV2DataListShareType,
        self::SHARE_BY_EBP_CASCADE_ACCOUNT_ToolsAwemeAuthListV2DataListShareType,
        self::SHARE_BY_EBP_DIRECT_ACCOUNT_ToolsAwemeAuthListV2DataListShareType,
        self::SHARE_BY_GROUP_ToolsAwemeAuthListV2DataListShareType,
        self::SHARE_BY_ONESELF_ToolsAwemeAuthListV2DataListShareType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeAuthListV2DataListShareType', $value));
        }
        return (string) $value;
    }
}
