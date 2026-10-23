<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarStarAdUniteTaskListV2FilteringStatus
{
    public const ALL_StarStarAdUniteTaskListV2FilteringStatus = 'ALL';
    public const CANCELED_StarStarAdUniteTaskListV2FilteringStatus = 'CANCELED';
    public const FINISHED_StarStarAdUniteTaskListV2FilteringStatus = 'FINISHED';
    public const ONGOING_StarStarAdUniteTaskListV2FilteringStatus = 'ONGOING';
    public const RECEIVEING_StarStarAdUniteTaskListV2FilteringStatus = 'RECEIVEING';
    public const WAIT_EVALUATE_StarStarAdUniteTaskListV2FilteringStatus = 'WAIT_EVALUATE';
    public const WAIT_PAYMENT_StarStarAdUniteTaskListV2FilteringStatus = 'WAIT_PAYMENT';

    public const ALLOWED_VALUES = [
        self::ALL_StarStarAdUniteTaskListV2FilteringStatus,
        self::CANCELED_StarStarAdUniteTaskListV2FilteringStatus,
        self::FINISHED_StarStarAdUniteTaskListV2FilteringStatus,
        self::ONGOING_StarStarAdUniteTaskListV2FilteringStatus,
        self::RECEIVEING_StarStarAdUniteTaskListV2FilteringStatus,
        self::WAIT_EVALUATE_StarStarAdUniteTaskListV2FilteringStatus,
        self::WAIT_PAYMENT_StarStarAdUniteTaskListV2FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarStarAdUniteTaskListV2FilteringStatus', $value));
        }
        return (string) $value;
    }
}
