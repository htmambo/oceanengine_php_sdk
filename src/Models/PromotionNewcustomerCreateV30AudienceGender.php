<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionNewcustomerCreateV30AudienceGender
{
    public const GENDER_FEMALE_PromotionNewcustomerCreateV30AudienceGender = 'GENDER_FEMALE';
    public const GENDER_MALE_PromotionNewcustomerCreateV30AudienceGender = 'GENDER_MALE';
    public const NONE_PromotionNewcustomerCreateV30AudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_PromotionNewcustomerCreateV30AudienceGender,
        self::GENDER_MALE_PromotionNewcustomerCreateV30AudienceGender,
        self::NONE_PromotionNewcustomerCreateV30AudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionNewcustomerCreateV30AudienceGender', $value));
        }
        return (string) $value;
    }
}
