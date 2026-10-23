<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameConvertWindowUpdateV30AccountType
{
    public const AD_ToolsMicroGameConvertWindowUpdateV30AccountType = 'AD';
    public const EBP_ToolsMicroGameConvertWindowUpdateV30AccountType = 'EBP';

    public const ALLOWED_VALUES = [
        self::AD_ToolsMicroGameConvertWindowUpdateV30AccountType,
        self::EBP_ToolsMicroGameConvertWindowUpdateV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameConvertWindowUpdateV30AccountType', $value));
        }
        return (string) $value;
    }
}
