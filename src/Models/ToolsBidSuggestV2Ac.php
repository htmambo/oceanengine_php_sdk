<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2Ac
{
    public const Enum_5_G_ToolsBidSuggestV2Ac = '5G';
    public const Enum_4_G_ToolsBidSuggestV2Ac = '4G';
    public const Enum_3_G_ToolsBidSuggestV2Ac = '3G';
    public const WIFI_ToolsBidSuggestV2Ac = 'WIFI';
    public const Enum_2_G_ToolsBidSuggestV2Ac = '2G';

    public const ALLOWED_VALUES = [
        self::Enum_5_G_ToolsBidSuggestV2Ac,
        self::Enum_4_G_ToolsBidSuggestV2Ac,
        self::Enum_3_G_ToolsBidSuggestV2Ac,
        self::WIFI_ToolsBidSuggestV2Ac,
        self::Enum_2_G_ToolsBidSuggestV2Ac,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2Ac', $value));
        }
        return (string) $value;
    }
}
