<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaDetailGetV2FilteringIsRecommend
{
    public const Enum_1_DpaDetailGetV2FilteringIsRecommend = 1;
    public const Enum_0_DpaDetailGetV2FilteringIsRecommend = 0;

    public const ALLOWED_VALUES = [
        self::Enum_1_DpaDetailGetV2FilteringIsRecommend,
        self::Enum_0_DpaDetailGetV2FilteringIsRecommend,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaDetailGetV2FilteringIsRecommend', $value));
        }
        return (string) $value;
    }
}
