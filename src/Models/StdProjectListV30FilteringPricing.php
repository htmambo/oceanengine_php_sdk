<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30FilteringPricing
{
    public const PRICING_CPC_StdProjectListV30FilteringPricing = 'PRICING_CPC';
    public const PRICING_CPM_StdProjectListV30FilteringPricing = 'PRICING_CPM';
    public const PRICING_OCPC_StdProjectListV30FilteringPricing = 'PRICING_OCPC';
    public const PRICING_OCPM_StdProjectListV30FilteringPricing = 'PRICING_OCPM';

    public const ALLOWED_VALUES = [
        self::PRICING_CPC_StdProjectListV30FilteringPricing,
        self::PRICING_CPM_StdProjectListV30FilteringPricing,
        self::PRICING_OCPC_StdProjectListV30FilteringPricing,
        self::PRICING_OCPM_StdProjectListV30FilteringPricing,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30FilteringPricing', $value));
        }
        return (string) $value;
    }
}
