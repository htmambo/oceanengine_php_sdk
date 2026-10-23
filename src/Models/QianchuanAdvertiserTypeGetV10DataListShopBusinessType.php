<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdvertiserTypeGetV10DataListShopBusinessType
{
    public const UNKOWN_QianchuanAdvertiserTypeGetV10DataListShopBusinessType = 'UNKOWN';
    public const SHOP_RETAIL_QianchuanAdvertiserTypeGetV10DataListShopBusinessType = 'SHOP_RETAIL';

    public const ALLOWED_VALUES = [
        self::UNKOWN_QianchuanAdvertiserTypeGetV10DataListShopBusinessType,
        self::SHOP_RETAIL_QianchuanAdvertiserTypeGetV10DataListShopBusinessType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdvertiserTypeGetV10DataListShopBusinessType', $value));
        }
        return (string) $value;
    }
}
