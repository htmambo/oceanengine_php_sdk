<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarDemandOmGetDemandListV2UniversalSettlementType
{
    public const Enum_16_StarDemandOmGetDemandListV2UniversalSettlementType = 16;
    public const Enum_19_StarDemandOmGetDemandListV2UniversalSettlementType = 19;
    public const Enum_33_StarDemandOmGetDemandListV2UniversalSettlementType = 33;

    public const ALLOWED_VALUES = [
        self::Enum_16_StarDemandOmGetDemandListV2UniversalSettlementType,
        self::Enum_19_StarDemandOmGetDemandListV2UniversalSettlementType,
        self::Enum_33_StarDemandOmGetDemandListV2UniversalSettlementType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarDemandOmGetDemandListV2UniversalSettlementType', $value));
        }
        return (string) $value;
    }
}
