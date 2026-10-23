<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons
{
    public const CONVERT_UNDER_THRESHOLD_OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons = 'CONVERT_UNDER_THRESHOLD';
    public const CONVERT_ZERO_OR_COST_OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons = 'CONVERT_ZERO_OR_COST';
    public const CURRENCY_PRECISION_OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons = 'CURRENCY_PRECISION';
    public const ROI_REAL_EXPECTED_OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons = 'ROI_REAL_EXPECTED';
    public const UN_OBERCOST_OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons = 'UN_OBERCOST';

    public const ALLOWED_VALUES = [
        self::CONVERT_UNDER_THRESHOLD_OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons,
        self::CONVERT_ZERO_OR_COST_OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons,
        self::CURRENCY_PRECISION_OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons,
        self::ROI_REAL_EXPECTED_OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons,
        self::UN_OBERCOST_OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsCostProtectStatusGetV30DataListCompensateEndReasons', $value));
        }
        return (string) $value;
    }
}
