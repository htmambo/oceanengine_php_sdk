<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataProductInfoChannelType
{
    public const SHOP_SELL_QianchuanAdDetailGetV10DataProductInfoChannelType = 'SHOP_SELL';
    public const STAR_SELL_QianchuanAdDetailGetV10DataProductInfoChannelType = 'STAR_SELL';

    public const ALLOWED_VALUES = [
        self::SHOP_SELL_QianchuanAdDetailGetV10DataProductInfoChannelType,
        self::STAR_SELL_QianchuanAdDetailGetV10DataProductInfoChannelType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataProductInfoChannelType', $value));
        }
        return (string) $value;
    }
}
