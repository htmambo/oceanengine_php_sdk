<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataIsHomepageHide
{
    public const Enum_0_QianchuanAdDetailGetV10DataIsHomepageHide = 0;
    public const Enum_1_QianchuanAdDetailGetV10DataIsHomepageHide = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_QianchuanAdDetailGetV10DataIsHomepageHide,
        self::Enum_1_QianchuanAdDetailGetV10DataIsHomepageHide,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataIsHomepageHide', $value));
        }
        return (string) $value;
    }
}
