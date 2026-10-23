<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30ProjectMaterialsVideoMaterialListVideoHpVisibility
{
    public const ALWAYS_VISIBLE_StdProjectCreateV30ProjectMaterialsVideoMaterialListVideoHpVisibility = 'ALWAYS_VISIBLE';
    public const HIDE_VIDEO_ON_HP_StdProjectCreateV30ProjectMaterialsVideoMaterialListVideoHpVisibility = 'HIDE_VIDEO_ON_HP';

    public const ALLOWED_VALUES = [
        self::ALWAYS_VISIBLE_StdProjectCreateV30ProjectMaterialsVideoMaterialListVideoHpVisibility,
        self::HIDE_VIDEO_ON_HP_StdProjectCreateV30ProjectMaterialsVideoMaterialListVideoHpVisibility,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30ProjectMaterialsVideoMaterialListVideoHpVisibility', $value));
        }
        return (string) $value;
    }
}
