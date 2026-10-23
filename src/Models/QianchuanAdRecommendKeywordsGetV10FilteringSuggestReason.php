<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason
{
    public const CLICK_QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason = 'CLICK';
    public const DARKHORSE_QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason = 'DARKHORSE';
    public const LOW_COST_QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason = 'LOW_COST';
    public const POTENTIAL_QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason = 'POTENTIAL';
    public const PREFERENCE_QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason = 'PREFERENCE';

    public const ALLOWED_VALUES = [
        self::CLICK_QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason,
        self::DARKHORSE_QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason,
        self::LOW_COST_QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason,
        self::POTENTIAL_QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason,
        self::PREFERENCE_QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdRecommendKeywordsGetV10FilteringSuggestReason', $value));
        }
        return (string) $value;
    }
}
