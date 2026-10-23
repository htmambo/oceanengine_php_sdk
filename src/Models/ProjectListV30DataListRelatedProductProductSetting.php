<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListRelatedProductProductSetting
{
    public const MULTI_PRODUCTS_ProjectListV30DataListRelatedProductProductSetting = 'MULTI_PRODUCTS';
    public const NO_MAP_ProjectListV30DataListRelatedProductProductSetting = 'NO_MAP';
    public const SINGLE_ProjectListV30DataListRelatedProductProductSetting = 'SINGLE';

    public const ALLOWED_VALUES = [
        self::MULTI_PRODUCTS_ProjectListV30DataListRelatedProductProductSetting,
        self::NO_MAP_ProjectListV30DataListRelatedProductProductSetting,
        self::SINGLE_ProjectListV30DataListRelatedProductProductSetting,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListRelatedProductProductSetting', $value));
        }
        return (string) $value;
    }
}
