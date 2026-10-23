<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2DpaRtaRecommendType
{
    public const MORE_ToolsBidSuggestV2DpaRtaRecommendType = 'MORE';
    public const ONLY_ToolsBidSuggestV2DpaRtaRecommendType = 'ONLY';

    public const ALLOWED_VALUES = [
        self::MORE_ToolsBidSuggestV2DpaRtaRecommendType,
        self::ONLY_ToolsBidSuggestV2DpaRtaRecommendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2DpaRtaRecommendType', $value));
        }
        return (string) $value;
    }
}
