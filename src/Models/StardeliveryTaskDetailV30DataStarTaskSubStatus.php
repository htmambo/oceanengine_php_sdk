<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StardeliveryTaskDetailV30DataStarTaskSubStatus
{
    public const AWAITING_ISV_ACCEPT_StardeliveryTaskDetailV30DataStarTaskSubStatus = 'AWAITING_ISV_ACCEPT';
    public const AWAITING_ISV_SELECTED_StardeliveryTaskDetailV30DataStarTaskSubStatus = 'AWAITING_ISV_SELECTED';
    public const CALCULATING_COSTS_StardeliveryTaskDetailV30DataStarTaskSubStatus = 'CALCULATING_COSTS';
    public const NO_ISV_ACCEPT_StardeliveryTaskDetailV30DataStarTaskSubStatus = 'NO_ISV_ACCEPT';
    public const REJECTED_StardeliveryTaskDetailV30DataStarTaskSubStatus = 'REJECTED';
    public const SUBMISSION_IN_PROGRESS_StardeliveryTaskDetailV30DataStarTaskSubStatus = 'SUBMISSION_IN_PROGRESS';
    public const UNDER_REVIEW_StardeliveryTaskDetailV30DataStarTaskSubStatus = 'UNDER_REVIEW';

    public const ALLOWED_VALUES = [
        self::AWAITING_ISV_ACCEPT_StardeliveryTaskDetailV30DataStarTaskSubStatus,
        self::AWAITING_ISV_SELECTED_StardeliveryTaskDetailV30DataStarTaskSubStatus,
        self::CALCULATING_COSTS_StardeliveryTaskDetailV30DataStarTaskSubStatus,
        self::NO_ISV_ACCEPT_StardeliveryTaskDetailV30DataStarTaskSubStatus,
        self::REJECTED_StardeliveryTaskDetailV30DataStarTaskSubStatus,
        self::SUBMISSION_IN_PROGRESS_StardeliveryTaskDetailV30DataStarTaskSubStatus,
        self::UNDER_REVIEW_StardeliveryTaskDetailV30DataStarTaskSubStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StardeliveryTaskDetailV30DataStarTaskSubStatus', $value));
        }
        return (string) $value;
    }
}
