<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2RetargetingType
{
    public const RETARGETING_NONE_ToolsBidSuggestV2RetargetingType = 'RETARGETING_NONE';
    public const RETARGETING_EXCLUDE_ToolsBidSuggestV2RetargetingType = 'RETARGETING_EXCLUDE';
    public const RETARGETING_INCLUDE_ToolsBidSuggestV2RetargetingType = 'RETARGETING_INCLUDE';
    public const NONE_ToolsBidSuggestV2RetargetingType = 'NONE';

    public const ALLOWED_VALUES = [
        self::RETARGETING_NONE_ToolsBidSuggestV2RetargetingType,
        self::RETARGETING_EXCLUDE_ToolsBidSuggestV2RetargetingType,
        self::RETARGETING_INCLUDE_ToolsBidSuggestV2RetargetingType,
        self::NONE_ToolsBidSuggestV2RetargetingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2RetargetingType', $value));
        }
        return (string) $value;
    }
}
