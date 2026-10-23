<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListImageMode
{
    public const CREATIVE_IMAGE_MODE_VIDEO_ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_VIDEO_ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsProjectMaterialTypeUpdateV30MaterialListVideoMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
