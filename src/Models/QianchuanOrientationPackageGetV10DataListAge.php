<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOrientationPackageGetV10DataListAge
{
    public const AGE_ABOVE_50_QianchuanOrientationPackageGetV10DataListAge = 'AGE_ABOVE_50';
    public const AGE_BETWEEN_18_23_QianchuanOrientationPackageGetV10DataListAge = 'AGE_BETWEEN_18_23';
    public const AGE_BETWEEN_24_30_QianchuanOrientationPackageGetV10DataListAge = 'AGE_BETWEEN_24_30';
    public const AGE_BETWEEN_31_40_QianchuanOrientationPackageGetV10DataListAge = 'AGE_BETWEEN_31_40';
    public const AGE_BETWEEN_41_49_QianchuanOrientationPackageGetV10DataListAge = 'AGE_BETWEEN_41_49';

    public const ALLOWED_VALUES = [
        self::AGE_ABOVE_50_QianchuanOrientationPackageGetV10DataListAge,
        self::AGE_BETWEEN_18_23_QianchuanOrientationPackageGetV10DataListAge,
        self::AGE_BETWEEN_24_30_QianchuanOrientationPackageGetV10DataListAge,
        self::AGE_BETWEEN_31_40_QianchuanOrientationPackageGetV10DataListAge,
        self::AGE_BETWEEN_41_49_QianchuanOrientationPackageGetV10DataListAge,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOrientationPackageGetV10DataListAge', $value));
        }
        return (string) $value;
    }
}
