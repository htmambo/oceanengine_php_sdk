<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderListV30DataOrdersClassify
{
    public const EXCHANGE_BrandOrderListV30DataOrdersClassify = 'EXCHANGE';
    public const INTERNAL_BrandOrderListV30DataOrdersClassify = 'INTERNAL';
    public const SALE_BrandOrderListV30DataOrdersClassify = 'SALE';
    public const SUBSIDIARY_BrandOrderListV30DataOrdersClassify = 'SUBSIDIARY';
    public const SUPPLEMENT_BrandOrderListV30DataOrdersClassify = 'SUPPLEMENT';

    public const ALLOWED_VALUES = [
        self::EXCHANGE_BrandOrderListV30DataOrdersClassify,
        self::INTERNAL_BrandOrderListV30DataOrdersClassify,
        self::SALE_BrandOrderListV30DataOrdersClassify,
        self::SUBSIDIARY_BrandOrderListV30DataOrdersClassify,
        self::SUPPLEMENT_BrandOrderListV30DataOrdersClassify,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderListV30DataOrdersClassify', $value));
        }
        return (string) $value;
    }
}
