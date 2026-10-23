<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListKeywordsBidType
{
    public const CUSTOM_PromotionListV30DataListKeywordsBidType = 'CUSTOM';
    public const WITH_PROMOTION_PromotionListV30DataListKeywordsBidType = 'WITH_PROMOTION';

    public const ALLOWED_VALUES = [
        self::CUSTOM_PromotionListV30DataListKeywordsBidType,
        self::WITH_PROMOTION_PromotionListV30DataListKeywordsBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListKeywordsBidType', $value));
        }
        return (string) $value;
    }
}
