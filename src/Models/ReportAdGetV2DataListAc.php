<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2DataListAc
{
    public const Enum_5_G_ReportAdGetV2DataListAc = '5G';
    public const Enum_4_G_ReportAdGetV2DataListAc = '4G';
    public const UNKNOWN_ReportAdGetV2DataListAc = 'unknown';
    public const Enum_3_G_ReportAdGetV2DataListAc = '3G';
    public const WIFI_ReportAdGetV2DataListAc = 'WIFI';
    public const Enum_2_G_ReportAdGetV2DataListAc = '2G';

    public const ALLOWED_VALUES = [
        self::Enum_5_G_ReportAdGetV2DataListAc,
        self::Enum_4_G_ReportAdGetV2DataListAc,
        self::UNKNOWN_ReportAdGetV2DataListAc,
        self::Enum_3_G_ReportAdGetV2DataListAc,
        self::WIFI_ReportAdGetV2DataListAc,
        self::Enum_2_G_ReportAdGetV2DataListAc,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2DataListAc', $value));
        }
        return (string) $value;
    }
}
