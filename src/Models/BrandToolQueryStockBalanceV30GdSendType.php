<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryStockBalanceV30GdSendType
{
    public const CTR_BrandToolQueryStockBalanceV30GdSendType = 'CTR';
    public const FANS_INCR_BrandToolQueryStockBalanceV30GdSendType = 'FANS_INCR';
    public const FORM_BrandToolQueryStockBalanceV30GdSendType = 'FORM';
    public const HOISTING_BrandToolQueryStockBalanceV30GdSendType = 'HOISTING';
    public const INTERACTIVE_BrandToolQueryStockBalanceV30GdSendType = 'INTERACTIVE';
    public const PLANT_GRASS_BrandToolQueryStockBalanceV30GdSendType = 'PLANT_GRASS';

    public const ALLOWED_VALUES = [
        self::CTR_BrandToolQueryStockBalanceV30GdSendType,
        self::FANS_INCR_BrandToolQueryStockBalanceV30GdSendType,
        self::FORM_BrandToolQueryStockBalanceV30GdSendType,
        self::HOISTING_BrandToolQueryStockBalanceV30GdSendType,
        self::INTERACTIVE_BrandToolQueryStockBalanceV30GdSendType,
        self::PLANT_GRASS_BrandToolQueryStockBalanceV30GdSendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryStockBalanceV30GdSendType', $value));
        }
        return (string) $value;
    }
}
