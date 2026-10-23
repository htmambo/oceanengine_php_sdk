<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2HideIfConverted
{
    public const APP_ToolsBidSuggestV2HideIfConverted = 'APP';
    public const ADVERTISER_ToolsBidSuggestV2HideIfConverted = 'ADVERTISER';
    public const CAMPAIGN_ToolsBidSuggestV2HideIfConverted = 'CAMPAIGN';
    public const ORGANIZATION_ToolsBidSuggestV2HideIfConverted = 'ORGANIZATION';
    public const NO_EXCLUDE_ToolsBidSuggestV2HideIfConverted = 'NO_EXCLUDE';
    public const AD_ToolsBidSuggestV2HideIfConverted = 'AD';
    public const CUSTOMER_ToolsBidSuggestV2HideIfConverted = 'CUSTOMER';
    public const GLOBAL_APP_ToolsBidSuggestV2HideIfConverted = 'GLOBAL_APP';

    public const ALLOWED_VALUES = [
        self::APP_ToolsBidSuggestV2HideIfConverted,
        self::ADVERTISER_ToolsBidSuggestV2HideIfConverted,
        self::CAMPAIGN_ToolsBidSuggestV2HideIfConverted,
        self::ORGANIZATION_ToolsBidSuggestV2HideIfConverted,
        self::NO_EXCLUDE_ToolsBidSuggestV2HideIfConverted,
        self::AD_ToolsBidSuggestV2HideIfConverted,
        self::CUSTOMER_ToolsBidSuggestV2HideIfConverted,
        self::GLOBAL_APP_ToolsBidSuggestV2HideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2HideIfConverted', $value));
        }
        return (string) $value;
    }
}
