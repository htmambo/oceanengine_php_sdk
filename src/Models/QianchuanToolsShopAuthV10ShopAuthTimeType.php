<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsShopAuthV10ShopAuthTimeType
{
    public const NONE_QianchuanToolsShopAuthV10ShopAuthTimeType = 'NONE';
    public const CUSTOM_QianchuanToolsShopAuthV10ShopAuthTimeType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::NONE_QianchuanToolsShopAuthV10ShopAuthTimeType,
        self::CUSTOM_QianchuanToolsShopAuthV10ShopAuthTimeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsShopAuthV10ShopAuthTimeType', $value));
        }
        return (string) $value;
    }
}
