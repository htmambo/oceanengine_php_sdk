<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskListV10FilteringHavingCost
{
    public const ALL_QianchuanUniPromotionAdControlTaskListV10FilteringHavingCost = 'ALL';
    public const YES_QianchuanUniPromotionAdControlTaskListV10FilteringHavingCost = 'YES';
    public const NO_QianchuanUniPromotionAdControlTaskListV10FilteringHavingCost = 'NO';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanUniPromotionAdControlTaskListV10FilteringHavingCost,
        self::YES_QianchuanUniPromotionAdControlTaskListV10FilteringHavingCost,
        self::NO_QianchuanUniPromotionAdControlTaskListV10FilteringHavingCost,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskListV10FilteringHavingCost', $value));
        }
        return (string) $value;
    }
}
