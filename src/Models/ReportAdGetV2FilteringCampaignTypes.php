<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2FilteringCampaignTypes
{
    public const SEARCH_ReportAdGetV2FilteringCampaignTypes = 'SEARCH';
    public const CONTENT_ReportAdGetV2FilteringCampaignTypes = 'CONTENT';
    public const FEED_ReportAdGetV2FilteringCampaignTypes = 'FEED';

    public const ALLOWED_VALUES = [
        self::SEARCH_ReportAdGetV2FilteringCampaignTypes,
        self::CONTENT_ReportAdGetV2FilteringCampaignTypes,
        self::FEED_ReportAdGetV2FilteringCampaignTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2FilteringCampaignTypes', $value));
        }
        return (string) $value;
    }
}
