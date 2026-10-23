<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceGender
{
    public const GENDER_FEMALE_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceGender = 'GENDER_FEMALE';
    public const GENDER_MALE_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceGender = 'GENDER_MALE';
    public const NONE_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceGender,
        self::GENDER_MALE_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceGender,
        self::NONE_QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskListV10DataTaskListAudienceGender', $value));
        }
        return (string) $value;
    }
}
