<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaClueProductListV2DataProductsCompletionStatus
{
    public const AD_COMPLETED_DpaClueProductListV2DataProductsCompletionStatus = 'AD_COMPLETED';
    public const ALL_COMPLETED_DpaClueProductListV2DataProductsCompletionStatus = 'ALL_COMPLETED';
    public const LEADS_COMPLETED_DpaClueProductListV2DataProductsCompletionStatus = 'LEADS_COMPLETED';
    public const TO_BE_COMPLETED_DpaClueProductListV2DataProductsCompletionStatus = 'TO_BE_COMPLETED';

    public const ALLOWED_VALUES = [
        self::AD_COMPLETED_DpaClueProductListV2DataProductsCompletionStatus,
        self::ALL_COMPLETED_DpaClueProductListV2DataProductsCompletionStatus,
        self::LEADS_COMPLETED_DpaClueProductListV2DataProductsCompletionStatus,
        self::TO_BE_COMPLETED_DpaClueProductListV2DataProductsCompletionStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaClueProductListV2DataProductsCompletionStatus', $value));
        }
        return (string) $value;
    }
}
