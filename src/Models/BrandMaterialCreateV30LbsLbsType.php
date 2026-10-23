<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialCreateV30LbsLbsType
{
    public const LIFE_ACCOUNT_POI_BrandMaterialCreateV30LbsLbsType = 'LIFE_ACCOUNT_POI';

    public const ALLOWED_VALUES = [
        self::LIFE_ACCOUNT_POI_BrandMaterialCreateV30LbsLbsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialCreateV30LbsLbsType', $value));
        }
        return (string) $value;
    }
}
