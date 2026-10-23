<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2DataListCampaignType
{
    public const SEARCH_ReportCreativeGetV2DataListCampaignType = 'SEARCH';
    public const FEED_ReportCreativeGetV2DataListCampaignType = 'FEED';

    public const ALLOWED_VALUES = [
        self::SEARCH_ReportCreativeGetV2DataListCampaignType,
        self::FEED_ReportCreativeGetV2DataListCampaignType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2DataListCampaignType', $value));
        }
        return (string) $value;
    }
}
