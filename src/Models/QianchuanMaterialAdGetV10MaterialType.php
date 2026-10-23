<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanMaterialAdGetV10MaterialType
{
    public const IMAGE_QianchuanMaterialAdGetV10MaterialType = 'IMAGE';
    public const LIVE_ROOM_QianchuanMaterialAdGetV10MaterialType = 'LIVE_ROOM';
    public const TITLE_QianchuanMaterialAdGetV10MaterialType = 'TITLE';
    public const VIDEO_QianchuanMaterialAdGetV10MaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::IMAGE_QianchuanMaterialAdGetV10MaterialType,
        self::LIVE_ROOM_QianchuanMaterialAdGetV10MaterialType,
        self::TITLE_QianchuanMaterialAdGetV10MaterialType,
        self::VIDEO_QianchuanMaterialAdGetV10MaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanMaterialAdGetV10MaterialType', $value));
        }
        return (string) $value;
    }
}
