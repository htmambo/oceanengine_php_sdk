<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameCreateV30MinPaymentTierRange
{
    public const SIX_TEN_ToolsWechatGameCreateV30MinPaymentTierRange = 'SIX_TEN';
    public const TEN_TWENTY_ToolsWechatGameCreateV30MinPaymentTierRange = 'TEN_TWENTY';
    public const TWENTY_FIFTY_ToolsWechatGameCreateV30MinPaymentTierRange = 'TWENTY_FIFTY';
    public const ZERO_FIVE_ToolsWechatGameCreateV30MinPaymentTierRange = 'ZERO_FIVE';

    public const ALLOWED_VALUES = [
        self::SIX_TEN_ToolsWechatGameCreateV30MinPaymentTierRange,
        self::TEN_TWENTY_ToolsWechatGameCreateV30MinPaymentTierRange,
        self::TWENTY_FIFTY_ToolsWechatGameCreateV30MinPaymentTierRange,
        self::ZERO_FIVE_ToolsWechatGameCreateV30MinPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameCreateV30MinPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
