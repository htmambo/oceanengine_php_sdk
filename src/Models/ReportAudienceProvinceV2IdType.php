<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAudienceProvinceV2IdType
{
    public const AUDIENCE_STAT_ID_TYPE_CAMPAIGN_ReportAudienceProvinceV2IdType = 'AUDIENCE_STAT_ID_TYPE_CAMPAIGN';
    public const AUDIENCE_STAT_ID_TYPE_ADVERTISER_ReportAudienceProvinceV2IdType = 'AUDIENCE_STAT_ID_TYPE_ADVERTISER';
    public const AUDIENCE_STAT_ID_TYPE_AD_ReportAudienceProvinceV2IdType = 'AUDIENCE_STAT_ID_TYPE_AD';

    public const ALLOWED_VALUES = [
        self::AUDIENCE_STAT_ID_TYPE_CAMPAIGN_ReportAudienceProvinceV2IdType,
        self::AUDIENCE_STAT_ID_TYPE_ADVERTISER_ReportAudienceProvinceV2IdType,
        self::AUDIENCE_STAT_ID_TYPE_AD_ReportAudienceProvinceV2IdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAudienceProvinceV2IdType', $value));
        }
        return (string) $value;
    }
}
