<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2AppBehaviorTarget
{
    public const APP_ToolsBidSuggestV2AppBehaviorTarget = 'APP';
    public const CATEGORY_ToolsBidSuggestV2AppBehaviorTarget = 'CATEGORY';
    public const NONE_ToolsBidSuggestV2AppBehaviorTarget = 'NONE';

    public const ALLOWED_VALUES = [
        self::APP_ToolsBidSuggestV2AppBehaviorTarget,
        self::CATEGORY_ToolsBidSuggestV2AppBehaviorTarget,
        self::NONE_ToolsBidSuggestV2AppBehaviorTarget,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2AppBehaviorTarget', $value));
        }
        return (string) $value;
    }
}
