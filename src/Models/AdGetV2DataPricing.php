<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataPricing
{
    public const PRICING_CPV_AdGetV2DataPricing = 'PRICING_CPV';
    public const PRICING_CPM_AdGetV2DataPricing = 'PRICING_CPM';
    public const PRICING_CPC_OCPM_AdGetV2DataPricing = 'PRICING_CPC_OCPM';
    public const PRICING_CPC_AdGetV2DataPricing = 'PRICING_CPC';
    public const PRICING_OCPM_AdGetV2DataPricing = 'PRICING_OCPM';
    public const PRICING_OCPC_AdGetV2DataPricing = 'PRICING_OCPC';
    public const PRICING_CPA_AdGetV2DataPricing = 'PRICING_CPA';

    public const ALLOWED_VALUES = [
        self::PRICING_CPV_AdGetV2DataPricing,
        self::PRICING_CPM_AdGetV2DataPricing,
        self::PRICING_CPC_OCPM_AdGetV2DataPricing,
        self::PRICING_CPC_AdGetV2DataPricing,
        self::PRICING_OCPM_AdGetV2DataPricing,
        self::PRICING_OCPC_AdGetV2DataPricing,
        self::PRICING_CPA_AdGetV2DataPricing,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataPricing', $value));
        }
        return (string) $value;
    }
}
