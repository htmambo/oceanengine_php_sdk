<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsTaskRaiseGetV2DataReportsRaiseMode
{
    public const CUSTOM_ToolsTaskRaiseGetV2DataReportsRaiseMode = 'CUSTOM';
    public const STRONG_ToolsTaskRaiseGetV2DataReportsRaiseMode = 'STRONG';

    public const ALLOWED_VALUES = [
        self::CUSTOM_ToolsTaskRaiseGetV2DataReportsRaiseMode,
        self::STRONG_ToolsTaskRaiseGetV2DataReportsRaiseMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsTaskRaiseGetV2DataReportsRaiseMode', $value));
        }
        return (string) $value;
    }
}
