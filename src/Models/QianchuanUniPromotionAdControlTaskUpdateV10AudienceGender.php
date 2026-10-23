<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskUpdateV10AudienceGender
{
    public const GENDER_FEMALE_QianchuanUniPromotionAdControlTaskUpdateV10AudienceGender = 'GENDER_FEMALE';
    public const GENDER_MALE_QianchuanUniPromotionAdControlTaskUpdateV10AudienceGender = 'GENDER_MALE';
    public const NONE_QianchuanUniPromotionAdControlTaskUpdateV10AudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_QianchuanUniPromotionAdControlTaskUpdateV10AudienceGender,
        self::GENDER_MALE_QianchuanUniPromotionAdControlTaskUpdateV10AudienceGender,
        self::NONE_QianchuanUniPromotionAdControlTaskUpdateV10AudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskUpdateV10AudienceGender', $value));
        }
        return (string) $value;
    }
}
