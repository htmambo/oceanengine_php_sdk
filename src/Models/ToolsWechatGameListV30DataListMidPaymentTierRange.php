<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameListV30DataListMidPaymentTierRange
{
    public const ABOVE_500_ToolsWechatGameListV30DataListMidPaymentTierRange = 'ABOVE_500';
    public const BELOW_100_ToolsWechatGameListV30DataListMidPaymentTierRange = 'BELOW_100';
    public const FROM_100_TO_500_ToolsWechatGameListV30DataListMidPaymentTierRange = 'FROM_100_TO_500';

    public const ALLOWED_VALUES = [
        self::ABOVE_500_ToolsWechatGameListV30DataListMidPaymentTierRange,
        self::BELOW_100_ToolsWechatGameListV30DataListMidPaymentTierRange,
        self::FROM_100_TO_500_ToolsWechatGameListV30DataListMidPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameListV30DataListMidPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
