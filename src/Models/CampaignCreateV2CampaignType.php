<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignCreateV2CampaignType
{
    public const SEARCH_CampaignCreateV2CampaignType = 'SEARCH';
    public const CONTENT_CampaignCreateV2CampaignType = 'CONTENT';
    public const FEED_CampaignCreateV2CampaignType = 'FEED';

    public const ALLOWED_VALUES = [
        self::SEARCH_CampaignCreateV2CampaignType,
        self::CONTENT_CampaignCreateV2CampaignType,
        self::FEED_CampaignCreateV2CampaignType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignCreateV2CampaignType', $value));
        }
        return (string) $value;
    }
}
