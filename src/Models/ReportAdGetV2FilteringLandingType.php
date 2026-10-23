<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2FilteringLandingType
{
    public const LIVE_ReportAdGetV2FilteringLandingType = 'LIVE';
    public const APP_ReportAdGetV2FilteringLandingType = 'APP';
    public const ARTICLE_ReportAdGetV2FilteringLandingType = 'ARTICLE';
    public const SHOP_ReportAdGetV2FilteringLandingType = 'SHOP';
    public const QUICK_APP_ReportAdGetV2FilteringLandingType = 'QUICK_APP';
    public const LINK_ReportAdGetV2FilteringLandingType = 'LINK';
    public const DPA_ReportAdGetV2FilteringLandingType = 'DPA';
    public const STORE_ReportAdGetV2FilteringLandingType = 'STORE';
    public const AWEME_ReportAdGetV2FilteringLandingType = 'AWEME';
    public const GOODS_ReportAdGetV2FilteringLandingType = 'GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_ReportAdGetV2FilteringLandingType,
        self::APP_ReportAdGetV2FilteringLandingType,
        self::ARTICLE_ReportAdGetV2FilteringLandingType,
        self::SHOP_ReportAdGetV2FilteringLandingType,
        self::QUICK_APP_ReportAdGetV2FilteringLandingType,
        self::LINK_ReportAdGetV2FilteringLandingType,
        self::DPA_ReportAdGetV2FilteringLandingType,
        self::STORE_ReportAdGetV2FilteringLandingType,
        self::AWEME_ReportAdGetV2FilteringLandingType,
        self::GOODS_ReportAdGetV2FilteringLandingType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2FilteringLandingType', $value));
        }
        return (string) $value;
    }
}
