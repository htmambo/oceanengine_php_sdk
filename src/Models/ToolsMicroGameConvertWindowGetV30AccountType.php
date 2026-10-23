<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameConvertWindowGetV30AccountType
{
    public const AD_ToolsMicroGameConvertWindowGetV30AccountType = 'AD';
    public const EBP_ToolsMicroGameConvertWindowGetV30AccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::AD_ToolsMicroGameConvertWindowGetV30AccountType,
        self::EBP_ToolsMicroGameConvertWindowGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameConvertWindowGetV30AccountType', $value));
        }
        return (string) $value;
    }
}
