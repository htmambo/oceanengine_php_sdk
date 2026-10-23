<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ServeMarketCidVerifyTokenV10DataDevStatus
{
    public const Enum_1_ServeMarketCidVerifyTokenV10DataDevStatus = 1;
    public const Enum_2_ServeMarketCidVerifyTokenV10DataDevStatus = 2;
    public const Enum_3_ServeMarketCidVerifyTokenV10DataDevStatus = 3;
    public const Enum_4_ServeMarketCidVerifyTokenV10DataDevStatus = 4;
    public const Enum_5_ServeMarketCidVerifyTokenV10DataDevStatus = 5;
    public const Enum_6_ServeMarketCidVerifyTokenV10DataDevStatus = 6;
    public const Enum_7_ServeMarketCidVerifyTokenV10DataDevStatus = 7;
    public const Enum_8_ServeMarketCidVerifyTokenV10DataDevStatus = 8;

    public const ALLOWED_VALUES = [
        self::Enum_1_ServeMarketCidVerifyTokenV10DataDevStatus,
        self::Enum_2_ServeMarketCidVerifyTokenV10DataDevStatus,
        self::Enum_3_ServeMarketCidVerifyTokenV10DataDevStatus,
        self::Enum_4_ServeMarketCidVerifyTokenV10DataDevStatus,
        self::Enum_5_ServeMarketCidVerifyTokenV10DataDevStatus,
        self::Enum_6_ServeMarketCidVerifyTokenV10DataDevStatus,
        self::Enum_7_ServeMarketCidVerifyTokenV10DataDevStatus,
        self::Enum_8_ServeMarketCidVerifyTokenV10DataDevStatus,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ServeMarketCidVerifyTokenV10DataDevStatus', $value));
        }
        return (string) $value;
    }
}
