<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportLongTransferOrderGetV10DataListIsPay
{
    public const PAID_QianchuanReportLongTransferOrderGetV10DataListIsPay = 'PAID';
    public const UNPAID_QianchuanReportLongTransferOrderGetV10DataListIsPay = 'UNPAID';

    public const ALLOWED_VALUES = [
        self::PAID_QianchuanReportLongTransferOrderGetV10DataListIsPay,
        self::UNPAID_QianchuanReportLongTransferOrderGetV10DataListIsPay,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportLongTransferOrderGetV10DataListIsPay', $value));
        }
        return (string) $value;
    }
}
