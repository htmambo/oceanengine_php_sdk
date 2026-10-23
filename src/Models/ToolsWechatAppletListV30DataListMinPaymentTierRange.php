<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletListV30DataListMinPaymentTierRange
{
    public const SIX_TEN_ToolsWechatAppletListV30DataListMinPaymentTierRange = 'SIX_TEN';
    public const TEN_TWENTY_ToolsWechatAppletListV30DataListMinPaymentTierRange = 'TEN_TWENTY';
    public const TWENTY_FIFTY_ToolsWechatAppletListV30DataListMinPaymentTierRange = 'TWENTY_FIFTY';
    public const ZERO_FIVE_ToolsWechatAppletListV30DataListMinPaymentTierRange = 'ZERO_FIVE';

    public const ALLOWED_VALUES = [
        self::SIX_TEN_ToolsWechatAppletListV30DataListMinPaymentTierRange,
        self::TEN_TWENTY_ToolsWechatAppletListV30DataListMinPaymentTierRange,
        self::TWENTY_FIFTY_ToolsWechatAppletListV30DataListMinPaymentTierRange,
        self::ZERO_FIVE_ToolsWechatAppletListV30DataListMinPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletListV30DataListMinPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
