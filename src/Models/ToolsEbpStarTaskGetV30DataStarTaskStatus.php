<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskGetV30DataStarTaskStatus
{
    public const BILLING_IN_PROGRESS_ToolsEbpStarTaskGetV30DataStarTaskStatus = 'BILLING_IN_PROGRESS';
    public const CANCELLED_ToolsEbpStarTaskGetV30DataStarTaskStatus = 'CANCELLED';
    public const COMPLETED_ToolsEbpStarTaskGetV30DataStarTaskStatus = 'COMPLETED';
    public const PENDING_LAUNCH_ToolsEbpStarTaskGetV30DataStarTaskStatus = 'PENDING_LAUNCH';
    public const PREPARATION_ToolsEbpStarTaskGetV30DataStarTaskStatus = 'PREPARATION';

    public const ALLOWED_VALUES = [
        self::BILLING_IN_PROGRESS_ToolsEbpStarTaskGetV30DataStarTaskStatus,
        self::CANCELLED_ToolsEbpStarTaskGetV30DataStarTaskStatus,
        self::COMPLETED_ToolsEbpStarTaskGetV30DataStarTaskStatus,
        self::PENDING_LAUNCH_ToolsEbpStarTaskGetV30DataStarTaskStatus,
        self::PREPARATION_ToolsEbpStarTaskGetV30DataStarTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskGetV30DataStarTaskStatus', $value));
        }
        return (string) $value;
    }
}
