<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarDemandOmCreateChallengeV2ChallengeInfoProviderScope
{
    public const Enum_1_StarDemandOmCreateChallengeV2ChallengeInfoProviderScope = 1;
    public const Enum_2_StarDemandOmCreateChallengeV2ChallengeInfoProviderScope = 2;

    public const ALLOWED_VALUES = [
        self::Enum_1_StarDemandOmCreateChallengeV2ChallengeInfoProviderScope,
        self::Enum_2_StarDemandOmCreateChallengeV2ChallengeInfoProviderScope,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarDemandOmCreateChallengeV2ChallengeInfoProviderScope', $value));
        }
        return (string) $value;
    }
}
