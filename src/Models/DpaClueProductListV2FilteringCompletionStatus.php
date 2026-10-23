<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaClueProductListV2FilteringCompletionStatus
{
    public const AD_COMPLETED_DpaClueProductListV2FilteringCompletionStatus = 'AD_COMPLETED';
    public const ALL_COMPLETED_DpaClueProductListV2FilteringCompletionStatus = 'ALL_COMPLETED';
    public const LEADS_COMPLETED_DpaClueProductListV2FilteringCompletionStatus = 'LEADS_COMPLETED';
    public const TO_BE_COMPLETED_DpaClueProductListV2FilteringCompletionStatus = 'TO_BE_COMPLETED';

    public const ALLOWED_VALUES = [
        self::AD_COMPLETED_DpaClueProductListV2FilteringCompletionStatus,
        self::ALL_COMPLETED_DpaClueProductListV2FilteringCompletionStatus,
        self::LEADS_COMPLETED_DpaClueProductListV2FilteringCompletionStatus,
        self::TO_BE_COMPLETED_DpaClueProductListV2FilteringCompletionStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaClueProductListV2FilteringCompletionStatus', $value));
        }
        return (string) $value;
    }
}
