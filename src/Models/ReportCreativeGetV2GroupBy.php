<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2GroupBy
{
    public const STAT_GROUP_BY_FIELD_STAT_TIME_ReportCreativeGetV2GroupBy = 'STAT_GROUP_BY_FIELD_STAT_TIME';
    public const STAT_GROUP_BY_CREATIVE_MATERIAL_MODE_ReportCreativeGetV2GroupBy = 'STAT_GROUP_BY_CREATIVE_MATERIAL_MODE';
    public const STAT_GROUP_BY_FIELD_ID_ReportCreativeGetV2GroupBy = 'STAT_GROUP_BY_FIELD_ID';
    public const STAT_GROUP_BY_LANDING_TYPE_ReportCreativeGetV2GroupBy = 'STAT_GROUP_BY_LANDING_TYPE';
    public const STAT_GROUP_BY_PRICING_CATEGORY_ReportCreativeGetV2GroupBy = 'STAT_GROUP_BY_PRICING_CATEGORY';
    public const STAT_GROUP_BY_EXTERNAL_ACTION_ReportCreativeGetV2GroupBy = 'STAT_GROUP_BY_EXTERNAL_ACTION';
    public const STAT_GROUP_BY_INVENTORY_ReportCreativeGetV2GroupBy = 'STAT_GROUP_BY_INVENTORY';
    public const STAT_GROUP_BY_PRICING_ReportCreativeGetV2GroupBy = 'STAT_GROUP_BY_PRICING';
    public const STAT_GROUP_BY_IMAGE_MODE_ReportCreativeGetV2GroupBy = 'STAT_GROUP_BY_IMAGE_MODE';
    public const STAT_GROUP_BY_MATERIAL_ID_ReportCreativeGetV2GroupBy = 'STAT_GROUP_BY_MATERIAL_ID';
    public const STAT_GROUP_BY_CAMPAIGN_TYPE_ReportCreativeGetV2GroupBy = 'STAT_GROUP_BY_CAMPAIGN_TYPE';

    public const ALLOWED_VALUES = [
        self::STAT_GROUP_BY_FIELD_STAT_TIME_ReportCreativeGetV2GroupBy,
        self::STAT_GROUP_BY_CREATIVE_MATERIAL_MODE_ReportCreativeGetV2GroupBy,
        self::STAT_GROUP_BY_FIELD_ID_ReportCreativeGetV2GroupBy,
        self::STAT_GROUP_BY_LANDING_TYPE_ReportCreativeGetV2GroupBy,
        self::STAT_GROUP_BY_PRICING_CATEGORY_ReportCreativeGetV2GroupBy,
        self::STAT_GROUP_BY_EXTERNAL_ACTION_ReportCreativeGetV2GroupBy,
        self::STAT_GROUP_BY_INVENTORY_ReportCreativeGetV2GroupBy,
        self::STAT_GROUP_BY_PRICING_ReportCreativeGetV2GroupBy,
        self::STAT_GROUP_BY_IMAGE_MODE_ReportCreativeGetV2GroupBy,
        self::STAT_GROUP_BY_MATERIAL_ID_ReportCreativeGetV2GroupBy,
        self::STAT_GROUP_BY_CAMPAIGN_TYPE_ReportCreativeGetV2GroupBy,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2GroupBy', $value));
        }
        return (string) $value;
    }
}
