<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectUpdateV30AudienceAge
{
    public const AGE_ABOVE_50_LocalProjectUpdateV30AudienceAge = 'AGE_ABOVE_50';
    public const AGE_ABOVE_60_LocalProjectUpdateV30AudienceAge = 'AGE_ABOVE_60';
    public const AGE_BETWEEN_18_19_LocalProjectUpdateV30AudienceAge = 'AGE_BETWEEN_18_19';
    public const AGE_BETWEEN_18_23_LocalProjectUpdateV30AudienceAge = 'AGE_BETWEEN_18_23';
    public const AGE_BETWEEN_20_23_LocalProjectUpdateV30AudienceAge = 'AGE_BETWEEN_20_23';
    public const AGE_BETWEEN_24_30_LocalProjectUpdateV30AudienceAge = 'AGE_BETWEEN_24_30';
    public const AGE_BETWEEN_31_35_LocalProjectUpdateV30AudienceAge = 'AGE_BETWEEN_31_35';
    public const AGE_BETWEEN_31_40_LocalProjectUpdateV30AudienceAge = 'AGE_BETWEEN_31_40';
    public const AGE_BETWEEN_36_40_LocalProjectUpdateV30AudienceAge = 'AGE_BETWEEN_36_40';
    public const AGE_BETWEEN_41_45_LocalProjectUpdateV30AudienceAge = 'AGE_BETWEEN_41_45';
    public const AGE_BETWEEN_41_49_LocalProjectUpdateV30AudienceAge = 'AGE_BETWEEN_41_49';
    public const AGE_BETWEEN_46_50_LocalProjectUpdateV30AudienceAge = 'AGE_BETWEEN_46_50';
    public const AGE_BETWEEN_51_55_LocalProjectUpdateV30AudienceAge = 'AGE_BETWEEN_51_55';
    public const AGE_BETWEEN_56_59_LocalProjectUpdateV30AudienceAge = 'AGE_BETWEEN_56_59';

    public const ALLOWED_VALUES = [
        self::AGE_ABOVE_50_LocalProjectUpdateV30AudienceAge,
        self::AGE_ABOVE_60_LocalProjectUpdateV30AudienceAge,
        self::AGE_BETWEEN_18_19_LocalProjectUpdateV30AudienceAge,
        self::AGE_BETWEEN_18_23_LocalProjectUpdateV30AudienceAge,
        self::AGE_BETWEEN_20_23_LocalProjectUpdateV30AudienceAge,
        self::AGE_BETWEEN_24_30_LocalProjectUpdateV30AudienceAge,
        self::AGE_BETWEEN_31_35_LocalProjectUpdateV30AudienceAge,
        self::AGE_BETWEEN_31_40_LocalProjectUpdateV30AudienceAge,
        self::AGE_BETWEEN_36_40_LocalProjectUpdateV30AudienceAge,
        self::AGE_BETWEEN_41_45_LocalProjectUpdateV30AudienceAge,
        self::AGE_BETWEEN_41_49_LocalProjectUpdateV30AudienceAge,
        self::AGE_BETWEEN_46_50_LocalProjectUpdateV30AudienceAge,
        self::AGE_BETWEEN_51_55_LocalProjectUpdateV30AudienceAge,
        self::AGE_BETWEEN_56_59_LocalProjectUpdateV30AudienceAge,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectUpdateV30AudienceAge', $value));
        }
        return (string) $value;
    }
}
