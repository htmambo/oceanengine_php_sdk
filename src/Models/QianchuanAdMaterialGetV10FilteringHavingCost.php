<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdMaterialGetV10FilteringHavingCost
{
    public const ALL_QianchuanAdMaterialGetV10FilteringHavingCost = 'ALL';
    public const YES_QianchuanAdMaterialGetV10FilteringHavingCost = 'YES';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAdMaterialGetV10FilteringHavingCost,
        self::YES_QianchuanAdMaterialGetV10FilteringHavingCost,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdMaterialGetV10FilteringHavingCost', $value));
        }
        return (string) $value;
    }
}
