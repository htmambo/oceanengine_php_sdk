<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataCurrentVersionMaxPaymentTierRange
{
    public const ABOVE_1000_ToolsEbpAppDetailV30DataCurrentVersionMaxPaymentTierRange = 'ABOVE_1000';
    public const BELOW_500_ToolsEbpAppDetailV30DataCurrentVersionMaxPaymentTierRange = 'BELOW_500';
    public const FROM_500_TO_1000_ToolsEbpAppDetailV30DataCurrentVersionMaxPaymentTierRange = 'FROM_500_TO_1000';

    public const ALLOWED_VALUES = [
        self::ABOVE_1000_ToolsEbpAppDetailV30DataCurrentVersionMaxPaymentTierRange,
        self::BELOW_500_ToolsEbpAppDetailV30DataCurrentVersionMaxPaymentTierRange,
        self::FROM_500_TO_1000_ToolsEbpAppDetailV30DataCurrentVersionMaxPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataCurrentVersionMaxPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
