<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataNextVersionMaxPaymentTierRange
{
    public const ABOVE_1000_ToolsEbpAppDetailV30DataNextVersionMaxPaymentTierRange = 'ABOVE_1000';
    public const BELOW_500_ToolsEbpAppDetailV30DataNextVersionMaxPaymentTierRange = 'BELOW_500';
    public const FROM_500_TO_1000_ToolsEbpAppDetailV30DataNextVersionMaxPaymentTierRange = 'FROM_500_TO_1000';

    public const ALLOWED_VALUES = [
        self::ABOVE_1000_ToolsEbpAppDetailV30DataNextVersionMaxPaymentTierRange,
        self::BELOW_500_ToolsEbpAppDetailV30DataNextVersionMaxPaymentTierRange,
        self::FROM_500_TO_1000_ToolsEbpAppDetailV30DataNextVersionMaxPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataNextVersionMaxPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
