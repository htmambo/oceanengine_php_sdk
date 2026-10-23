<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordUpdateV2V2KeywordsBidType
{
    public const CUSTOM_KeywordUpdateV2V2KeywordsBidType = 'CUSTOM';
    public const SUGGEST_KeywordUpdateV2V2KeywordsBidType = 'SUGGEST';
    public const BRAND_AD_KeywordUpdateV2V2KeywordsBidType = 'BRAND_AD';
    public const WITH_AD_KeywordUpdateV2V2KeywordsBidType = 'WITH_AD';
    public const FEED_TO_SEARCH_KeywordUpdateV2V2KeywordsBidType = 'FEED_TO_SEARCH';

    public const ALLOWED_VALUES = [
        self::CUSTOM_KeywordUpdateV2V2KeywordsBidType,
        self::SUGGEST_KeywordUpdateV2V2KeywordsBidType,
        self::BRAND_AD_KeywordUpdateV2V2KeywordsBidType,
        self::WITH_AD_KeywordUpdateV2V2KeywordsBidType,
        self::FEED_TO_SEARCH_KeywordUpdateV2V2KeywordsBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordUpdateV2V2KeywordsBidType', $value));
        }
        return (string) $value;
    }
}
