<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderListV30DataOrderListAdListBidMode
{
    public const Enum_保播放_DouplusOrderListV30DataOrderListAdListBidMode = '保播放';
    public const Enum_保转化_DouplusOrderListV30DataOrderListAdListBidMode = '保转化';
    public const Enum_自动出价_DouplusOrderListV30DataOrderListAdListBidMode = '自动出价';

    public const ALLOWED_VALUES = [
        self::Enum_保播放_DouplusOrderListV30DataOrderListAdListBidMode,
        self::Enum_保转化_DouplusOrderListV30DataOrderListAdListBidMode,
        self::Enum_自动出价_DouplusOrderListV30DataOrderListAdListBidMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderListV30DataOrderListAdListBidMode', $value));
        }
        return (string) $value;
    }
}
