<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMaterialListV30FilteringImageModes
{
    public const CREATIVE_IMAGE_MODE_VIDEO_ToolsEbpMaterialListV30FilteringImageModes = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_ToolsEbpMaterialListV30FilteringImageModes = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';
    public const CREATIVE_IMAGE_MODE_VIDEO_SPLASH_ToolsEbpMaterialListV30FilteringImageModes = 'CREATIVE_IMAGE_MODE_VIDEO_SPLASH';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_VIDEO_ToolsEbpMaterialListV30FilteringImageModes,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_ToolsEbpMaterialListV30FilteringImageModes,
        self::CREATIVE_IMAGE_MODE_VIDEO_SPLASH_ToolsEbpMaterialListV30FilteringImageModes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMaterialListV30FilteringImageModes', $value));
        }
        return (string) $value;
    }
}
