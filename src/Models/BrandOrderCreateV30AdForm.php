<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderCreateV30AdForm
{
    public const CONTENTRECOMMEND_BrandOrderCreateV30AdForm = 'CONTENTRECOMMEND';
    public const CONTENTRECOMMEND_NO_GRASS_BrandOrderCreateV30AdForm = 'CONTENTRECOMMEND_NO_GRASS';
    public const CONTENTSERVICE_BrandOrderCreateV30AdForm = 'CONTENTSERVICE';
    public const CONTENTSERVICE_NO_GRASS_BrandOrderCreateV30AdForm = 'CONTENTSERVICE_NO_GRASS';
    public const FEED_BrandOrderCreateV30AdForm = 'FEED';
    public const NEW_PLANT_GRASS_BrandOrderCreateV30AdForm = 'NEW_PLANT_GRASS';

    public const ALLOWED_VALUES = [
        self::CONTENTRECOMMEND_BrandOrderCreateV30AdForm,
        self::CONTENTRECOMMEND_NO_GRASS_BrandOrderCreateV30AdForm,
        self::CONTENTSERVICE_BrandOrderCreateV30AdForm,
        self::CONTENTSERVICE_NO_GRASS_BrandOrderCreateV30AdForm,
        self::FEED_BrandOrderCreateV30AdForm,
        self::NEW_PLANT_GRASS_BrandOrderCreateV30AdForm,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderCreateV30AdForm', $value));
        }
        return (string) $value;
    }
}
