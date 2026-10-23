<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsClueFormGetV2DataListSubType
{
    public const ADVANCED_CREATIVE_FORM_ToolsClueFormGetV2DataListSubType = 'ADVANCED_CREATIVE_FORM';
    public const NATIVE_FORM_ToolsClueFormGetV2DataListSubType = 'NATIVE_FORM';
    public const NORMAL_FORM_ToolsClueFormGetV2DataListSubType = 'NORMAL_FORM';

    public const ALLOWED_VALUES = [
        self::ADVANCED_CREATIVE_FORM_ToolsClueFormGetV2DataListSubType,
        self::NATIVE_FORM_ToolsClueFormGetV2DataListSubType,
        self::NORMAL_FORM_ToolsClueFormGetV2DataListSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsClueFormGetV2DataListSubType', $value));
        }
        return (string) $value;
    }
}
