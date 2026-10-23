<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandQueryStockV30ScheduleInfoStockIncreasePackageType
{
    public const NONE_BrandQueryStockV30ScheduleInfoStockIncreasePackageType = 'NONE';
    public const PLUS_BrandQueryStockV30ScheduleInfoStockIncreasePackageType = 'PLUS';
    public const PRO_BrandQueryStockV30ScheduleInfoStockIncreasePackageType = 'PRO';

    public const ALLOWED_VALUES = [
        self::NONE_BrandQueryStockV30ScheduleInfoStockIncreasePackageType,
        self::PLUS_BrandQueryStockV30ScheduleInfoStockIncreasePackageType,
        self::PRO_BrandQueryStockV30ScheduleInfoStockIncreasePackageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandQueryStockV30ScheduleInfoStockIncreasePackageType', $value));
        }
        return (string) $value;
    }
}
