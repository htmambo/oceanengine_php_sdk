<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType
{
    public const IMAGE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType = 'IMAGE';
    public const LIVE_ROOM_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType = 'LIVE_ROOM';
    public const TITLE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType = 'TITLE';
    public const VIDEO_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::IMAGE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType,
        self::LIVE_ROOM_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType,
        self::TITLE_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType,
        self::VIDEO_QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType', $value));
        }
        return (string) $value;
    }
}
