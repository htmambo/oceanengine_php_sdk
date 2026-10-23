<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsLiveAuthorizeListV2Status
{
    public const APPLY_OVERDUE_ToolsLiveAuthorizeListV2Status = 'APPLY_OVERDUE';
    public const AUTHORIZE_OVERDUE_ToolsLiveAuthorizeListV2Status = 'AUTHORIZE_OVERDUE';
    public const AUTHORIZING_ToolsLiveAuthorizeListV2Status = 'AUTHORIZING';
    public const APPLYING_ToolsLiveAuthorizeListV2Status = 'APPLYING';

    public const ALLOWED_VALUES = [
        self::APPLY_OVERDUE_ToolsLiveAuthorizeListV2Status,
        self::AUTHORIZE_OVERDUE_ToolsLiveAuthorizeListV2Status,
        self::AUTHORIZING_ToolsLiveAuthorizeListV2Status,
        self::APPLYING_ToolsLiveAuthorizeListV2Status,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsLiveAuthorizeListV2Status', $value));
        }
        return (string) $value;
    }
}
