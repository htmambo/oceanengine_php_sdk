<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaEbpClueProductGetV30DataProductsCompletionStatus
{
    public const AD_COMPLETED_DpaEbpClueProductGetV30DataProductsCompletionStatus = 'AD_COMPLETED';
    public const ALL_COMPLETED_DpaEbpClueProductGetV30DataProductsCompletionStatus = 'ALL_COMPLETED';
    public const LEADS_COMPLETED_DpaEbpClueProductGetV30DataProductsCompletionStatus = 'LEADS_COMPLETED';
    public const TO_BE_COMPLETED_DpaEbpClueProductGetV30DataProductsCompletionStatus = 'TO_BE_COMPLETED';

    public const ALLOWED_VALUES = [
        self::AD_COMPLETED_DpaEbpClueProductGetV30DataProductsCompletionStatus,
        self::ALL_COMPLETED_DpaEbpClueProductGetV30DataProductsCompletionStatus,
        self::LEADS_COMPLETED_DpaEbpClueProductGetV30DataProductsCompletionStatus,
        self::TO_BE_COMPLETED_DpaEbpClueProductGetV30DataProductsCompletionStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaEbpClueProductGetV30DataProductsCompletionStatus', $value));
        }
        return (string) $value;
    }
}
