<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting
{
    public const ALWAYS_VISIBLE_LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting = 'ALWAYS_VISIBLE';
    public const HIDE_VIDEO_ON_HP_LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting = 'HIDE_VIDEO_ON_HP';

    public const ALLOWED_VALUES = [
        self::ALWAYS_VISIBLE_LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting,
        self::HIDE_VIDEO_ON_HP_LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting', $value));
        }
        return (string) $value;
    }
}
