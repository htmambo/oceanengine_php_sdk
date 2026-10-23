<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarDemandOmCreateChallengeV2ChallengeInfoCommissionType
{
    public const Enum_0_StarDemandOmCreateChallengeV2ChallengeInfoCommissionType = 0;
    public const Enum_7_StarDemandOmCreateChallengeV2ChallengeInfoCommissionType = 7;
    public const Enum_1_StarDemandOmCreateChallengeV2ChallengeInfoCommissionType = 1;
    public const Enum_2_StarDemandOmCreateChallengeV2ChallengeInfoCommissionType = 2;
    public const Enum_3_StarDemandOmCreateChallengeV2ChallengeInfoCommissionType = 3;

    public const ALLOWED_VALUES = [
        self::Enum_0_StarDemandOmCreateChallengeV2ChallengeInfoCommissionType,
        self::Enum_7_StarDemandOmCreateChallengeV2ChallengeInfoCommissionType,
        self::Enum_1_StarDemandOmCreateChallengeV2ChallengeInfoCommissionType,
        self::Enum_2_StarDemandOmCreateChallengeV2ChallengeInfoCommissionType,
        self::Enum_3_StarDemandOmCreateChallengeV2ChallengeInfoCommissionType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarDemandOmCreateChallengeV2ChallengeInfoCommissionType', $value));
        }
        return (string) $value;
    }
}
