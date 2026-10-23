<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderCreateV30TargetingGender
{
    public const GENDER_FEMALE_DouplusOrderCreateV30TargetingGender = 'GENDER_FEMALE';
    public const GENDER_MALE_DouplusOrderCreateV30TargetingGender = 'GENDER_MALE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_DouplusOrderCreateV30TargetingGender,
        self::GENDER_MALE_DouplusOrderCreateV30TargetingGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderCreateV30TargetingGender', $value));
        }
        return (string) $value;
    }
}
