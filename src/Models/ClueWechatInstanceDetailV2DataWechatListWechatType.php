<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueWechatInstanceDetailV2DataWechatListWechatType
{
    public const PERSONAL_ClueWechatInstanceDetailV2DataWechatListWechatType = 'PERSONAL';
    public const PUBLIC_ClueWechatInstanceDetailV2DataWechatListWechatType = 'PUBLIC';
    public const ENTERPRISE_ClueWechatInstanceDetailV2DataWechatListWechatType = 'ENTERPRISE';

    public const ALLOWED_VALUES = [
        self::PERSONAL_ClueWechatInstanceDetailV2DataWechatListWechatType,
        self::PUBLIC_ClueWechatInstanceDetailV2DataWechatListWechatType,
        self::ENTERPRISE_ClueWechatInstanceDetailV2DataWechatListWechatType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueWechatInstanceDetailV2DataWechatListWechatType', $value));
        }
        return (string) $value;
    }
}
