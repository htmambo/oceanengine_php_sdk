<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionProductGetV10FilteringTab
{
    public const ALL_QianchuanUniPromotionProductGetV10FilteringTab = 'ALL';
    public const BREAKTHROUGH_PRODUCT_QianchuanUniPromotionProductGetV10FilteringTab = 'BREAKTHROUGH_PRODUCT';
    public const GOOD_BOOST_QianchuanUniPromotionProductGetV10FilteringTab = 'GOOD_BOOST';
    public const NEW_PRODUCT_QianchuanUniPromotionProductGetV10FilteringTab = 'NEW_PRODUCT';
    public const SEARCH_TREND_QianchuanUniPromotionProductGetV10FilteringTab = 'SEARCH_TREND';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanUniPromotionProductGetV10FilteringTab,
        self::BREAKTHROUGH_PRODUCT_QianchuanUniPromotionProductGetV10FilteringTab,
        self::GOOD_BOOST_QianchuanUniPromotionProductGetV10FilteringTab,
        self::NEW_PRODUCT_QianchuanUniPromotionProductGetV10FilteringTab,
        self::SEARCH_TREND_QianchuanUniPromotionProductGetV10FilteringTab,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionProductGetV10FilteringTab', $value));
        }
        return (string) $value;
    }
}
