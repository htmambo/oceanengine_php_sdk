<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileEbpVideoGetV30FilteringImageModes
{
    public const CREATIVE_IMAGE_MODE_VIDEO_FileEbpVideoGetV30FilteringImageModes = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_FileEbpVideoGetV30FilteringImageModes = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_VIDEO_FileEbpVideoGetV30FilteringImageModes,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_FileEbpVideoGetV30FilteringImageModes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileEbpVideoGetV30FilteringImageModes', $value));
        }
        return (string) $value;
    }
}
