<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMicroAppletUpdateV30AccountType
{
    public const EBP_ToolsEbpMicroAppletUpdateV30AccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::EBP_ToolsEbpMicroAppletUpdateV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMicroAppletUpdateV30AccountType', $value));
        }
        return (string) $value;
    }
}
