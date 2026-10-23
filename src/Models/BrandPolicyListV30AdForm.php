<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandPolicyListV30AdForm
{
    public const CONTENTRECOMMEND_BrandPolicyListV30AdForm = 'CONTENTRECOMMEND';
    public const CONTENTRECOMMEND_NO_GRASS_BrandPolicyListV30AdForm = 'CONTENTRECOMMEND_NO_GRASS';
    public const CONTENTSERVICE_BrandPolicyListV30AdForm = 'CONTENTSERVICE';
    public const CONTENTSERVICE_NO_GRASS_BrandPolicyListV30AdForm = 'CONTENTSERVICE_NO_GRASS';
    public const FEED_BrandPolicyListV30AdForm = 'FEED';
    public const NEW_PLANT_GRASS_BrandPolicyListV30AdForm = 'NEW_PLANT_GRASS';

    public const ALLOWED_VALUES = [
        self::CONTENTRECOMMEND_BrandPolicyListV30AdForm,
        self::CONTENTRECOMMEND_NO_GRASS_BrandPolicyListV30AdForm,
        self::CONTENTSERVICE_BrandPolicyListV30AdForm,
        self::CONTENTSERVICE_NO_GRASS_BrandPolicyListV30AdForm,
        self::FEED_BrandPolicyListV30AdForm,
        self::NEW_PLANT_GRASS_BrandPolicyListV30AdForm,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandPolicyListV30AdForm', $value));
        }
        return (string) $value;
    }
}
