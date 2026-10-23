<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataAudienceGender
{
    public const FEMALE_LocalProjectDetailV30DataAudienceGender = 'FEMALE';
    public const MALE_LocalProjectDetailV30DataAudienceGender = 'MALE';
    public const NONE_LocalProjectDetailV30DataAudienceGender = 'NONE';

    public const ALLOWED_VALUES = [
        self::FEMALE_LocalProjectDetailV30DataAudienceGender,
        self::MALE_LocalProjectDetailV30DataAudienceGender,
        self::NONE_LocalProjectDetailV30DataAudienceGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataAudienceGender', $value));
        }
        return (string) $value;
    }
}
