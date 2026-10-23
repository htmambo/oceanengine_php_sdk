<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ServeMarketCidVerifyTokenV10DataCidCapacityStatus
{
    public const Enum_1_ServeMarketCidVerifyTokenV10DataCidCapacityStatus = 1;
    public const Enum_2_ServeMarketCidVerifyTokenV10DataCidCapacityStatus = 2;
    public const Enum_3_ServeMarketCidVerifyTokenV10DataCidCapacityStatus = 3;
    public const Enum_6_ServeMarketCidVerifyTokenV10DataCidCapacityStatus = 6;
    public const Enum_100_ServeMarketCidVerifyTokenV10DataCidCapacityStatus = 100;

    public const ALLOWED_VALUES = [
        self::Enum_1_ServeMarketCidVerifyTokenV10DataCidCapacityStatus,
        self::Enum_2_ServeMarketCidVerifyTokenV10DataCidCapacityStatus,
        self::Enum_3_ServeMarketCidVerifyTokenV10DataCidCapacityStatus,
        self::Enum_6_ServeMarketCidVerifyTokenV10DataCidCapacityStatus,
        self::Enum_100_ServeMarketCidVerifyTokenV10DataCidCapacityStatus,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ServeMarketCidVerifyTokenV10DataCidCapacityStatus', $value));
        }
        return (string) $value;
    }
}
