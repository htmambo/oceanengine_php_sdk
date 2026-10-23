<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30RelatedProductProductSetting
{
    public const MULTI_PRODUCTS_ProjectCreateV30RelatedProductProductSetting = 'MULTI_PRODUCTS';
    public const NO_MAP_ProjectCreateV30RelatedProductProductSetting = 'NO_MAP';
    public const SINGLE_ProjectCreateV30RelatedProductProductSetting = 'SINGLE';

    public const ALLOWED_VALUES = [
        self::MULTI_PRODUCTS_ProjectCreateV30RelatedProductProductSetting,
        self::NO_MAP_ProjectCreateV30RelatedProductProductSetting,
        self::SINGLE_ProjectCreateV30RelatedProductProductSetting,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30RelatedProductProductSetting', $value));
        }
        return (string) $value;
    }
}
