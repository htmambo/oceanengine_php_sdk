<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordUpdateV2V2DataSuccessListBidType
{
    public const CUSTOM_KeywordUpdateV2V2DataSuccessListBidType = 'CUSTOM';
    public const SUGGEST_KeywordUpdateV2V2DataSuccessListBidType = 'SUGGEST';
    public const BRAND_AD_KeywordUpdateV2V2DataSuccessListBidType = 'BRAND_AD';
    public const WITH_AD_KeywordUpdateV2V2DataSuccessListBidType = 'WITH_AD';
    public const FEED_TO_SEARCH_KeywordUpdateV2V2DataSuccessListBidType = 'FEED_TO_SEARCH';

    public const ALLOWED_VALUES = [
        self::CUSTOM_KeywordUpdateV2V2DataSuccessListBidType,
        self::SUGGEST_KeywordUpdateV2V2DataSuccessListBidType,
        self::BRAND_AD_KeywordUpdateV2V2DataSuccessListBidType,
        self::WITH_AD_KeywordUpdateV2V2DataSuccessListBidType,
        self::FEED_TO_SEARCH_KeywordUpdateV2V2DataSuccessListBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordUpdateV2V2DataSuccessListBidType', $value));
        }
        return (string) $value;
    }
}
