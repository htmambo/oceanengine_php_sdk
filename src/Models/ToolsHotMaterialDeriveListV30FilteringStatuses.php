<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsHotMaterialDeriveListV30FilteringStatuses
{
    public const FAILED_ToolsHotMaterialDeriveListV30FilteringStatuses = 'FAILED';
    public const INIT_ToolsHotMaterialDeriveListV30FilteringStatuses = 'INIT';
    public const PART_SUCCESS_ToolsHotMaterialDeriveListV30FilteringStatuses = 'PART_SUCCESS';
    public const PROCESSING_ToolsHotMaterialDeriveListV30FilteringStatuses = 'PROCESSING';
    public const SUCCESS_ToolsHotMaterialDeriveListV30FilteringStatuses = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::FAILED_ToolsHotMaterialDeriveListV30FilteringStatuses,
        self::INIT_ToolsHotMaterialDeriveListV30FilteringStatuses,
        self::PART_SUCCESS_ToolsHotMaterialDeriveListV30FilteringStatuses,
        self::PROCESSING_ToolsHotMaterialDeriveListV30FilteringStatuses,
        self::SUCCESS_ToolsHotMaterialDeriveListV30FilteringStatuses,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsHotMaterialDeriveListV30FilteringStatuses', $value));
        }
        return (string) $value;
    }
}
