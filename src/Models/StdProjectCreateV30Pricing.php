<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30Pricing
{
    public const PRICING_CPC_StdProjectCreateV30Pricing = 'PRICING_CPC';
    public const PRICING_CPM_StdProjectCreateV30Pricing = 'PRICING_CPM';
    public const PRICING_OCPC_StdProjectCreateV30Pricing = 'PRICING_OCPC';
    public const PRICING_OCPM_StdProjectCreateV30Pricing = 'PRICING_OCPM';

    public const ALLOWED_VALUES = [
        self::PRICING_CPC_StdProjectCreateV30Pricing,
        self::PRICING_CPM_StdProjectCreateV30Pricing,
        self::PRICING_OCPC_StdProjectCreateV30Pricing,
        self::PRICING_OCPM_StdProjectCreateV30Pricing,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30Pricing', $value));
        }
        return (string) $value;
    }
}
