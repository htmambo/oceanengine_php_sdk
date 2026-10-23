<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode
{
    public const Enum_0_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 0;
    public const Enum_1_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 1;
    public const Enum_2_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 2;
    public const Enum_3_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 3;
    public const Enum_4_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 4;
    public const Enum_5_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 5;
    public const Enum_6_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 6;
    public const Enum_7_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 7;
    public const Enum_8_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 8;
    public const Enum_9_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 9;
    public const Enum_10_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 10;
    public const Enum_11_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 11;
    public const Enum_12_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 12;
    public const Enum_13_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 13;
    public const Enum_14_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 14;
    public const Enum_80_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode = 80;

    public const ALLOWED_VALUES = [
        self::Enum_0_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_1_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_2_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_3_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_4_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_5_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_6_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_7_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_8_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_9_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_10_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_11_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_12_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_13_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_14_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
        self::Enum_80_BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCreativeGetV30DataCreativesCreativeInteractiveModuleCreativeInteractiveMode', $value));
        }
        return (string) $value;
    }
}
