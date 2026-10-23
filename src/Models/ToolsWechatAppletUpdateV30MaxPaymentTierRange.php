<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletUpdateV30MaxPaymentTierRange
{
    public const ABOVE_1000_ToolsWechatAppletUpdateV30MaxPaymentTierRange = 'ABOVE_1000';
    public const BELOW_500_ToolsWechatAppletUpdateV30MaxPaymentTierRange = 'BELOW_500';
    public const FROM_500_TO_1000_ToolsWechatAppletUpdateV30MaxPaymentTierRange = 'FROM_500_TO_1000';

    public const ALLOWED_VALUES = [
        self::ABOVE_1000_ToolsWechatAppletUpdateV30MaxPaymentTierRange,
        self::BELOW_500_ToolsWechatAppletUpdateV30MaxPaymentTierRange,
        self::FROM_500_TO_1000_ToolsWechatAppletUpdateV30MaxPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletUpdateV30MaxPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
