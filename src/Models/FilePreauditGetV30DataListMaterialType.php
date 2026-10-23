<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FilePreauditGetV30DataListMaterialType
{
    public const IMAGE_FilePreauditGetV30DataListMaterialType = 'IMAGE';
    public const VIDEO_FilePreauditGetV30DataListMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::IMAGE_FilePreauditGetV30DataListMaterialType,
        self::VIDEO_FilePreauditGetV30DataListMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FilePreauditGetV30DataListMaterialType', $value));
        }
        return (string) $value;
    }
}
