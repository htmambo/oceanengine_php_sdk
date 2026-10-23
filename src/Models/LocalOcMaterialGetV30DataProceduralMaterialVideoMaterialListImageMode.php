<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListImageMode
{
    public const IMAGE_MODE_VIDEO_LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListImageMode = 'IMAGE_MODE_VIDEO';
    public const IMAGE_MODE_VIDEO_VERTICAL_LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListImageMode = 'IMAGE_MODE_VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::IMAGE_MODE_VIDEO_LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListImageMode,
        self::IMAGE_MODE_VIDEO_VERTICAL_LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcMaterialGetV30DataProceduralMaterialVideoMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
