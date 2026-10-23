<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialListV30DataMaterialsCreativeDisplayMode
{
    public const Enum_0_BrandMaterialListV30DataMaterialsCreativeDisplayMode = '0';
    public const Enum_1_BrandMaterialListV30DataMaterialsCreativeDisplayMode = '1';

    public const ALLOWED_VALUES = [
        self::Enum_0_BrandMaterialListV30DataMaterialsCreativeDisplayMode,
        self::Enum_1_BrandMaterialListV30DataMaterialsCreativeDisplayMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialListV30DataMaterialsCreativeDisplayMode', $value));
        }
        return (string) $value;
    }
}
