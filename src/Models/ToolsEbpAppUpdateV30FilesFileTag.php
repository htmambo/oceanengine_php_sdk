<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppUpdateV30FilesFileTag
{
    public const AGE_REMINDER_ToolsEbpAppUpdateV30FilesFileTag = 'AGE_REMINDER';
    public const ANTI_ADDICTION_TIPS_ToolsEbpAppUpdateV30FilesFileTag = 'ANTI_ADDICTION_TIPS';
    public const DEFAULT_ToolsEbpAppUpdateV30FilesFileTag = 'DEFAULT';
    public const MATERIAL_SCREENSHOT_ToolsEbpAppUpdateV30FilesFileTag = 'MATERIAL_SCREENSHOT';
    public const REAL_NAME_VERIFIED_ToolsEbpAppUpdateV30FilesFileTag = 'REAL_NAME_VERIFIED';

    public const ALLOWED_VALUES = [
        self::AGE_REMINDER_ToolsEbpAppUpdateV30FilesFileTag,
        self::ANTI_ADDICTION_TIPS_ToolsEbpAppUpdateV30FilesFileTag,
        self::DEFAULT_ToolsEbpAppUpdateV30FilesFileTag,
        self::MATERIAL_SCREENSHOT_ToolsEbpAppUpdateV30FilesFileTag,
        self::REAL_NAME_VERIFIED_ToolsEbpAppUpdateV30FilesFileTag,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppUpdateV30FilesFileTag', $value));
        }
        return (string) $value;
    }
}
