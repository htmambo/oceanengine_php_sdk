<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdGetV10DataListProductInfoChannelType
{
    public const SHOP_SELL_QianchuanAdGetV10DataListProductInfoChannelType = 'SHOP_SELL';
    public const STAR_SELL_QianchuanAdGetV10DataListProductInfoChannelType = 'STAR_SELL';

    public const ALLOWED_VALUES = [
        self::SHOP_SELL_QianchuanAdGetV10DataListProductInfoChannelType,
        self::STAR_SELL_QianchuanAdGetV10DataListProductInfoChannelType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdGetV10DataListProductInfoChannelType', $value));
        }
        return (string) $value;
    }
}
