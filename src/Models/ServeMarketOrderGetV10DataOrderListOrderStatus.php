<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ServeMarketOrderGetV10DataOrderListOrderStatus
{
    public const UNPAID_ServeMarketOrderGetV10DataOrderListOrderStatus = 'UNPAID';
    public const CANCELED_ServeMarketOrderGetV10DataOrderListOrderStatus = 'CANCELED';
    public const OVERTIME_CANCELED_ServeMarketOrderGetV10DataOrderListOrderStatus = 'OVERTIME_CANCELED';
    public const SERVING_ServeMarketOrderGetV10DataOrderListOrderStatus = 'SERVING';
    public const REFUND_APPLY_ServeMarketOrderGetV10DataOrderListOrderStatus = 'REFUND_APPLY';
    public const REFUND_REJECT_ServeMarketOrderGetV10DataOrderListOrderStatus = 'REFUND_REJECT';
    public const REFUND_APPROVED_ServeMarketOrderGetV10DataOrderListOrderStatus = 'REFUND_APPROVED';
    public const REFUND_SUCCESS_ServeMarketOrderGetV10DataOrderListOrderStatus = 'REFUND_SUCCESS';
    public const DELIVERED_ServeMarketOrderGetV10DataOrderListOrderStatus = 'DELIVERED';
    public const FINISHED_ServeMarketOrderGetV10DataOrderListOrderStatus = 'FINISHED';
    public const OVERTIME_FINISHED_ServeMarketOrderGetV10DataOrderListOrderStatus = 'OVERTIME_FINISHED';
    public const DELIVERY_REJECT_ServeMarketOrderGetV10DataOrderListOrderStatus = 'DELIVERY_REJECT';

    public const ALLOWED_VALUES = [
        self::UNPAID_ServeMarketOrderGetV10DataOrderListOrderStatus,
        self::CANCELED_ServeMarketOrderGetV10DataOrderListOrderStatus,
        self::OVERTIME_CANCELED_ServeMarketOrderGetV10DataOrderListOrderStatus,
        self::SERVING_ServeMarketOrderGetV10DataOrderListOrderStatus,
        self::REFUND_APPLY_ServeMarketOrderGetV10DataOrderListOrderStatus,
        self::REFUND_REJECT_ServeMarketOrderGetV10DataOrderListOrderStatus,
        self::REFUND_APPROVED_ServeMarketOrderGetV10DataOrderListOrderStatus,
        self::REFUND_SUCCESS_ServeMarketOrderGetV10DataOrderListOrderStatus,
        self::DELIVERED_ServeMarketOrderGetV10DataOrderListOrderStatus,
        self::FINISHED_ServeMarketOrderGetV10DataOrderListOrderStatus,
        self::OVERTIME_FINISHED_ServeMarketOrderGetV10DataOrderListOrderStatus,
        self::DELIVERY_REJECT_ServeMarketOrderGetV10DataOrderListOrderStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ServeMarketOrderGetV10DataOrderListOrderStatus', $value));
        }
        return (string) $value;
    }
}
