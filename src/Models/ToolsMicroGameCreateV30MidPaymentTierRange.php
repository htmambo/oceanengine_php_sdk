<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameCreateV30MidPaymentTierRange
{
    public const ABOVE_500_ToolsMicroGameCreateV30MidPaymentTierRange = 'ABOVE_500';
    public const BELOW_100_ToolsMicroGameCreateV30MidPaymentTierRange = 'BELOW_100';
    public const FROM_100_TO_500_ToolsMicroGameCreateV30MidPaymentTierRange = 'FROM_100_TO_500';

    public const ALLOWED_VALUES = [
        self::ABOVE_500_ToolsMicroGameCreateV30MidPaymentTierRange,
        self::BELOW_100_ToolsMicroGameCreateV30MidPaymentTierRange,
        self::FROM_100_TO_500_ToolsMicroGameCreateV30MidPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameCreateV30MidPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
