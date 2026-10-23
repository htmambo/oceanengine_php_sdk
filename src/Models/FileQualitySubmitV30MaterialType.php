<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileQualitySubmitV30MaterialType
{
    public const VIDEO_FileQualitySubmitV30MaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::VIDEO_FileQualitySubmitV30MaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileQualitySubmitV30MaterialType', $value));
        }
        return (string) $value;
    }
}
