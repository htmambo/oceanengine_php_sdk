<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordListV30DataListBidType
{
    public const CUSTOM_KeywordListV30DataListBidType = 'CUSTOM';
    public const FEED_TO_SEARCH_KeywordListV30DataListBidType = 'FEED_TO_SEARCH';
    public const WITH_PROMOTION_KeywordListV30DataListBidType = 'WITH_PROMOTION';

    public const ALLOWED_VALUES = [
        self::CUSTOM_KeywordListV30DataListBidType,
        self::FEED_TO_SEARCH_KeywordListV30DataListBidType,
        self::WITH_PROMOTION_KeywordListV30DataListBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordListV30DataListBidType', $value));
        }
        return (string) $value;
    }
}
