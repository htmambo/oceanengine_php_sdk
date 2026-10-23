<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdDetailV10DataProductInfosChannelType
{
    public const SHOP_SELL_QianchuanUniPromotionAdDetailV10DataProductInfosChannelType = 'SHOP_SELL';
    public const STAR_SELL_QianchuanUniPromotionAdDetailV10DataProductInfosChannelType = 'STAR_SELL';

    public const ALLOWED_VALUES = [
        self::SHOP_SELL_QianchuanUniPromotionAdDetailV10DataProductInfosChannelType,
        self::STAR_SELL_QianchuanUniPromotionAdDetailV10DataProductInfosChannelType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdDetailV10DataProductInfosChannelType', $value));
        }
        return (string) $value;
    }
}
