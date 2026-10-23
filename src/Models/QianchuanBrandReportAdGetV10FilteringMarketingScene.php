<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanBrandReportAdGetV10FilteringMarketingScene
{
    public const ALL_QianchuanBrandReportAdGetV10FilteringMarketingScene = 'ALL';
    public const FEED_QianchuanBrandReportAdGetV10FilteringMarketingScene = 'FEED';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanBrandReportAdGetV10FilteringMarketingScene,
        self::FEED_QianchuanBrandReportAdGetV10FilteringMarketingScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanBrandReportAdGetV10FilteringMarketingScene', $value));
        }
        return (string) $value;
    }
}
