<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskListV30DataListStarTaskSubStatus
{
    public const AWAITING_ISV_ACCEPT_StardeliveryTaskListV30DataListStarTaskSubStatus = 'AWAITING_ISV_ACCEPT';
    public const AWAITING_ISV_SELECTED_StardeliveryTaskListV30DataListStarTaskSubStatus = 'AWAITING_ISV_SELECTED';
    public const CALCULATING_COSTS_StardeliveryTaskListV30DataListStarTaskSubStatus = 'CALCULATING_COSTS';
    public const NO_ISV_ACCEPT_StardeliveryTaskListV30DataListStarTaskSubStatus = 'NO_ISV_ACCEPT';
    public const REJECTED_StardeliveryTaskListV30DataListStarTaskSubStatus = 'REJECTED';
    public const SUBMISSION_IN_PROGRESS_StardeliveryTaskListV30DataListStarTaskSubStatus = 'SUBMISSION_IN_PROGRESS';
    public const UNDER_REVIEW_StardeliveryTaskListV30DataListStarTaskSubStatus = 'UNDER_REVIEW';

    public const ALLOWED_VALUES = [
        self::AWAITING_ISV_ACCEPT_StardeliveryTaskListV30DataListStarTaskSubStatus,
        self::AWAITING_ISV_SELECTED_StardeliveryTaskListV30DataListStarTaskSubStatus,
        self::CALCULATING_COSTS_StardeliveryTaskListV30DataListStarTaskSubStatus,
        self::NO_ISV_ACCEPT_StardeliveryTaskListV30DataListStarTaskSubStatus,
        self::REJECTED_StardeliveryTaskListV30DataListStarTaskSubStatus,
        self::SUBMISSION_IN_PROGRESS_StardeliveryTaskListV30DataListStarTaskSubStatus,
        self::UNDER_REVIEW_StardeliveryTaskListV30DataListStarTaskSubStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskListV30DataListStarTaskSubStatus', $value));
        }
        return (string) $value;
    }
}
