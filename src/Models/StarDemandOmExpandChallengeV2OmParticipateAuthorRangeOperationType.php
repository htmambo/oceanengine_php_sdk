<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarDemandOmExpandChallengeV2OmParticipateAuthorRangeOperationType
{
    public const Enum_0_StarDemandOmExpandChallengeV2OmParticipateAuthorRangeOperationType = 0;
    public const Enum_1_StarDemandOmExpandChallengeV2OmParticipateAuthorRangeOperationType = 1;
    public const Enum_2_StarDemandOmExpandChallengeV2OmParticipateAuthorRangeOperationType = 2;

    public const ALLOWED_VALUES = [
        self::Enum_0_StarDemandOmExpandChallengeV2OmParticipateAuthorRangeOperationType,
        self::Enum_1_StarDemandOmExpandChallengeV2OmParticipateAuthorRangeOperationType,
        self::Enum_2_StarDemandOmExpandChallengeV2OmParticipateAuthorRangeOperationType,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarDemandOmExpandChallengeV2OmParticipateAuthorRangeOperationType', $value));
        }
        return (string) $value;
    }
}
