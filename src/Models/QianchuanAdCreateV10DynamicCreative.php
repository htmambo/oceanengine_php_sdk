<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10DynamicCreative
{
    public const Enum_0_QianchuanAdCreateV10DynamicCreative = 0;
    public const Enum_1_QianchuanAdCreateV10DynamicCreative = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_QianchuanAdCreateV10DynamicCreative,
        self::Enum_1_QianchuanAdCreateV10DynamicCreative,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10DynamicCreative', $value));
        }
        return (string) $value;
    }
}
