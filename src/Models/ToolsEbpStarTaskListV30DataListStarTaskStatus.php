<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskListV30DataListStarTaskStatus
{
    public const BILLING_IN_PROGRESS_ToolsEbpStarTaskListV30DataListStarTaskStatus = 'BILLING_IN_PROGRESS';
    public const CANCELLED_ToolsEbpStarTaskListV30DataListStarTaskStatus = 'CANCELLED';
    public const COMPLETED_ToolsEbpStarTaskListV30DataListStarTaskStatus = 'COMPLETED';
    public const PENDING_LAUNCH_ToolsEbpStarTaskListV30DataListStarTaskStatus = 'PENDING_LAUNCH';
    public const PREPARATION_ToolsEbpStarTaskListV30DataListStarTaskStatus = 'PREPARATION';

    public const ALLOWED_VALUES = [
        self::BILLING_IN_PROGRESS_ToolsEbpStarTaskListV30DataListStarTaskStatus,
        self::CANCELLED_ToolsEbpStarTaskListV30DataListStarTaskStatus,
        self::COMPLETED_ToolsEbpStarTaskListV30DataListStarTaskStatus,
        self::PENDING_LAUNCH_ToolsEbpStarTaskListV30DataListStarTaskStatus,
        self::PREPARATION_ToolsEbpStarTaskListV30DataListStarTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskListV30DataListStarTaskStatus', $value));
        }
        return (string) $value;
    }
}
