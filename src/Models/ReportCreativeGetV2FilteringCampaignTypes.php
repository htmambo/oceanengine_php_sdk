<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2FilteringCampaignTypes
{
    public const SEARCH_ReportCreativeGetV2FilteringCampaignTypes = 'SEARCH';
    public const CONTENT_ReportCreativeGetV2FilteringCampaignTypes = 'CONTENT';
    public const FEED_ReportCreativeGetV2FilteringCampaignTypes = 'FEED';

    public const ALLOWED_VALUES = [
        self::SEARCH_ReportCreativeGetV2FilteringCampaignTypes,
        self::CONTENT_ReportCreativeGetV2FilteringCampaignTypes,
        self::FEED_ReportCreativeGetV2FilteringCampaignTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2FilteringCampaignTypes', $value));
        }
        return (string) $value;
    }
}
