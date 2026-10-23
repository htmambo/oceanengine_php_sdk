<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordCreateV2V2DataErrorListBidType
{
    public const CUSTOM_KeywordCreateV2V2DataErrorListBidType = 'CUSTOM';
    public const SUGGEST_KeywordCreateV2V2DataErrorListBidType = 'SUGGEST';
    public const BRAND_AD_KeywordCreateV2V2DataErrorListBidType = 'BRAND_AD';
    public const WITH_AD_KeywordCreateV2V2DataErrorListBidType = 'WITH_AD';
    public const FEED_TO_SEARCH_KeywordCreateV2V2DataErrorListBidType = 'FEED_TO_SEARCH';

    public const ALLOWED_VALUES = [
        self::CUSTOM_KeywordCreateV2V2DataErrorListBidType,
        self::SUGGEST_KeywordCreateV2V2DataErrorListBidType,
        self::BRAND_AD_KeywordCreateV2V2DataErrorListBidType,
        self::WITH_AD_KeywordCreateV2V2DataErrorListBidType,
        self::FEED_TO_SEARCH_KeywordCreateV2V2DataErrorListBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordCreateV2V2DataErrorListBidType', $value));
        }
        return (string) $value;
    }
}
