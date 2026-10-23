<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameListV30DataListMinPaymentTierRange
{
    public const SIX_TEN_ToolsMicroGameListV30DataListMinPaymentTierRange = 'SIX_TEN';
    public const TEN_TWENTY_ToolsMicroGameListV30DataListMinPaymentTierRange = 'TEN_TWENTY';
    public const TWENTY_FIFTY_ToolsMicroGameListV30DataListMinPaymentTierRange = 'TWENTY_FIFTY';
    public const ZERO_FIVE_ToolsMicroGameListV30DataListMinPaymentTierRange = 'ZERO_FIVE';

    public const ALLOWED_VALUES = [
        self::SIX_TEN_ToolsMicroGameListV30DataListMinPaymentTierRange,
        self::TEN_TWENTY_ToolsMicroGameListV30DataListMinPaymentTierRange,
        self::TWENTY_FIFTY_ToolsMicroGameListV30DataListMinPaymentTierRange,
        self::ZERO_FIVE_ToolsMicroGameListV30DataListMinPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameListV30DataListMinPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
