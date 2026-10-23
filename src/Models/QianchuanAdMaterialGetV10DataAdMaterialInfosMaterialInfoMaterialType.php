<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType
{
    public const IMAGE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType = 'IMAGE';
    public const LIVE_ROOM_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType = 'LIVE_ROOM';
    public const TITLE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType = 'TITLE';
    public const VIDEO_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::IMAGE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType,
        self::LIVE_ROOM_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType,
        self::TITLE_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType,
        self::VIDEO_QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdMaterialGetV10DataAdMaterialInfosMaterialInfoMaterialType', $value));
        }
        return (string) $value;
    }
}
