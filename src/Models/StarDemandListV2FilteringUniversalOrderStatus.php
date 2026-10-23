<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarDemandListV2FilteringUniversalOrderStatus
{
    public const ALL_StarDemandListV2FilteringUniversalOrderStatus = 'ALL';
    public const CANCELED_StarDemandListV2FilteringUniversalOrderStatus = 'CANCELED';
    public const FINISHED_StarDemandListV2FilteringUniversalOrderStatus = 'FINISHED';
    public const ONGOING_StarDemandListV2FilteringUniversalOrderStatus = 'ONGOING';
    public const RECEIVEING_StarDemandListV2FilteringUniversalOrderStatus = 'RECEIVEING';
    public const WAIT_EVALUATE_StarDemandListV2FilteringUniversalOrderStatus = 'WAIT_EVALUATE';
    public const WAIT_PAYMENT_StarDemandListV2FilteringUniversalOrderStatus = 'WAIT_PAYMENT';

    public const ALLOWED_VALUES = [
        self::ALL_StarDemandListV2FilteringUniversalOrderStatus,
        self::CANCELED_StarDemandListV2FilteringUniversalOrderStatus,
        self::FINISHED_StarDemandListV2FilteringUniversalOrderStatus,
        self::ONGOING_StarDemandListV2FilteringUniversalOrderStatus,
        self::RECEIVEING_StarDemandListV2FilteringUniversalOrderStatus,
        self::WAIT_EVALUATE_StarDemandListV2FilteringUniversalOrderStatus,
        self::WAIT_PAYMENT_StarDemandListV2FilteringUniversalOrderStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarDemandListV2FilteringUniversalOrderStatus', $value));
        }
        return (string) $value;
    }
}
