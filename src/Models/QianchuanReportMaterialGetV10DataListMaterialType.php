<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportMaterialGetV10DataListMaterialType
{
    public const VIDEO_QianchuanReportMaterialGetV10DataListMaterialType = 'video';
    public const IMAGE_QianchuanReportMaterialGetV10DataListMaterialType = 'image';
    public const CAROUSEL_QianchuanReportMaterialGetV10DataListMaterialType = 'carousel';

    public const ALLOWED_VALUES = [
        self::VIDEO_QianchuanReportMaterialGetV10DataListMaterialType,
        self::IMAGE_QianchuanReportMaterialGetV10DataListMaterialType,
        self::CAROUSEL_QianchuanReportMaterialGetV10DataListMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportMaterialGetV10DataListMaterialType', $value));
        }
        return (string) $value;
    }
}
