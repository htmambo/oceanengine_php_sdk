<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceAc
{
    public const Enum_2_G_StdProjectCreateV30AudienceAc = '2G';
    public const Enum_3_G_StdProjectCreateV30AudienceAc = '3G';
    public const Enum_4_G_StdProjectCreateV30AudienceAc = '4G';
    public const Enum_5_G_StdProjectCreateV30AudienceAc = '5G';
    public const WIFI_StdProjectCreateV30AudienceAc = 'WIFI';

    public const ALLOWED_VALUES = [
        self::Enum_2_G_StdProjectCreateV30AudienceAc,
        self::Enum_3_G_StdProjectCreateV30AudienceAc,
        self::Enum_4_G_StdProjectCreateV30AudienceAc,
        self::Enum_5_G_StdProjectCreateV30AudienceAc,
        self::WIFI_StdProjectCreateV30AudienceAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceAc', $value));
        }
        return (string) $value;
    }
}
