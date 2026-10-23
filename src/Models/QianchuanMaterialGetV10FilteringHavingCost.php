<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialGetV10FilteringHavingCost
{
    public const ALL_QianchuanMaterialGetV10FilteringHavingCost = 'ALL';
    public const YES_QianchuanMaterialGetV10FilteringHavingCost = 'YES';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanMaterialGetV10FilteringHavingCost,
        self::YES_QianchuanMaterialGetV10FilteringHavingCost,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialGetV10FilteringHavingCost', $value));
        }
        return (string) $value;
    }
}
