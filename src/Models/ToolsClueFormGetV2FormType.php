<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueFormGetV2FormType
{
    public const ADVANCED_CREATIVE_FORM_ToolsClueFormGetV2FormType = 'ADVANCED_CREATIVE_FORM';
    public const NATIVE_FORM_ToolsClueFormGetV2FormType = 'NATIVE_FORM';
    public const NORMAL_FORM_ToolsClueFormGetV2FormType = 'NORMAL_FORM';

    public const ALLOWED_VALUES = [
        self::ADVANCED_CREATIVE_FORM_ToolsClueFormGetV2FormType,
        self::NATIVE_FORM_ToolsClueFormGetV2FormType,
        self::NORMAL_FORM_ToolsClueFormGetV2FormType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueFormGetV2FormType', $value));
        }
        return (string) $value;
    }
}
