<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceListV30DataListGenderAudience
{
    public const GENDER_FEMALE_OcProjectToolsAudienceListV30DataListGenderAudience = 'GENDER_FEMALE';
    public const GENDER_MALE_OcProjectToolsAudienceListV30DataListGenderAudience = 'GENDER_MALE';
    public const GENDER_UNLIMITED_OcProjectToolsAudienceListV30DataListGenderAudience = 'GENDER_UNLIMITED';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_OcProjectToolsAudienceListV30DataListGenderAudience,
        self::GENDER_MALE_OcProjectToolsAudienceListV30DataListGenderAudience,
        self::GENDER_UNLIMITED_OcProjectToolsAudienceListV30DataListGenderAudience,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceListV30DataListGenderAudience', $value));
        }
        return (string) $value;
    }
}
