<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductInfoChannelChannelType
{
    public const CHANNEL_TYPE_AWEME_KOL_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductInfoChannelChannelType = 'CHANNEL_TYPE_AWEME_KOL';
    public const CHANNEL_TYPE_SHOP_STORE_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductInfoChannelChannelType = 'CHANNEL_TYPE_SHOP_STORE';
    public const CHANNEL_TYPE_SUPER_MARKET_POP_STORE_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductInfoChannelChannelType = 'CHANNEL_TYPE_SUPER_MARKET_POP_STORE';
    public const SELL_CHANNEL_KOL_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductInfoChannelChannelType = 'SELL_CHANNEL_KOL';
    public const SELL_CHANNEL_MERCHANT_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductInfoChannelChannelType = 'SELL_CHANNEL_MERCHANT';

    public const ALLOWED_VALUES = [
        self::CHANNEL_TYPE_AWEME_KOL_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductInfoChannelChannelType,
        self::CHANNEL_TYPE_SHOP_STORE_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductInfoChannelChannelType,
        self::CHANNEL_TYPE_SUPER_MARKET_POP_STORE_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductInfoChannelChannelType,
        self::SELL_CHANNEL_KOL_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductInfoChannelChannelType,
        self::SELL_CHANNEL_MERCHANT_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductInfoChannelChannelType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductInfoChannelChannelType', $value));
        }
        return (string) $value;
    }
}
