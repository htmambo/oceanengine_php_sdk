<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOrientationPackageGetV10DataListAc
{
    public const Enum_2_G_QianchuanOrientationPackageGetV10DataListAc = '2G';
    public const Enum_3_G_QianchuanOrientationPackageGetV10DataListAc = '3G';
    public const Enum_4_G_QianchuanOrientationPackageGetV10DataListAc = '4G';
    public const Enum_5_G_QianchuanOrientationPackageGetV10DataListAc = '5G';
    public const WIFI_QianchuanOrientationPackageGetV10DataListAc = 'WIFI';

    public const ALLOWED_VALUES = [
        self::Enum_2_G_QianchuanOrientationPackageGetV10DataListAc,
        self::Enum_3_G_QianchuanOrientationPackageGetV10DataListAc,
        self::Enum_4_G_QianchuanOrientationPackageGetV10DataListAc,
        self::Enum_5_G_QianchuanOrientationPackageGetV10DataListAc,
        self::WIFI_QianchuanOrientationPackageGetV10DataListAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOrientationPackageGetV10DataListAc', $value));
        }
        return (string) $value;
    }
}
