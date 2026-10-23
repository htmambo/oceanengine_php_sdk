<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportLongTransferOrderGetV10DataListPayType
{
    public const DIRECT_QianchuanReportLongTransferOrderGetV10DataListPayType = 'DIRECT';
    public const INDIRECT_QianchuanReportLongTransferOrderGetV10DataListPayType = 'INDIRECT';

    public const ALLOWED_VALUES = [
        self::DIRECT_QianchuanReportLongTransferOrderGetV10DataListPayType,
        self::INDIRECT_QianchuanReportLongTransferOrderGetV10DataListPayType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportLongTransferOrderGetV10DataListPayType', $value));
        }
        return (string) $value;
    }
}
