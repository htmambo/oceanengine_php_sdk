<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2DataListAc
{
    public const Enum_5_G_ReportCreativeGetV2DataListAc = '5G';
    public const Enum_4_G_ReportCreativeGetV2DataListAc = '4G';
    public const UNKNOWN_ReportCreativeGetV2DataListAc = 'unknown';
    public const Enum_3_G_ReportCreativeGetV2DataListAc = '3G';
    public const WIFI_ReportCreativeGetV2DataListAc = 'WIFI';
    public const Enum_2_G_ReportCreativeGetV2DataListAc = '2G';

    public const ALLOWED_VALUES = [
        self::Enum_5_G_ReportCreativeGetV2DataListAc,
        self::Enum_4_G_ReportCreativeGetV2DataListAc,
        self::UNKNOWN_ReportCreativeGetV2DataListAc,
        self::Enum_3_G_ReportCreativeGetV2DataListAc,
        self::WIFI_ReportCreativeGetV2DataListAc,
        self::Enum_2_G_ReportCreativeGetV2DataListAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2DataListAc', $value));
        }
        return (string) $value;
    }
}
