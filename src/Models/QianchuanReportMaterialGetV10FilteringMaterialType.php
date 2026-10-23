<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportMaterialGetV10FilteringMaterialType
{
    public const VIDEO_QianchuanReportMaterialGetV10FilteringMaterialType = 'video';
    public const IMAGE_QianchuanReportMaterialGetV10FilteringMaterialType = 'image';
    public const CAROUSEL_QianchuanReportMaterialGetV10FilteringMaterialType = 'carousel';

    public const ALLOWED_VALUES = [
        self::VIDEO_QianchuanReportMaterialGetV10FilteringMaterialType,
        self::IMAGE_QianchuanReportMaterialGetV10FilteringMaterialType,
        self::CAROUSEL_QianchuanReportMaterialGetV10FilteringMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportMaterialGetV10FilteringMaterialType', $value));
        }
        return (string) $value;
    }
}
