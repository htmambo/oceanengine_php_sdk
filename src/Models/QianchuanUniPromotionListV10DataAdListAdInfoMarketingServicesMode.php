<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionListV10DataAdListAdInfoMarketingServicesMode
{
    public const ALLIANCE_COST_RATIO_QianchuanUniPromotionListV10DataAdListAdInfoMarketingServicesMode = 'ALLIANCE_COST_RATIO';
    public const BASE_AD_FEE_QianchuanUniPromotionListV10DataAdListAdInfoMarketingServicesMode = 'BASE_AD_FEE';
    public const STAR_MATERIAL_QianchuanUniPromotionListV10DataAdListAdInfoMarketingServicesMode = 'STAR_MATERIAL';

    public const ALLOWED_VALUES = [
        self::ALLIANCE_COST_RATIO_QianchuanUniPromotionListV10DataAdListAdInfoMarketingServicesMode,
        self::BASE_AD_FEE_QianchuanUniPromotionListV10DataAdListAdInfoMarketingServicesMode,
        self::STAR_MATERIAL_QianchuanUniPromotionListV10DataAdListAdInfoMarketingServicesMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionListV10DataAdListAdInfoMarketingServicesMode', $value));
        }
        return (string) $value;
    }
}
