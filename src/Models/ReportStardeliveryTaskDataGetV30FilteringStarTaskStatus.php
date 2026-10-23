<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus
{
    public const BILLING_IN_PROGRESS_ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus = 'BILLING_IN_PROGRESS';
    public const CANCELLED_ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus = 'CANCELLED';
    public const COMPLETED_ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus = 'COMPLETED';
    public const PENDING_LAUNCH_ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus = 'PENDING_LAUNCH';
    public const PREPARATION_ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus = 'PREPARATION';

    public const ALLOWED_VALUES = [
        self::BILLING_IN_PROGRESS_ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus,
        self::CANCELLED_ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus,
        self::COMPLETED_ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus,
        self::PENDING_LAUNCH_ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus,
        self::PREPARATION_ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportStardeliveryTaskDataGetV30FilteringStarTaskStatus', $value));
        }
        return (string) $value;
    }
}
