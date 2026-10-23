<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskListV30FilteringStarTaskStatus
{
    public const BILLING_IN_PROGRESS_ToolsEbpStarTaskListV30FilteringStarTaskStatus = 'BILLING_IN_PROGRESS';
    public const CANCELLED_ToolsEbpStarTaskListV30FilteringStarTaskStatus = 'CANCELLED';
    public const COMPLETED_ToolsEbpStarTaskListV30FilteringStarTaskStatus = 'COMPLETED';
    public const PENDING_LAUNCH_ToolsEbpStarTaskListV30FilteringStarTaskStatus = 'PENDING_LAUNCH';
    public const PREPARATION_ToolsEbpStarTaskListV30FilteringStarTaskStatus = 'PREPARATION';

    public const ALLOWED_VALUES = [
        self::BILLING_IN_PROGRESS_ToolsEbpStarTaskListV30FilteringStarTaskStatus,
        self::CANCELLED_ToolsEbpStarTaskListV30FilteringStarTaskStatus,
        self::COMPLETED_ToolsEbpStarTaskListV30FilteringStarTaskStatus,
        self::PENDING_LAUNCH_ToolsEbpStarTaskListV30FilteringStarTaskStatus,
        self::PREPARATION_ToolsEbpStarTaskListV30FilteringStarTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskListV30FilteringStarTaskStatus', $value));
        }
        return (string) $value;
    }
}
