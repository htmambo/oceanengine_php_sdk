<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataCarouselMaterialListVideoHpVisibility
{
    public const ALWAYS_VISIBLE_OcProjectMaterialGetV30DataCarouselMaterialListVideoHpVisibility = 'ALWAYS_VISIBLE';
    public const HIDE_VIDEO_ON_HP_OcProjectMaterialGetV30DataCarouselMaterialListVideoHpVisibility = 'HIDE_VIDEO_ON_HP';

    public const ALLOWED_VALUES = [
        self::ALWAYS_VISIBLE_OcProjectMaterialGetV30DataCarouselMaterialListVideoHpVisibility,
        self::HIDE_VIDEO_ON_HP_OcProjectMaterialGetV30DataCarouselMaterialListVideoHpVisibility,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataCarouselMaterialListVideoHpVisibility', $value));
        }
        return (string) $value;
    }
}
