<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarReportOrderUserDistributionGetV2FanType
{
    public const ALL_StarReportOrderUserDistributionGetV2FanType = 'ALL';
    public const FANS_StarReportOrderUserDistributionGetV2FanType = 'FANS';
    public const NO_FANS_StarReportOrderUserDistributionGetV2FanType = 'NO_FANS';

    public const ALLOWED_VALUES = [
        self::ALL_StarReportOrderUserDistributionGetV2FanType,
        self::FANS_StarReportOrderUserDistributionGetV2FanType,
        self::NO_FANS_StarReportOrderUserDistributionGetV2FanType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarReportOrderUserDistributionGetV2FanType', $value));
        }
        return (string) $value;
    }
}
