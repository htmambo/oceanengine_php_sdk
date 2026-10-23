<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppUpdateV30MinPaymentTierRange
{
    public const SIX_TEN_ToolsMicroAppUpdateV30MinPaymentTierRange = 'SIX_TEN';
    public const TEN_TWENTY_ToolsMicroAppUpdateV30MinPaymentTierRange = 'TEN_TWENTY';
    public const TWENTY_FIFTY_ToolsMicroAppUpdateV30MinPaymentTierRange = 'TWENTY_FIFTY';
    public const ZERO_FIVE_ToolsMicroAppUpdateV30MinPaymentTierRange = 'ZERO_FIVE';

    public const ALLOWED_VALUES = [
        self::SIX_TEN_ToolsMicroAppUpdateV30MinPaymentTierRange,
        self::TEN_TWENTY_ToolsMicroAppUpdateV30MinPaymentTierRange,
        self::TWENTY_FIFTY_ToolsMicroAppUpdateV30MinPaymentTierRange,
        self::ZERO_FIVE_ToolsMicroAppUpdateV30MinPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppUpdateV30MinPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
