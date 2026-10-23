<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2LocationType
{
    public const CURRENT_ToolsBidSuggestV2LocationType = 'CURRENT';
    public const TRAVEL_ToolsBidSuggestV2LocationType = 'TRAVEL';
    public const ALL_ToolsBidSuggestV2LocationType = 'ALL';
    public const HOME_ToolsBidSuggestV2LocationType = 'HOME';

    public const ALLOWED_VALUES = [
        self::CURRENT_ToolsBidSuggestV2LocationType,
        self::TRAVEL_ToolsBidSuggestV2LocationType,
        self::ALL_ToolsBidSuggestV2LocationType,
        self::HOME_ToolsBidSuggestV2LocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2LocationType', $value));
        }
        return (string) $value;
    }
}
