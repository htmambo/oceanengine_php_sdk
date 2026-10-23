<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialAdGetV10OrderType
{
    public const ASC_QianchuanMaterialAdGetV10OrderType = 'ASC';
    public const DESC_QianchuanMaterialAdGetV10OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_QianchuanMaterialAdGetV10OrderType,
        self::DESC_QianchuanMaterialAdGetV10OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialAdGetV10OrderType', $value));
        }
        return (string) $value;
    }
}
