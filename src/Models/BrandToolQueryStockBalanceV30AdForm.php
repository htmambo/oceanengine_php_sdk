<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryStockBalanceV30AdForm
{
    public const CONTENTRECOMMEND_BrandToolQueryStockBalanceV30AdForm = 'CONTENTRECOMMEND';
    public const CONTENTRECOMMEND_NO_GRASS_BrandToolQueryStockBalanceV30AdForm = 'CONTENTRECOMMEND_NO_GRASS';
    public const CONTENTSERVICE_BrandToolQueryStockBalanceV30AdForm = 'CONTENTSERVICE';
    public const CONTENTSERVICE_NO_GRASS_BrandToolQueryStockBalanceV30AdForm = 'CONTENTSERVICE_NO_GRASS';
    public const FEED_BrandToolQueryStockBalanceV30AdForm = 'FEED';
    public const NEW_PLANT_GRASS_BrandToolQueryStockBalanceV30AdForm = 'NEW_PLANT_GRASS';

    public const ALLOWED_VALUES = [
        self::CONTENTRECOMMEND_BrandToolQueryStockBalanceV30AdForm,
        self::CONTENTRECOMMEND_NO_GRASS_BrandToolQueryStockBalanceV30AdForm,
        self::CONTENTSERVICE_BrandToolQueryStockBalanceV30AdForm,
        self::CONTENTSERVICE_NO_GRASS_BrandToolQueryStockBalanceV30AdForm,
        self::FEED_BrandToolQueryStockBalanceV30AdForm,
        self::NEW_PLANT_GRASS_BrandToolQueryStockBalanceV30AdForm,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryStockBalanceV30AdForm', $value));
        }
        return (string) $value;
    }
}
