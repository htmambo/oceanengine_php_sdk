<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceAge
{
    public const AGE_BETWEEN_31_35_AdGetV2DataAudienceAge = 'AGE_BETWEEN_31_35';
    public const AGE_BETWEEN_18_23_AdGetV2DataAudienceAge = 'AGE_BETWEEN_18_23';
    public const AGE_BETWEEN_20_23_AdGetV2DataAudienceAge = 'AGE_BETWEEN_20_23';
    public const AGE_BETWEEN_41_45_AdGetV2DataAudienceAge = 'AGE_BETWEEN_41_45';
    public const AGE_BETWEEN_46_50_AdGetV2DataAudienceAge = 'AGE_BETWEEN_46_50';
    public const AGE_BELOW_18_AdGetV2DataAudienceAge = 'AGE_BELOW_18';
    public const AGE_BETWEEN_18_19_AdGetV2DataAudienceAge = 'AGE_BETWEEN_18_19';
    public const AGE_BETWEEN_56_59_AdGetV2DataAudienceAge = 'AGE_BETWEEN_56_59';
    public const AGE_BETWEEN_24_30_AdGetV2DataAudienceAge = 'AGE_BETWEEN_24_30';
    public const AGE_BETWEEN_31_40_AdGetV2DataAudienceAge = 'AGE_BETWEEN_31_40';
    public const AGE_BETWEEN_51_55_AdGetV2DataAudienceAge = 'AGE_BETWEEN_51_55';
    public const AGE_BETWEEN_41_49_AdGetV2DataAudienceAge = 'AGE_BETWEEN_41_49';
    public const AGE_ABOVE_50_AdGetV2DataAudienceAge = 'AGE_ABOVE_50';
    public const AGE_BETWEEN_36_40_AdGetV2DataAudienceAge = 'AGE_BETWEEN_36_40';
    public const AGE_ABOVE_60_AdGetV2DataAudienceAge = 'AGE_ABOVE_60';

    public const ALLOWED_VALUES = [
        self::AGE_BETWEEN_31_35_AdGetV2DataAudienceAge,
        self::AGE_BETWEEN_18_23_AdGetV2DataAudienceAge,
        self::AGE_BETWEEN_20_23_AdGetV2DataAudienceAge,
        self::AGE_BETWEEN_41_45_AdGetV2DataAudienceAge,
        self::AGE_BETWEEN_46_50_AdGetV2DataAudienceAge,
        self::AGE_BELOW_18_AdGetV2DataAudienceAge,
        self::AGE_BETWEEN_18_19_AdGetV2DataAudienceAge,
        self::AGE_BETWEEN_56_59_AdGetV2DataAudienceAge,
        self::AGE_BETWEEN_24_30_AdGetV2DataAudienceAge,
        self::AGE_BETWEEN_31_40_AdGetV2DataAudienceAge,
        self::AGE_BETWEEN_51_55_AdGetV2DataAudienceAge,
        self::AGE_BETWEEN_41_49_AdGetV2DataAudienceAge,
        self::AGE_ABOVE_50_AdGetV2DataAudienceAge,
        self::AGE_BETWEEN_36_40_AdGetV2DataAudienceAge,
        self::AGE_ABOVE_60_AdGetV2DataAudienceAge,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceAge', $value));
        }
        return (string) $value;
    }
}
