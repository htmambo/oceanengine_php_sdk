<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOrientationPackageGetV10DataListSmartInterestAction
{
    public const RECOMMEND_QianchuanOrientationPackageGetV10DataListSmartInterestAction = 'RECOMMEND';
    public const CUSTOM_QianchuanOrientationPackageGetV10DataListSmartInterestAction = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::RECOMMEND_QianchuanOrientationPackageGetV10DataListSmartInterestAction,
        self::CUSTOM_QianchuanOrientationPackageGetV10DataListSmartInterestAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOrientationPackageGetV10DataListSmartInterestAction', $value));
        }
        return (string) $value;
    }
}
