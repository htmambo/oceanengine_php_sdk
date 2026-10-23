<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageUpdateV30Age
{
    public const AGE_ABOVE_50_LocalAudiencePackageUpdateV30Age = 'AGE_ABOVE_50';
    public const AGE_ABOVE_60_LocalAudiencePackageUpdateV30Age = 'AGE_ABOVE_60';
    public const AGE_BETWEEN_0_17_LocalAudiencePackageUpdateV30Age = 'AGE_BETWEEN_0_17';
    public const AGE_BETWEEN_18_19_LocalAudiencePackageUpdateV30Age = 'AGE_BETWEEN_18_19';
    public const AGE_BETWEEN_18_23_LocalAudiencePackageUpdateV30Age = 'AGE_BETWEEN_18_23';
    public const AGE_BETWEEN_20_23_LocalAudiencePackageUpdateV30Age = 'AGE_BETWEEN_20_23';
    public const AGE_BETWEEN_24_30_LocalAudiencePackageUpdateV30Age = 'AGE_BETWEEN_24_30';
    public const AGE_BETWEEN_31_35_LocalAudiencePackageUpdateV30Age = 'AGE_BETWEEN_31_35';
    public const AGE_BETWEEN_31_40_LocalAudiencePackageUpdateV30Age = 'AGE_BETWEEN_31_40';
    public const AGE_BETWEEN_36_40_LocalAudiencePackageUpdateV30Age = 'AGE_BETWEEN_36_40';
    public const AGE_BETWEEN_41_45_LocalAudiencePackageUpdateV30Age = 'AGE_BETWEEN_41_45';
    public const AGE_BETWEEN_41_49_LocalAudiencePackageUpdateV30Age = 'AGE_BETWEEN_41_49';
    public const AGE_BETWEEN_46_50_LocalAudiencePackageUpdateV30Age = 'AGE_BETWEEN_46_50';
    public const AGE_BETWEEN_51_55_LocalAudiencePackageUpdateV30Age = 'AGE_BETWEEN_51_55';
    public const AGE_BETWEEN_56_59_LocalAudiencePackageUpdateV30Age = 'AGE_BETWEEN_56_59';

    public const ALLOWED_VALUES = [
        self::AGE_ABOVE_50_LocalAudiencePackageUpdateV30Age,
        self::AGE_ABOVE_60_LocalAudiencePackageUpdateV30Age,
        self::AGE_BETWEEN_0_17_LocalAudiencePackageUpdateV30Age,
        self::AGE_BETWEEN_18_19_LocalAudiencePackageUpdateV30Age,
        self::AGE_BETWEEN_18_23_LocalAudiencePackageUpdateV30Age,
        self::AGE_BETWEEN_20_23_LocalAudiencePackageUpdateV30Age,
        self::AGE_BETWEEN_24_30_LocalAudiencePackageUpdateV30Age,
        self::AGE_BETWEEN_31_35_LocalAudiencePackageUpdateV30Age,
        self::AGE_BETWEEN_31_40_LocalAudiencePackageUpdateV30Age,
        self::AGE_BETWEEN_36_40_LocalAudiencePackageUpdateV30Age,
        self::AGE_BETWEEN_41_45_LocalAudiencePackageUpdateV30Age,
        self::AGE_BETWEEN_41_49_LocalAudiencePackageUpdateV30Age,
        self::AGE_BETWEEN_46_50_LocalAudiencePackageUpdateV30Age,
        self::AGE_BETWEEN_51_55_LocalAudiencePackageUpdateV30Age,
        self::AGE_BETWEEN_56_59_LocalAudiencePackageUpdateV30Age,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageUpdateV30Age', $value));
        }
        return (string) $value;
    }
}
