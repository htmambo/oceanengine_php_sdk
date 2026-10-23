<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2SuperiorPopularityType
{
    public const NONE_ToolsEstimateAudienceV2SuperiorPopularityType = 'NONE';
    public const GAME_ToolsEstimateAudienceV2SuperiorPopularityType = 'GAME';

    public const ALLOWED_VALUES = [
        self::NONE_ToolsEstimateAudienceV2SuperiorPopularityType,
        self::GAME_ToolsEstimateAudienceV2SuperiorPopularityType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2SuperiorPopularityType', $value));
        }
        return (string) $value;
    }
}
