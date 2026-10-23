<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2DataListLandingType
{
    public const LIVE_ReportAdGetV2DataListLandingType = 'LIVE';
    public const APP_ReportAdGetV2DataListLandingType = 'APP';
    public const ARTICLE_ReportAdGetV2DataListLandingType = 'ARTICLE';
    public const SHOP_ReportAdGetV2DataListLandingType = 'SHOP';
    public const QUICK_APP_ReportAdGetV2DataListLandingType = 'QUICK_APP';
    public const LINK_ReportAdGetV2DataListLandingType = 'LINK';
    public const DPA_ReportAdGetV2DataListLandingType = 'DPA';
    public const STORE_ReportAdGetV2DataListLandingType = 'STORE';
    public const AWEME_ReportAdGetV2DataListLandingType = 'AWEME';
    public const GOODS_ReportAdGetV2DataListLandingType = 'GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_ReportAdGetV2DataListLandingType,
        self::APP_ReportAdGetV2DataListLandingType,
        self::ARTICLE_ReportAdGetV2DataListLandingType,
        self::SHOP_ReportAdGetV2DataListLandingType,
        self::QUICK_APP_ReportAdGetV2DataListLandingType,
        self::LINK_ReportAdGetV2DataListLandingType,
        self::DPA_ReportAdGetV2DataListLandingType,
        self::STORE_ReportAdGetV2DataListLandingType,
        self::AWEME_ReportAdGetV2DataListLandingType,
        self::GOODS_ReportAdGetV2DataListLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2DataListLandingType', $value));
        }
        return (string) $value;
    }
}
