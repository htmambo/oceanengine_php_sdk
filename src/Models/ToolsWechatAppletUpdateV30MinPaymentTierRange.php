<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletUpdateV30MinPaymentTierRange
{
    public const SIX_TEN_ToolsWechatAppletUpdateV30MinPaymentTierRange = 'SIX_TEN';
    public const TEN_TWENTY_ToolsWechatAppletUpdateV30MinPaymentTierRange = 'TEN_TWENTY';
    public const TWENTY_FIFTY_ToolsWechatAppletUpdateV30MinPaymentTierRange = 'TWENTY_FIFTY';
    public const ZERO_FIVE_ToolsWechatAppletUpdateV30MinPaymentTierRange = 'ZERO_FIVE';

    public const ALLOWED_VALUES = [
        self::SIX_TEN_ToolsWechatAppletUpdateV30MinPaymentTierRange,
        self::TEN_TWENTY_ToolsWechatAppletUpdateV30MinPaymentTierRange,
        self::TWENTY_FIFTY_ToolsWechatAppletUpdateV30MinPaymentTierRange,
        self::ZERO_FIVE_ToolsWechatAppletUpdateV30MinPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletUpdateV30MinPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
