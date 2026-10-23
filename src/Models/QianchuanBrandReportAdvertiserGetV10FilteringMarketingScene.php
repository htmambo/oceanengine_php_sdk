<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanBrandReportAdvertiserGetV10FilteringMarketingScene
{
    public const ALL_QianchuanBrandReportAdvertiserGetV10FilteringMarketingScene = 'ALL';
    public const FEED_QianchuanBrandReportAdvertiserGetV10FilteringMarketingScene = 'FEED';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanBrandReportAdvertiserGetV10FilteringMarketingScene,
        self::FEED_QianchuanBrandReportAdvertiserGetV10FilteringMarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanBrandReportAdvertiserGetV10FilteringMarketingScene', $value));
        }
        return (string) $value;
    }
}
