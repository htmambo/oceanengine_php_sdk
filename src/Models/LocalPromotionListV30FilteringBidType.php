<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionListV30FilteringBidType
{
    public const ALL_LocalPromotionListV30FilteringBidType = 'ALL';
    public const MANUAL_LocalPromotionListV30FilteringBidType = 'MANUAL';
    public const MAX_CONVERSION_LocalPromotionListV30FilteringBidType = 'MAX_CONVERSION';
    public const SMART_LocalPromotionListV30FilteringBidType = 'SMART';
    public const STABILIZE_COSTS_LocalPromotionListV30FilteringBidType = 'STABILIZE_COSTS';

    public const ALLOWED_VALUES = [
        self::ALL_LocalPromotionListV30FilteringBidType,
        self::MANUAL_LocalPromotionListV30FilteringBidType,
        self::MAX_CONVERSION_LocalPromotionListV30FilteringBidType,
        self::SMART_LocalPromotionListV30FilteringBidType,
        self::STABILIZE_COSTS_LocalPromotionListV30FilteringBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionListV30FilteringBidType', $value));
        }
        return (string) $value;
    }
}
