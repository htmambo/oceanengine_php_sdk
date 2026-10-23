<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryInvoiceV2FilteringPlatform
{
    public const AD_QueryInvoiceV2FilteringPlatform = 'AD';
    public const QC_QueryInvoiceV2FilteringPlatform = 'QC';
    public const BDT_QueryInvoiceV2FilteringPlatform = 'BDT';

    public const ALLOWED_VALUES = [
        self::AD_QueryInvoiceV2FilteringPlatform,
        self::QC_QueryInvoiceV2FilteringPlatform,
        self::BDT_QueryInvoiceV2FilteringPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryInvoiceV2FilteringPlatform', $value));
        }
        return (string) $value;
    }
}
