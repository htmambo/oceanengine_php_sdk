<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileVideoGetV30FilteringImageMode
{
    public const IMAGE_MODE_VIDEO_LocalFileVideoGetV30FilteringImageMode = 'IMAGE_MODE_VIDEO';
    public const IMAGE_MODE_VIDEO_VERTICAL_LocalFileVideoGetV30FilteringImageMode = 'IMAGE_MODE_VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::IMAGE_MODE_VIDEO_LocalFileVideoGetV30FilteringImageMode,
        self::IMAGE_MODE_VIDEO_VERTICAL_LocalFileVideoGetV30FilteringImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileVideoGetV30FilteringImageMode', $value));
        }
        return (string) $value;
    }
}
