<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceAc
{
    public const Enum_2_G_ProjectCreateV30AudienceAc = '2G';
    public const Enum_3_G_ProjectCreateV30AudienceAc = '3G';
    public const Enum_4_G_ProjectCreateV30AudienceAc = '4G';
    public const Enum_5_G_ProjectCreateV30AudienceAc = '5G';
    public const WIFI_ProjectCreateV30AudienceAc = 'WIFI';

    public const ALLOWED_VALUES = [
        self::Enum_2_G_ProjectCreateV30AudienceAc,
        self::Enum_3_G_ProjectCreateV30AudienceAc,
        self::Enum_4_G_ProjectCreateV30AudienceAc,
        self::Enum_5_G_ProjectCreateV30AudienceAc,
        self::WIFI_ProjectCreateV30AudienceAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceAc', $value));
        }
        return (string) $value;
    }
}
