<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskDetailV30DataStarTaskStatus
{
    public const BILLING_IN_PROGRESS_StardeliveryTaskDetailV30DataStarTaskStatus = 'BILLING_IN_PROGRESS';
    public const CANCELLED_StardeliveryTaskDetailV30DataStarTaskStatus = 'CANCELLED';
    public const COMPLETED_StardeliveryTaskDetailV30DataStarTaskStatus = 'COMPLETED';
    public const PENDING_LAUNCH_StardeliveryTaskDetailV30DataStarTaskStatus = 'PENDING_LAUNCH';
    public const PREPARATION_StardeliveryTaskDetailV30DataStarTaskStatus = 'PREPARATION';

    public const ALLOWED_VALUES = [
        self::BILLING_IN_PROGRESS_StardeliveryTaskDetailV30DataStarTaskStatus,
        self::CANCELLED_StardeliveryTaskDetailV30DataStarTaskStatus,
        self::COMPLETED_StardeliveryTaskDetailV30DataStarTaskStatus,
        self::PENDING_LAUNCH_StardeliveryTaskDetailV30DataStarTaskStatus,
        self::PREPARATION_StardeliveryTaskDetailV30DataStarTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskDetailV30DataStarTaskStatus', $value));
        }
        return (string) $value;
    }
}
