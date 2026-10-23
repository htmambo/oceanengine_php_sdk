<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2FilteringLandingTypes
{
    public const LIVE_ReportCreativeGetV2FilteringLandingTypes = 'LIVE';
    public const APP_ReportCreativeGetV2FilteringLandingTypes = 'APP';
    public const ARTICLE_ReportCreativeGetV2FilteringLandingTypes = 'ARTICLE';
    public const SHOP_ReportCreativeGetV2FilteringLandingTypes = 'SHOP';
    public const QUICK_APP_ReportCreativeGetV2FilteringLandingTypes = 'QUICK_APP';
    public const LINK_ReportCreativeGetV2FilteringLandingTypes = 'LINK';
    public const DPA_ReportCreativeGetV2FilteringLandingTypes = 'DPA';
    public const STORE_ReportCreativeGetV2FilteringLandingTypes = 'STORE';
    public const AWEME_ReportCreativeGetV2FilteringLandingTypes = 'AWEME';
    public const GOODS_ReportCreativeGetV2FilteringLandingTypes = 'GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_ReportCreativeGetV2FilteringLandingTypes,
        self::APP_ReportCreativeGetV2FilteringLandingTypes,
        self::ARTICLE_ReportCreativeGetV2FilteringLandingTypes,
        self::SHOP_ReportCreativeGetV2FilteringLandingTypes,
        self::QUICK_APP_ReportCreativeGetV2FilteringLandingTypes,
        self::LINK_ReportCreativeGetV2FilteringLandingTypes,
        self::DPA_ReportCreativeGetV2FilteringLandingTypes,
        self::STORE_ReportCreativeGetV2FilteringLandingTypes,
        self::AWEME_ReportCreativeGetV2FilteringLandingTypes,
        self::GOODS_ReportCreativeGetV2FilteringLandingTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2FilteringLandingTypes', $value));
        }
        return (string) $value;
    }
}
