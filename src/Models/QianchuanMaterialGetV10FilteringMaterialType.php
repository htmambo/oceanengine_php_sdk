<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialGetV10FilteringMaterialType
{
    public const IMAGE_QianchuanMaterialGetV10FilteringMaterialType = 'IMAGE';
    public const LIVE_ROOM_QianchuanMaterialGetV10FilteringMaterialType = 'LIVE_ROOM';
    public const TITLE_QianchuanMaterialGetV10FilteringMaterialType = 'TITLE';
    public const VIDEO_QianchuanMaterialGetV10FilteringMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::IMAGE_QianchuanMaterialGetV10FilteringMaterialType,
        self::LIVE_ROOM_QianchuanMaterialGetV10FilteringMaterialType,
        self::TITLE_QianchuanMaterialGetV10FilteringMaterialType,
        self::VIDEO_QianchuanMaterialGetV10FilteringMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialGetV10FilteringMaterialType', $value));
        }
        return (string) $value;
    }
}
