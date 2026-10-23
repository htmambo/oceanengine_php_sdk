<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignCreateV2MarketingScene
{
    public const VIDEO_INFO_CampaignCreateV2MarketingScene = 'VIDEO_INFO';
    public const CAR_CampaignCreateV2MarketingScene = 'CAR';
    public const ECOMMERCE_CampaignCreateV2MarketingScene = 'ECOMMERCE';
    public const GAME_PROMOTION_CampaignCreateV2MarketingScene = 'GAME_PROMOTION';
    public const NOVEL_CampaignCreateV2MarketingScene = 'NOVEL';
    public const PROMOTION_PURPOSE_CampaignCreateV2MarketingScene = 'PROMOTION_PURPOSE';
    public const GAME_SUBSCRIBE_CampaignCreateV2MarketingScene = 'GAME_SUBSCRIBE';
    public const MERCHANTS_CampaignCreateV2MarketingScene = 'MERCHANTS';
    public const EDUCATION_CampaignCreateV2MarketingScene = 'EDUCATION';
    public const SOCIAL_CampaignCreateV2MarketingScene = 'SOCIAL';

    public const ALLOWED_VALUES = [
        self::VIDEO_INFO_CampaignCreateV2MarketingScene,
        self::CAR_CampaignCreateV2MarketingScene,
        self::ECOMMERCE_CampaignCreateV2MarketingScene,
        self::GAME_PROMOTION_CampaignCreateV2MarketingScene,
        self::NOVEL_CampaignCreateV2MarketingScene,
        self::PROMOTION_PURPOSE_CampaignCreateV2MarketingScene,
        self::GAME_SUBSCRIBE_CampaignCreateV2MarketingScene,
        self::MERCHANTS_CampaignCreateV2MarketingScene,
        self::EDUCATION_CampaignCreateV2MarketingScene,
        self::SOCIAL_CampaignCreateV2MarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignCreateV2MarketingScene', $value));
        }
        return (string) $value;
    }
}
