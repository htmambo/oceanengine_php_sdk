<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileVideoUploadTaskListV2DataListStatus
{
    public const PROCESS_FileVideoUploadTaskListV2DataListStatus = 'PROCESS';
    public const SUCCESS_FileVideoUploadTaskListV2DataListStatus = 'SUCCESS';
    public const FAILED_FileVideoUploadTaskListV2DataListStatus = 'FAILED';

    public const ALLOWED_VALUES = [
        self::PROCESS_FileVideoUploadTaskListV2DataListStatus,
        self::SUCCESS_FileVideoUploadTaskListV2DataListStatus,
        self::FAILED_FileVideoUploadTaskListV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileVideoUploadTaskListV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
