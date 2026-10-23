<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOrientationPackageGetV10DataListLocationType
{
    public const CURRENT_QianchuanOrientationPackageGetV10DataListLocationType = 'CURRENT';
    public const HOME_QianchuanOrientationPackageGetV10DataListLocationType = 'HOME';
    public const TRAVEL_QianchuanOrientationPackageGetV10DataListLocationType = 'TRAVEL';
    public const ALL_QianchuanOrientationPackageGetV10DataListLocationType = 'ALL';

    public const ALLOWED_VALUES = [
        self::CURRENT_QianchuanOrientationPackageGetV10DataListLocationType,
        self::HOME_QianchuanOrientationPackageGetV10DataListLocationType,
        self::TRAVEL_QianchuanOrientationPackageGetV10DataListLocationType,
        self::ALL_QianchuanOrientationPackageGetV10DataListLocationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOrientationPackageGetV10DataListLocationType', $value));
        }
        return (string) $value;
    }
}
