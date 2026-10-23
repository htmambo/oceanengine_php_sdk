<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionListV10FilteringHavingCost
{
    public const ALL_QianchuanUniPromotionListV10FilteringHavingCost = 'ALL';
    public const YES_QianchuanUniPromotionListV10FilteringHavingCost = 'YES';
    public const NO_QianchuanUniPromotionListV10FilteringHavingCost = 'NO';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanUniPromotionListV10FilteringHavingCost,
        self::YES_QianchuanUniPromotionListV10FilteringHavingCost,
        self::NO_QianchuanUniPromotionListV10FilteringHavingCost,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionListV10FilteringHavingCost', $value));
        }
        return (string) $value;
    }
}
