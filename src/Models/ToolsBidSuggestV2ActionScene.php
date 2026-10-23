<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2ActionScene
{
    public const APP_ToolsBidSuggestV2ActionScene = 'APP';
    public const SEARCH_ToolsBidSuggestV2ActionScene = 'SEARCH';
    public const AD_ToolsBidSuggestV2ActionScene = 'AD';
    public const E_COMMERCE_ToolsBidSuggestV2ActionScene = 'E-COMMERCE';
    public const NEWS_ToolsBidSuggestV2ActionScene = 'NEWS';

    public const ALLOWED_VALUES = [
        self::APP_ToolsBidSuggestV2ActionScene,
        self::SEARCH_ToolsBidSuggestV2ActionScene,
        self::AD_ToolsBidSuggestV2ActionScene,
        self::E_COMMERCE_ToolsBidSuggestV2ActionScene,
        self::NEWS_ToolsBidSuggestV2ActionScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2ActionScene', $value));
        }
        return (string) $value;
    }
}
