<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskListV30DataListStarTaskSubStatus
{
    public const AWAITING_ISV_ACCEPT_ToolsEbpStarTaskListV30DataListStarTaskSubStatus = 'AWAITING_ISV_ACCEPT';
    public const AWAITING_ISV_SELECTED_ToolsEbpStarTaskListV30DataListStarTaskSubStatus = 'AWAITING_ISV_SELECTED';
    public const CALCULATING_COSTS_ToolsEbpStarTaskListV30DataListStarTaskSubStatus = 'CALCULATING_COSTS';
    public const NO_ISV_ACCEPT_ToolsEbpStarTaskListV30DataListStarTaskSubStatus = 'NO_ISV_ACCEPT';
    public const REJECTED_ToolsEbpStarTaskListV30DataListStarTaskSubStatus = 'REJECTED';
    public const SUBMISSION_IN_PROGRESS_ToolsEbpStarTaskListV30DataListStarTaskSubStatus = 'SUBMISSION_IN_PROGRESS';
    public const UNDER_REVIEW_ToolsEbpStarTaskListV30DataListStarTaskSubStatus = 'UNDER_REVIEW';

    public const ALLOWED_VALUES = [
        self::AWAITING_ISV_ACCEPT_ToolsEbpStarTaskListV30DataListStarTaskSubStatus,
        self::AWAITING_ISV_SELECTED_ToolsEbpStarTaskListV30DataListStarTaskSubStatus,
        self::CALCULATING_COSTS_ToolsEbpStarTaskListV30DataListStarTaskSubStatus,
        self::NO_ISV_ACCEPT_ToolsEbpStarTaskListV30DataListStarTaskSubStatus,
        self::REJECTED_ToolsEbpStarTaskListV30DataListStarTaskSubStatus,
        self::SUBMISSION_IN_PROGRESS_ToolsEbpStarTaskListV30DataListStarTaskSubStatus,
        self::UNDER_REVIEW_ToolsEbpStarTaskListV30DataListStarTaskSubStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskListV30DataListStarTaskSubStatus', $value));
        }
        return (string) $value;
    }
}
