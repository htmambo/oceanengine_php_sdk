<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppUpdateV30MaxPaymentTierRange
{
    public const ABOVE_1000_ToolsEbpAppUpdateV30MaxPaymentTierRange = 'ABOVE_1000';
    public const BELOW_500_ToolsEbpAppUpdateV30MaxPaymentTierRange = 'BELOW_500';
    public const FROM_500_TO_1000_ToolsEbpAppUpdateV30MaxPaymentTierRange = 'FROM_500_TO_1000';

    public const ALLOWED_VALUES = [
        self::ABOVE_1000_ToolsEbpAppUpdateV30MaxPaymentTierRange,
        self::BELOW_500_ToolsEbpAppUpdateV30MaxPaymentTierRange,
        self::FROM_500_TO_1000_ToolsEbpAppUpdateV30MaxPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppUpdateV30MaxPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
