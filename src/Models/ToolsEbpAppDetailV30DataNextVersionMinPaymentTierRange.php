<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataNextVersionMinPaymentTierRange
{
    public const SIX_TEN_ToolsEbpAppDetailV30DataNextVersionMinPaymentTierRange = 'SIX_TEN';
    public const TEN_TWENTY_ToolsEbpAppDetailV30DataNextVersionMinPaymentTierRange = 'TEN_TWENTY';
    public const TWENTY_FIFTY_ToolsEbpAppDetailV30DataNextVersionMinPaymentTierRange = 'TWENTY_FIFTY';
    public const ZERO_FIVE_ToolsEbpAppDetailV30DataNextVersionMinPaymentTierRange = 'ZERO_FIVE';

    public const ALLOWED_VALUES = [
        self::SIX_TEN_ToolsEbpAppDetailV30DataNextVersionMinPaymentTierRange,
        self::TEN_TWENTY_ToolsEbpAppDetailV30DataNextVersionMinPaymentTierRange,
        self::TWENTY_FIFTY_ToolsEbpAppDetailV30DataNextVersionMinPaymentTierRange,
        self::ZERO_FIVE_ToolsEbpAppDetailV30DataNextVersionMinPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataNextVersionMinPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
