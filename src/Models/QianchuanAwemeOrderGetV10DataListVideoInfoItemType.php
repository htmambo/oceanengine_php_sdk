<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderGetV10DataListVideoInfoItemType
{
    public const Enum_0_QianchuanAwemeOrderGetV10DataListVideoInfoItemType = 0;
    public const Enum_1_QianchuanAwemeOrderGetV10DataListVideoInfoItemType = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_QianchuanAwemeOrderGetV10DataListVideoInfoItemType,
        self::Enum_1_QianchuanAwemeOrderGetV10DataListVideoInfoItemType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderGetV10DataListVideoInfoItemType', $value));
        }
        return (string) $value;
    }
}
