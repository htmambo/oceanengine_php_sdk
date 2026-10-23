<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus
{
    public const Enum_10_ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus = 10;
    public const Enum_30_ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus = 30;
    public const Enum_40_ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus = 40;
    public const Enum_45_ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus = 45;
    public const Enum_50_ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus = 50;
    public const Enum_60_ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus = 60;
    public const Enum_100_ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus = 100;

    public const ALLOWED_VALUES = [
        self::Enum_10_ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus,
        self::Enum_30_ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus,
        self::Enum_40_ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus,
        self::Enum_45_ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus,
        self::Enum_50_ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus,
        self::Enum_60_ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus,
        self::Enum_100_ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ServeMarketCidVerifyTokenV10DataFacilitatorSubStatus', $value));
        }
        return (string) $value;
    }
}
