<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialListV30OrderFilterAppOrigin
{
    public const AWEME_BrandMaterialListV30OrderFilterAppOrigin = 'AWEME';
    public const TOUTIAO_BrandMaterialListV30OrderFilterAppOrigin = 'TOUTIAO';
    public const XIGUA_BrandMaterialListV30OrderFilterAppOrigin = 'XIGUA';

    public const ALLOWED_VALUES = [
        self::AWEME_BrandMaterialListV30OrderFilterAppOrigin,
        self::TOUTIAO_BrandMaterialListV30OrderFilterAppOrigin,
        self::XIGUA_BrandMaterialListV30OrderFilterAppOrigin,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialListV30OrderFilterAppOrigin', $value));
        }
        return (string) $value;
    }
}
