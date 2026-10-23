<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsHotMaterialDeriveGetV30DataTaskDetailsStatus
{
    public const FAILED_ToolsHotMaterialDeriveGetV30DataTaskDetailsStatus = 'FAILED';
    public const INIT_ToolsHotMaterialDeriveGetV30DataTaskDetailsStatus = 'INIT';
    public const PART_SUCCESS_ToolsHotMaterialDeriveGetV30DataTaskDetailsStatus = 'PART_SUCCESS';
    public const PROCESSING_ToolsHotMaterialDeriveGetV30DataTaskDetailsStatus = 'PROCESSING';
    public const SUCCESS_ToolsHotMaterialDeriveGetV30DataTaskDetailsStatus = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAILED_ToolsHotMaterialDeriveGetV30DataTaskDetailsStatus,
        self::INIT_ToolsHotMaterialDeriveGetV30DataTaskDetailsStatus,
        self::PART_SUCCESS_ToolsHotMaterialDeriveGetV30DataTaskDetailsStatus,
        self::PROCESSING_ToolsHotMaterialDeriveGetV30DataTaskDetailsStatus,
        self::SUCCESS_ToolsHotMaterialDeriveGetV30DataTaskDetailsStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsHotMaterialDeriveGetV30DataTaskDetailsStatus', $value));
        }
        return (string) $value;
    }
}
