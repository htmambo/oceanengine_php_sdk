<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOrientationPackageGetV10DataListPlatform
{
    public const ANDROID_QianchuanOrientationPackageGetV10DataListPlatform = 'ANDROID';
    public const IOS_QianchuanOrientationPackageGetV10DataListPlatform = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_QianchuanOrientationPackageGetV10DataListPlatform,
        self::IOS_QianchuanOrientationPackageGetV10DataListPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOrientationPackageGetV10DataListPlatform', $value));
        }
        return (string) $value;
    }
}
