<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandQueryStockV30AdForm
{
    public const CONTENT_RECOMMEND_BrandQueryStockV30AdForm = 'CONTENT_RECOMMEND';
    public const CONTENT_SERVICE_BrandQueryStockV30AdForm = 'CONTENT_SERVICE';

    public const ALLOWED_VALUES = [
        self::CONTENT_RECOMMEND_BrandQueryStockV30AdForm,
        self::CONTENT_SERVICE_BrandQueryStockV30AdForm,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandQueryStockV30AdForm', $value));
        }
        return (string) $value;
    }
}
