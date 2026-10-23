<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOrientationPackageGetV10DataListAwemeFanBehaviorsDays
{
    public const DAYS_15_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviorsDays = 'DAYS_15';
    public const DAYS_30_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviorsDays = 'DAYS_30';
    public const DAYS_60_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviorsDays = 'DAYS_60';

    public const ALLOWED_VALUES = [
        self::DAYS_15_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviorsDays,
        self::DAYS_30_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviorsDays,
        self::DAYS_60_QianchuanOrientationPackageGetV10DataListAwemeFanBehaviorsDays,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOrientationPackageGetV10DataListAwemeFanBehaviorsDays', $value));
        }
        return (string) $value;
    }
}
