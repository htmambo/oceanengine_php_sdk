<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileVideoUploadTaskListV30DataListStatus
{
    public const PROCESS_LocalFileVideoUploadTaskListV30DataListStatus = 'PROCESS';
    public const SUCCESS_LocalFileVideoUploadTaskListV30DataListStatus = 'SUCCESS';
    public const FAILED_LocalFileVideoUploadTaskListV30DataListStatus = 'FAILED';

    public const ALLOWED_VALUES = [
        self::PROCESS_LocalFileVideoUploadTaskListV30DataListStatus,
        self::SUCCESS_LocalFileVideoUploadTaskListV30DataListStatus,
        self::FAILED_LocalFileVideoUploadTaskListV30DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileVideoUploadTaskListV30DataListStatus', $value));
        }
        return (string) $value;
    }
}
