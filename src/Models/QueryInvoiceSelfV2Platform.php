<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QueryInvoiceSelfV2Platform
{
    public const AD_QueryInvoiceSelfV2Platform = 'AD';
    public const QC_QueryInvoiceSelfV2Platform = 'QC';
    public const BDT_QueryInvoiceSelfV2Platform = 'BDT';

    public const ALLOWED_VALUES = [
        self::AD_QueryInvoiceSelfV2Platform,
        self::QC_QueryInvoiceSelfV2Platform,
        self::BDT_QueryInvoiceSelfV2Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QueryInvoiceSelfV2Platform', $value));
        }
        return (string) $value;
    }
}
