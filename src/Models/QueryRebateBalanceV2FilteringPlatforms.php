<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateBalanceV2FilteringPlatforms
{
    public const AD_QueryRebateBalanceV2FilteringPlatforms = 'AD';
    public const ECOMMERCE_QueryRebateBalanceV2FilteringPlatforms = 'ECOMMERCE';
    public const FC_QueryRebateBalanceV2FilteringPlatforms = 'FC';
    public const NATIVE_QueryRebateBalanceV2FilteringPlatforms = 'NATIVE';
    public const QC_QueryRebateBalanceV2FilteringPlatforms = 'QC';
    public const STAR_QueryRebateBalanceV2FilteringPlatforms = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_QueryRebateBalanceV2FilteringPlatforms,
        self::ECOMMERCE_QueryRebateBalanceV2FilteringPlatforms,
        self::FC_QueryRebateBalanceV2FilteringPlatforms,
        self::NATIVE_QueryRebateBalanceV2FilteringPlatforms,
        self::QC_QueryRebateBalanceV2FilteringPlatforms,
        self::STAR_QueryRebateBalanceV2FilteringPlatforms,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateBalanceV2FilteringPlatforms', $value));
        }
        return (string) $value;
    }
}
