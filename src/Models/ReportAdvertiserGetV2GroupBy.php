<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdvertiserGetV2GroupBy
{
    public const STAT_GROUP_BY_FIELD_STAT_TIME_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_FIELD_STAT_TIME';
    public const STAT_GROUP_BY_CREATIVE_MATERIAL_MODE_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_CREATIVE_MATERIAL_MODE';
    public const STAT_GROUP_BY_AC_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_AC';
    public const STAT_GROUP_BY_FIELD_ID_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_FIELD_ID';
    public const STAT_GROUP_BY_LANDING_TYPE_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_LANDING_TYPE';
    public const STAT_GROUP_BY_PROVINCE_NAME_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_PROVINCE_NAME';
    public const STAT_GROUP_BY_PLATFORM_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_PLATFORM';
    public const STAT_GROUP_BY_PRICING_CATEGORY_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_PRICING_CATEGORY';
    public const STAT_GROUP_BY_EXTERNAL_ACTION_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_EXTERNAL_ACTION';
    public const STAT_GROUP_BY_CITY_NAME_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_CITY_NAME';
    public const STAT_GROUP_BY_GENDER_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_GENDER';
    public const STAT_GROUP_BY_INVENTORY_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_INVENTORY';
    public const STAT_GROUP_BY_PRICING_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_PRICING';
    public const STAT_GROUP_BY_IMAGE_MODE_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_IMAGE_MODE';
    public const STAT_GROUP_BY_MATERIAL_ID_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_MATERIAL_ID';
    public const STAT_GROUP_BY_AGE_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_AGE';
    public const STAT_GROUP_BY_CREATIVE_COMPONENT_ID_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_CREATIVE_COMPONENT_ID';
    public const STAT_GROUP_BY_CAMPAIGN_TYPE_ReportAdvertiserGetV2GroupBy = 'STAT_GROUP_BY_CAMPAIGN_TYPE';

    public const ALLOWED_VALUES = [
        self::STAT_GROUP_BY_FIELD_STAT_TIME_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_CREATIVE_MATERIAL_MODE_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_AC_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_FIELD_ID_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_LANDING_TYPE_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_PROVINCE_NAME_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_PLATFORM_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_PRICING_CATEGORY_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_EXTERNAL_ACTION_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_CITY_NAME_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_GENDER_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_INVENTORY_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_PRICING_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_IMAGE_MODE_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_MATERIAL_ID_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_AGE_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_CREATIVE_COMPONENT_ID_ReportAdvertiserGetV2GroupBy,
        self::STAT_GROUP_BY_CAMPAIGN_TYPE_ReportAdvertiserGetV2GroupBy,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdvertiserGetV2GroupBy', $value));
        }
        return (string) $value;
    }
}
