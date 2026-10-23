<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileVideoMaterialClearTaskResultGetV2DataClearResultClearResult
{
    public const FAIL_FileVideoMaterialClearTaskResultGetV2DataClearResultClearResult = 'FAIL';
    public const PART_SUCCESS_FileVideoMaterialClearTaskResultGetV2DataClearResultClearResult = 'PART_SUCCESS';
    public const SUCCESS_FileVideoMaterialClearTaskResultGetV2DataClearResultClearResult = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAIL_FileVideoMaterialClearTaskResultGetV2DataClearResultClearResult,
        self::PART_SUCCESS_FileVideoMaterialClearTaskResultGetV2DataClearResultClearResult,
        self::SUCCESS_FileVideoMaterialClearTaskResultGetV2DataClearResultClearResult,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileVideoMaterialClearTaskResultGetV2DataClearResultClearResult', $value));
        }
        return (string) $value;
    }
}
