<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileVideoAdV2UploadType
{
    public const UPLOAD_BY_FILE_FileVideoAdV2UploadType = 'UPLOAD_BY_FILE';
    public const UPLOAD_BY_URL_FileVideoAdV2UploadType = 'UPLOAD_BY_URL';

    public const ALLOWED_VALUES = [
        self::UPLOAD_BY_FILE_FileVideoAdV2UploadType,
        self::UPLOAD_BY_URL_FileVideoAdV2UploadType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileVideoAdV2UploadType', $value));
        }
        return (string) $value;
    }
}
