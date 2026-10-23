<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportAdGetV10FilteringMarketingScene
{
    public const ALL_QianchuanReportAdGetV10FilteringMarketingScene = 'ALL';
    public const FEED_QianchuanReportAdGetV10FilteringMarketingScene = 'FEED';
    public const SEARCH_QianchuanReportAdGetV10FilteringMarketingScene = 'SEARCH';
    public const SHOPPING_MALL_QianchuanReportAdGetV10FilteringMarketingScene = 'SHOPPING_MALL';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanReportAdGetV10FilteringMarketingScene,
        self::FEED_QianchuanReportAdGetV10FilteringMarketingScene,
        self::SEARCH_QianchuanReportAdGetV10FilteringMarketingScene,
        self::SHOPPING_MALL_QianchuanReportAdGetV10FilteringMarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportAdGetV10FilteringMarketingScene', $value));
        }
        return (string) $value;
    }
}
