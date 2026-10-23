<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileImageAdvertiserV2UploadType
{
    public const UPLOAD_BY_FILE_FileImageAdvertiserV2UploadType = 'UPLOAD_BY_FILE';
    public const UPLOAD_BY_URL_FileImageAdvertiserV2UploadType = 'UPLOAD_BY_URL';

    public const ALLOWED_VALUES = [
        self::UPLOAD_BY_FILE_FileImageAdvertiserV2UploadType,
        self::UPLOAD_BY_URL_FileImageAdvertiserV2UploadType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileImageAdvertiserV2UploadType', $value));
        }
        return (string) $value;
    }
}
