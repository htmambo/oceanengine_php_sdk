<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMaterialListV30DataDataVideosSource
{
    public const OPEN_API_ToolsEbpMaterialListV30DataDataVideosSource = 'OPEN_API';
    public const EBP_PLATFORM_ToolsEbpMaterialListV30DataDataVideosSource = 'EBP_PLATFORM';
    public const EBP_IMPORT_TOOL_ToolsEbpMaterialListV30DataDataVideosSource = 'EBP_IMPORT_TOOL';

    public const ALLOWED_VALUES = [
        self::OPEN_API_ToolsEbpMaterialListV30DataDataVideosSource,
        self::EBP_PLATFORM_ToolsEbpMaterialListV30DataDataVideosSource,
        self::EBP_IMPORT_TOOL_ToolsEbpMaterialListV30DataDataVideosSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMaterialListV30DataDataVideosSource', $value));
        }
        return (string) $value;
    }
}
