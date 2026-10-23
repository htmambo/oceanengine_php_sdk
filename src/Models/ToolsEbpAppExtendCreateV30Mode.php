<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppExtendCreateV30Mode
{
    public const AUTO_ToolsEbpAppExtendCreateV30Mode = 'Auto';
    public const CUSTOMIZE_ToolsEbpAppExtendCreateV30Mode = 'Customize';
    public const MANUAL_ToolsEbpAppExtendCreateV30Mode = 'Manual';

    public const ALLOWED_VALUES = [
        self::AUTO_ToolsEbpAppExtendCreateV30Mode,
        self::CUSTOMIZE_ToolsEbpAppExtendCreateV30Mode,
        self::MANUAL_ToolsEbpAppExtendCreateV30Mode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppExtendCreateV30Mode', $value));
        }
        return (string) $value;
    }
}
