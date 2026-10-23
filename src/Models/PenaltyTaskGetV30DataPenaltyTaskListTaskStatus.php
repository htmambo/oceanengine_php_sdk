<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PenaltyTaskGetV30DataPenaltyTaskListTaskStatus
{
    public const APPEAL_FINISH_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus = 'APPEAL_FINISH';
    public const APPEAL_ING_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus = 'APPEAL_ING';
    public const BUSINESS_SECURITY_APPEAL_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus = 'BUSINESS_SECURITY_APPEAL';
    public const CONFIRM_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus = 'CONFIRM';
    public const CONTEXT_WAITING_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus = 'CONTEXT_WAITING';
    public const INIT_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus = 'INIT';
    public const PENALTY_PART_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus = 'PENALTY_PART';
    public const PENALTY_PAUSE_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus = 'PENALTY_PAUSE';
    public const PENALTY_SUCCESS_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus = 'PENALTY_SUCCESS';
    public const TERMINAL_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus = 'TERMINAL';
    public const WAIT_CONFIRM_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus = 'WAIT_CONFIRM';

    public const ALLOWED_VALUES = [
        self::APPEAL_FINISH_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus,
        self::APPEAL_ING_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus,
        self::BUSINESS_SECURITY_APPEAL_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus,
        self::CONFIRM_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus,
        self::CONTEXT_WAITING_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus,
        self::INIT_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus,
        self::PENALTY_PART_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus,
        self::PENALTY_PAUSE_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus,
        self::PENALTY_SUCCESS_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus,
        self::TERMINAL_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus,
        self::WAIT_CONFIRM_PenaltyTaskGetV30DataPenaltyTaskListTaskStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PenaltyTaskGetV30DataPenaltyTaskListTaskStatus', $value));
        }
        return (string) $value;
    }
}
