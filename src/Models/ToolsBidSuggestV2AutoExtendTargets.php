<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2AutoExtendTargets
{
    public const INTEREST_TAG_ToolsBidSuggestV2AutoExtendTargets = 'INTEREST_TAG';
    public const AD_TAG_ToolsBidSuggestV2AutoExtendTargets = 'AD_TAG';
    public const AGE_ToolsBidSuggestV2AutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_ToolsBidSuggestV2AutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const REGION_ToolsBidSuggestV2AutoExtendTargets = 'REGION';
    public const GENDER_ToolsBidSuggestV2AutoExtendTargets = 'GENDER';

    public const ALLOWED_VALUES = [
        self::INTEREST_TAG_ToolsBidSuggestV2AutoExtendTargets,
        self::AD_TAG_ToolsBidSuggestV2AutoExtendTargets,
        self::AGE_ToolsBidSuggestV2AutoExtendTargets,
        self::CUSTOM_AUDIENCE_ToolsBidSuggestV2AutoExtendTargets,
        self::REGION_ToolsBidSuggestV2AutoExtendTargets,
        self::GENDER_ToolsBidSuggestV2AutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2AutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
