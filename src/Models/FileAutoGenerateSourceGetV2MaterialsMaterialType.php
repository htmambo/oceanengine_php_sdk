<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileAutoGenerateSourceGetV2MaterialsMaterialType
{
    public const VIDEO_FileAutoGenerateSourceGetV2MaterialsMaterialType = 'video';
    public const IMAGE_FileAutoGenerateSourceGetV2MaterialsMaterialType = 'image';

    public const ALLOWED_VALUES = [
        self::VIDEO_FileAutoGenerateSourceGetV2MaterialsMaterialType,
        self::IMAGE_FileAutoGenerateSourceGetV2MaterialsMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileAutoGenerateSourceGetV2MaterialsMaterialType', $value));
        }
        return (string) $value;
    }
}
