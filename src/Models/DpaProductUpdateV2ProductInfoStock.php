<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaProductUpdateV2ProductInfoStock
{
    public const Enum_0_DpaProductUpdateV2ProductInfoStock = 0;
    public const Enum_1_DpaProductUpdateV2ProductInfoStock = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_DpaProductUpdateV2ProductInfoStock,
        self::Enum_1_DpaProductUpdateV2ProductInfoStock,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaProductUpdateV2ProductInfoStock', $value));
        }
        return (string) $value;
    }
}
