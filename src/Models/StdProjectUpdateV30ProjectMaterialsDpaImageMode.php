<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30ProjectMaterialsDpaImageMode
{
    public const CREATIVE_IMAGE_MODE_LARGE_StdProjectUpdateV30ProjectMaterialsDpaImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_SMALL_StdProjectUpdateV30ProjectMaterialsDpaImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_StdProjectUpdateV30ProjectMaterialsDpaImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_VIDEO_StdProjectUpdateV30ProjectMaterialsDpaImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_StdProjectUpdateV30ProjectMaterialsDpaImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_LARGE_StdProjectUpdateV30ProjectMaterialsDpaImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_StdProjectUpdateV30ProjectMaterialsDpaImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_StdProjectUpdateV30ProjectMaterialsDpaImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_StdProjectUpdateV30ProjectMaterialsDpaImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_StdProjectUpdateV30ProjectMaterialsDpaImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30ProjectMaterialsDpaImageMode', $value));
        }
        return (string) $value;
    }
}
