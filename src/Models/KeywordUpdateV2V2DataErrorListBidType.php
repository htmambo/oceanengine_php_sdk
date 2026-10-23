<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordUpdateV2V2DataErrorListBidType
{
    public const CUSTOM_KeywordUpdateV2V2DataErrorListBidType = 'CUSTOM';
    public const SUGGEST_KeywordUpdateV2V2DataErrorListBidType = 'SUGGEST';
    public const BRAND_AD_KeywordUpdateV2V2DataErrorListBidType = 'BRAND_AD';
    public const WITH_AD_KeywordUpdateV2V2DataErrorListBidType = 'WITH_AD';
    public const FEED_TO_SEARCH_KeywordUpdateV2V2DataErrorListBidType = 'FEED_TO_SEARCH';

    public const ALLOWED_VALUES = [
        self::CUSTOM_KeywordUpdateV2V2DataErrorListBidType,
        self::SUGGEST_KeywordUpdateV2V2DataErrorListBidType,
        self::BRAND_AD_KeywordUpdateV2V2DataErrorListBidType,
        self::WITH_AD_KeywordUpdateV2V2DataErrorListBidType,
        self::FEED_TO_SEARCH_KeywordUpdateV2V2DataErrorListBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordUpdateV2V2DataErrorListBidType', $value));
        }
        return (string) $value;
    }
}
