<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskListV30FilteringStarTaskStatus
{
    public const BILLING_IN_PROGRESS_StardeliveryTaskListV30FilteringStarTaskStatus = 'BILLING_IN_PROGRESS';
    public const CANCELLED_StardeliveryTaskListV30FilteringStarTaskStatus = 'CANCELLED';
    public const COMPLETED_StardeliveryTaskListV30FilteringStarTaskStatus = 'COMPLETED';
    public const PENDING_LAUNCH_StardeliveryTaskListV30FilteringStarTaskStatus = 'PENDING_LAUNCH';
    public const PREPARATION_StardeliveryTaskListV30FilteringStarTaskStatus = 'PREPARATION';

    public const ALLOWED_VALUES = [
        self::BILLING_IN_PROGRESS_StardeliveryTaskListV30FilteringStarTaskStatus,
        self::CANCELLED_StardeliveryTaskListV30FilteringStarTaskStatus,
        self::COMPLETED_StardeliveryTaskListV30FilteringStarTaskStatus,
        self::PENDING_LAUNCH_StardeliveryTaskListV30FilteringStarTaskStatus,
        self::PREPARATION_StardeliveryTaskListV30FilteringStarTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskListV30FilteringStarTaskStatus', $value));
        }
        return (string) $value;
    }
}
