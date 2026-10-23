<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsTaskRaiseGetV2PlatformVersion
{
    public const V2_ToolsTaskRaiseGetV2PlatformVersion = 'V2';

    public const ALLOWED_VALUES = [
        self::V2_ToolsTaskRaiseGetV2PlatformVersion,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsTaskRaiseGetV2PlatformVersion', $value));
        }
        return (string) $value;
    }
}
