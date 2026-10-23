<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameListV30DataListAuthorizationStatus
{
    public const AUTHORIZED_ToolsWechatGameListV30DataListAuthorizationStatus = 'AUTHORIZED';
    public const AUTHORIZATION_FAILED_ToolsWechatGameListV30DataListAuthorizationStatus = 'AUTHORIZATION_FAILED';
    public const UNAUTHORIZED_ToolsWechatGameListV30DataListAuthorizationStatus = 'UNAUTHORIZED';

    public const ALLOWED_VALUES = [
        self::AUTHORIZED_ToolsWechatGameListV30DataListAuthorizationStatus,
        self::AUTHORIZATION_FAILED_ToolsWechatGameListV30DataListAuthorizationStatus,
        self::UNAUTHORIZED_ToolsWechatGameListV30DataListAuthorizationStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameListV30DataListAuthorizationStatus', $value));
        }
        return (string) $value;
    }
}
