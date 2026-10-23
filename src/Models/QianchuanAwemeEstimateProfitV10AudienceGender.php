<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeEstimateProfitV10AudienceGender
{
    public const GENDER_FEMALE_QianchuanAwemeEstimateProfitV10AudienceGender = 'GENDER_FEMALE';
    public const GENDER_MALE_QianchuanAwemeEstimateProfitV10AudienceGender = 'GENDER_MALE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_QianchuanAwemeEstimateProfitV10AudienceGender,
        self::GENDER_MALE_QianchuanAwemeEstimateProfitV10AudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeEstimateProfitV10AudienceGender', $value));
        }
        return (string) $value;
    }
}
