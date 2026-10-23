<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10CreativeListPromotionCardMaterialButtonSmartOptimization
{
    public const Enum_0_QianchuanAdUpdateV10CreativeListPromotionCardMaterialButtonSmartOptimization = 0;
    public const Enum_1_QianchuanAdUpdateV10CreativeListPromotionCardMaterialButtonSmartOptimization = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_QianchuanAdUpdateV10CreativeListPromotionCardMaterialButtonSmartOptimization,
        self::Enum_1_QianchuanAdUpdateV10CreativeListPromotionCardMaterialButtonSmartOptimization,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10CreativeListPromotionCardMaterialButtonSmartOptimization', $value));
        }
        return (string) $value;
    }
}
