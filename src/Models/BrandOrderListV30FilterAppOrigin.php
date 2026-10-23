<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30FilterAppOrigin
{
    public const AWEME_BrandOrderListV30FilterAppOrigin = 'AWEME';
    public const AWEME_AND_LITE_BrandOrderListV30FilterAppOrigin = 'AWEME_AND_LITE';
    public const TOUTIAO_BrandOrderListV30FilterAppOrigin = 'TOUTIAO';
    public const XIGUA_BrandOrderListV30FilterAppOrigin = 'XIGUA';

    public const ALLOWED_VALUES = [
        self::AWEME_BrandOrderListV30FilterAppOrigin,
        self::AWEME_AND_LITE_BrandOrderListV30FilterAppOrigin,
        self::TOUTIAO_BrandOrderListV30FilterAppOrigin,
        self::XIGUA_BrandOrderListV30FilterAppOrigin,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30FilterAppOrigin', $value));
        }
        return (string) $value;
    }
}
