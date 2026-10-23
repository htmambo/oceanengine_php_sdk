<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30FilterClassify
{
    public const EXCHANGE_BrandOrderListV30FilterClassify = 'EXCHANGE';
    public const INTERNAL_BrandOrderListV30FilterClassify = 'INTERNAL';
    public const SALE_BrandOrderListV30FilterClassify = 'SALE';
    public const SUBSIDIARY_BrandOrderListV30FilterClassify = 'SUBSIDIARY';
    public const SUPPLEMENT_BrandOrderListV30FilterClassify = 'SUPPLEMENT';

    public const ALLOWED_VALUES = [
        self::EXCHANGE_BrandOrderListV30FilterClassify,
        self::INTERNAL_BrandOrderListV30FilterClassify,
        self::SALE_BrandOrderListV30FilterClassify,
        self::SUBSIDIARY_BrandOrderListV30FilterClassify,
        self::SUPPLEMENT_BrandOrderListV30FilterClassify,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30FilterClassify', $value));
        }
        return (string) $value;
    }
}
