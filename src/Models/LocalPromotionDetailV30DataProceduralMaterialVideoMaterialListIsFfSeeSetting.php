<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionDetailV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting
{
    public const ALWAYS_VISIBLE_LocalPromotionDetailV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting = 'ALWAYS_VISIBLE';
    public const HIDE_VIDEO_ON_HP_LocalPromotionDetailV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting = 'HIDE_VIDEO_ON_HP';
    public const UNKNOWN_LocalPromotionDetailV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting = 'UNKNOWN';

    public const ALLOWED_VALUES = [
        self::ALWAYS_VISIBLE_LocalPromotionDetailV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting,
        self::HIDE_VIDEO_ON_HP_LocalPromotionDetailV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting,
        self::UNKNOWN_LocalPromotionDetailV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionDetailV30DataProceduralMaterialVideoMaterialListIsFfSeeSetting', $value));
        }
        return (string) $value;
    }
}
