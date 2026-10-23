<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidsSuggestV30Pricing
{
    public const PRICING_CPC_ToolsBidsSuggestV30Pricing = 'PRICING_CPC';
    public const PRICING_CPM_ToolsBidsSuggestV30Pricing = 'PRICING_CPM';
    public const PRICING_OCPC_ToolsBidsSuggestV30Pricing = 'PRICING_OCPC';
    public const PRICING_OCPM_ToolsBidsSuggestV30Pricing = 'PRICING_OCPM';

    public const ALLOWED_VALUES = [
        self::PRICING_CPC_ToolsBidsSuggestV30Pricing,
        self::PRICING_CPM_ToolsBidsSuggestV30Pricing,
        self::PRICING_OCPC_ToolsBidsSuggestV30Pricing,
        self::PRICING_OCPM_ToolsBidsSuggestV30Pricing,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidsSuggestV30Pricing', $value));
        }
        return (string) $value;
    }
}
