<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsQuotaGetV2CampaignType
{
    public const FEED_ToolsQuotaGetV2CampaignType = 'FEED';
    public const SEARCH_ToolsQuotaGetV2CampaignType = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::FEED_ToolsQuotaGetV2CampaignType,
        self::SEARCH_ToolsQuotaGetV2CampaignType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsQuotaGetV2CampaignType', $value));
        }
        return (string) $value;
    }
}
