<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectGetV30DataAudienceAge
{
    public const AGE_ABOVE_50_LocalOcProjectGetV30DataAudienceAge = 'AGE_ABOVE_50';
    public const AGE_ABOVE_60_LocalOcProjectGetV30DataAudienceAge = 'AGE_ABOVE_60';
    public const AGE_BETWEEN_0_17_LocalOcProjectGetV30DataAudienceAge = 'AGE_BETWEEN_0_17';
    public const AGE_BETWEEN_18_19_LocalOcProjectGetV30DataAudienceAge = 'AGE_BETWEEN_18_19';
    public const AGE_BETWEEN_18_23_LocalOcProjectGetV30DataAudienceAge = 'AGE_BETWEEN_18_23';
    public const AGE_BETWEEN_20_23_LocalOcProjectGetV30DataAudienceAge = 'AGE_BETWEEN_20_23';
    public const AGE_BETWEEN_24_30_LocalOcProjectGetV30DataAudienceAge = 'AGE_BETWEEN_24_30';
    public const AGE_BETWEEN_31_35_LocalOcProjectGetV30DataAudienceAge = 'AGE_BETWEEN_31_35';
    public const AGE_BETWEEN_31_40_LocalOcProjectGetV30DataAudienceAge = 'AGE_BETWEEN_31_40';
    public const AGE_BETWEEN_36_40_LocalOcProjectGetV30DataAudienceAge = 'AGE_BETWEEN_36_40';
    public const AGE_BETWEEN_41_45_LocalOcProjectGetV30DataAudienceAge = 'AGE_BETWEEN_41_45';
    public const AGE_BETWEEN_41_49_LocalOcProjectGetV30DataAudienceAge = 'AGE_BETWEEN_41_49';
    public const AGE_BETWEEN_46_50_LocalOcProjectGetV30DataAudienceAge = 'AGE_BETWEEN_46_50';
    public const AGE_BETWEEN_51_55_LocalOcProjectGetV30DataAudienceAge = 'AGE_BETWEEN_51_55';
    public const AGE_BETWEEN_56_59_LocalOcProjectGetV30DataAudienceAge = 'AGE_BETWEEN_56_59';

    public const ALLOWED_VALUES = [
        self::AGE_ABOVE_50_LocalOcProjectGetV30DataAudienceAge,
        self::AGE_ABOVE_60_LocalOcProjectGetV30DataAudienceAge,
        self::AGE_BETWEEN_0_17_LocalOcProjectGetV30DataAudienceAge,
        self::AGE_BETWEEN_18_19_LocalOcProjectGetV30DataAudienceAge,
        self::AGE_BETWEEN_18_23_LocalOcProjectGetV30DataAudienceAge,
        self::AGE_BETWEEN_20_23_LocalOcProjectGetV30DataAudienceAge,
        self::AGE_BETWEEN_24_30_LocalOcProjectGetV30DataAudienceAge,
        self::AGE_BETWEEN_31_35_LocalOcProjectGetV30DataAudienceAge,
        self::AGE_BETWEEN_31_40_LocalOcProjectGetV30DataAudienceAge,
        self::AGE_BETWEEN_36_40_LocalOcProjectGetV30DataAudienceAge,
        self::AGE_BETWEEN_41_45_LocalOcProjectGetV30DataAudienceAge,
        self::AGE_BETWEEN_41_49_LocalOcProjectGetV30DataAudienceAge,
        self::AGE_BETWEEN_46_50_LocalOcProjectGetV30DataAudienceAge,
        self::AGE_BETWEEN_51_55_LocalOcProjectGetV30DataAudienceAge,
        self::AGE_BETWEEN_56_59_LocalOcProjectGetV30DataAudienceAge,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectGetV30DataAudienceAge', $value));
        }
        return (string) $value;
    }
}
