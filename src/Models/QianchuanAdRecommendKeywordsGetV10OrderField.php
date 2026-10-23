<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdRecommendKeywordsGetV10OrderField
{
    public const COMPETITION_QianchuanAdRecommendKeywordsGetV10OrderField = 'COMPETITION';
    public const DEFAULT_QianchuanAdRecommendKeywordsGetV10OrderField = 'DEFAULT';
    public const PV_QianchuanAdRecommendKeywordsGetV10OrderField = 'PV';
    public const RELEVANCE_QianchuanAdRecommendKeywordsGetV10OrderField = 'RELEVANCE';

    public const ALLOWED_VALUES = [
        self::COMPETITION_QianchuanAdRecommendKeywordsGetV10OrderField,
        self::DEFAULT_QianchuanAdRecommendKeywordsGetV10OrderField,
        self::PV_QianchuanAdRecommendKeywordsGetV10OrderField,
        self::RELEVANCE_QianchuanAdRecommendKeywordsGetV10OrderField,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdRecommendKeywordsGetV10OrderField', $value));
        }
        return (string) $value;
    }
}
