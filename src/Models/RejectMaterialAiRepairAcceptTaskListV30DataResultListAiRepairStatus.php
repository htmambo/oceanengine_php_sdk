<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class RejectMaterialAiRepairAcceptTaskListV30DataResultListAiRepairStatus
{
    public const SUCCESS_RejectMaterialAiRepairAcceptTaskListV30DataResultListAiRepairStatus = 'SUCCESS';
    public const FAILED_RejectMaterialAiRepairAcceptTaskListV30DataResultListAiRepairStatus = 'FAILED';
    public const PROCESSING_RejectMaterialAiRepairAcceptTaskListV30DataResultListAiRepairStatus = 'PROCESSING';
    public const NO_TASK_RejectMaterialAiRepairAcceptTaskListV30DataResultListAiRepairStatus = 'NO_TASK';

    public const ALLOWED_VALUES = [
        self::SUCCESS_RejectMaterialAiRepairAcceptTaskListV30DataResultListAiRepairStatus,
        self::FAILED_RejectMaterialAiRepairAcceptTaskListV30DataResultListAiRepairStatus,
        self::PROCESSING_RejectMaterialAiRepairAcceptTaskListV30DataResultListAiRepairStatus,
        self::NO_TASK_RejectMaterialAiRepairAcceptTaskListV30DataResultListAiRepairStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum RejectMaterialAiRepairAcceptTaskListV30DataResultListAiRepairStatus', $value));
        }
        return (string) $value;
    }
}
