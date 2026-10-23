<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataCurrentVersionMidPaymentTierRange
{
    public const ABOVE_500_ToolsEbpAppDetailV30DataCurrentVersionMidPaymentTierRange = 'ABOVE_500';
    public const BELOW_100_ToolsEbpAppDetailV30DataCurrentVersionMidPaymentTierRange = 'BELOW_100';
    public const FROM_100_TO_500_ToolsEbpAppDetailV30DataCurrentVersionMidPaymentTierRange = 'FROM_100_TO_500';

    public const ALLOWED_VALUES = [
        self::ABOVE_500_ToolsEbpAppDetailV30DataCurrentVersionMidPaymentTierRange,
        self::BELOW_100_ToolsEbpAppDetailV30DataCurrentVersionMidPaymentTierRange,
        self::FROM_100_TO_500_ToolsEbpAppDetailV30DataCurrentVersionMidPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataCurrentVersionMidPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
