<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdMaterialGetV10FilteringMaterialType
{
    public const IMAGE_QianchuanAdMaterialGetV10FilteringMaterialType = 'IMAGE';
    public const TITLE_QianchuanAdMaterialGetV10FilteringMaterialType = 'TITLE';
    public const LIVE_ROOM_QianchuanAdMaterialGetV10FilteringMaterialType = 'LIVE_ROOM';
    public const VIDEO_QianchuanAdMaterialGetV10FilteringMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::IMAGE_QianchuanAdMaterialGetV10FilteringMaterialType,
        self::TITLE_QianchuanAdMaterialGetV10FilteringMaterialType,
        self::LIVE_ROOM_QianchuanAdMaterialGetV10FilteringMaterialType,
        self::VIDEO_QianchuanAdMaterialGetV10FilteringMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdMaterialGetV10FilteringMaterialType', $value));
        }
        return (string) $value;
    }
}
