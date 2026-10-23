<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10ChannelProductInfosChannelType
{
    public const SHOP_SELL_QianchuanAdCreateV10ChannelProductInfosChannelType = 'SHOP_SELL';
    public const STAR_SELL_QianchuanAdCreateV10ChannelProductInfosChannelType = 'STAR_SELL';

    public const ALLOWED_VALUES = [
        self::SHOP_SELL_QianchuanAdCreateV10ChannelProductInfosChannelType,
        self::STAR_SELL_QianchuanAdCreateV10ChannelProductInfosChannelType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10ChannelProductInfosChannelType', $value));
        }
        return (string) $value;
    }
}
