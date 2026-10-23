<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceListV30DataListAgeAudience
{
    public const AGE_ABOVE_0_17_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_ABOVE_0_17';
    public const AGE_ABOVE_50_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_ABOVE_50';
    public const AGE_ABOVE_60_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_ABOVE_60';
    public const AGE_BETWEEN_18_19_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_BETWEEN_18_19';
    public const AGE_BETWEEN_18_23_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_BETWEEN_18_23';
    public const AGE_BETWEEN_20_23_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_BETWEEN_20_23';
    public const AGE_BETWEEN_24_30_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_BETWEEN_24_30';
    public const AGE_BETWEEN_31_35_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_BETWEEN_31_35';
    public const AGE_BETWEEN_31_40_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_BETWEEN_31_40';
    public const AGE_BETWEEN_36_40_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_BETWEEN_36_40';
    public const AGE_BETWEEN_41_45_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_BETWEEN_41_45';
    public const AGE_BETWEEN_41_49_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_BETWEEN_41_49';
    public const AGE_BETWEEN_46_50_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_BETWEEN_46_50';
    public const AGE_BETWEEN_51_55_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_BETWEEN_51_55';
    public const AGE_BETWEEN_56_59_OcProjectToolsAudienceListV30DataListAgeAudience = 'AGE_BETWEEN_56_59';

    public const ALLOWED_VALUES = [
        self::AGE_ABOVE_0_17_OcProjectToolsAudienceListV30DataListAgeAudience,
        self::AGE_ABOVE_50_OcProjectToolsAudienceListV30DataListAgeAudience,
        self::AGE_ABOVE_60_OcProjectToolsAudienceListV30DataListAgeAudience,
        self::AGE_BETWEEN_18_19_OcProjectToolsAudienceListV30DataListAgeAudience,
        self::AGE_BETWEEN_18_23_OcProjectToolsAudienceListV30DataListAgeAudience,
        self::AGE_BETWEEN_20_23_OcProjectToolsAudienceListV30DataListAgeAudience,
        self::AGE_BETWEEN_24_30_OcProjectToolsAudienceListV30DataListAgeAudience,
        self::AGE_BETWEEN_31_35_OcProjectToolsAudienceListV30DataListAgeAudience,
        self::AGE_BETWEEN_31_40_OcProjectToolsAudienceListV30DataListAgeAudience,
        self::AGE_BETWEEN_36_40_OcProjectToolsAudienceListV30DataListAgeAudience,
        self::AGE_BETWEEN_41_45_OcProjectToolsAudienceListV30DataListAgeAudience,
        self::AGE_BETWEEN_41_49_OcProjectToolsAudienceListV30DataListAgeAudience,
        self::AGE_BETWEEN_46_50_OcProjectToolsAudienceListV30DataListAgeAudience,
        self::AGE_BETWEEN_51_55_OcProjectToolsAudienceListV30DataListAgeAudience,
        self::AGE_BETWEEN_56_59_OcProjectToolsAudienceListV30DataListAgeAudience,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceListV30DataListAgeAudience', $value));
        }
        return (string) $value;
    }
}
