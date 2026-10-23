<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType
{
    public const Enum_0_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType = 0;
    public const Enum_1_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType = 1;
    public const Enum_2_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType = 2;
    public const Enum_3_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType = 3;
    public const Enum_4_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType = 4;
    public const Enum_47_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType = 47;
    public const Enum_18_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType = 18;
    public const Enum_44_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType = 44;
    public const Enum_14_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType = 14;
    public const Enum_48_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType = 48;
    public const Enum_49_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType = 49;
    public const Enum_50_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType = 50;
    public const Enum_25_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType = 25;

    public const ALLOWED_VALUES = [
        self::Enum_0_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType,
        self::Enum_1_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType,
        self::Enum_2_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType,
        self::Enum_3_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType,
        self::Enum_4_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType,
        self::Enum_47_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType,
        self::Enum_18_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType,
        self::Enum_44_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType,
        self::Enum_14_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType,
        self::Enum_48_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType,
        self::Enum_49_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType,
        self::Enum_50_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType,
        self::Enum_25_BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCreativeGetV30DataCreativesCreativeCreativeInfoCreativeType', $value));
        }
        return (string) $value;
    }
}
