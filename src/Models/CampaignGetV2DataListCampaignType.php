<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2DataListCampaignType
{
    public const SEARCH_CampaignGetV2DataListCampaignType = 'SEARCH';
    public const CONTENT_CampaignGetV2DataListCampaignType = 'CONTENT';
    public const FEED_CampaignGetV2DataListCampaignType = 'FEED';

    public const ALLOWED_VALUES = [
        self::SEARCH_CampaignGetV2DataListCampaignType,
        self::CONTENT_CampaignGetV2DataListCampaignType,
        self::FEED_CampaignGetV2DataListCampaignType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2DataListCampaignType', $value));
        }
        return (string) $value;
    }
}
