<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppUpdateV30FilesFileType
{
    public const APK_ToolsEbpAppUpdateV30FilesFileType = 'APK';
    public const IMAGE_ToolsEbpAppUpdateV30FilesFileType = 'IMAGE';
    public const VIDEO_ToolsEbpAppUpdateV30FilesFileType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::APK_ToolsEbpAppUpdateV30FilesFileType,
        self::IMAGE_ToolsEbpAppUpdateV30FilesFileType,
        self::VIDEO_ToolsEbpAppUpdateV30FilesFileType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppUpdateV30FilesFileType', $value));
        }
        return (string) $value;
    }
}
