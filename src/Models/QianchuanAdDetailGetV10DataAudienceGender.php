<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceGender
{
    public const GENDER_FEMALE_QianchuanAdDetailGetV10DataAudienceGender = 'GENDER_FEMALE';
    public const GENDER_MALE_QianchuanAdDetailGetV10DataAudienceGender = 'GENDER_MALE';
    public const NONE_QianchuanAdDetailGetV10DataAudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_QianchuanAdDetailGetV10DataAudienceGender,
        self::GENDER_MALE_QianchuanAdDetailGetV10DataAudienceGender,
        self::NONE_QianchuanAdDetailGetV10DataAudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceGender', $value));
        }
        return (string) $value;
    }
}
