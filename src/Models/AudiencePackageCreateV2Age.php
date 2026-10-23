<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2Age
{
    public const AGE_BETWEEN_31_35_AudiencePackageCreateV2Age = 'AGE_BETWEEN_31_35';
    public const AGE_BETWEEN_18_23_AudiencePackageCreateV2Age = 'AGE_BETWEEN_18_23';
    public const AGE_BETWEEN_20_23_AudiencePackageCreateV2Age = 'AGE_BETWEEN_20_23';
    public const AGE_BETWEEN_41_45_AudiencePackageCreateV2Age = 'AGE_BETWEEN_41_45';
    public const AGE_BETWEEN_46_50_AudiencePackageCreateV2Age = 'AGE_BETWEEN_46_50';
    public const AGE_BELOW_18_AudiencePackageCreateV2Age = 'AGE_BELOW_18';
    public const AGE_BETWEEN_18_19_AudiencePackageCreateV2Age = 'AGE_BETWEEN_18_19';
    public const AGE_BETWEEN_56_59_AudiencePackageCreateV2Age = 'AGE_BETWEEN_56_59';
    public const AGE_BETWEEN_24_30_AudiencePackageCreateV2Age = 'AGE_BETWEEN_24_30';
    public const AGE_BETWEEN_31_40_AudiencePackageCreateV2Age = 'AGE_BETWEEN_31_40';
    public const AGE_BETWEEN_51_55_AudiencePackageCreateV2Age = 'AGE_BETWEEN_51_55';
    public const AGE_BETWEEN_41_49_AudiencePackageCreateV2Age = 'AGE_BETWEEN_41_49';
    public const AGE_ABOVE_50_AudiencePackageCreateV2Age = 'AGE_ABOVE_50';
    public const AGE_BETWEEN_36_40_AudiencePackageCreateV2Age = 'AGE_BETWEEN_36_40';
    public const AGE_ABOVE_60_AudiencePackageCreateV2Age = 'AGE_ABOVE_60';

    public const ALLOWED_VALUES = [
        self::AGE_BETWEEN_31_35_AudiencePackageCreateV2Age,
        self::AGE_BETWEEN_18_23_AudiencePackageCreateV2Age,
        self::AGE_BETWEEN_20_23_AudiencePackageCreateV2Age,
        self::AGE_BETWEEN_41_45_AudiencePackageCreateV2Age,
        self::AGE_BETWEEN_46_50_AudiencePackageCreateV2Age,
        self::AGE_BELOW_18_AudiencePackageCreateV2Age,
        self::AGE_BETWEEN_18_19_AudiencePackageCreateV2Age,
        self::AGE_BETWEEN_56_59_AudiencePackageCreateV2Age,
        self::AGE_BETWEEN_24_30_AudiencePackageCreateV2Age,
        self::AGE_BETWEEN_31_40_AudiencePackageCreateV2Age,
        self::AGE_BETWEEN_51_55_AudiencePackageCreateV2Age,
        self::AGE_BETWEEN_41_49_AudiencePackageCreateV2Age,
        self::AGE_ABOVE_50_AudiencePackageCreateV2Age,
        self::AGE_BETWEEN_36_40_AudiencePackageCreateV2Age,
        self::AGE_ABOVE_60_AudiencePackageCreateV2Age,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2Age', $value));
        }
        return (string) $value;
    }
}
