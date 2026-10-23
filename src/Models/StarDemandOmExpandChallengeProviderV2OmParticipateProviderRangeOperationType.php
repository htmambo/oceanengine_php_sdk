<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarDemandOmExpandChallengeProviderV2OmParticipateProviderRangeOperationType
{
    public const Enum_1_StarDemandOmExpandChallengeProviderV2OmParticipateProviderRangeOperationType = 1;
    public const Enum_2_StarDemandOmExpandChallengeProviderV2OmParticipateProviderRangeOperationType = 2;

    public const ALLOWED_VALUES = [
        self::Enum_1_StarDemandOmExpandChallengeProviderV2OmParticipateProviderRangeOperationType,
        self::Enum_2_StarDemandOmExpandChallengeProviderV2OmParticipateProviderRangeOperationType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarDemandOmExpandChallengeProviderV2OmParticipateProviderRangeOperationType', $value));
        }
        return (string) $value;
    }
}
