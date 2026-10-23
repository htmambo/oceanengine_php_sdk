<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeSuggestBidV10AudienceExcludeLimitedRegion
{
    public const Enum_0_QianchuanAwemeSuggestBidV10AudienceExcludeLimitedRegion = 0;
    public const Enum_1_QianchuanAwemeSuggestBidV10AudienceExcludeLimitedRegion = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_QianchuanAwemeSuggestBidV10AudienceExcludeLimitedRegion,
        self::Enum_1_QianchuanAwemeSuggestBidV10AudienceExcludeLimitedRegion,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeSuggestBidV10AudienceExcludeLimitedRegion', $value));
        }
        return (string) $value;
    }
}
