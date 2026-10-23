<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsHotMaterialDeriveListV30DataDataStatus
{
    public const FAILED_ToolsHotMaterialDeriveListV30DataDataStatus = 'FAILED';
    public const INIT_ToolsHotMaterialDeriveListV30DataDataStatus = 'INIT';
    public const PART_SUCCESS_ToolsHotMaterialDeriveListV30DataDataStatus = 'PART_SUCCESS';
    public const PROCESSING_ToolsHotMaterialDeriveListV30DataDataStatus = 'PROCESSING';
    public const SUCCESS_ToolsHotMaterialDeriveListV30DataDataStatus = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAILED_ToolsHotMaterialDeriveListV30DataDataStatus,
        self::INIT_ToolsHotMaterialDeriveListV30DataDataStatus,
        self::PART_SUCCESS_ToolsHotMaterialDeriveListV30DataDataStatus,
        self::PROCESSING_ToolsHotMaterialDeriveListV30DataDataStatus,
        self::SUCCESS_ToolsHotMaterialDeriveListV30DataDataStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsHotMaterialDeriveListV30DataDataStatus', $value));
        }
        return (string) $value;
    }
}
