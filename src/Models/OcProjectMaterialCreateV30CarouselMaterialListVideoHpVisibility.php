<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialCreateV30CarouselMaterialListVideoHpVisibility
{
    public const ALWAYS_VISIBLE_OcProjectMaterialCreateV30CarouselMaterialListVideoHpVisibility = 'ALWAYS_VISIBLE';
    public const HIDE_VIDEO_ON_HP_OcProjectMaterialCreateV30CarouselMaterialListVideoHpVisibility = 'HIDE_VIDEO_ON_HP';

    public const ALLOWED_VALUES = [
        self::ALWAYS_VISIBLE_OcProjectMaterialCreateV30CarouselMaterialListVideoHpVisibility,
        self::HIDE_VIDEO_ON_HP_OcProjectMaterialCreateV30CarouselMaterialListVideoHpVisibility,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialCreateV30CarouselMaterialListVideoHpVisibility', $value));
        }
        return (string) $value;
    }
}
