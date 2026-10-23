<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceAc
{
    public const Enum_2_G_QianchuanAdDetailGetV10DataAudienceAc = '2G';
    public const Enum_3_G_QianchuanAdDetailGetV10DataAudienceAc = '3G';
    public const Enum_4_G_QianchuanAdDetailGetV10DataAudienceAc = '4G';
    public const Enum_5_G_QianchuanAdDetailGetV10DataAudienceAc = '5G';
    public const WIFI_QianchuanAdDetailGetV10DataAudienceAc = 'WIFI';

    public const ALLOWED_VALUES = [
        self::Enum_2_G_QianchuanAdDetailGetV10DataAudienceAc,
        self::Enum_3_G_QianchuanAdDetailGetV10DataAudienceAc,
        self::Enum_4_G_QianchuanAdDetailGetV10DataAudienceAc,
        self::Enum_5_G_QianchuanAdDetailGetV10DataAudienceAc,
        self::WIFI_QianchuanAdDetailGetV10DataAudienceAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceAc', $value));
        }
        return (string) $value;
    }
}
