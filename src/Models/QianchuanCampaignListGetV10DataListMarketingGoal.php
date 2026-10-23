<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanCampaignListGetV10DataListMarketingGoal
{
    public const ALL_QianchuanCampaignListGetV10DataListMarketingGoal = 'ALL';
    public const LIVE_PROM_GOODS_QianchuanCampaignListGetV10DataListMarketingGoal = 'LIVE_PROM_GOODS';
    public const VIDEO_PROM_GOODS_QianchuanCampaignListGetV10DataListMarketingGoal = 'VIDEO_PROM_GOODS';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanCampaignListGetV10DataListMarketingGoal,
        self::LIVE_PROM_GOODS_QianchuanCampaignListGetV10DataListMarketingGoal,
        self::VIDEO_PROM_GOODS_QianchuanCampaignListGetV10DataListMarketingGoal,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanCampaignListGetV10DataListMarketingGoal', $value));
        }
        return (string) $value;
    }
}
