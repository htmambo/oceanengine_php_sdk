<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueWechatPoolListV2DataItemsHasQrCode
{
    public const TRUE_ClueWechatPoolListV2DataItemsHasQrCode = 'TRUE';
    public const FALSE_ClueWechatPoolListV2DataItemsHasQrCode = 'FALSE';

    public const ALLOWED_VALUES = [
        self::TRUE_ClueWechatPoolListV2DataItemsHasQrCode,
        self::FALSE_ClueWechatPoolListV2DataItemsHasQrCode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueWechatPoolListV2DataItemsHasQrCode', $value));
        }
        return (string) $value;
    }
}
