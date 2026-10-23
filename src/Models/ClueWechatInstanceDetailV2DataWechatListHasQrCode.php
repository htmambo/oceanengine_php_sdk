<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueWechatInstanceDetailV2DataWechatListHasQrCode
{
    public const FALSE_ClueWechatInstanceDetailV2DataWechatListHasQrCode = 'FALSE';
    public const TRUE_ClueWechatInstanceDetailV2DataWechatListHasQrCode = 'TRUE';

    public const ALLOWED_VALUES = [
        self::FALSE_ClueWechatInstanceDetailV2DataWechatListHasQrCode,
        self::TRUE_ClueWechatInstanceDetailV2DataWechatListHasQrCode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueWechatInstanceDetailV2DataWechatListHasQrCode', $value));
        }
        return (string) $value;
    }
}
