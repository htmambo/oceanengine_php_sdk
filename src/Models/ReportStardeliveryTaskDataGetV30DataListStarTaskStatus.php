<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportStardeliveryTaskDataGetV30DataListStarTaskStatus
{
    public const BILLING_IN_PROGRESS_ReportStardeliveryTaskDataGetV30DataListStarTaskStatus = 'BILLING_IN_PROGRESS';
    public const CANCELLED_ReportStardeliveryTaskDataGetV30DataListStarTaskStatus = 'CANCELLED';
    public const COMPLETED_ReportStardeliveryTaskDataGetV30DataListStarTaskStatus = 'COMPLETED';
    public const PENDING_LAUNCH_ReportStardeliveryTaskDataGetV30DataListStarTaskStatus = 'PENDING_LAUNCH';
    public const PREPARATION_ReportStardeliveryTaskDataGetV30DataListStarTaskStatus = 'PREPARATION';

    public const ALLOWED_VALUES = [
        self::BILLING_IN_PROGRESS_ReportStardeliveryTaskDataGetV30DataListStarTaskStatus,
        self::CANCELLED_ReportStardeliveryTaskDataGetV30DataListStarTaskStatus,
        self::COMPLETED_ReportStardeliveryTaskDataGetV30DataListStarTaskStatus,
        self::PENDING_LAUNCH_ReportStardeliveryTaskDataGetV30DataListStarTaskStatus,
        self::PREPARATION_ReportStardeliveryTaskDataGetV30DataListStarTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportStardeliveryTaskDataGetV30DataListStarTaskStatus', $value));
        }
        return (string) $value;
    }
}
