<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordUpdateV30DataSuccessListBidType
{
    public const CUSTOM_KeywordUpdateV30DataSuccessListBidType = 'CUSTOM';
    public const FEED_TO_SEARCH_KeywordUpdateV30DataSuccessListBidType = 'FEED_TO_SEARCH';
    public const WITH_PROMOTION_KeywordUpdateV30DataSuccessListBidType = 'WITH_PROMOTION';

    public const ALLOWED_VALUES = [
        self::CUSTOM_KeywordUpdateV30DataSuccessListBidType,
        self::FEED_TO_SEARCH_KeywordUpdateV30DataSuccessListBidType,
        self::WITH_PROMOTION_KeywordUpdateV30DataSuccessListBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordUpdateV30DataSuccessListBidType', $value));
        }
        return (string) $value;
    }
}
