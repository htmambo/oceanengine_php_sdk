<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionOrderGetV10DataPageInfoHasMore
{
    public const Enum_0_QianchuanAwemeUniPromotionOrderGetV10DataPageInfoHasMore = 0;
    public const Enum_1_QianchuanAwemeUniPromotionOrderGetV10DataPageInfoHasMore = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_QianchuanAwemeUniPromotionOrderGetV10DataPageInfoHasMore,
        self::Enum_1_QianchuanAwemeUniPromotionOrderGetV10DataPageInfoHasMore,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionOrderGetV10DataPageInfoHasMore', $value));
        }
        return (string) $value;
    }
}
