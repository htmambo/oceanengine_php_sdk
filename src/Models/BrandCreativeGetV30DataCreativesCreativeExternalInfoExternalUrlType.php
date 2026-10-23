<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCreativeGetV30DataCreativesCreativeExternalInfoExternalUrlType
{
    public const Enum_0_BrandCreativeGetV30DataCreativesCreativeExternalInfoExternalUrlType = 0;
    public const Enum_1_BrandCreativeGetV30DataCreativesCreativeExternalInfoExternalUrlType = 1;
    public const Enum_4_BrandCreativeGetV30DataCreativesCreativeExternalInfoExternalUrlType = 4;

    public const ALLOWED_VALUES = [
        self::Enum_0_BrandCreativeGetV30DataCreativesCreativeExternalInfoExternalUrlType,
        self::Enum_1_BrandCreativeGetV30DataCreativesCreativeExternalInfoExternalUrlType,
        self::Enum_4_BrandCreativeGetV30DataCreativesCreativeExternalInfoExternalUrlType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCreativeGetV30DataCreativesCreativeExternalInfoExternalUrlType', $value));
        }
        return (string) $value;
    }
}
