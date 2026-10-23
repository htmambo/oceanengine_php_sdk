<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletListV30DataListMidPaymentTierRange
{
    public const ABOVE_500_ToolsWechatAppletListV30DataListMidPaymentTierRange = 'ABOVE_500';
    public const BELOW_100_ToolsWechatAppletListV30DataListMidPaymentTierRange = 'BELOW_100';
    public const FROM_100_TO_500_ToolsWechatAppletListV30DataListMidPaymentTierRange = 'FROM_100_TO_500';

    public const ALLOWED_VALUES = [
        self::ABOVE_500_ToolsWechatAppletListV30DataListMidPaymentTierRange,
        self::BELOW_100_ToolsWechatAppletListV30DataListMidPaymentTierRange,
        self::FROM_100_TO_500_ToolsWechatAppletListV30DataListMidPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletListV30DataListMidPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
