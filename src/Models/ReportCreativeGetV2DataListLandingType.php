<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2DataListLandingType
{
    public const LIVE_ReportCreativeGetV2DataListLandingType = 'LIVE';
    public const APP_ReportCreativeGetV2DataListLandingType = 'APP';
    public const ARTICLE_ReportCreativeGetV2DataListLandingType = 'ARTICLE';
    public const SHOP_ReportCreativeGetV2DataListLandingType = 'SHOP';
    public const QUICK_APP_ReportCreativeGetV2DataListLandingType = 'QUICK_APP';
    public const LINK_ReportCreativeGetV2DataListLandingType = 'LINK';
    public const DPA_ReportCreativeGetV2DataListLandingType = 'DPA';
    public const STORE_ReportCreativeGetV2DataListLandingType = 'STORE';
    public const AWEME_ReportCreativeGetV2DataListLandingType = 'AWEME';
    public const GOODS_ReportCreativeGetV2DataListLandingType = 'GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_ReportCreativeGetV2DataListLandingType,
        self::APP_ReportCreativeGetV2DataListLandingType,
        self::ARTICLE_ReportCreativeGetV2DataListLandingType,
        self::SHOP_ReportCreativeGetV2DataListLandingType,
        self::QUICK_APP_ReportCreativeGetV2DataListLandingType,
        self::LINK_ReportCreativeGetV2DataListLandingType,
        self::DPA_ReportCreativeGetV2DataListLandingType,
        self::STORE_ReportCreativeGetV2DataListLandingType,
        self::AWEME_ReportCreativeGetV2DataListLandingType,
        self::GOODS_ReportCreativeGetV2DataListLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2DataListLandingType', $value));
        }
        return (string) $value;
    }
}
