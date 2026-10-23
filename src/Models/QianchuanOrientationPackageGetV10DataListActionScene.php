<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOrientationPackageGetV10DataListActionScene
{
    public const APP_QianchuanOrientationPackageGetV10DataListActionScene = 'APP';
    public const E_COMMERCE_QianchuanOrientationPackageGetV10DataListActionScene = 'E_COMMERCE';
    public const NEWS_QianchuanOrientationPackageGetV10DataListActionScene = 'NEWS';

    public const ALLOWED_VALUES = [
        self::APP_QianchuanOrientationPackageGetV10DataListActionScene,
        self::E_COMMERCE_QianchuanOrientationPackageGetV10DataListActionScene,
        self::NEWS_QianchuanOrientationPackageGetV10DataListActionScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOrientationPackageGetV10DataListActionScene', $value));
        }
        return (string) $value;
    }
}
