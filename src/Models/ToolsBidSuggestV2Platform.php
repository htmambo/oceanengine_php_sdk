<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2Platform
{
    public const PC_ToolsBidSuggestV2Platform = 'PC';
    public const ANDROID_ToolsBidSuggestV2Platform = 'ANDROID';
    public const HARMONY_ToolsBidSuggestV2Platform = 'HARMONY';
    public const IPAD_ToolsBidSuggestV2Platform = 'IPAD';
    public const IOS_ToolsBidSuggestV2Platform = 'IOS';
    public const NONE_ToolsBidSuggestV2Platform = 'NONE';
    public const WAP_ToolsBidSuggestV2Platform = 'WAP';

    public const ALLOWED_VALUES = [
        self::PC_ToolsBidSuggestV2Platform,
        self::ANDROID_ToolsBidSuggestV2Platform,
        self::HARMONY_ToolsBidSuggestV2Platform,
        self::IPAD_ToolsBidSuggestV2Platform,
        self::IOS_ToolsBidSuggestV2Platform,
        self::NONE_ToolsBidSuggestV2Platform,
        self::WAP_ToolsBidSuggestV2Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2Platform', $value));
        }
        return (string) $value;
    }
}
