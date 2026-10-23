<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanBrandReportAdvertiserGetV10FilteringCampaignScene
{
    public const LIVE_HEAT_QianchuanBrandReportAdvertiserGetV10FilteringCampaignScene = 'LIVE_HEAT';
    public const PLANT_GRASS_QianchuanBrandReportAdvertiserGetV10FilteringCampaignScene = 'PLANT_GRASS';

    public const ALLOWED_VALUES = [
        self::LIVE_HEAT_QianchuanBrandReportAdvertiserGetV10FilteringCampaignScene,
        self::PLANT_GRASS_QianchuanBrandReportAdvertiserGetV10FilteringCampaignScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanBrandReportAdvertiserGetV10FilteringCampaignScene', $value));
        }
        return (string) $value;
    }
}
