<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CampaignGetV2DataListMarketingScene
{
    public const VIDEO_INFO_CampaignGetV2DataListMarketingScene = 'VIDEO_INFO';
    public const CAR_CampaignGetV2DataListMarketingScene = 'CAR';
    public const ECOMMERCE_CampaignGetV2DataListMarketingScene = 'ECOMMERCE';
    public const GAME_PROMOTION_CampaignGetV2DataListMarketingScene = 'GAME_PROMOTION';
    public const NOVEL_CampaignGetV2DataListMarketingScene = 'NOVEL';
    public const PROMOTION_PURPOSE_CampaignGetV2DataListMarketingScene = 'PROMOTION_PURPOSE';
    public const GAME_SUBSCRIBE_CampaignGetV2DataListMarketingScene = 'GAME_SUBSCRIBE';
    public const MERCHANTS_CampaignGetV2DataListMarketingScene = 'MERCHANTS';
    public const EDUCATION_CampaignGetV2DataListMarketingScene = 'EDUCATION';
    public const SOCIAL_CampaignGetV2DataListMarketingScene = 'SOCIAL';

    public const ALLOWED_VALUES = [
        self::VIDEO_INFO_CampaignGetV2DataListMarketingScene,
        self::CAR_CampaignGetV2DataListMarketingScene,
        self::ECOMMERCE_CampaignGetV2DataListMarketingScene,
        self::GAME_PROMOTION_CampaignGetV2DataListMarketingScene,
        self::NOVEL_CampaignGetV2DataListMarketingScene,
        self::PROMOTION_PURPOSE_CampaignGetV2DataListMarketingScene,
        self::GAME_SUBSCRIBE_CampaignGetV2DataListMarketingScene,
        self::MERCHANTS_CampaignGetV2DataListMarketingScene,
        self::EDUCATION_CampaignGetV2DataListMarketingScene,
        self::SOCIAL_CampaignGetV2DataListMarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CampaignGetV2DataListMarketingScene', $value));
        }
        return (string) $value;
    }
}
