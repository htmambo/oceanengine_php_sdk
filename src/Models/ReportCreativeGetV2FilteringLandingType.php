<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2FilteringLandingType
{
    public const SHOP_ReportCreativeGetV2FilteringLandingType = 'SHOP';
    public const LIVE_ReportCreativeGetV2FilteringLandingType = 'LIVE';
    public const ARTICLE_ReportCreativeGetV2FilteringLandingType = 'ARTICLE';
    public const AWEME_ReportCreativeGetV2FilteringLandingType = 'AWEME';
    public const DPA_ReportCreativeGetV2FilteringLandingType = 'DPA';
    public const QUICK_APP_ReportCreativeGetV2FilteringLandingType = 'QUICK_APP';
    public const APP_ReportCreativeGetV2FilteringLandingType = 'APP';
    public const STORE_ReportCreativeGetV2FilteringLandingType = 'STORE';
    public const GOODS_ReportCreativeGetV2FilteringLandingType = 'GOODS';
    public const LINK_ReportCreativeGetV2FilteringLandingType = 'LINK';

    public const ALLOWED_VALUES = [
        self::SHOP_ReportCreativeGetV2FilteringLandingType,
        self::LIVE_ReportCreativeGetV2FilteringLandingType,
        self::ARTICLE_ReportCreativeGetV2FilteringLandingType,
        self::AWEME_ReportCreativeGetV2FilteringLandingType,
        self::DPA_ReportCreativeGetV2FilteringLandingType,
        self::QUICK_APP_ReportCreativeGetV2FilteringLandingType,
        self::APP_ReportCreativeGetV2FilteringLandingType,
        self::STORE_ReportCreativeGetV2FilteringLandingType,
        self::GOODS_ReportCreativeGetV2FilteringLandingType,
        self::LINK_ReportCreativeGetV2FilteringLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2FilteringLandingType', $value));
        }
        return (string) $value;
    }
}
