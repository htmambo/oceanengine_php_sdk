<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOrientationPackageGetV10DataListNewCustomer
{
    public const NONE_QianchuanOrientationPackageGetV10DataListNewCustomer = 'NONE';
    public const NO_BUY_QianchuanOrientationPackageGetV10DataListNewCustomer = 'NO_BUY';

    public const ALLOWED_VALUES = [
        self::NONE_QianchuanOrientationPackageGetV10DataListNewCustomer,
        self::NO_BUY_QianchuanOrientationPackageGetV10DataListNewCustomer,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOrientationPackageGetV10DataListNewCustomer', $value));
        }
        return (string) $value;
    }
}
