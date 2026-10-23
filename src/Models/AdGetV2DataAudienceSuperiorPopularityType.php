<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceSuperiorPopularityType
{
    public const NONE_AdGetV2DataAudienceSuperiorPopularityType = 'NONE';
    public const GAME_AdGetV2DataAudienceSuperiorPopularityType = 'GAME';

    public const ALLOWED_VALUES = [
        self::NONE_AdGetV2DataAudienceSuperiorPopularityType,
        self::GAME_AdGetV2DataAudienceSuperiorPopularityType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceSuperiorPopularityType', $value));
        }
        return (string) $value;
    }
}
