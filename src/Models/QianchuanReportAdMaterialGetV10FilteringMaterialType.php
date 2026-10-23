<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportAdMaterialGetV10FilteringMaterialType
{
    public const IMAGE_QianchuanReportAdMaterialGetV10FilteringMaterialType = 'IMAGE';
    public const LIVE_ROOM_QianchuanReportAdMaterialGetV10FilteringMaterialType = 'LIVE_ROOM';
    public const TITLE_QianchuanReportAdMaterialGetV10FilteringMaterialType = 'TITLE';
    public const VIDEO_QianchuanReportAdMaterialGetV10FilteringMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::IMAGE_QianchuanReportAdMaterialGetV10FilteringMaterialType,
        self::LIVE_ROOM_QianchuanReportAdMaterialGetV10FilteringMaterialType,
        self::TITLE_QianchuanReportAdMaterialGetV10FilteringMaterialType,
        self::VIDEO_QianchuanReportAdMaterialGetV10FilteringMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportAdMaterialGetV10FilteringMaterialType', $value));
        }
        return (string) $value;
    }
}
