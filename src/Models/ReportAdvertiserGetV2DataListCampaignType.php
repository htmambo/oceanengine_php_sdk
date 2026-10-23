<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdvertiserGetV2DataListCampaignType
{
    public const SEARCH_ReportAdvertiserGetV2DataListCampaignType = 'SEARCH';
    public const FEED_ReportAdvertiserGetV2DataListCampaignType = 'FEED';

    public const ALLOWED_VALUES = [
        self::SEARCH_ReportAdvertiserGetV2DataListCampaignType,
        self::FEED_ReportAdvertiserGetV2DataListCampaignType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdvertiserGetV2DataListCampaignType', $value));
        }
        return (string) $value;
    }
}
