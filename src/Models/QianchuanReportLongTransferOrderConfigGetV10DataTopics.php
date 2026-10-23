<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportLongTransferOrderConfigGetV10DataTopics
{
    public const LONG_TRANSFER_ORDER_QianchuanReportLongTransferOrderConfigGetV10DataTopics = 'LONG_TRANSFER_ORDER';

    public const ALLOWED_VALUES = [
        self::LONG_TRANSFER_ORDER_QianchuanReportLongTransferOrderConfigGetV10DataTopics,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportLongTransferOrderConfigGetV10DataTopics', $value));
        }
        return (string) $value;
    }
}
