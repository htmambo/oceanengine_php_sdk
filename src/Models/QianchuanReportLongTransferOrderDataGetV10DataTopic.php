<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportLongTransferOrderDataGetV10DataTopic
{
    public const LONG_TRANSFER_ORDER_QianchuanReportLongTransferOrderDataGetV10DataTopic = 'LONG_TRANSFER_ORDER';

    public const ALLOWED_VALUES = [
        self::LONG_TRANSFER_ORDER_QianchuanReportLongTransferOrderDataGetV10DataTopic,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportLongTransferOrderDataGetV10DataTopic', $value));
        }
        return (string) $value;
    }
}
