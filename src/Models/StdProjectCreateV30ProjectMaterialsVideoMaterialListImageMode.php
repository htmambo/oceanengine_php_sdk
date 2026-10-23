<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30ProjectMaterialsVideoMaterialListImageMode
{
    public const CREATIVE_IMAGE_MODE_VIDEO_StdProjectCreateV30ProjectMaterialsVideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_StdProjectCreateV30ProjectMaterialsVideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_VIDEO_StdProjectCreateV30ProjectMaterialsVideoMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_StdProjectCreateV30ProjectMaterialsVideoMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30ProjectMaterialsVideoMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
