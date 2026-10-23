<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionNewcustomerCreateV30BidType
{
    public const NOBID_PromotionNewcustomerCreateV30BidType = 'NOBID';
    public const TARGET_COST_PromotionNewcustomerCreateV30BidType = 'TARGET_COST';

    public const ALLOWED_VALUES = [
        self::NOBID_PromotionNewcustomerCreateV30BidType,
        self::TARGET_COST_PromotionNewcustomerCreateV30BidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionNewcustomerCreateV30BidType', $value));
        }
        return (string) $value;
    }
}
