<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2GroupBy
{
    public const STAT_GROUP_BY_FIELD_STAT_TIME_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_FIELD_STAT_TIME';
    public const STAT_GROUP_BY_CREATIVE_MATERIAL_MODE_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_CREATIVE_MATERIAL_MODE';
    public const STAT_GROUP_BY_AC_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_AC';
    public const STAT_GROUP_BY_FIELD_ID_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_FIELD_ID';
    public const STAT_GROUP_BY_LANDING_TYPE_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_LANDING_TYPE';
    public const STAT_GROUP_BY_PROVINCE_NAME_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_PROVINCE_NAME';
    public const STAT_GROUP_BY_PLATFORM_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_PLATFORM';
    public const STAT_GROUP_BY_PRICING_CATEGORY_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_PRICING_CATEGORY';
    public const STAT_GROUP_BY_EXTERNAL_ACTION_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_EXTERNAL_ACTION';
    public const STAT_GROUP_BY_CITY_NAME_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_CITY_NAME';
    public const STAT_GROUP_BY_GENDER_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_GENDER';
    public const STAT_GROUP_BY_INVENTORY_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_INVENTORY';
    public const STAT_GROUP_BY_PRICING_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_PRICING';
    public const STAT_GROUP_BY_IMAGE_MODE_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_IMAGE_MODE';
    public const STAT_GROUP_BY_MATERIAL_ID_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_MATERIAL_ID';
    public const STAT_GROUP_BY_AGE_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_AGE';
    public const STAT_GROUP_BY_CREATIVE_COMPONENT_ID_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_CREATIVE_COMPONENT_ID';
    public const STAT_GROUP_BY_CAMPAIGN_TYPE_ReportAdGetV2GroupBy = 'STAT_GROUP_BY_CAMPAIGN_TYPE';

    public const ALLOWED_VALUES = [
        self::STAT_GROUP_BY_FIELD_STAT_TIME_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_CREATIVE_MATERIAL_MODE_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_AC_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_FIELD_ID_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_LANDING_TYPE_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_PROVINCE_NAME_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_PLATFORM_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_PRICING_CATEGORY_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_EXTERNAL_ACTION_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_CITY_NAME_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_GENDER_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_INVENTORY_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_PRICING_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_IMAGE_MODE_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_MATERIAL_ID_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_AGE_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_CREATIVE_COMPONENT_ID_ReportAdGetV2GroupBy,
        self::STAT_GROUP_BY_CAMPAIGN_TYPE_ReportAdGetV2GroupBy,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2GroupBy', $value));
        }
        return (string) $value;
    }
}
