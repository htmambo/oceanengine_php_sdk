<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListVideoHpVisibility
{
    public const ALWAYS_VISIBLE_ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListVideoHpVisibility = 'ALWAYS_VISIBLE';
    public const HIDE_VIDEO_ON_HP_ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListVideoHpVisibility = 'HIDE_VIDEO_ON_HP';

    public const ALLOWED_VALUES = [
        self::ALWAYS_VISIBLE_ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListVideoHpVisibility,
        self::HIDE_VIDEO_ON_HP_ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListVideoHpVisibility,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListVideoHpVisibility', $value));
        }
        return (string) $value;
    }
}
