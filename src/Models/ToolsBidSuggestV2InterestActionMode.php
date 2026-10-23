<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2InterestActionMode
{
    public const CUSTOM_ToolsBidSuggestV2InterestActionMode = 'CUSTOM';
    public const RECOMMEND_ToolsBidSuggestV2InterestActionMode = 'RECOMMEND';
    public const UNLIMITED_ToolsBidSuggestV2InterestActionMode = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::CUSTOM_ToolsBidSuggestV2InterestActionMode,
        self::RECOMMEND_ToolsBidSuggestV2InterestActionMode,
        self::UNLIMITED_ToolsBidSuggestV2InterestActionMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2InterestActionMode', $value));
        }
        return (string) $value;
    }
}
