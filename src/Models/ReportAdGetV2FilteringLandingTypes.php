<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2FilteringLandingTypes
{
    public const LIVE_ReportAdGetV2FilteringLandingTypes = 'LIVE';
    public const APP_ReportAdGetV2FilteringLandingTypes = 'APP';
    public const ARTICLE_ReportAdGetV2FilteringLandingTypes = 'ARTICLE';
    public const SHOP_ReportAdGetV2FilteringLandingTypes = 'SHOP';
    public const QUICK_APP_ReportAdGetV2FilteringLandingTypes = 'QUICK_APP';
    public const LINK_ReportAdGetV2FilteringLandingTypes = 'LINK';
    public const DPA_ReportAdGetV2FilteringLandingTypes = 'DPA';
    public const STORE_ReportAdGetV2FilteringLandingTypes = 'STORE';
    public const AWEME_ReportAdGetV2FilteringLandingTypes = 'AWEME';
    public const GOODS_ReportAdGetV2FilteringLandingTypes = 'GOODS';

    public const ALLOWED_VALUES = [
        self::LIVE_ReportAdGetV2FilteringLandingTypes,
        self::APP_ReportAdGetV2FilteringLandingTypes,
        self::ARTICLE_ReportAdGetV2FilteringLandingTypes,
        self::SHOP_ReportAdGetV2FilteringLandingTypes,
        self::QUICK_APP_ReportAdGetV2FilteringLandingTypes,
        self::LINK_ReportAdGetV2FilteringLandingTypes,
        self::DPA_ReportAdGetV2FilteringLandingTypes,
        self::STORE_ReportAdGetV2FilteringLandingTypes,
        self::AWEME_ReportAdGetV2FilteringLandingTypes,
        self::GOODS_ReportAdGetV2FilteringLandingTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2FilteringLandingTypes', $value));
        }
        return (string) $value;
    }
}
