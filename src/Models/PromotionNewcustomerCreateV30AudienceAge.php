<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionNewcustomerCreateV30AudienceAge
{
    public const AGE_ABOVE_50_PromotionNewcustomerCreateV30AudienceAge = 'AGE_ABOVE_50';
    public const AGE_ABOVE_60_PromotionNewcustomerCreateV30AudienceAge = 'AGE_ABOVE_60';
    public const AGE_BETWEEN_18_19_PromotionNewcustomerCreateV30AudienceAge = 'AGE_BETWEEN_18_19';
    public const AGE_BETWEEN_18_23_PromotionNewcustomerCreateV30AudienceAge = 'AGE_BETWEEN_18_23';
    public const AGE_BETWEEN_20_23_PromotionNewcustomerCreateV30AudienceAge = 'AGE_BETWEEN_20_23';
    public const AGE_BETWEEN_24_30_PromotionNewcustomerCreateV30AudienceAge = 'AGE_BETWEEN_24_30';
    public const AGE_BETWEEN_31_35_PromotionNewcustomerCreateV30AudienceAge = 'AGE_BETWEEN_31_35';
    public const AGE_BETWEEN_31_40_PromotionNewcustomerCreateV30AudienceAge = 'AGE_BETWEEN_31_40';
    public const AGE_BETWEEN_36_40_PromotionNewcustomerCreateV30AudienceAge = 'AGE_BETWEEN_36_40';
    public const AGE_BETWEEN_41_45_PromotionNewcustomerCreateV30AudienceAge = 'AGE_BETWEEN_41_45';
    public const AGE_BETWEEN_41_49_PromotionNewcustomerCreateV30AudienceAge = 'AGE_BETWEEN_41_49';
    public const AGE_BETWEEN_46_50_PromotionNewcustomerCreateV30AudienceAge = 'AGE_BETWEEN_46_50';
    public const AGE_BETWEEN_51_55_PromotionNewcustomerCreateV30AudienceAge = 'AGE_BETWEEN_51_55';
    public const AGE_BETWEEN_56_59_PromotionNewcustomerCreateV30AudienceAge = 'AGE_BETWEEN_56_59';

    public const ALLOWED_VALUES = [
        self::AGE_ABOVE_50_PromotionNewcustomerCreateV30AudienceAge,
        self::AGE_ABOVE_60_PromotionNewcustomerCreateV30AudienceAge,
        self::AGE_BETWEEN_18_19_PromotionNewcustomerCreateV30AudienceAge,
        self::AGE_BETWEEN_18_23_PromotionNewcustomerCreateV30AudienceAge,
        self::AGE_BETWEEN_20_23_PromotionNewcustomerCreateV30AudienceAge,
        self::AGE_BETWEEN_24_30_PromotionNewcustomerCreateV30AudienceAge,
        self::AGE_BETWEEN_31_35_PromotionNewcustomerCreateV30AudienceAge,
        self::AGE_BETWEEN_31_40_PromotionNewcustomerCreateV30AudienceAge,
        self::AGE_BETWEEN_36_40_PromotionNewcustomerCreateV30AudienceAge,
        self::AGE_BETWEEN_41_45_PromotionNewcustomerCreateV30AudienceAge,
        self::AGE_BETWEEN_41_49_PromotionNewcustomerCreateV30AudienceAge,
        self::AGE_BETWEEN_46_50_PromotionNewcustomerCreateV30AudienceAge,
        self::AGE_BETWEEN_51_55_PromotionNewcustomerCreateV30AudienceAge,
        self::AGE_BETWEEN_56_59_PromotionNewcustomerCreateV30AudienceAge,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionNewcustomerCreateV30AudienceAge', $value));
        }
        return (string) $value;
    }
}
