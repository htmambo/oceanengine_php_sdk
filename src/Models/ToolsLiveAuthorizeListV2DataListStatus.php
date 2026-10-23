<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsLiveAuthorizeListV2DataListStatus
{
    public const APPLY_OVERDUE_ToolsLiveAuthorizeListV2DataListStatus = 'APPLY_OVERDUE';
    public const AUTHORIZE_OVERDUE_ToolsLiveAuthorizeListV2DataListStatus = 'AUTHORIZE_OVERDUE';
    public const AUTHORIZING_ToolsLiveAuthorizeListV2DataListStatus = 'AUTHORIZING';
    public const APPLYING_ToolsLiveAuthorizeListV2DataListStatus = 'APPLYING';

    public const ALLOWED_VALUES = [
        self::APPLY_OVERDUE_ToolsLiveAuthorizeListV2DataListStatus,
        self::AUTHORIZE_OVERDUE_ToolsLiveAuthorizeListV2DataListStatus,
        self::AUTHORIZING_ToolsLiveAuthorizeListV2DataListStatus,
        self::APPLYING_ToolsLiveAuthorizeListV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsLiveAuthorizeListV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
