<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAudienceCityV2IdType
{
    public const AUDIENCE_STAT_ID_TYPE_CAMPAIGN_ReportAudienceCityV2IdType = 'AUDIENCE_STAT_ID_TYPE_CAMPAIGN';
    public const AUDIENCE_STAT_ID_TYPE_ADVERTISER_ReportAudienceCityV2IdType = 'AUDIENCE_STAT_ID_TYPE_ADVERTISER';
    public const AUDIENCE_STAT_ID_TYPE_AD_ReportAudienceCityV2IdType = 'AUDIENCE_STAT_ID_TYPE_AD';

    public const ALLOWED_VALUES = [
        self::AUDIENCE_STAT_ID_TYPE_CAMPAIGN_ReportAudienceCityV2IdType,
        self::AUDIENCE_STAT_ID_TYPE_ADVERTISER_ReportAudienceCityV2IdType,
        self::AUDIENCE_STAT_ID_TYPE_AD_ReportAudienceCityV2IdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAudienceCityV2IdType', $value));
        }
        return (string) $value;
    }
}
