<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportBrandAgentDataV30PageType
{
    public const FEED_ReportBrandAgentDataV30PageType = 'FEED';
    public const MALL_ReportBrandAgentDataV30PageType = 'MALL';
    public const OVERVIEW_ReportBrandAgentDataV30PageType = 'OVERVIEW';
    public const PLANTGRASS_ReportBrandAgentDataV30PageType = 'PLANTGRASS';
    public const SEARCH_ReportBrandAgentDataV30PageType = 'SEARCH';
    public const SPLASH_ReportBrandAgentDataV30PageType = 'SPLASH';

    public const ALLOWED_VALUES = [
        self::FEED_ReportBrandAgentDataV30PageType,
        self::MALL_ReportBrandAgentDataV30PageType,
        self::OVERVIEW_ReportBrandAgentDataV30PageType,
        self::PLANTGRASS_ReportBrandAgentDataV30PageType,
        self::SEARCH_ReportBrandAgentDataV30PageType,
        self::SPLASH_ReportBrandAgentDataV30PageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportBrandAgentDataV30PageType', $value));
        }
        return (string) $value;
    }
}
