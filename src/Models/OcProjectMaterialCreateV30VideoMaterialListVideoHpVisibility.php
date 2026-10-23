<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialCreateV30VideoMaterialListVideoHpVisibility
{
    public const ALWAYS_VISIBLE_OcProjectMaterialCreateV30VideoMaterialListVideoHpVisibility = 'ALWAYS_VISIBLE';
    public const HIDE_VIDEO_ON_HP_OcProjectMaterialCreateV30VideoMaterialListVideoHpVisibility = 'HIDE_VIDEO_ON_HP';

    public const ALLOWED_VALUES = [
        self::ALWAYS_VISIBLE_OcProjectMaterialCreateV30VideoMaterialListVideoHpVisibility,
        self::HIDE_VIDEO_ON_HP_OcProjectMaterialCreateV30VideoMaterialListVideoHpVisibility,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialCreateV30VideoMaterialListVideoHpVisibility', $value));
        }
        return (string) $value;
    }
}
