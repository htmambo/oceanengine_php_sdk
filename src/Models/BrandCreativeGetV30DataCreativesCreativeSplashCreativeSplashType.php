<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType
{
    public const Enum_2_BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType = 2;
    public const Enum_3_BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType = 3;
    public const Enum_4_BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType = 4;
    public const Enum_5_BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType = 5;
    public const Enum_0_BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType = 0;
    public const Enum_1_BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType = 1;

    public const ALLOWED_VALUES = [
        self::Enum_2_BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType,
        self::Enum_3_BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType,
        self::Enum_4_BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType,
        self::Enum_5_BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType,
        self::Enum_0_BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType,
        self::Enum_1_BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCreativeGetV30DataCreativesCreativeSplashCreativeSplashType', $value));
        }
        return (string) $value;
    }
}
