<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectCreateV30VideoMaterialListImageMode
{
    public const CREATIVE_IMAGE_MODE_VIDEO_UniProjectCreateV30VideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_UniProjectCreateV30VideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_VIDEO_UniProjectCreateV30VideoMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_UniProjectCreateV30VideoMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectCreateV30VideoMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
