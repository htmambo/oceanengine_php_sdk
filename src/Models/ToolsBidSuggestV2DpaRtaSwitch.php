<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2DpaRtaSwitch
{
    public const OFF_ToolsBidSuggestV2DpaRtaSwitch = 'OFF';
    public const ON_ToolsBidSuggestV2DpaRtaSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ToolsBidSuggestV2DpaRtaSwitch,
        self::ON_ToolsBidSuggestV2DpaRtaSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2DpaRtaSwitch', $value));
        }
        return (string) $value;
    }
}
