<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialGetV10CampaignScene
{
    public const DAILY_SALE_QianchuanMaterialGetV10CampaignScene = 'DAILY_SALE';
    public const LIVE_HEAT_QianchuanMaterialGetV10CampaignScene = 'LIVE_HEAT';
    public const PLANT_GRASS_QianchuanMaterialGetV10CampaignScene = 'PLANT_GRASS';

    public const ALLOWED_VALUES = [
        self::DAILY_SALE_QianchuanMaterialGetV10CampaignScene,
        self::LIVE_HEAT_QianchuanMaterialGetV10CampaignScene,
        self::PLANT_GRASS_QianchuanMaterialGetV10CampaignScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialGetV10CampaignScene', $value));
        }
        return (string) $value;
    }
}
