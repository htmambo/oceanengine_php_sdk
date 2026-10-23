<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderDetailGetV10DataVideoInfoItemType
{
    public const Enum_0_QianchuanAwemeOrderDetailGetV10DataVideoInfoItemType = 0;
    public const Enum_1_QianchuanAwemeOrderDetailGetV10DataVideoInfoItemType = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_QianchuanAwemeOrderDetailGetV10DataVideoInfoItemType,
        self::Enum_1_QianchuanAwemeOrderDetailGetV10DataVideoInfoItemType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderDetailGetV10DataVideoInfoItemType', $value));
        }
        return (string) $value;
    }
}
