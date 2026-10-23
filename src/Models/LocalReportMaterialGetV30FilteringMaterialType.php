<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportMaterialGetV30FilteringMaterialType
{
    public const CASURAL_LocalReportMaterialGetV30FilteringMaterialType = 'CASURAL';
    public const VIDEO_LocalReportMaterialGetV30FilteringMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::CASURAL_LocalReportMaterialGetV30FilteringMaterialType,
        self::VIDEO_LocalReportMaterialGetV30FilteringMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportMaterialGetV30FilteringMaterialType', $value));
        }
        return (string) $value;
    }
}
