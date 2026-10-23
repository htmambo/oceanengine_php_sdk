<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueWechatInstanceDetailV2DataSubType
{
    public const NORMAL_ClueWechatInstanceDetailV2DataSubType = 'NORMAL';
    public const SINGLE_ClueWechatInstanceDetailV2DataSubType = 'SINGLE';
    public const ENTERPRISE_DEFAULT_ClueWechatInstanceDetailV2DataSubType = 'ENTERPRISE_DEFAULT';
    public const ENTERPRISE_CODE_ClueWechatInstanceDetailV2DataSubType = 'ENTERPRISE_CODE';

    public const ALLOWED_VALUES = [
        self::NORMAL_ClueWechatInstanceDetailV2DataSubType,
        self::SINGLE_ClueWechatInstanceDetailV2DataSubType,
        self::ENTERPRISE_DEFAULT_ClueWechatInstanceDetailV2DataSubType,
        self::ENTERPRISE_CODE_ClueWechatInstanceDetailV2DataSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueWechatInstanceDetailV2DataSubType', $value));
        }
        return (string) $value;
    }
}
