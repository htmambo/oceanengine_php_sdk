<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdRecommendKeywordsGetV10OrderType
{
    public const ASC_QianchuanAdRecommendKeywordsGetV10OrderType = 'ASC';
    public const DESC_QianchuanAdRecommendKeywordsGetV10OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_QianchuanAdRecommendKeywordsGetV10OrderType,
        self::DESC_QianchuanAdRecommendKeywordsGetV10OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdRecommendKeywordsGetV10OrderType', $value));
        }
        return (string) $value;
    }
}
