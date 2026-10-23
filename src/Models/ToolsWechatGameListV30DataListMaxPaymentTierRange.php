<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameListV30DataListMaxPaymentTierRange
{
    public const ABOVE_1000_ToolsWechatGameListV30DataListMaxPaymentTierRange = 'ABOVE_1000';
    public const BELOW_500_ToolsWechatGameListV30DataListMaxPaymentTierRange = 'BELOW_500';
    public const FROM_500_TO_1000_ToolsWechatGameListV30DataListMaxPaymentTierRange = 'FROM_500_TO_1000';

    public const ALLOWED_VALUES = [
        self::ABOVE_1000_ToolsWechatGameListV30DataListMaxPaymentTierRange,
        self::BELOW_500_ToolsWechatGameListV30DataListMaxPaymentTierRange,
        self::FROM_500_TO_1000_ToolsWechatGameListV30DataListMaxPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameListV30DataListMaxPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
