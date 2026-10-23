<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueWechatInstanceDetailV2DataSuffix
{
    public const FALSE_ClueWechatInstanceDetailV2DataSuffix = 'FALSE';
    public const TRUE_ClueWechatInstanceDetailV2DataSuffix = 'TRUE';

    public const ALLOWED_VALUES = [
        self::FALSE_ClueWechatInstanceDetailV2DataSuffix,
        self::TRUE_ClueWechatInstanceDetailV2DataSuffix,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueWechatInstanceDetailV2DataSuffix', $value));
        }
        return (string) $value;
    }
}
