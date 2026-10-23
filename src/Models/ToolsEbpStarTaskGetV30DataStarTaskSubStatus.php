<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskGetV30DataStarTaskSubStatus
{
    public const AWAITING_ISV_ACCEPT_ToolsEbpStarTaskGetV30DataStarTaskSubStatus = 'AWAITING_ISV_ACCEPT';
    public const AWAITING_ISV_SELECTED_ToolsEbpStarTaskGetV30DataStarTaskSubStatus = 'AWAITING_ISV_SELECTED';
    public const CALCULATING_COSTS_ToolsEbpStarTaskGetV30DataStarTaskSubStatus = 'CALCULATING_COSTS';
    public const NO_ISV_ACCEPT_ToolsEbpStarTaskGetV30DataStarTaskSubStatus = 'NO_ISV_ACCEPT';
    public const REJECTED_ToolsEbpStarTaskGetV30DataStarTaskSubStatus = 'REJECTED';
    public const SUBMISSION_IN_PROGRESS_ToolsEbpStarTaskGetV30DataStarTaskSubStatus = 'SUBMISSION_IN_PROGRESS';
    public const UNDER_REVIEW_ToolsEbpStarTaskGetV30DataStarTaskSubStatus = 'UNDER_REVIEW';

    public const ALLOWED_VALUES = [
        self::AWAITING_ISV_ACCEPT_ToolsEbpStarTaskGetV30DataStarTaskSubStatus,
        self::AWAITING_ISV_SELECTED_ToolsEbpStarTaskGetV30DataStarTaskSubStatus,
        self::CALCULATING_COSTS_ToolsEbpStarTaskGetV30DataStarTaskSubStatus,
        self::NO_ISV_ACCEPT_ToolsEbpStarTaskGetV30DataStarTaskSubStatus,
        self::REJECTED_ToolsEbpStarTaskGetV30DataStarTaskSubStatus,
        self::SUBMISSION_IN_PROGRESS_ToolsEbpStarTaskGetV30DataStarTaskSubStatus,
        self::UNDER_REVIEW_ToolsEbpStarTaskGetV30DataStarTaskSubStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskGetV30DataStarTaskSubStatus', $value));
        }
        return (string) $value;
    }
}
