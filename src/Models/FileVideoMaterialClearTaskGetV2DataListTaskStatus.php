<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileVideoMaterialClearTaskGetV2DataListTaskStatus
{
    public const DONE_FileVideoMaterialClearTaskGetV2DataListTaskStatus = 'DONE';
    public const RUNNING_FileVideoMaterialClearTaskGetV2DataListTaskStatus = 'RUNNING';
    public const TIMEOUT_FileVideoMaterialClearTaskGetV2DataListTaskStatus = 'TIMEOUT';

    public const ALLOWED_VALUES = [
        self::DONE_FileVideoMaterialClearTaskGetV2DataListTaskStatus,
        self::RUNNING_FileVideoMaterialClearTaskGetV2DataListTaskStatus,
        self::TIMEOUT_FileVideoMaterialClearTaskGetV2DataListTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileVideoMaterialClearTaskGetV2DataListTaskStatus', $value));
        }
        return (string) $value;
    }
}
