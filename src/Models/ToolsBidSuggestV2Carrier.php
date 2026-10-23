<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2Carrier
{
    public const UNICOM_ToolsBidSuggestV2Carrier = 'UNICOM';
    public const TELCOM_ToolsBidSuggestV2Carrier = 'TELCOM';
    public const MOBILE_ToolsBidSuggestV2Carrier = 'MOBILE';

    public const ALLOWED_VALUES = [
        self::UNICOM_ToolsBidSuggestV2Carrier,
        self::TELCOM_ToolsBidSuggestV2Carrier,
        self::MOBILE_ToolsBidSuggestV2Carrier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2Carrier', $value));
        }
        return (string) $value;
    }
}
