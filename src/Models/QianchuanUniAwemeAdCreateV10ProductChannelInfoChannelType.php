<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAdCreateV10ProductChannelInfoChannelType
{
    public const SHOP_SELL_QianchuanUniAwemeAdCreateV10ProductChannelInfoChannelType = 'SHOP_SELL';
    public const STAR_SELL_QianchuanUniAwemeAdCreateV10ProductChannelInfoChannelType = 'STAR_SELL';

    public const ALLOWED_VALUES = [
        self::SHOP_SELL_QianchuanUniAwemeAdCreateV10ProductChannelInfoChannelType,
        self::STAR_SELL_QianchuanUniAwemeAdCreateV10ProductChannelInfoChannelType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAdCreateV10ProductChannelInfoChannelType', $value));
        }
        return (string) $value;
    }
}
