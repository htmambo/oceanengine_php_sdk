<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceDpaRtaRecommendType
{
    public const MORE_AdGetV2DataAudienceDpaRtaRecommendType = 'MORE';
    public const ONLY_AdGetV2DataAudienceDpaRtaRecommendType = 'ONLY';

    public const ALLOWED_VALUES = [
        self::MORE_AdGetV2DataAudienceDpaRtaRecommendType,
        self::ONLY_AdGetV2DataAudienceDpaRtaRecommendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceDpaRtaRecommendType', $value));
        }
        return (string) $value;
    }
}
