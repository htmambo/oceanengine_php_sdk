<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2Pricing
{
    public const PRICING_CPV_ToolsBidSuggestV2Pricing = 'PRICING_CPV';
    public const PRICING_CPM_ToolsBidSuggestV2Pricing = 'PRICING_CPM';
    public const PRICING_CPC_OCPM_ToolsBidSuggestV2Pricing = 'PRICING_CPC_OCPM';
    public const PRICING_CPC_ToolsBidSuggestV2Pricing = 'PRICING_CPC';
    public const PRICING_OCPM_ToolsBidSuggestV2Pricing = 'PRICING_OCPM';
    public const PRICING_OCPC_ToolsBidSuggestV2Pricing = 'PRICING_OCPC';
    public const PRICING_CPA_ToolsBidSuggestV2Pricing = 'PRICING_CPA';

    public const ALLOWED_VALUES = [
        self::PRICING_CPV_ToolsBidSuggestV2Pricing,
        self::PRICING_CPM_ToolsBidSuggestV2Pricing,
        self::PRICING_CPC_OCPM_ToolsBidSuggestV2Pricing,
        self::PRICING_CPC_ToolsBidSuggestV2Pricing,
        self::PRICING_OCPM_ToolsBidSuggestV2Pricing,
        self::PRICING_OCPC_ToolsBidSuggestV2Pricing,
        self::PRICING_CPA_ToolsBidSuggestV2Pricing,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2Pricing', $value));
        }
        return (string) $value;
    }
}
