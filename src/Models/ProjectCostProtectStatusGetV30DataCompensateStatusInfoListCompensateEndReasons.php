<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons
{
    public const CONVERT_UNDER_THRESHOLD_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons = 'CONVERT_UNDER_THRESHOLD';
    public const CONVERT_ZERO_OR_COST_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons = 'CONVERT_ZERO_OR_COST';
    public const CURRENCY_PRECISION_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons = 'CURRENCY_PRECISION';
    public const ROI_REAL_EXPECTED_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons = 'ROI_REAL_EXPECTED';
    public const UN_OBERCOST_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons = 'UN_OBERCOST';

    public const ALLOWED_VALUES = [
        self::CONVERT_UNDER_THRESHOLD_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons,
        self::CONVERT_ZERO_OR_COST_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons,
        self::CURRENCY_PRECISION_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons,
        self::ROI_REAL_EXPECTED_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons,
        self::UN_OBERCOST_ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons', $value));
        }
        return (string) $value;
    }
}
