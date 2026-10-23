<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanProductAvailableGetV10DataProductListChannelType
{
    public const SHOP_SELL_QianchuanProductAvailableGetV10DataProductListChannelType = 'SHOP_SELL';
    public const STAR_SELL_QianchuanProductAvailableGetV10DataProductListChannelType = 'STAR_SELL';

    public const ALLOWED_VALUES = [
        self::SHOP_SELL_QianchuanProductAvailableGetV10DataProductListChannelType,
        self::STAR_SELL_QianchuanProductAvailableGetV10DataProductListChannelType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanProductAvailableGetV10DataProductListChannelType', $value));
        }
        return (string) $value;
    }
}
