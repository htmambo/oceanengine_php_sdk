<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FilePreauditGetV30FilteringMaterialType
{
    public const VIDEO_FilePreauditGetV30FilteringMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::VIDEO_FilePreauditGetV30FilteringMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FilePreauditGetV30FilteringMaterialType', $value));
        }
        return (string) $value;
    }
}
