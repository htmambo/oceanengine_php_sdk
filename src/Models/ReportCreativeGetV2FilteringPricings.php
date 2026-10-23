<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCreativeGetV2FilteringPricings
{
    public const PRICING_CPV_ReportCreativeGetV2FilteringPricings = 'PRICING_CPV';
    public const PRICING_CPM_ReportCreativeGetV2FilteringPricings = 'PRICING_CPM';
    public const PRICING_ECPC_ReportCreativeGetV2FilteringPricings = 'PRICING_ECPC';
    public const PRICING_CPC_ReportCreativeGetV2FilteringPricings = 'PRICING_CPC';
    public const PRICING_OCPM_ReportCreativeGetV2FilteringPricings = 'PRICING_OCPM';
    public const PRICING_OCPC_ReportCreativeGetV2FilteringPricings = 'PRICING_OCPC';
    public const PRICING_CPA_ReportCreativeGetV2FilteringPricings = 'PRICING_CPA';

    public const ALLOWED_VALUES = [
        self::PRICING_CPV_ReportCreativeGetV2FilteringPricings,
        self::PRICING_CPM_ReportCreativeGetV2FilteringPricings,
        self::PRICING_ECPC_ReportCreativeGetV2FilteringPricings,
        self::PRICING_CPC_ReportCreativeGetV2FilteringPricings,
        self::PRICING_OCPM_ReportCreativeGetV2FilteringPricings,
        self::PRICING_OCPC_ReportCreativeGetV2FilteringPricings,
        self::PRICING_CPA_ReportCreativeGetV2FilteringPricings,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCreativeGetV2FilteringPricings', $value));
        }
        return (string) $value;
    }
}
