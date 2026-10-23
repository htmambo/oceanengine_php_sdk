<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataCategoryType
{
    public const PRODUCT_AdGetV2DataCategoryType = 'PRODUCT';
    public const CATEGORY_AdGetV2DataCategoryType = 'CATEGORY';
    public const NONE_AdGetV2DataCategoryType = 'NONE';

    public const ALLOWED_VALUES = [
        self::PRODUCT_AdGetV2DataCategoryType,
        self::CATEGORY_AdGetV2DataCategoryType,
        self::NONE_AdGetV2DataCategoryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataCategoryType', $value));
        }
        return (string) $value;
    }
}
