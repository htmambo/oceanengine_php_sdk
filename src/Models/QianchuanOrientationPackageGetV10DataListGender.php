<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOrientationPackageGetV10DataListGender
{
    public const GENDER_FEMALE_QianchuanOrientationPackageGetV10DataListGender = 'GENDER_FEMALE';
    public const GENDER_MALE_QianchuanOrientationPackageGetV10DataListGender = 'GENDER_MALE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_QianchuanOrientationPackageGetV10DataListGender,
        self::GENDER_MALE_QianchuanOrientationPackageGetV10DataListGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOrientationPackageGetV10DataListGender', $value));
        }
        return (string) $value;
    }
}
