<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandQueryStockV30GdSendType
{
    public const CTR_BrandQueryStockV30GdSendType = 'CTR';
    public const FANS_INCR_BrandQueryStockV30GdSendType = 'FANS_INCR';
    public const FORM_BrandQueryStockV30GdSendType = 'FORM';
    public const HOISTING_BrandQueryStockV30GdSendType = 'HOISTING';
    public const INTERACTIVE_BrandQueryStockV30GdSendType = 'INTERACTIVE';
    public const PLANT_GRASS_BrandQueryStockV30GdSendType = 'PLANT_GRASS';
    public const SEQUENCE_BrandQueryStockV30GdSendType = 'SEQUENCE';

    public const ALLOWED_VALUES = [
        self::CTR_BrandQueryStockV30GdSendType,
        self::FANS_INCR_BrandQueryStockV30GdSendType,
        self::FORM_BrandQueryStockV30GdSendType,
        self::HOISTING_BrandQueryStockV30GdSendType,
        self::INTERACTIVE_BrandQueryStockV30GdSendType,
        self::PLANT_GRASS_BrandQueryStockV30GdSendType,
        self::SEQUENCE_BrandQueryStockV30GdSendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandQueryStockV30GdSendType', $value));
        }
        return (string) $value;
    }
}
