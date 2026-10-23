<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeVideoGetV10DataVideoListIsRecommend
{
    public const Enum_0_QianchuanAwemeVideoGetV10DataVideoListIsRecommend = 0;
    public const Enum_1_QianchuanAwemeVideoGetV10DataVideoListIsRecommend = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_QianchuanAwemeVideoGetV10DataVideoListIsRecommend,
        self::Enum_1_QianchuanAwemeVideoGetV10DataVideoListIsRecommend,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeVideoGetV10DataVideoListIsRecommend', $value));
        }
        return (string) $value;
    }
}
