<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeEstimateProfitV10AudienceExcludeLimitedRegion
{
    public const Enum_0_QianchuanAwemeEstimateProfitV10AudienceExcludeLimitedRegion = 0;
    public const Enum_1_QianchuanAwemeEstimateProfitV10AudienceExcludeLimitedRegion = 1;

    public const ALLOWED_VALUES = [
        self::Enum_0_QianchuanAwemeEstimateProfitV10AudienceExcludeLimitedRegion,
        self::Enum_1_QianchuanAwemeEstimateProfitV10AudienceExcludeLimitedRegion,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeEstimateProfitV10AudienceExcludeLimitedRegion', $value));
        }
        return (string) $value;
    }
}
