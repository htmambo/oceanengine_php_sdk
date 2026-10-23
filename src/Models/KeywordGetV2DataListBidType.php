<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordGetV2DataListBidType
{
    public const CUSTOM_KeywordGetV2DataListBidType = 'CUSTOM';
    public const SUGGEST_KeywordGetV2DataListBidType = 'SUGGEST';
    public const BRAND_AD_KeywordGetV2DataListBidType = 'BRAND_AD';
    public const WITH_AD_KeywordGetV2DataListBidType = 'WITH_AD';
    public const FEED_TO_SEARCH_KeywordGetV2DataListBidType = 'FEED_TO_SEARCH';

    public const ALLOWED_VALUES = [
        self::CUSTOM_KeywordGetV2DataListBidType,
        self::SUGGEST_KeywordGetV2DataListBidType,
        self::BRAND_AD_KeywordGetV2DataListBidType,
        self::WITH_AD_KeywordGetV2DataListBidType,
        self::FEED_TO_SEARCH_KeywordGetV2DataListBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordGetV2DataListBidType', $value));
        }
        return (string) $value;
    }
}
