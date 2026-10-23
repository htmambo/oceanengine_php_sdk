<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportBrandDataV30PageType
{
    public const FEED_ReportBrandDataV30PageType = 'FEED';
    public const MALL_ReportBrandDataV30PageType = 'MALL';
    public const OVERVIEW_ReportBrandDataV30PageType = 'OVERVIEW';
    public const PLANTGRASS_ReportBrandDataV30PageType = 'PLANTGRASS';
    public const SEARCH_ReportBrandDataV30PageType = 'SEARCH';
    public const SPLASH_ReportBrandDataV30PageType = 'SPLASH';

    public const ALLOWED_VALUES = [
        self::FEED_ReportBrandDataV30PageType,
        self::MALL_ReportBrandDataV30PageType,
        self::OVERVIEW_ReportBrandDataV30PageType,
        self::PLANTGRASS_ReportBrandDataV30PageType,
        self::SEARCH_ReportBrandDataV30PageType,
        self::SPLASH_ReportBrandDataV30PageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportBrandDataV30PageType', $value));
        }
        return (string) $value;
    }
}
