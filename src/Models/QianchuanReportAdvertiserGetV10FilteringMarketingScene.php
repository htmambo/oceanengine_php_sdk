<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportAdvertiserGetV10FilteringMarketingScene
{
    public const ALL_QianchuanReportAdvertiserGetV10FilteringMarketingScene = 'ALL';
    public const FEED_QianchuanReportAdvertiserGetV10FilteringMarketingScene = 'FEED';
    public const SEARCH_QianchuanReportAdvertiserGetV10FilteringMarketingScene = 'SEARCH';
    public const SHOPPING_MALL_QianchuanReportAdvertiserGetV10FilteringMarketingScene = 'SHOPPING_MALL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanReportAdvertiserGetV10FilteringMarketingScene,
        self::FEED_QianchuanReportAdvertiserGetV10FilteringMarketingScene,
        self::SEARCH_QianchuanReportAdvertiserGetV10FilteringMarketingScene,
        self::SHOPPING_MALL_QianchuanReportAdvertiserGetV10FilteringMarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportAdvertiserGetV10FilteringMarketingScene', $value));
        }
        return (string) $value;
    }
}
