<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskListV30DataListStarTaskStatus
{
    public const BILLING_IN_PROGRESS_StardeliveryTaskListV30DataListStarTaskStatus = 'BILLING_IN_PROGRESS';
    public const CANCELLED_StardeliveryTaskListV30DataListStarTaskStatus = 'CANCELLED';
    public const COMPLETED_StardeliveryTaskListV30DataListStarTaskStatus = 'COMPLETED';
    public const PENDING_LAUNCH_StardeliveryTaskListV30DataListStarTaskStatus = 'PENDING_LAUNCH';
    public const PREPARATION_StardeliveryTaskListV30DataListStarTaskStatus = 'PREPARATION';

    public const ALLOWED_VALUES = [
        self::BILLING_IN_PROGRESS_StardeliveryTaskListV30DataListStarTaskStatus,
        self::CANCELLED_StardeliveryTaskListV30DataListStarTaskStatus,
        self::COMPLETED_StardeliveryTaskListV30DataListStarTaskStatus,
        self::PENDING_LAUNCH_StardeliveryTaskListV30DataListStarTaskStatus,
        self::PREPARATION_StardeliveryTaskListV30DataListStarTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskListV30DataListStarTaskStatus', $value));
        }
        return (string) $value;
    }
}
