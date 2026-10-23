<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataNextVersionMidPaymentTierRange
{
    public const ABOVE_500_ToolsEbpAppDetailV30DataNextVersionMidPaymentTierRange = 'ABOVE_500';
    public const BELOW_100_ToolsEbpAppDetailV30DataNextVersionMidPaymentTierRange = 'BELOW_100';
    public const FROM_100_TO_500_ToolsEbpAppDetailV30DataNextVersionMidPaymentTierRange = 'FROM_100_TO_500';

    public const ALLOWED_VALUES = [
        self::ABOVE_500_ToolsEbpAppDetailV30DataNextVersionMidPaymentTierRange,
        self::BELOW_100_ToolsEbpAppDetailV30DataNextVersionMidPaymentTierRange,
        self::FROM_100_TO_500_ToolsEbpAppDetailV30DataNextVersionMidPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataNextVersionMidPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
