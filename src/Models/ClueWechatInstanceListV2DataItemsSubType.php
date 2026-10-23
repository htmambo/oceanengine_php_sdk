<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueWechatInstanceListV2DataItemsSubType
{
    public const NORMAL_ClueWechatInstanceListV2DataItemsSubType = 'NORMAL';
    public const SINGLE_ClueWechatInstanceListV2DataItemsSubType = 'SINGLE';
    public const ENTERPRISE_DEFAULT_ClueWechatInstanceListV2DataItemsSubType = 'ENTERPRISE_DEFAULT';
    public const ENTERPRISE_CODE_ClueWechatInstanceListV2DataItemsSubType = 'ENTERPRISE_CODE';

    public const ALLOWED_VALUES = [
        self::NORMAL_ClueWechatInstanceListV2DataItemsSubType,
        self::SINGLE_ClueWechatInstanceListV2DataItemsSubType,
        self::ENTERPRISE_DEFAULT_ClueWechatInstanceListV2DataItemsSubType,
        self::ENTERPRISE_CODE_ClueWechatInstanceListV2DataItemsSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueWechatInstanceListV2DataItemsSubType', $value));
        }
        return (string) $value;
    }
}
