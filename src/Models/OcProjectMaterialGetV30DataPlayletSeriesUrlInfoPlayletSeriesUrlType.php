<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataPlayletSeriesUrlInfoPlayletSeriesUrlType
{
    public const IAA_OcProjectMaterialGetV30DataPlayletSeriesUrlInfoPlayletSeriesUrlType = 'IAA';
    public const IAP_OcProjectMaterialGetV30DataPlayletSeriesUrlInfoPlayletSeriesUrlType = 'IAP';

    public const ALLOWED_VALUES = [
        self::IAA_OcProjectMaterialGetV30DataPlayletSeriesUrlInfoPlayletSeriesUrlType,
        self::IAP_OcProjectMaterialGetV30DataPlayletSeriesUrlInfoPlayletSeriesUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataPlayletSeriesUrlInfoPlayletSeriesUrlType', $value));
        }
        return (string) $value;
    }
}
