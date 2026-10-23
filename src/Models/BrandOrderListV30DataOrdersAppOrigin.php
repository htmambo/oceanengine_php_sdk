<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersAppOrigin
{
    public const AWEME_BrandOrderListV30DataOrdersAppOrigin = 'AWEME';
    public const TOUTIAO_BrandOrderListV30DataOrdersAppOrigin = 'TOUTIAO';
    public const XIGUA_BrandOrderListV30DataOrdersAppOrigin = 'XIGUA';

    public const ALLOWED_VALUES = [
        self::AWEME_BrandOrderListV30DataOrdersAppOrigin,
        self::TOUTIAO_BrandOrderListV30DataOrdersAppOrigin,
        self::XIGUA_BrandOrderListV30DataOrdersAppOrigin,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersAppOrigin', $value));
        }
        return (string) $value;
    }
}
