<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsTaskRaiseCreateV2RaiseMode
{
    public const CUSTOM_ToolsTaskRaiseCreateV2RaiseMode = 'CUSTOM';
    public const STRONG_ToolsTaskRaiseCreateV2RaiseMode = 'STRONG';

    public const ALLOWED_VALUES = [
        self::CUSTOM_ToolsTaskRaiseCreateV2RaiseMode,
        self::STRONG_ToolsTaskRaiseCreateV2RaiseMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsTaskRaiseCreateV2RaiseMode', $value));
        }
        return (string) $value;
    }
}
