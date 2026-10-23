<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2BidMode
{
    public const AUTO_BID_ToolsBidSuggestV2BidMode = 'AUTO_BID';
    public const SUGGEST_ToolsBidSuggestV2BidMode = 'SUGGEST';

    public const ALLOWED_VALUES = [
        self::AUTO_BID_ToolsBidSuggestV2BidMode,
        self::SUGGEST_ToolsBidSuggestV2BidMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2BidMode', $value));
        }
        return (string) $value;
    }
}
