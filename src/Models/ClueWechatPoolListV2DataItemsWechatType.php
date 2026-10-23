<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueWechatPoolListV2DataItemsWechatType
{
    public const PERSONAL_ClueWechatPoolListV2DataItemsWechatType = 'PERSONAL';
    public const PUBLIC_ClueWechatPoolListV2DataItemsWechatType = 'PUBLIC';
    public const ENTERPRISE_ClueWechatPoolListV2DataItemsWechatType = 'ENTERPRISE';

    public const ALLOWED_VALUES = [
        self::PERSONAL_ClueWechatPoolListV2DataItemsWechatType,
        self::PUBLIC_ClueWechatPoolListV2DataItemsWechatType,
        self::ENTERPRISE_ClueWechatPoolListV2DataItemsWechatType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueWechatPoolListV2DataItemsWechatType', $value));
        }
        return (string) $value;
    }
}
