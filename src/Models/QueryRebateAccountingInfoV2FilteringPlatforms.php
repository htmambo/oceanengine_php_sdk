<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryRebateAccountingInfoV2FilteringPlatforms
{
    public const AD_QueryRebateAccountingInfoV2FilteringPlatforms = 'AD';
    public const ECOMMERCE_QueryRebateAccountingInfoV2FilteringPlatforms = 'ECOMMERCE';
    public const FC_QueryRebateAccountingInfoV2FilteringPlatforms = 'FC';
    public const NATIVE_QueryRebateAccountingInfoV2FilteringPlatforms = 'NATIVE';
    public const QC_QueryRebateAccountingInfoV2FilteringPlatforms = 'QC';
    public const STAR_QueryRebateAccountingInfoV2FilteringPlatforms = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_QueryRebateAccountingInfoV2FilteringPlatforms,
        self::ECOMMERCE_QueryRebateAccountingInfoV2FilteringPlatforms,
        self::FC_QueryRebateAccountingInfoV2FilteringPlatforms,
        self::NATIVE_QueryRebateAccountingInfoV2FilteringPlatforms,
        self::QC_QueryRebateAccountingInfoV2FilteringPlatforms,
        self::STAR_QueryRebateAccountingInfoV2FilteringPlatforms,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryRebateAccountingInfoV2FilteringPlatforms', $value));
        }
        return (string) $value;
    }
}
