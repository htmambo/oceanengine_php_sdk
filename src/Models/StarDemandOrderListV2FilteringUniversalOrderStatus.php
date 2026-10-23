<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarDemandOrderListV2FilteringUniversalOrderStatus
{
    public const ALL_StarDemandOrderListV2FilteringUniversalOrderStatus = 'ALL';
    public const CANCELED_StarDemandOrderListV2FilteringUniversalOrderStatus = 'CANCELED';
    public const FINISHED_StarDemandOrderListV2FilteringUniversalOrderStatus = 'FINISHED';
    public const ONGOING_StarDemandOrderListV2FilteringUniversalOrderStatus = 'ONGOING';
    public const RECEIVEING_StarDemandOrderListV2FilteringUniversalOrderStatus = 'RECEIVEING';
    public const WAIT_EVALUATE_StarDemandOrderListV2FilteringUniversalOrderStatus = 'WAIT_EVALUATE';
    public const WAIT_PAYMENT_StarDemandOrderListV2FilteringUniversalOrderStatus = 'WAIT_PAYMENT';

    public const ALLOWED_VALUES = [
        self::ALL_StarDemandOrderListV2FilteringUniversalOrderStatus,
        self::CANCELED_StarDemandOrderListV2FilteringUniversalOrderStatus,
        self::FINISHED_StarDemandOrderListV2FilteringUniversalOrderStatus,
        self::ONGOING_StarDemandOrderListV2FilteringUniversalOrderStatus,
        self::RECEIVEING_StarDemandOrderListV2FilteringUniversalOrderStatus,
        self::WAIT_EVALUATE_StarDemandOrderListV2FilteringUniversalOrderStatus,
        self::WAIT_PAYMENT_StarDemandOrderListV2FilteringUniversalOrderStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarDemandOrderListV2FilteringUniversalOrderStatus', $value));
        }
        return (string) $value;
    }
}
