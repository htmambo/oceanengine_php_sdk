<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionCreateV30ProceduralMaterialVideoMaterialListIsFfSeeSetting
{
    public const ALWAYS_VISIBLE_LocalPromotionCreateV30ProceduralMaterialVideoMaterialListIsFfSeeSetting = 'ALWAYS_VISIBLE';
    public const HIDE_VIDEO_ON_HP_LocalPromotionCreateV30ProceduralMaterialVideoMaterialListIsFfSeeSetting = 'HIDE_VIDEO_ON_HP';

    public const ALLOWED_VALUES = [
        self::ALWAYS_VISIBLE_LocalPromotionCreateV30ProceduralMaterialVideoMaterialListIsFfSeeSetting,
        self::HIDE_VIDEO_ON_HP_LocalPromotionCreateV30ProceduralMaterialVideoMaterialListIsFfSeeSetting,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionCreateV30ProceduralMaterialVideoMaterialListIsFfSeeSetting', $value));
        }
        return (string) $value;
    }
}
