<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordCreateV30DataSuccessListBidType
{
    public const CUSTOM_KeywordCreateV30DataSuccessListBidType = 'CUSTOM';
    public const FEED_TO_SEARCH_KeywordCreateV30DataSuccessListBidType = 'FEED_TO_SEARCH';
    public const WITH_PROMOTION_KeywordCreateV30DataSuccessListBidType = 'WITH_PROMOTION';

    public const ALLOWED_VALUES = [
        self::CUSTOM_KeywordCreateV30DataSuccessListBidType,
        self::FEED_TO_SEARCH_KeywordCreateV30DataSuccessListBidType,
        self::WITH_PROMOTION_KeywordCreateV30DataSuccessListBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordCreateV30DataSuccessListBidType', $value));
        }
        return (string) $value;
    }
}
