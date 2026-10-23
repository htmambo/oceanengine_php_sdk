<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidsSuggestV30CampaignType
{
    public const ALL_ToolsBidsSuggestV30CampaignType = 'ALL';
    public const SEARCH_ToolsBidsSuggestV30CampaignType = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsBidsSuggestV30CampaignType,
        self::SEARCH_ToolsBidsSuggestV30CampaignType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidsSuggestV30CampaignType', $value));
        }
        return (string) $value;
    }
}
