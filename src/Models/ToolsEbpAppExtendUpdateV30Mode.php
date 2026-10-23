<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppExtendUpdateV30Mode
{
    public const AUTO_ToolsEbpAppExtendUpdateV30Mode = 'Auto';
    public const CUSTOMIZE_ToolsEbpAppExtendUpdateV30Mode = 'Customize';
    public const MANUAL_ToolsEbpAppExtendUpdateV30Mode = 'Manual';

    public const ALLOWED_VALUES = [
        self::AUTO_ToolsEbpAppExtendUpdateV30Mode,
        self::CUSTOMIZE_ToolsEbpAppExtendUpdateV30Mode,
        self::MANUAL_ToolsEbpAppExtendUpdateV30Mode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppExtendUpdateV30Mode', $value));
        }
        return (string) $value;
    }
}
