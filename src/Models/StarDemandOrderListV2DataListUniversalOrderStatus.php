<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarDemandOrderListV2DataListUniversalOrderStatus
{
    public const ALL_StarDemandOrderListV2DataListUniversalOrderStatus = 'ALL';
    public const CANCELED_StarDemandOrderListV2DataListUniversalOrderStatus = 'CANCELED';
    public const FINISHED_StarDemandOrderListV2DataListUniversalOrderStatus = 'FINISHED';
    public const ONGOING_StarDemandOrderListV2DataListUniversalOrderStatus = 'ONGOING';
    public const RECEIVEING_StarDemandOrderListV2DataListUniversalOrderStatus = 'RECEIVEING';
    public const WAIT_EVALUATE_StarDemandOrderListV2DataListUniversalOrderStatus = 'WAIT_EVALUATE';
    public const WAIT_PAYMENT_StarDemandOrderListV2DataListUniversalOrderStatus = 'WAIT_PAYMENT';

    public const ALLOWED_VALUES = [
        self::ALL_StarDemandOrderListV2DataListUniversalOrderStatus,
        self::CANCELED_StarDemandOrderListV2DataListUniversalOrderStatus,
        self::FINISHED_StarDemandOrderListV2DataListUniversalOrderStatus,
        self::ONGOING_StarDemandOrderListV2DataListUniversalOrderStatus,
        self::RECEIVEING_StarDemandOrderListV2DataListUniversalOrderStatus,
        self::WAIT_EVALUATE_StarDemandOrderListV2DataListUniversalOrderStatus,
        self::WAIT_PAYMENT_StarDemandOrderListV2DataListUniversalOrderStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarDemandOrderListV2DataListUniversalOrderStatus', $value));
        }
        return (string) $value;
    }
}
