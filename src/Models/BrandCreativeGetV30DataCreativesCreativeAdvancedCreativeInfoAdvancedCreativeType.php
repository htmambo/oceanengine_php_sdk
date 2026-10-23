<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType
{
    public const Enum_0_BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType = 0;
    public const Enum_1_BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType = 1;
    public const Enum_2_BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType = 2;
    public const Enum_3_BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType = 3;
    public const Enum_50_BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType = 50;
    public const Enum_8_BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType = 8;

    public const ALLOWED_VALUES = [
        self::Enum_0_BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType,
        self::Enum_1_BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType,
        self::Enum_2_BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType,
        self::Enum_3_BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType,
        self::Enum_50_BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType,
        self::Enum_8_BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCreativeGetV30DataCreativesCreativeAdvancedCreativeInfoAdvancedCreativeType', $value));
        }
        return (string) $value;
    }
}
