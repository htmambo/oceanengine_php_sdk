<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdRecommendKeywordsGetV10DataListSuggestReason
{
    public const CLICK_QianchuanAdRecommendKeywordsGetV10DataListSuggestReason = 'CLICK';
    public const DARKHORSE_QianchuanAdRecommendKeywordsGetV10DataListSuggestReason = 'DARKHORSE';
    public const LOW_COST_QianchuanAdRecommendKeywordsGetV10DataListSuggestReason = 'LOW_COST';
    public const POTENTIAL_QianchuanAdRecommendKeywordsGetV10DataListSuggestReason = 'POTENTIAL';
    public const PREFERENCE_QianchuanAdRecommendKeywordsGetV10DataListSuggestReason = 'PREFERENCE';

    public const ALLOWED_VALUES = [
        self::CLICK_QianchuanAdRecommendKeywordsGetV10DataListSuggestReason,
        self::DARKHORSE_QianchuanAdRecommendKeywordsGetV10DataListSuggestReason,
        self::LOW_COST_QianchuanAdRecommendKeywordsGetV10DataListSuggestReason,
        self::POTENTIAL_QianchuanAdRecommendKeywordsGetV10DataListSuggestReason,
        self::PREFERENCE_QianchuanAdRecommendKeywordsGetV10DataListSuggestReason,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdRecommendKeywordsGetV10DataListSuggestReason', $value));
        }
        return (string) $value;
    }
}
