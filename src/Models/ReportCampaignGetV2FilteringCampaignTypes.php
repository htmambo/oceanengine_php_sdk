<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCampaignGetV2FilteringCampaignTypes
{
    public const SEARCH_ReportCampaignGetV2FilteringCampaignTypes = 'SEARCH';
    public const CONTENT_ReportCampaignGetV2FilteringCampaignTypes = 'CONTENT';
    public const FEED_ReportCampaignGetV2FilteringCampaignTypes = 'FEED';

    public const ALLOWED_VALUES = [
        self::SEARCH_ReportCampaignGetV2FilteringCampaignTypes,
        self::CONTENT_ReportCampaignGetV2FilteringCampaignTypes,
        self::FEED_ReportCampaignGetV2FilteringCampaignTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCampaignGetV2FilteringCampaignTypes', $value));
        }
        return (string) $value;
    }
}
