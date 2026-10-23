<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataCurrentVersionMinPaymentTierRange
{
    public const SIX_TEN_ToolsEbpAppDetailV30DataCurrentVersionMinPaymentTierRange = 'SIX_TEN';
    public const TEN_TWENTY_ToolsEbpAppDetailV30DataCurrentVersionMinPaymentTierRange = 'TEN_TWENTY';
    public const TWENTY_FIFTY_ToolsEbpAppDetailV30DataCurrentVersionMinPaymentTierRange = 'TWENTY_FIFTY';
    public const ZERO_FIVE_ToolsEbpAppDetailV30DataCurrentVersionMinPaymentTierRange = 'ZERO_FIVE';

    public const ALLOWED_VALUES = [
        self::SIX_TEN_ToolsEbpAppDetailV30DataCurrentVersionMinPaymentTierRange,
        self::TEN_TWENTY_ToolsEbpAppDetailV30DataCurrentVersionMinPaymentTierRange,
        self::TWENTY_FIFTY_ToolsEbpAppDetailV30DataCurrentVersionMinPaymentTierRange,
        self::ZERO_FIVE_ToolsEbpAppDetailV30DataCurrentVersionMinPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataCurrentVersionMinPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
