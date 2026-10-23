<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons
{
    public const CONVERT_UNDER_THRESHOLD_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons = 'CONVERT_UNDER_THRESHOLD';
    public const CONVERT_ZERO_OR_COST_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons = 'CONVERT_ZERO_OR_COST';
    public const CURRENCY_PRECISION_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons = 'CURRENCY_PRECISION';
    public const ROI_REAL_EXPECTED_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons = 'ROI_REAL_EXPECTED';
    public const UN_OBERCOST_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons = 'UN_OBERCOST';

    public const ALLOWED_VALUES = [
        self::CONVERT_UNDER_THRESHOLD_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons,
        self::CONVERT_ZERO_OR_COST_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons,
        self::CURRENCY_PRECISION_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons,
        self::ROI_REAL_EXPECTED_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons,
        self::UN_OBERCOST_LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons', $value));
        }
        return (string) $value;
    }
}
