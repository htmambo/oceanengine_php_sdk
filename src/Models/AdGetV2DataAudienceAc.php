<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceAc
{
    public const Enum_5_G_AdGetV2DataAudienceAc = '5G';
    public const Enum_4_G_AdGetV2DataAudienceAc = '4G';
    public const Enum_3_G_AdGetV2DataAudienceAc = '3G';
    public const WIFI_AdGetV2DataAudienceAc = 'WIFI';
    public const Enum_2_G_AdGetV2DataAudienceAc = '2G';

    public const ALLOWED_VALUES = [
        self::Enum_5_G_AdGetV2DataAudienceAc,
        self::Enum_4_G_AdGetV2DataAudienceAc,
        self::Enum_3_G_AdGetV2DataAudienceAc,
        self::WIFI_AdGetV2DataAudienceAc,
        self::Enum_2_G_AdGetV2DataAudienceAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceAc', $value));
        }
        return (string) $value;
    }
}
