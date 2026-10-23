<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidsSuggestV30Platform
{
    public const ANDROID_ToolsBidsSuggestV30Platform = 'ANDROID';
    public const HARMONY_ToolsBidsSuggestV30Platform = 'HARMONY';
    public const IOS_ToolsBidsSuggestV30Platform = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_ToolsBidsSuggestV30Platform,
        self::HARMONY_ToolsBidsSuggestV30Platform,
        self::IOS_ToolsBidsSuggestV30Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidsSuggestV30Platform', $value));
        }
        return (string) $value;
    }
}
