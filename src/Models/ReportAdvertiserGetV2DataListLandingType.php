<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdvertiserGetV2DataListLandingType
{
    public const SHOP_ReportAdvertiserGetV2DataListLandingType = 'SHOP';
    public const LIVE_ReportAdvertiserGetV2DataListLandingType = 'LIVE';
    public const ARTICLE_ReportAdvertiserGetV2DataListLandingType = 'ARTICLE';
    public const AWEME_ReportAdvertiserGetV2DataListLandingType = 'AWEME';
    public const DPA_ReportAdvertiserGetV2DataListLandingType = 'DPA';
    public const QUICK_APP_ReportAdvertiserGetV2DataListLandingType = 'QUICK_APP';
    public const APP_ReportAdvertiserGetV2DataListLandingType = 'APP';
    public const STORE_ReportAdvertiserGetV2DataListLandingType = 'STORE';
    public const GOODS_ReportAdvertiserGetV2DataListLandingType = 'GOODS';
    public const LINK_ReportAdvertiserGetV2DataListLandingType = 'LINK';

    public const ALLOWED_VALUES = [
        self::SHOP_ReportAdvertiserGetV2DataListLandingType,
        self::LIVE_ReportAdvertiserGetV2DataListLandingType,
        self::ARTICLE_ReportAdvertiserGetV2DataListLandingType,
        self::AWEME_ReportAdvertiserGetV2DataListLandingType,
        self::DPA_ReportAdvertiserGetV2DataListLandingType,
        self::QUICK_APP_ReportAdvertiserGetV2DataListLandingType,
        self::APP_ReportAdvertiserGetV2DataListLandingType,
        self::STORE_ReportAdvertiserGetV2DataListLandingType,
        self::GOODS_ReportAdvertiserGetV2DataListLandingType,
        self::LINK_ReportAdvertiserGetV2DataListLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdvertiserGetV2DataListLandingType', $value));
        }
        return (string) $value;
    }
}
